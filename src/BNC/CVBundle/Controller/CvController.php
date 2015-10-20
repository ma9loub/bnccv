<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CvController extends Controller
{
    public function indexAction()
    {
      return $this->render('BNCCVBundle:Cv:index.html.twig');
    }
}
