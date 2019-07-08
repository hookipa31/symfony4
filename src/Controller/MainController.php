<?php
/**
 * Created by PhpStorm.
 * User: poste5hookipa
 * Date: 2019-07-08
 * Time: 14:46
 */

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    public function index()
    {
        return $this->render(
            'home.html.twig',
            ['message' => 'Vous êtes dans la Homepage']
        );
    }
}