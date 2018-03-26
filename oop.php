<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

class Person{

        /*
         * add access modifier
         *
         * Public - access from anywhere
         * Private - access from only within this class
         * Protected - access from only within this class and any other that extends it
         */
//        public $name;
//        public $email;
        /*
         * For best practice
         * set properties to
         * private
         */
        private $name;
        private $email;
        // With static properties, you do not need to instantiate the class it belongs to
        private static $ageLimit = 40;



        /*
         * Create a consructor
         * A method that runs when
         * an instance of an object is
         * created. You can do sets there
         */

        public function __construct($name, $email){
            echo __CLASS__.' created <br>';
            $this->name = $name;
            $this->email = $email;
            echo 'Person 1\'s name is '.$this->name.' and their email is '.$this->email.'<br>';

        }

        /*
         * Will destroy all instances
         * of a class
         */
        public function __destruct(){
            echo __CLASS__.' destroyed <br>';

        }


    public function getName(){
            /*
             * $this is the key word to use when you want to
             * reference something from the class
             */
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        public static function getAgeLimit(){

            return self::$ageLimit;
        }



    }

    // Static props and method
    //echo Person::$ageLimit;
    //echo Person::getAgeLimit();
    // Instantiate the object
    //$person1 = new Person;

    /*
     * In php when you want to access
     * a property from a class, we use
     * the ->
     * SO i to set the value of a property in for $person1, I would type
     * 'instantiation of class'->'property' = 'value'
     */
    //$person1->name = 'John Doe';

    //echo $person1->name;


    /*
     * This is not good practice
     * Usually when you want to
     * interact with properties
     * is make them private and
     * then create a public function
     * that will reach in and get the
     * properties/ variables
     */



    /*
     * Best practice, get and set
     */

    //$person1 = new Person('John Doe', 'john@john.com');

//    $person1->setName('John Doe');
//
//    echo $person1->getName();
//
//    $person1->setEmail('john@john.com');
//
//    echo $person1->getEmail();

    class Customer extends Person{

        private $balance;

        public function __construct($name, $email, $balance)
        {
            $this->balance = $balance;
            parent::__construct($name, $email, $balance);
            echo 'A new '.__CLASS__.' has been created <br>';
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }


    }

    //$customer1 = new Customer('John Doe', 'jdoe@gmail.com', 300);

    //echo $customer1->getBalance();


?>