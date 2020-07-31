<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* SOAL 1 */
        /* Buatlah sebuah file dengan nama palindrome-angka.php. Di dalam file tersebut buatlah sebuah function dengan nama palindrome_angka yang menerima sebuah parameter berupa integer. function tersebut memproses angka tersebut dan mengembalikan angka selanjutnya yang merupakan sebuah palindrome. contoh jika parameter nya angka 38 maka function akan mereturn 44 yang merupakan angka palindrome. Jika parameter yang diberikan merupakan sebuah angka palindrome, maka function me-return angka selanjutnya yang merupakan palindrome. Contoh jika parameter nya angka 6 maka akan mereturn angka 7 yang merupakan palindrome selanjutnya. (Note: angka 0 sampai 9 adalah palindrome) */
        function palindrome($string) {
            $tempAngka = "";
            for($i = strlen($string) - 1; $i >= 0; $i--) {
                $tempAngka .= strval($string)[$i];
            };
            
            if ($tempAngka === strval($string)) {
                $bool = true;
            } else {
                $bool = false;
            }
            return $bool;
        };

        function palindrome_angka($angka) {
            if ($angka >= 1 && $angka <= 8) {
                return ++$angka;
            };

            while (palindrome($angka) === false) {
                $angka++;
            };

            return $angka;
        };

        // TEST CASES
        echo palindrome_angka(8) . "<br/>"; // 9
        echo palindrome_angka(100) . "<br/>"; // 11
        echo palindrome_angka(117) . "<br/>"; // 121
        echo palindrome_angka(175) . "<br/>"; // 181
        echo palindrome_angka(1000); // 1001
    ?>
</body>
</html>