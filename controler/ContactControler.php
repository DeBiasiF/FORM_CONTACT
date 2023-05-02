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

function createContact(){
    require_once 'view/createContact.php';
}

function updateContact(){
    $id = $_GET['id'];
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];
    $mail = $_GET['mail'];
    $phone = $_GET['phone'];
    $birthday = $_GET['birthday'];
    $file = $_GET['file'];
    require_once 'view/updateContact.php';
}

function selectPage(){

    $url = $_SERVER['REQUEST_URI'];
    $url = strtok($url, '?');
    if (substr($url, 0, 1) === '/') {
        $url = substr($url, 1);
    }

    switch ($url) {
        case 'Form_Contact/':
        case 'Form_Contact/index.php/accueil':
            showContacts(ContactRepository::getAllContact());
            break;
        
        case 'Form_Contact/index.php/contact':
            if($_GET) showContactDetails(ContactRepository::getContactById($_GET['id']));
            break;
        
        case 'Form_Contact/index.php/addcontact':
            createContact();
           
            if($_POST['lastName'] && $_POST['firstName'] && $_POST['mail'] && $_POST['phone'] && $_POST['birthDay'] && $_POST['file']) {

                
                var_dump($_POST);
                die;
                ContactRepository::addContact();
            }
            break;
        
        case 'Form_Contact/index.php/updatecontact':
            updateContact();
            if($_POST) ContactRepository::updateContact($_POST['id'], $_POST['lastName'], $_POST['firstName'], $_POST['mail'], $_POST['phone'], $_POST['birthDay'], $_POST['file']);
            break;
        
        case 'Form_Contact/index.php/contact':
            if($_GET) showContactDetails(ContactRepository::getContactById($_GET['id']));
            break;
        
        default:
            # code...
            break;
    }
}

selectPage();
?>