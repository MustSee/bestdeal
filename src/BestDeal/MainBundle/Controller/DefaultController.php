<?php

namespace BestDeal\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BestDealMainBundle:Default:index.html.twig');
    }

    public function showAction () {
        return $this->render('@BestDealMain/Default/show.html.twig');
    }
}
