<?php

    class Contact {

        private $name;
        private $email;
        private $phone;

        public function __construct($name, $email, $phone) {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        public function getName() {
            return $this->name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setPhone($phone) {
            $this->phone = $phone;
        }
    }

    // Exemplo de uso
    $contact = new Contact("John Doe", "johndoe@example.com", "123-456-7890");

    echo $contact->getName() . "<br>";    // John Doe
    echo $contact->getEmail() . "<br>";   // johndoe@example.com
    echo $contact->getPhone() . "<br>";   // 123-456-7890

    $contact->setEmail("john.doe@newmail.com");
    $contact->setPhone("098-765-4321");

    echo $contact->getEmail() . "<br>";   // john.doe@newmail.com
    echo $contact->getPhone() . "<br>";   // 098-765-4321