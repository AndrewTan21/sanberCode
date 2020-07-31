<?php

function papan_catur($angka) {
    for ($row = 0; $row < $angka; $row++) {
        if ($row % 2 === 0) {
            for ($colEven = 0; $colEven < $angka * 2-1; $colEven++) {
                if ($colEven % 2 === 0) {
                    echo "#";
                } else {
                    echo "&nbsp";
                }
            };
        } else {
            for ($colOdd = 0; $colOdd < $angka * 2-1; $colOdd++) {
                if ($colOdd % 2 === 0) {
                    echo "&nbsp";
                } else {
                    echo "#";
                };
            };
        };
        echo "<br/>";
    };
};

// TEST CASES
echo "<p>Papan Catur 4</p>";
echo papan_catur(4) . "<br/>"; 
/*
# # # #
 # # #
# # # #
 # # #
*/

echo "<p>Papan Catur 8</p>";
echo papan_catur(8) . "<br/>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<p>Papan Catur 5</p>";
echo papan_catur(5) . "<br/>";
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/