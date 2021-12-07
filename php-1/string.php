<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
        $string = "PHP always listening, always understanding";
        echo "<p> String: " . $string . "";
        echo "<p> Panjang string: " . strlen($string). "</p>";
        echo "<p> Jumlah kata: " . str_word_count($string)."</p<br>";


        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "I love PHP";
        //use substr($var, index, jumlah)
        echo "<label>String: </label> \"$string2\" <br>"; 
        echo "<p> Kata pertama: " . substr($string2, 0, 1) . "</p>" ; 
        // Lanjutkan di bawah ini
        echo "<p>Kata kedua: ".substr($string2, 2,4). "</p>" ;
        echo "<p> Kata Ketiga: " . substr($string2,-3,3)."</p>" ;

        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy!";
        //use str_replace to replace word str_replace("kata awal yg mau di replace", "replaced word", $var )
        echo "String: \"$string3\" "; 
        // OUTPUT : "PHP is old but awesome"
        echo "<br><p>" . str_replace("sexy","awesome",$string3) . "</p>";

    ?>
</body>
</html>