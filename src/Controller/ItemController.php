<?php
/**
 * Created by PhpStorm.
 * User: emanuelevella
 * Date: 13/11/2017
 * Time: 14:19
 */

namespace App\Controller;


use App\Entity\Person;
use App\Form\PersonType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\{SubmitType, TextType, DateType, IntegerType, CheckboxType};
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ItemController extends Controller
{

    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository(Person::class)->findAll();

        return $this->render("Item/index.html.twig", array("items"=>$items));

    }
}