<?php
/**
 * Created by PhpStorm.
 * User: poste5hookipa
 * Date: 2019-06-11
 * Time: 12:26
 */

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task = $form->getData();
            return $this->render('task/success.html.twig', [
                'task' => $task
            ]);
        }

        return $this->render('task/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/success", name="success_path_name")
     */
    public function submissionSuccess(Task $task){
        return $this->render('task/success.html.twig', [
            'message' => 'Enregistrement fait avec succès !',
            'nom_tache' => $task->getTask(),
            'Date exécution' => $task->getDueDate()
        ]);
    }
}