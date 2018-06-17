<?php

namespace DI\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function indexAction()
    {
        return $this->render('DIUserBundle:Default:index.html.twig');
    }

    public function loginAction(){

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('di_platform_homepage');
        }

            return $this->render('DIUserBundle:Default:login.html.twig');
    }

}
