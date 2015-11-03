<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Page A propos
 * 
 * @author tareum
 *
 */
class AboutController extends Controller
{
    public function indexAction()
    {
      return $this->render('BNCCVBundle:About:index.html.twig');
    }
}
