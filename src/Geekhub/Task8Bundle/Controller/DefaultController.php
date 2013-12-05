<?php

namespace Geekhub\Task8Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Geekhub\Task8Bundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

/*use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleChoiceFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleCollectionsFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleErrorsFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleExtendedFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleExtendedViewFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleFormsType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleHelpTextFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleHorizontalFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleInlineFormType;
use Mopa\Bundle\BootstrapSandboxBundle\Form\Type\ExampleSearchFormType;*/

use Knp\Menu\FactoryInterface;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('GeekhubTask8Bundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
