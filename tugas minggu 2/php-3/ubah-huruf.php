<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* buatlah sebuah file dengan nama ubah-huruf.php. Di dalam file tersebut buatlah sebuah function dengan nama ubah_huruf yang menerima parameter berupa string. function akan mereturn string yang berisi karakter-karakter yang sudah diubah dengan karakter setelahnya dalam susunan abjad “abdcde …. xyz”. Contohnya karakter “a” akan diubah menjadi “b” karakter “x” akan berubah menjadi “y”, dst. */
        function ubah_huruf($str) {
            $string = "";
            for ($i = 0; $i < strlen($str); $i++) {
                $temp = intval(ord($str[$i]) + 1);
                $string .= strval(chr($temp));
            };

            return $string;
        };

        // TEST CASES
        echo ubah_huruf('wow') . "<br/>"; // xpx
        echo ubah_huruf('developer') . "<br/>"; // efwfmpqfs
        echo ubah_huruf('laravel') . "<br/>"; // mbsbwfm
        echo ubah_huruf('keren') . "<br/>"; // lfsfo
        echo ubah_huruf('semangat'); // tfnbohbu
    ?>
</body>
</html>