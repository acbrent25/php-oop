<?php
    // Create Class
    class User {
        // Properties (attributes) name

        public $name;

        // Methods (functions) register, login, reset password

        public function sayHello(){
            return $this->name . ' Says Hello';
        }
    }

    // Instantiate a user object from the user class
    $user1 = new User();

    $user1->name = 'Adam';
    echo $user1->name;
    echo '<br>';
    echo $user1->sayHello();
    echo '<br>';

    // Create new user
    $user2 = new User();
    $user2->name = 'mark';
    echo $user2->name;
    echo '<br>';
    echo $user2->sayHello();
