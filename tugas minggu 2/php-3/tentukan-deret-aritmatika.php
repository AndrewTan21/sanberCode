<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* buatlah file dengan nama tentukan-deret-aritmatika.php. Di dalam file tersebut buatlah sebuah function dengan nama tentukan_deret_aritmatika yang menerima parameter berupa array berisi angka-angka. function akan mengecek apakah kumpulan angka pada array tersebut merupakan suatu deret aritmatika atau bukan. Jika merupakan deret aritmatika maka function me-return true, selain itu maka me-return false. Contoh jika parameternya [1, 3, 5, 7] maka function akan me-return true karena array tersebut adalah deret aritmatika dengan beda 2. */
        function tentukan_deret_aritmatika($arr) {
            $temp = $arr[1] - $arr[0];

            for ($i = 2; $i < count($arr); $i++) {
                if ($arr[$i] - $arr[$i - 1] != $temp) {
                    $bool = false;
                } else {
                    $bool = true;
                };
            };

            if ($bool === false) {
                echo "False <br/>";
            } else {
                echo "True <br/>";
            };

            echo "<br/>";
        };

        // TEST CASES
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
        echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
        echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
        echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
        echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
    ?>
</body>
</html>