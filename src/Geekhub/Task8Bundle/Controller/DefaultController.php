<?php

namespace Geekhub\Task8Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Geekhub\Task8Bundle\Entity\Form;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $name = new Form();

        $form = $this->createFormBuilder($name)
            ->add('name', 'text')
            ->add('email', 'email')
            ->add('Submit', 'submit')
            ->add('body', 'textarea')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                // выполняем прочие действие, например, сохраняем задачу в базе данных

                return $this->redirect($this->generateUrl('task_success'));
            }
        }

        return $this->render('GeekhubTask8Bundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
