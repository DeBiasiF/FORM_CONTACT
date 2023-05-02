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

    public static function addContact() {
        $connectionDB = Connect::getInstance();
        $stmt = $connectionDB->prepare('INSERT INTO contact (lastName, firstName, mail, phone, birthDay, file) VALUES(:lastName, :firstName, :mail, :phone, :birthDay, :file);');
        $stmt->bindValue(":lastName", $_POST['lastName'], PDO::PARAM_STR);
        $stmt->bindValue(":firstName", $_POST['firstName'], PDO::PARAM_STR);
        $stmt->bindValue(":mail", $_POST['mail'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $_POST['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":birthDay", $_POST['birthDay'], PDO::PARAM_STR);
        $stmt->bindValue(":file", $_POST['file'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function updateContact(int $id, String $lastName, String $firstName, String $mail, String $phone, String $birthDay, String $file) {
        $connectionDB = Connect::getInstance();
        $stmt = $connectionDB->prepare('UPDATE contact SET lastName = :lastName, firstName = $firstName, mail = :mail, phone = :phone, birthDay = :birthDay, file = :file WHERE id = :id ;');
        $stmt->bindValue(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->bindValue(":firstName", $firstName, PDO::PARAM_STR);
        $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
        $stmt->bindValue(":phone", $phone, PDO::PARAM_STR);
        $stmt->bindValue(":birthDay", $birthDay, PDO::PARAM_STR);
        $stmt->bindValue(":file", $file, PDO::PARAM_STR);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function deleteContact(int $id) {
        $connectionDB = Connect::getInstance();
        $stmt = $connectionDB->prepare('DELETE FROM contact WHERE id = :id ;');
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
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



