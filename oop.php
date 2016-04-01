<?php 
    
    class User{
        
        public $name = "";
        public $lastname = "";
        public $age = 0;
        protected $weight = 80;
        public $gender = 'male';
        public $race = 'white';
        
        public static $races = [
            'white'=>0;
            'black'=>0;
            'red'=>0;
            'yelow'=>0;
        ];
        
        public static getRaces(){
            print_r($self::$races);
        }
        
        /*public function printUser(){
            //print_r(serialise($this));
            print_r(get_class_vars($this));
        }*/
        
        public function __construct($data){
            $this->name = $data['name'];
            $this->lastname = $data['lastname'];
            $this->age = $data['age'];
            $this->weight = $data['weight'];
            $this->gender = $data['gender'];
            $this->race = $data['race'];
            
            self::races['$this->race']++;
        }
    }
    
    $user = new User;
    print_r($user);
    $user->printUser;
    