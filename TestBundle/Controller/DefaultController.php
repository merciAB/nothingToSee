<?php

namespace UN\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UNTestBundle:Default:index.html.twig');
    }
}
