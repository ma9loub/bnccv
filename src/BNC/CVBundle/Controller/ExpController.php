<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExpController extends Controller
{
    public function indexAction()
    {
      return $this->render('BNCCVBundle:Exp:index.html.twig');
    }
}
