<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Home page
 * 
 * @author tareum
 *
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BNCCVBundle:Default:index.html.twig');
    }
}
