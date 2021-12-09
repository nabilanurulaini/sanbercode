<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php
        
        include  'animal.php';
        include  'ape.php';
        include  'frog.php';

        // shaun the sheep
        $sheep = new Animal("shaun");
        echo "Name : " . $sheep->name . "<br>"; // "shaun"
        echo "Legs : " . $sheep->legs. "<br>"; // 4
        echo "Cold Blooded : " . $sheep->cold_blooded; // "no"

        echo "<br><br>";
        // Frog Kodok Hop Hop
        $kodok = new Frog("buduk"); 
        echo "Name : ". $kodok->name . "<br>";
        echo "Legs : " . $kodok->legs . "<br>"; // 4
        echo "Cold Blooded : ". $kodok->cold_blooded . "<br>";
        echo "Yell : ";
        $kodok->jump();//Hop hop

        echo "<br><br>";
        // Ape Sungokong Auooo
        $sungokong = new Ape("kera sakti");
        echo "Name : ". $sungokong->name."<br>";
        echo "Legs : " . $sungokong->legs. "<br>"; // 4
        echo "Cold Blooded : ". $sungokong->cold_blooded. "<br> ";
        echo "Yell : ";
        $sungokong->yell();// "Auooo"
        
        

    ?>

</body>
</html>