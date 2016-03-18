<?php
namespace Myapp\ResponsableBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Myapp\ResponsableBundle\Entity\Mail;
use Myapp\ResponsableBundle\Form\MailType;
use Symfony\Bundle\SwiftmailerBundle;
use Swift_Message;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\Request;
class MailController extends Controller {
public function indexAction(){
    return $this->render('MyappResponsableBundle:Mail:mail.html.twig', array());   
    return 'Mail';
}
public function sendMailAction() {

 $to = "salma.Chhoud@esprit.tn";

 $mail = new Mail();

 $form= $this->createForm(new MailType(), $mail);

 $request = $this->getRequest();

 $form->handleRequest($request) ;

 if ($form->isValid()) {

    $message = Swift_Message::newInstance()

    ->setSubject($mail->getNom())

    ->setFrom($mail-> getFrom())

    ->setTo($to)

    ->setBody($mail->getText());

    $this->get('mailer')->send($message);

    return $this->render('MyappResponsableBundle:Mail:mail.html.twig', array('to' => $to,'from' => $mail-> getFrom()));
}
    return $this->redirect($this->generateUrl('my_app_mail_form'));}
public function newAction() {

    $mail = new Mail();

    $form= $this-> createForm(new MailType(), $mail);

    $request = $this->get('request');

    $form->handleRequest($request) ;

 if($form->isValid()) {

    $this->sendMailAction('swiftmailersymfony@gmail.com', $mail-> getFrom(), $mail->getNom(), $mail->getText());
}
    return $this->render('MyappResponsableBundle:Mail:new.html.twig', array('form' => $form->createView())) ; }
 
 
 
}

