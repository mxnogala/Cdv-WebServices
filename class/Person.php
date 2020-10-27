<?php

    class Person {
        public $name;
        public $surname;
        public $age;
        public $height;

        public function SetName($setName) {
            $this->name=$setName;
        }

        public function SetSurname($setSurname) {
            $this->name=$setSurname;
        }

        public function SetAge ($setAge) {
            $this->age=$setAge;
        }

        public function SetHeight($setHeight) {
            $this->height=$setHeight; 
        }

        public function SetData ($setName, $setSurname)
        {
            $this->name=$setName;
            $this->surname=$setSurname;
        }

        public function GetData() {
            $data= <<<DATA
            Dane: <br>
            Imie: $this->name<br>
            Nazwisko: $this->surname<br>
            Wiek: $this->age<br>
            Wzrost: $this->height<br>
        DATA;
        return $data; 
        }
    }

?>