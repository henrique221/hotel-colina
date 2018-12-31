<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method({"GET", "POST"})
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/cadastrar")
     * @param Request $request
     * @Method("POST")
     */
    public function cadastrarAction(Request $request)
    {
        try {
            $list = [];
            $request = $request->request;
            $this->get('session')->getFlashBag()->add('notice', "{$request->get('nome')} cadastrado(a) com sucesso");
            foreach ($request as $item) {
                $list[] = $item;
            }
        }catch (\Exception $exception){
            $this->get('session')->getFlashBag()->add('warning', 'Não foi possivel cadastrar');
        }
        return $this->redirectToRoute('homepage');
    }
}
