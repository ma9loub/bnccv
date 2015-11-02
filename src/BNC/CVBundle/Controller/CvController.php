<?php

namespace BNC\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controlleur de la page CV
 * 
 * @author tareum
 *
 */
class CvController extends Controller
{
    public function indexAction()
    {
    	$logger = $this->get('logger');
    	$params = array();

    	// Récupère le json toto
    	$baseurl = $this->getRequest()->getScheme() . '://' . $this->getRequest()->getHttpHost();
    	$path = $this->container->get('templating.helper.assets')->getUrl('bundles/cv/toto.json');
    	$content = file_get_contents($baseurl.$path);
    	$json = json_decode($content, true);
    	
    	// Vérifie le cv pdf
    	$cv_pdf = $this->container->get('templating.helper.assets')->getUrl('bundles/cv/doc/'.$json['nom_cv'].'.pdf');
    	if(@file_get_contents($baseurl.$cv_pdf))
    	{
    		$params['cv_pdf'] = $cv_pdf;
    	}

    	// Vérifie le cv doc
    	$cv_doc = $this->container->get('templating.helper.assets')->getUrl('bundles/cv/doc/'.$json['nom_cv'].'.doc');
    	if(@file_get_contents($baseurl.$cv_doc))
    	{
    		$params['cv_doc'] = $cv_doc;
    	}
    	
      return $this->render('BNCCVBundle:Cv:index.html.twig', $params);
    }
}
