<?php
namespace AppBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response; 

class ProductoController extends Controller { 
   /** 
      * @Route("/producto/home") 
   */ 
	public function indexAction()
	{
		//die('hjhjk');
    	return $this->render("producto/index.html.twig", []);
	}
}