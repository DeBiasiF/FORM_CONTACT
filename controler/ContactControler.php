<?php

function showContacts($contacts){
    require_once 'view/accueil.php';
}

function showContactDetails($contact){

    $id = $contact->getId();
    $lastName = strtoupper($contact->getLastname());
    $firstName = ucfirst(strtolower($contact->getFirstname()));
    $mail = $contact->getMail();
    $phone = $contact->getPhone();
    $birthday = $contact->getBirthday();
    $file = $contact->getFile();
    require_once 'view/contact.php';

}

function selectPage(){
    $pages = array(
        'Form_Contact/index.php/accueil'=>showContacts(ContactRepository::getAllContact()),
        'Form_Contact/index.php/contact'=>showContactDetails(ContactRepository::getContactById($_GET['id'])),
    );

    $url = $_SERVER['REQUEST_URI'];
    $url = strtok($url, '?');
    if (substr($url, 0, 1) === '/') {
        $url = substr($url, 1);
    }

    echo $url;
    echo $pages[$url];
}

selectPage();
?>