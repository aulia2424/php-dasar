<?php 
// array ada dua ada Number array dan associative
//number memanggilnya menggunakan number
// associative menggunakan namanya atau value tetapi bukan number

$lemariBaju = array("Baju", "Topi", "Sepatu");
echo $lemariBaju[0]; // ini menggunakan number
// echo $lemariBaju["Baju"]; // ini menggunakan associative

echo ("\n");

//two-dimensional array
// $people = array(
//     'online'=>array('David', 'Amy'),
//     'offline'=>array('John', 'Rob', 'Jack'),
//     'away'=>array('Arthur', 'Daniel')
//  );
// echo $people['online'][0];

// echo ("\n");

$people = array("kode_barang"=>["B001","B002","B003"],
                "nama_barang"=>["hoodie","sweat shirt","crew neck"],
                "Harga"=>[55000,65000,75000]);
    for ($i=0; $i < count($people["kode_barang"]); $i++) { 
        echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
            // echo "\n";
        echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }

echo ("\n");

echo ("php matrix");
echo ("\n");

    $num1 = [1,2,3,4];
    $num2 = [4,3,2,1];

    echo "Pilihan matriks";
    echo "\n";
    echo "1.Penjumlahan";
    echo "\n";
    echo "2.Pengurangan";
    echo "\n";
    echo "3.Perkalian";
    echo "\n";


    $a = readline('Masukkan pilihan : ');

    if ($a == 1) {
        for ($i=0; $i < count($num1); $i++) { 
            echo "|".$num1[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "+";
        echo "\n";
        for ($i=0; $i < count($num2); $i++) { 
            echo "|".$num2[$i]."|";
            if (($num2[$i] - 1) == (count($num2) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "=";
        echo "\n";
        $hasil = array();
        for ($i=0; $i < count($num2); $i++) { 
            $hasil2 = $num1[$i] + $num2[$i];
            array_push($hasil,$hasil2); 
        }
        for ($i=0; $i < count($hasil); $i++) { 
            echo "|".$hasil[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
    } elseif ($a == 2) {
        for ($i=0; $i < count($num1); $i++) { 
            echo "|".$num1[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "-";
        echo "\n";
        for ($i=0; $i < count($num2); $i++) { 
            echo "|".$num2[$i]."|";
            if (($num2[$i] - 1) == (count($num2) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "=";
        echo "\n";
        $hasil = array();
        for ($i=0; $i < count($num2); $i++) { 
            $hasil2 = $num1[$i] - $num2[$i];
            array_push($hasil,$hasil2); 
        }
        for ($i=0; $i < count($hasil); $i++) { 
            echo "|".$hasil[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
    } elseif ($a == 3) {
        for ($i=0; $i < count($num1); $i++) { 
            echo "|".$num1[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "*";
        echo "\n";
        for ($i=0; $i < count($num2); $i++) { 
            echo "|".$num2[$i]."|";
            if (($num2[$i] - 1) == (count($num2) / 2)) {
                echo "\n";
            }
        }
        echo "\n";
        echo "=";
        echo "\n";
        $hasil = array();
        for ($i=0; $i < count($num2); $i++) { 
            $hasil2 = $num1[$i] * $num2[$i];
            array_push($hasil,$hasil2); 
        }
        for ($i=0; $i < count($hasil); $i++) { 
            echo "|".$hasil[$i]."|";
            if ($num1[$i] == (count($num1) / 2)) {
                echo "\n";
            }
        }
    }
echo "\n";


?>