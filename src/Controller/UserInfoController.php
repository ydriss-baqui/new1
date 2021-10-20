<?php
namespace App\Controller;

use App\Entity\UserInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserInfoController extends AbstractController
{
    /**
     * @Route("/userinfo", name="app_userinfo")
     */
    public function new(Request $request): Response
    {
        $userinfo = new userinfo();

        $form = $this->createFormBuilder($userinfo)
            ->add('user_id')
            ->add('hobby_id')
            ->add('birthday')
            ->add('taille')
            ->add('Hair_color')
            ->add('eyes')
            ->add('poids')
            ->add('description')
            ->add('lf_sexe')
            ->add('lf_min_age')
            ->add('lf_max_age')
            ->add('save', SubmitType::class, ['label' => 'Create userinfo'])
            ->getForm();

        $form->handleRequest($request);

        return $this->render('user_info/index.html.twig', [
            'controller_name' => 'UserInfoController',
        ]);
        
    }
}