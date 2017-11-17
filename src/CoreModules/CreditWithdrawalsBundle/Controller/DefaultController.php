<?php

namespace CreditWithdrawalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CreditWithdrawalsBundle\Entity\PaymentRequests;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $repo = $this->getDoctrine()->getRepository(PaymentRequests::class)->findAll();
        
        return $this->render('CreditWithdrawalsBundle:Default:index.html.twig', array('results' => $repo));
    }
}