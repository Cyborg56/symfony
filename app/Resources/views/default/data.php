<?php

class data extends Controller

{
    public function indexAction()
    {
        $data = new data();

        $data->setcategory('');
        $data->setplacefortext('');
        $data->setsignature('');

        $form = $this->createFormBuilder($data)
            ->add('GOOD, IDEAS, BAD, THANKS', 'select')
            ->add('text', 'textarea')
            ->add('sign', 'text')
            ->add('SEND', 'submit')
            ->add('RESET', 'reset')
            ->getForm()

    }
        return $this->render('app:Resources:views:default:index.html.twig', array(
            'form' => $for->createView(),
            ))
}