<?php
namespace Info\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class InfoController extends AbstractActionController
{
    public function indexAction()
    {
		/*
		return new ViewModel(array(
            'zmienna' => time(),
        ));
		*/
		
		
		$viewModel = new ViewModel();
	    $viewModel->setVariables(array('zmienna' => date('Y')));
	    //$viewModel->setTerminal(true);
		//$viewModel->setTemplate('layout-test.phtml');
		
		// \Zend\Debug\Debug::dump($viewModel); die();
		
		return $viewModel;
		
		
		/*
		$response = $this->getResponse();
        $response->setStatusCode(200);
        $response->setContent("Hello World");
        return $response;
		*/
		
		/*
		return '';
		*/
		
		/*
		$this->broker("ViewRenderer")->setNoRender();
		*/
    }
}