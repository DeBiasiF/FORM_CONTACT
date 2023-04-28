<?php


class ContactRepository {
    
    public static function createContact(Array $myResult) : Contact {
        $contact = new Contact();
        $contact->setId($myResult['id'])
                ->setLastName($myResult['lastname'])
                ->setFirstName($myResult['firstname'])
                ->setMail($myResult['mail'])
                ->setPhone($myResult['phone'])
                ->setBirthDay($myResult['birthday'])
                ->setFile($myResult['file']);
        return $contact;                
    }

    public static function getAllContact() : Array {
        $connectionDB = Connect::getInstance();
        $stmt = $connectionDB->prepare('SELECT * FROM contact;');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Contact');
        $stmt->execute();
        $contactList = $stmt->fetchAll();
        return $contactList;
    }

    public static  function getContactById(int $id) : Contact {
        $connectionDB = Connect::getInstance();
        $stmt = $connectionDB->prepare('SELECT * FROM contact WHERE id = :id ;');
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Contact');
        $stmt->execute();
        $contact = $stmt->fetchAll();

        if (count($contact) !== 0) {
            return $contact[0];
        }else{
            return null;
        }    
    }    
}
?>



