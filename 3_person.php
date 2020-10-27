<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once './class/Person.php' ;
        
        $person= new Person(); 
        $person->SetData("Vincent", "Cavanagh"); 
        $person->SetAge(47);
        $person->SetHeight(180) ;

        echo $person->GetData(); 

    ?>
</body>
</html>