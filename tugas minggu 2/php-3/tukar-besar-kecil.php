<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* buatlah sebuah file dengan nama tukar-besar-kecil.php. Di dalam file tersebut buatlah function dengan nama tukar_besar_kecil yang menerima parameter berupa string. function akan mengembalikan sebuah string yang sudah ditukar ukuran besar dan kecil per karakter yang ada di parameter. Contohnya jika parameter “pHp” maka akan mengembalikan “PhP”. */
        function tukar_besar_kecil($string) {
            $temp = "";
            for($i = 0; $i < strlen($string); $i++) {
                $str = $string[$i];

                if (ctype_alpha($str) && $str === strtolower($str)) {
                    $temp .= strtoupper($str);
                } else if (ctype_alpha($str) && $str === strtoupper($str)) {
                    $temp .= strtolower($str);
                } else {
                    $temp .= $string[$i];
                };
            };
            return $temp;
        };

        // TEST CASES
        echo tukar_besar_kecil('Hello World') . "<br/>"; // "hELLO wORLD"
        echo tukar_besar_kecil('I aM aLAY') . "<br/>"; // "i Am Alay"
        echo tukar_besar_kecil('My Name is Bond!!') . "<br/>"; // "mY nAME IS bOND!!"
        echo tukar_besar_kecil('IT sHOULD bE me') . "<br/>"; // "it Should Be ME"
        echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
    ?>
</body>
</html>