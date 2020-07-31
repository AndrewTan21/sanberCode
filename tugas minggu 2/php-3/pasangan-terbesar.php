<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* buatlah sebuah file dengan nama pasangan-terbesar.php. Di dalam file tersebut buatlah function dengan nama pasangan_terbesar yang menerima sebuah parameter berupa angka dan akan mengembalikan pasangan angka yang merupakan angka terbesar. Contoh jika parameternya adalah 16749549 maka function me-return 95 karena angka tersebut adalah pasangan angka terbesar. */
        function pasangan_terbesar($value) {
            $currentTemp = substr($value, 0, 2);
            
            for($i = 0; $i < strlen($value); $i++) {
                $temp = substr($value, $i, 2);
                if ($temp > $currentTemp) {
                    $currentTemp = $temp;
                }
            };
            return $currentTemp;
        }

        // TEST CASES
        echo pasangan_terbesar(641573) . "<br/>"; // 73
        echo pasangan_terbesar(12783456) . "<br/>"; // 83
        echo pasangan_terbesar(910233) . "<br/>"; // 91
        echo pasangan_terbesar(71856421) . "<br/>"; // 85
        echo pasangan_terbesar(79918293); // 99
    ?>
</body>
</html>