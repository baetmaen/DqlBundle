<?php

namespace Baetmaen\DqlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BaetmaenDqlBundle:Default:index.html.twig', array('name' => $name));
    }
}
