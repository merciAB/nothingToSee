<?php

namespace UN\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DiaryController extends Controller
{
    /**
     * Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('UNAppBundle:Default:index.html.twig');
    }
}
