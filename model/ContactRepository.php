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

    public function getAllContact() : Array {
        $connectionDB = Connect::getInstance()->getConnection();
        $stmt = $connectionDB->prepare('SELECT * FROM contact;');
        $stmt->execute();
        $contactList = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $contactList;
    }

    public function getContactById(int $id) : Contact {
        $connectionDB = Connect::getInstance()->getConnection();
        $stmt = $connectionDB->prepare('SELECT * FROM contact WHERE id = :id ;');
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $contact = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($contact) !== 0) {
            return static::createContact($contact[0]);
        }else{
            return null;
        }    
    }

    
}
?>



