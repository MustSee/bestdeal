<?php

namespace BestDeal\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // Récupérer tous les dessins
        $ads = $this->get('doctrine')
            ->getRepository('BestDealMainBundle:Ad')
            ->findAllAds();
        $datas = ['ads'=>$ads];
        return $this->render('BestDealMainBundle:Default:index.html.twig', $datas);
    }

    public function showAction () {
        return $this->render('@BestDealMain/Default/show.html.twig');
    }

    public function createAction() {
        return $this->render('@BestDealMain/Default/create.html.twig');
    }
}
