<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* buatlah file dengan nama cari-mean.php. Di dalam file tersebut buatlah sebuah function dengan nama cari_mean yang menerima parameter berupa array berisi angka-angka. function akan mengembalikan nilai mean atau rata-rata dari kumpulan angka pada array tersebut. Contohnya jika parameternya [1,2,3,4,5] maka function akan me-return angka 3 yang merupakan nilai rata-rata dari data di dalam array tersebut. */

        function cari_mean($arr) {
            $totalIndex = count($arr);
            $tempValue = 0;

            for ($i = 0; $i < $totalIndex; $i++) {
                $tempValue += intval($arr[$i]);
            };

            $result = $tempValue / $totalIndex;
            echo round($result) . "<br/>";
        };

        // TEST CASE 
        echo cari_mean([1, 2, 3, 4, 5]); // 3
        echo cari_mean([3, 5, 7, 5, 3]); // 5
        echo cari_mean([6, 5, 4, 7, 3]); // 5
        echo cari_mean([1, 3, 3]); // 2
        echo cari_mean([7, 7, 7, 7, 7]); // 7
        print_r(cari_mean([1, 2, 3, 4, 5]));
    ?>
</body>
</html>