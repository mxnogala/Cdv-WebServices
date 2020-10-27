<?php

    class User {
        public $name;
        public $surname;
        public $color;
        
        public function SetName ($value)
        {
            $this->name=$value;
        }
        
        public function SetSurnameAndColor ($surname, $color)
        {
            $this->surname=$surname;
            $this->color=$color; 
        }

        public function GetData() {
            $data=<<<DATA
            Dane:<br>
            Imie: $this->name <br>
            Nazwisko: $this->surname <br>
            Kolor: $this->color <br>
        DATA; 
        return $data; 
        }

        
    }

    $user1= new User(); 
        $user1->setName('Anna');
        echo $user1->GetData();
        $user1->SetSurnameAndColor('Nowak', 'Zielony');
        echo $user1->GetData(); 
        
?>
