<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Page de contact
 * 
 * @author tareum
 *
 */
class ContactController extends Controller
{
    public function indexAction()
    {
      return $this->render('BNCCVBundle:Contact:index.html.twig');
    }
}
