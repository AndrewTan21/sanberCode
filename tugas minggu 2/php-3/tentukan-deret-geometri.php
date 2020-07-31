<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* buatlah sebuah file dengan nama tentukan-deret-geometri.php. Di dalam file tersebut buatlah function dengan nama tentukan_deret_geometri yang menerima parameter berupa array berisi angka-angka. function akan me-return true jika kumpulan angka tersebut adalah sebuah deret geometri dan me-return false jika bukan merupakan deret geometri. Contohnya jika parameternya [2, 6, 18, 54] akan me-return true karena deret angka tersebut merupakan deret geometri dengan rasio 3. */
        function tentukan_deret_geometri($arr) {
            $ratio = $arr[1]/$arr[0];

            for($i = 1; $i < count($arr); $i++) {
                if($arr[$i]/($arr[$i-1]) != $ratio) {
                    return "False <br/>";
                };
            };
            return "True <br/>";
        }
        //TEST CASES
        echo tentukan_deret_geometri([1, 3, 9, 27, 81]) . "<br/>"; // true
        echo tentukan_deret_geometri([2, 4, 8, 16, 32]) . "<br/>"; // true
        echo tentukan_deret_geometri([2, 4, 6, 8]) . "<br/>"; // false
        echo tentukan_deret_geometri([2, 6, 18, 54]) . "<br/>"; // true
        echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
    ?>
</body>
</html>