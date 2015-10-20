<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
    	$arr = array('toto' => 'toto variable toto');
      return $this->render('BNCCVBundle:Contact:index.html.twig', $arr);
    }
}
