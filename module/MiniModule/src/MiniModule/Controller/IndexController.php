<?php
namespace MiniModule\Controller;

use Zend\Form\Factory;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Form\Form;
use Zend\View\Model\ViewModel;
/**
 * Class IndexController
 *
 * @package MiniModule
 */
class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }

    public function formAction()
    {
        $services = $this->getServiceLocator();
        $form = $services->get('MiniModule\Form\Authentification');
        if ( $this->getRequest()->isPost() ) {
            $form->setData( $this->getRequest()->getPost());
            if ($form->isValid()) {
                $vm = new ViewModel();
                $vm->setVariables( $form->getData() );
                $vm->setTemplate('mini-module/index/traite');
                return $vm;
            }
        }
        $form->setAttribute('action', $this->url()->fromRoute('default', array('action' => 'form' )) );
        return array( 'form' => $form );
    }

    public function traiteAction()
    {
        return array( 'login' => $_POST['login'] );
    }
    
    
}