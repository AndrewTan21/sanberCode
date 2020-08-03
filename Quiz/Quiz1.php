<?php
    // soal Quiz 1
    // Buatlah sebuah function hitung() yang menerima satu parameter berupa string. Function akan menghitung hasil sesuai string tersebut dan mengembalikan nilai hasil perhitungannya. String tersebut hanya menerima 1 operasi perhitungan saja yaitu operasi sebagai berikut: (*) perkalian, (:) pembagian, (+) penjumlahan, (-) pengurangan, dan (%) modulus. 

    // mengecheck string angka satu per satu jika string angka masukkan ke temp
    // mengecheck string operator jika ada operator aritmatika maka masukkan temp2 lalu hentikan perulangan
    // mengecheck string angka dimulai array akhir, jika string angka masukkan ke temp2 hingga mengecheck string operator hentikan perulangan
    // jika $operator merupakan operator '*' lakukan perkalian lalu push variable output
    // jika $operator merupakan operator '+' lakukan penjumlahan lalu push variable output
    // jika $operator merupakan operator '%' lakukan modulus lalu push variable output
    // jika $operator merupakan operator '-' lakukan pengurangan lalu push variable output

    function hitung($string_data) {
        $temp = "";
        $temp2 = "";
        $operator = "";
        $output = null;
        for($i = 0; $i < strlen($string_data); $i++) {
            $str = $string_data[$i];
            
            if (ctype_digit($str)) {
                $temp .= $str;
            } else if (ctype_punct($str)) {
                $operator .= $str;
                break;
            };
        };

        for($j = strlen($string_data) -1; $j > 0; $j--) {
            $str2 = $string_data[$j];
            
            if (ctype_digit($str2)) {
                $temp2 .= $str2;
            } else if (ctype_punct($str2)) {
                break;
            };
        };

        if ($operator == '*') {
            $output = intval($temp) * intval($temp2);
        } else if ($operator == '+') {
            $output = intval($temp) + intval($temp2);
        } else if ($operator == '%') {
            $output = intval($temp) % intval($temp2);
        } else if ($operator == '-') {
            $output = intval($temp) - intval($temp2);
        };

        return $output;
    };

    echo hitung("102*2") . "<br/>";
    echo hitung("2+3") . "<br/>";
    echo hitung("100:25") . "<br/>";
    echo hitung("10%2") . "<br/>";
    echo hitung("99-2") . "<br/>";
?>