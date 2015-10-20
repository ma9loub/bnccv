<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function indexAction()
    {
      return $this->render('BNCCVBundle:About:index.html.twig');
    }
}
