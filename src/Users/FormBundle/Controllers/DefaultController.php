<?php

namespace Users\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsersFormBundle:Default:login.html.twig');
    }
    
    // Fonction qui controle le login de chaque Etudiant
    public function loginAction()
    {
        $repository = $this ->getDoctrine()
                            ->getManager()
                            ->getRepository('UsersFormBundle:Default');
        
        $data = $repository->findAll();
        return $data;
    }
}