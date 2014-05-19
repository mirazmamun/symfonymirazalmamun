<?php

namespace Miraz\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Miraz\UserBundle\Entity\User;
use Miraz\UserBundle\Form\UserType;

class DefaultController extends Controller
{
    public function indexAction($name = null)
    {
        return $this->render('MirazUserBundle:Default:index.html.twig', array('name' => $name));
    }


    /**
    * 
    * User registration form
    * 
    * @see
    * @param 
    * @return
    */
    public function registerAction()
    {
        //get the UserType form
        $user = new User();
        $form = $this->createForm(new UserType, $user);
        return $this->render('MirazUserBundle:Default:register.html.twig', array('form'=>$form->createView()));
    }


    /**
    * 
    * About the site page
    * 
    * @see
    * @param 
    * @return
    */
    public function aboutAction()
    {
        return $this->render('MirazUserBundle:Default:about.html.twig', array('name' => $name));
    }
}
