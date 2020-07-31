<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* buatlah sebuah file dengan nama skor-terbesar.php. Di dalam file tersebut buatlah sebuah function dengan nama skor_terbesar yang menerima parameter berupa array berisi array asosiatif data penilaian peserta bootcamp. function akan me-return sebuah array asosiatif yang berisi siswa dengan nilai tertinggi di masing-masing kelas. */
    function skor_terbesar($arr) {
        $result = [];
        $nilaiLaravel = 0;
        $nilaiReact = 0;
        $nilaiJS = 0;

        foreach ($arr as $key => $value) {
            if ($value["nilai"] > $nilaiLaravel && $value["kelas"] === "Laravel") {
                $nilaiLaravel = $value["nilai"];
            } else if ($value["nilai"] > $nilaiReact && $value["kelas"] === "React Native") {
                $nilaiReact = $value["nilai"];
            } else  if ($value["nilai"] > $nilaiJS && $value["kelas"] === "React JS") {
                $nilaiJS = $value["nilai"];
            } else {
                continue;
            };

            $result[$value["kelas"]] = [
                "nama" => $value["nama"], 
                "kelas" => $value["kelas"], 
                "nilai" => $value["nilai"]
            ];
        };

        echo "<pre>";
        print_r($result);
        echo "</pre>";

        return $result;
    };

    // TEST CASES
    $skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
    ];

    print_r(skor_terbesar($skor));
    /* OUTPUT
    Array (
        [Laravel] => Array
                (
                    [nama] => Aghnat
                    [kelas] => Laravel
                    [nilai] => 90
                )
        [React Native] => Array
                    (
                        [nama] => Regi
                        [kelas] => React Native
                        [nilai] => 86
                    )
        [React JS] => Array
                    (
                    [nama] => Indra
                    [kelas] => React JS
                    [nilai] => 85
                    )
    )
    */
    ?>
</body>
</html>