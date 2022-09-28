<!-- tipe data angka INTEGER-->
<?php 
use function mysql_xdevapi\expression;
echo "-Tipe Data Integer-";
echo "<br>";


echo "Decimal : ";
var_dump(1234);

echo "<br>";

echo "Octal : ";
var_dump(01234);

echo "<br>";

echo "Hexadecimal : ";
var_dump(0x1A);

echo "<br>";

echo "Binary : ";
var_dump(0b11111111);

echo "<br>";

echo "Under score di Number : ";
var_dump("1_234_567");

echo "<br>";
echo "<br>";

// "FLOATING POINT"
echo "-Tipe Data Floating Point-";
echo "<br>";

echo "Floating Point : ";
var_dump(1.234);

echo "<br>";

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "<br>";

echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(7e-3);

echo "<br>";

echo "Underscore di Floating Point : ";
var_dump("1_234.567");

echo "<br>";
echo "<br>";

// int OVERFLOW
echo "-Tipe Data Overflow-";
echo "<br>";

echo "Integer Overflow 32 Bit : ";
var_dump(9223372036854775808);

echo "<br>";
echo "<br>";


// tipe data BOOlEAN
echo "-Tipe Data Boolean-";
echo "<br>";

echo "Benar : ";
var_dump(true);

echo "<br>";

echo "Salah : ";
var_dump(false);

echo "<br>";
echo "<br>";

// tipe data STRING Single Quote
echo "-Tipe Data String Single Quote-";
echo "<br>";

echo 'Name : ';
echo 'Aulia Martha Brielliant';

echo "<br>";
echo "<br>";

// tipe data STRING Double Quote
echo "-Tipe Data String Double Quote-";
echo "<br>";

echo 'Nama : ';
echo 'Aulia Martha Brielliant';
echo "\n";

echo "<br>";

echo "Nama : ";
echo "Aulia\t  Martha\t  Brielliant\n";

echo "<br>";
echo "<br>";

// tipe data STRING Heredoc
echo "-Tipe Data String Heredoc-";
echo "<br>";

echo <<<AULIA
ini adalah contoh string yang sangat panjang, & juga gak perlu ngetik ENTER secara manual. "bisa quote" juga
AULIA;

echo "<br>";
echo "<br>";

// tipe data NOWDOC
echo "-Tipe Data String Nowdoc-";
echo "<br>";

echo <<<'AULIA'
ini adalah contoh string yang sangat panjang, & juga gak perlu ngetik ENTER secara manual. "bisa quote" juga
AULIA;

echo "<br>";
echo "<br>";

// tipe data VARIABEL
echo "-Tipe Data Variable-";
echo "<br>";

$name = "Aulia";
$age = 16;
 
echo "Name : ";
echo $name;
echo "<br>";
echo "age : ";
echo $age;

echo "<br>";
echo "<br>";

// tipe data Variable Variables
echo "-Tipe Data Variable Variables-";
echo "<br>";

$name = "Aulia";
$$name = "Brielliant";

echo "name = ";
echo $name;

echo "<br>";

echo "Aulia = ";
echo $Aulia;

echo "<br>";
echo "<br>";

// tipe data CONSTANT (tidak bisa di ubah lagi)
echo "-Tipe Data Constant-";
echo "<br>";

define("AUTHOR", "aulia martha brielliant");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;

echo "<br>";

echo "App_Version : ";
echo APP_VERSION;

echo "<br>";
echo "<br>";

// tipe data NULL
echo"-Tipe Data Null-";
echo "<br>";

$name = "Aulia";
$name = null;
$age = null;

echo "Name : ";
echo $name;

echo "<br>";

echo "Age : ";
echo $age;

echo "<br>";
echo "<br>";

// tipe data IS NULL valuenya menjadi boolean (true/false)
echo "-Tipe Data IS NUL yang Valuenya Menjadi Boolean-";
echo "<br>";

$name = null;
$age = null;
echo "Is Name Null? : ";
var_dump(is_null($name));

echo "<br>";

// tipe data NULL isset (untuk mengecek apakah data variablenya tersedia atau tidak jika iya akan bernilai 'true' & jika tidak tersedia akan   bernilai 'false')
echo "-Tipe Data NUll Isset-";
echo "<br>";

$contoh = "Lemper";
unset($contoh);
var_dump(isset($contoh));

echo "<br>";
echo "<br>";

// tipe data array dimulai dari 0123... (jadi jika angka 123 maka 1=0)
echo "-Tipe Data Array-";
echo "<br>";

$values = array(1,2,3,4);
var_dump($values);
echo "<br>";

$names = ["Aulia", "Martha", "Brielliant"];
var_dump($names);
echo "<br>";
echo "<br>";

// Operasi array
echo "-Operasi Array-";
echo "<br>";

$names = ["Noursel", "Aulia", "Audeta"];
var_dump($names[0]);
echo "<br>";

$names[0] = "Ajid";
var_dump($names);
echo "<br>";

// unset untuk menghapus data jadi index (1) hilang maka harus hati hati
unset($names[1]);
var_dump($names);
echo "<br>";

$names[] = "Amoy";
var_dump($names);
echo "<br>";

// digunakan untuk menghitung jumlah data di dalam array
var_dump(count($names));
echo "<br>";
echo "<br>";


echo "-Array Membuat Map-";
echo "<br>";

$lia = array(
    "id" => "lia",
    "name" => "Lia Aulia",
    "age" => "16"
);
var_dump($lia);
echo "<br>";
var_dump($lia["age"]);
echo "<br>";
echo "<br>";

// Array di dalam array
echo "-Array Di Dalam Array-";
echo "<br>";

$lia = array(
    "id" => "lia",
    "name" => "Lia Aulia",
    "age" => "16",
    "address" => [
        "city" => "Minnesota",
        "country" => "Saint Paul"
    ]

    );
    var_dump($lia);
    echo "<br>";

    var_dump($lia["address"]["city"]);
    echo "<br>";
    echo "<br>";

// operator aritmatika (-)(+)
echo "-Operator Aritmatika (-),(+)";
echo "<br>";

$a = 10;
$b = 11;
$result = $a + $b;
var_dump($result);
echo "<br>";

// menjadi negative
$resultNegative = -$result;
var_dump($resultNegative);

echo "<br>";

// menjadi positive
$resultPositive = +$result;
var_dump($resultPositive);

echo "<br>";
echo "<br>";

// operator aritmatika % =>(sisa bagi), * =>(sisa kali)
echo "-Operator Aritmatika % , *";
echo "<br>";

$resultModulo = 100 % 3;
var_dump($resultModulo);
echo "<br>";
echo "<br>";

$resultSisaBagi = 38 % 5;
var_dump(($resultSisaBagi));
/*
    Oke ini mungkin membingungkan. Saya akan mencoba menjelaskan bagaimana saya belajar. Jadi pertanyaannya adalah 38%5% berarti sisa. Jam berapa 5 mendekati 38? _ x 5 = 5 × 5 = 25 5 × 6 = 30 5 × 7 = 35 5 × 8 = 40 kita tahu bahwa 5 x 7 = 35 5 x 8 = 40 jadi ini tidak bisa karena lebih tinggi dari 38 Jadi mari kita ambil 35 yang paling dekat dengan 38 Sekarang kita perlu mencari sisanya Yang berarti sisa dari 38 dan 35. Jadi kurangi kedua angka 38 - 35 = 3 3 adalah sisanya. semoga membantu

*/

echo "<br>";
echo "<br>";
// -Operator Penugasan- menggunakan karakter (=) sering digunakan untuk mengubah value sebuah variabel bisa di gunakan untuk operasi aritmatika
echo "-Operator Penugasan Aritmatika-";
echo "<br>";
$total = 0;
$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice;
var_dump($total);
echo "<br>";
echo "<br>";
 
// Operator perbandingan digunakan untk membandingkan dua buah value hasil dari operator perbandingan (boolean)
echo "-Operator Perbandingan Aritmatika-";
echo "<br>";

var_dump("10" == 10);
echo "<br>";
var_dump("10" === 10);
echo "<br>";
var_dump(10 > 9);
echo "<br>";
var_dump(10 >= 10);
echo "<br>";
echo "<br>";

// -operator logika- untuk membandingkan dua nilai boolean hasil dari operator logika adlah boolean lagi 
// 1. $a && $b 'And' true jka ke2nya true.
// 2. $a || $b 'Or' true jka $a dan $b salah satu atau ke2nya true.
// 3. ! $a 'Not' true jika bernilai false.
// 4. $a xor $b 'Xor' true jika $a dan $b salah satu true,tapi tidak keduanya. 
echo "-Operator Logika-";
echo "<br>";

var_dump(true && true);
echo "<br>";

var_dump(true && false);
echo "<br>";

var_dump(true && true);
echo "<br>";


var_dump(true || false);
echo "<br>";

var_dump(true || true);
echo "<br>";

var_dump(!true);
echo "<br>";

var_dump(!false);
echo "<br>";

var_dump(true xor true);
echo "<br>";

var_dump(true xor false);
echo "<br>";
echo "<br>";

// -Increment dan Decrement-
// PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka.
// Ini bisa memepersingkat ketika kita menaikkan data.
// 1. $a++ 'Post increment' Mengembalikkan $a lalu menaikkan 1 angka.
// 2. ++$a 'Pre increment' Menaikkan $a satu angka, lalu mengembalikkan $a.
// 3. $a-- 'Post decrement' Mengembalikkan $a lalu Menurunkan 1 angka.
// 4. --$a 'Pre decrement' Menurunkan $a satu angka, lalu mengembalikkan $a. 
echo "-Increment D
an Decrement-";
echo "<br>";
$a = 124;
$a++;
$a++;
var_dump($a);
echo "<br>";
echo "<br>";

// Operator Array
// 1. $a + $b 'Union'menggabungkan array $a dan $b.
// 2. $a == $b 'Equality' true jika $a dan $b memiliki key-value sama.
// 3. $a === $b 'Identity' true jika $a dan $b memiliki key-valuenyya sama dan posisi sama.
// 4. $a != $b 'Enequality' true jika $a dan $b tidak sama.
// 5. $a <> $b 'Inequality' true jika $a dan $b tidak sama.
// 6. $a !== $b 'Nonidenitity' true jika $a dan $b tidak identik.
echo "-Operator Array 1-";
echo "<br>";
$first = [
    "first_name" => "aulia"
];

$last = [
    "last_name" => "martha"
];

$full = $first + $last;
var_dump($full);
echo "<br>";
echo "<br>";

echo"-Operator Array 2-";
$first = [
    "first_name" => "aulia"
];

$last = [
    "last_name" => "martha"
];
$first = [
    "first_name" => "Lia"
];

$last = [
    "last_name" => "Brielliant"
];

$a = [
    "first_name" => "Lia" ,
    "last_name" => "Brielliant"
];

$b = [
    "last_name" => "Brielliant",
    "first_name" => "Lia"
];
echo "<br>";

var_dump($a == $b);
echo "<br>";
echo "<br>";


// manipulasi String 
// Expressieon,Statement dan Block
// $a = 5; Ketika menuliskan "5", maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalh expression.
// $b = $a; "$a" bisa di bilang adalh expression , karena $a adalah nilai 5.
echo "-Expressieon,Statement dan Block-";
echo "<br>";

echo "Contoh Expression Sederhana";
$a = 2000;
$b = $a;
echo "<br>";
var_dump($a);
echo "<br>";
echo "<br>";

echo "Contoh Expression Complex";
echo "<br>";

function getValue()
{
    return 100;
}

$value = getValue();
var_dump($value);
echo "<br>";
echo "<br>";


// Statement
// Statement bisa di bilang adalah kalimat lengkap dalam bahasa.
// Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma.
echo "Statement";
echo "<br>";

$name = "Aulia Martha Brielliant";

echo $name;

$date = new DateTime();
echo "<br>";
echo "<br>";

// Blok
// Blok adalh kumpulan statement yang terdiri dari nol atau lebih statement.
// blok diawali dan di akhiri dengan kurung kurawal {}.
echo "-Blok-";
echo "<br>";
function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

var_dump($name);
echo "<br>";
echo "<br>";

// Dot Operator
// Dot (titik) opertor adalah operator yag bisa digunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya).
// Sebenernya kita bisa menggunakan + (plus) untuk menambahkan string,namun jika kita coba menambahkan string dengan  tipe data number, maka akan terjadi error. Olehkarena itu direkomendasikan menggunakan. (Dot) untuk menambahkan string dengan data lain.
// PHP_EOL (PHP End OF LINE) untuk memberi enter.
echo "-Dot Operator-";
echo "<br>";

$name = "Bill Gates";
echo "Nama : " . PHP_EOL;
echo "Nilai : " . 100 . "\n";

echo "<br>";
echo "<br>";

// Konversi ke Number & Sebaliknya
// kadang kita sering melakukan konversi tipe data dari string ke number (int/float) atau sebaliknya.
// Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung (tipe data).
// Tipe data untuk string adalah string, untuk bisa menggunakan int untuk integer dan float untuk floating point.
echo "-Konversi ke Number dan Sebaliknya-";
echo "<br>";

$valueString = (string)100;
var_dump($valueString);
echo "<br>";

$valueInt = (int)"100";
var_dump($valueInt);
echo "<br>";
 
$valueFloat = (float)"100.11";
var_dump($valueFloat);
echo "<br>";
echo "<br>";


// Mengakses Karakter
// String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku.
// sama seperti di array,index pertama dimulai dari 0.
// jika kita megakses index melebihi karakter di string, maka akan terjadi error.
echo "-Mengakses Karakter-";
echo "<br>";
$name = "AUL";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "<br>";
echo "<br>";


// Variable Parsing 
// khusus string menggunakan double quote atau haredoc, kita bisa menggunakan karakter $ untuk mengakses variable.
// ini mempermudah ketika kita ingin menggabungkan string dengan variable.
// cara penggunaannya adalah dengan menggunakan karakter $ lalu dengan nama variablenya.
echo "-Variable Parsing-";
echo "<br>";

$name = "DEDI";
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "<br>";
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

echo "<br>";
echo "<br>";

// Curly Brace
// Untuk menghubungkan variabel dengan string tapa ada spasi. Hal ini akan menyulitkan jikahanya menggunakan variable parsing.
// untungnya di php kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing.
echo "-Curly Brace-";
echo "<br>";

$var = "car";
echo "This is {$var}" .PHP_EOL;

echo "<br>";
echo "<br>";


// If Statement
// dlama PHP , If adalah salah satu kata kunci yang di gunakan untuk percabangan.
// Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi.
// hampir di semua bahasa pemrograman mendukung if expression.
echo "-If Statement-";
echo "<br>";

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Else Statement
// Blok if akan di eksekusi ketikakondisi if bernilai true.
// kadang kita inginmelakukan eksekusi program tertentu jika kndisi if bernilai false.
// hal ini bisa dilakukan menggunakan else statement.
echo "-Else Statement-";
echo "<br>";

$nilai = 90;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Else Is Statement
// dalam if kita butug membuat beberapa kondisi.
// Kasus seperti ini di php kita bisa menggunakan Else If Statement.
// Else if di Php bisa lebih dari satu.
// kode else di php bisa menggunakan "else if" (digabung).
echo "-Else If Statement-";
echo "<br>";

$nilai = 60;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "NIlai Anda E" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Syntax Alternatif
// selain menggunakan{} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan if, yaitu dengan mengguanakan : (titik dua).
// namun untuk menggunakan ini, kita harus menggunakan kata kunci endif di akhir is statement.
echo "-Alternatif if else-";
echo "<br>";
$nilai = 30;

if ($nilai >= 80 && $absen >= 80): 
    echo "Nilai Anda A" . PHP_EOL;
 elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
 elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL;
 elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL;
 else :
    echo "Nilai Anda E" . PHP_EOL;
 endif;

echo "<br>";
echo "<br>";

// Switch Statement
// kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya menggunakan perbandingan ==
// switch adalah staetment percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya.
// kondisi di switch statement hanya untuk perbandingan ==
// break (untuk memberhentikan). 
echo "-Switch Statement-";
echo "<br>";

$nilai = "D";

switch ($nilai) {
    case "A":
        echo "Anda Lulus Dengan Sangat Baik" .PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Syntax Alternatif Switch
// sama seperti statement, switch statement juga bisa tanpa menggunakan {}(kurung kurawal).
// namun di akhir switch statement, kita harus menambahkan kata kunci endswitch.
echo "-Alternatif Switch-";
echo "<br>";

$nilai = "A";

switch ($nilai):
    case "A":
        echo "Anda Lulus Dengan Sangat Baik" .PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" .PHP_EOL;
        break;
    default:
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
    endswitch;

echo "<br>";
echo "<br>";

//Ternary Operator
//  kadang ada kasus kita butuh melakukan pengecekkan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y.
// penggunaan if statement pada kasus seperti ini bisa di persingkat menggunakan ternary operator.
// Ternary Operator menggunakan kata kunci ? dan : 
echo "-Ternary Operator-";
echo "<br>";

// menggunakan if else
echo "-Menggunakan if esle-";
echo "<br>";

$gender = "GIRL";
$hi = null;
if ($gender == "GIRL") {
    $hi = "HI GIRLLLL";
} else {
    $hi = "HI DUDEEEE";
}

echo $hi . PHP_EOL;
echo "<br>";
echo "<br>";

// menggunakan Ternary Operator
echo "-Menggunakan Ternary Operator-";
echo "<br>";

$gender = "BOY";
$hi = $gender == "BOY" ? "HI DUDE" : "HI GIRL";
echo $hi . PHP_EOL;

echo "<br>";
echo "<br>";

// Null Coalescing Operator
// Null = kosong
// hal yg paling ribet yaitu mengecek sebuah data ada atau tidak, dan juga apakah data tersebut isinya null atau bukan
// biasanya untuk melakukan itu, kita perlu menggunakan pengecekkan if statement dengan function isset($variable)
// namun untungnya d php ada null coalescing operator menggunakan tanda ??
echo "-Null Coalesing Operator-";
echo "<br>";

// tanpa null coalescing operator
echo "-Tanpa Menggunakan Null Coalesing Operator-";
echo "<br>";

$data = [];

if (isset($data ['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action;
echo "<br>";
echo "<br>";

// menggunakan Null Coalesing Operator
echo "-Menggunkan Null Coalesing Operator-";
echo "<br>";

$data = [
    "action" => "I LOVE YOU"
];
$action = $data['action'] ?? 'nothing';

echo $action;
echo "<br>";
echo "<br>";

// For Loop
// For adalah salah satu kata kunci yang bisa di gunakan untuk melakukan perulangan.
// Blok kode ynag terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi.
// kalo if perulanga  hanya sekali
// kalo For Loop perulangannya bisa melebihi sekali
echo "-For Loop-";
echo "<br>";

// Syntax Perulangan For 
// for(init statement;kondisi;post statement){
    // block perulangan
// }
// init statement akan di eksekusi hanya sekali di awal sebelum perulangan
// kondisi akan dilakukan pengecekkan dalam setiap perulangan,jika true perulangan akan dilakukan, jika false perulangan akan berhenti
// Post statement akan di eksekusi setiap kali di akhiri perulangan
// init statement, kondisi danpost statement tidak wajib diisi,jika kondisi tidak diisi,berati kondisi selalu bernilai true 
// echo "Perulangan Tanpa Henti";
// echo "<br>";

// for (; ;){
//     echo "Hello For Loop" . PHP_EOL;
// }

// Perulangan Dengan Kondisi
echo "-Perulangan Dengan Kondisi-";
echo "<br>";

$counter = 1;

for (; $counter <= 10;) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

echo "<br>";
echo "<br>";

// Perulangan Dengan Init Statement
// $counter di akhir
echo "-Perulangan Dengan Init Statement-";
echo "<br>";
for ($counter = 1; $counter <= 10;){
    echo "Hello For Loop : " . $counter . PHP_EOL;
    $counter++;
}

echo "<br>";
echo "<br>";

// Kode Perulangan Dengan Post Statement
// $counter di awal
echo "-Perulangan Dengan Post Statemen-t";
echo "<br>";

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
}
echo "<br>";
echo "<br>";

for ($counter = 10; $counter >= -10; $counter--) {
    echo "Hello For Loop : " . $counter . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Syntax Alternative For Loop
echo "-Syntax Alternative For Loop-";
echo "<br>";

for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello For Loop : " . $counter . PHP_EOL;
endfor;

echo "<br>";
echo "<br>";

// While Loop
// While loop adalah versi perulangan yang lebih sederhana dibandingkan for loop
// di While Loop hanya terdapat kondisi perulangan, tanpa init statement dan post statement
echo "-While Loop-";
echo "<br>";
$counter = 1;
while ($counter <= 10) {
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
}

echo "<br>";
echo "<br>";

// Syntax Alternative While Loop
echo "-Alternative While Loop-";
echo "<br>";

$counter = 1;
while ($counter <=9) :
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;

echo "<br>";
echo "<br>";

// Do While Loop
// Do While Loop adalah perulangan yang mirip dengan while
// Perbedaannya hanya pada pengecekkan kondisi
// Pengecekkan kondisi di while loop dilakukan di awal sebelum perulangan di lakukan , sedangkan di do while loop dilakukan setelah perulangan di lakukan 
// PERULANGAN DULU ABIS ITU PENGECEKKAN
// oleh karena itu dalam do while loop minimal pasti sekalo perulangan dilakukan walaupun kondisi tidak bernilai true
// digunakan untuk membuat apk tanya jawab
echo "-Do While Loop-";
echo "<br>";

// kondisi salah
echo "-kondisi salah-";
echo "<br>";
$counter = 189;
do {
    echo "Hello Do While Loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 20);

echo "<br>";
echo "<br>";

// kondisi benar
echo "kondisi benar";
echo "<br>";
$counter = 1;
do {
    echo "Hello Do While Loop : " . $counter . PHP_EOL;
    $counter++;
} while ($counter <= 10);

echo "<br>";
echo "<br>";

// Break And Continue
// pada switch statement kita sudah mengenal kata kunci break. yaitu untuk menghentikan case dalam switch
// Sama dengan pada perulangan, break juga di gunakan untuk menghentikan seluruh perulangan 
// Namun berbeda dengan continue.
// Break untuk menghentikan perulangan, Continue untuk mengskip perulangan lalu melanjutkan perulangan
// CONTINUE DI GUNAKAN UNTUK MENGHENTIKAN PERULANGAN SAAT INI LALU KE PERULANGAN SELANJUTNYA
echo "-Break And Continue-";
echo "<br>";

echo "Break";
echo "<br>";

$counter = 1;
while (true) {
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10){
        break;
    }
}

echo "<br>";
echo "<br>";

// biasanya buat bilangan bulat jadi bisa di bagi berapa aja
// yang ini keluarnya bilangan genap karena % 2
echo "-Continue-";
echo "<br>";

for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Hello Continue" .$counter. PHP_EOL;
}

echo "<br>";
echo "<br>";

// For Each
// Mengakses data array menggunakan perulangan sangat bertele tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat.
// Namun untungnya di PHP terdapat perulangan for each, 
// UNTUK MENGAKSES SELURUH DATA DI ARRAY SECARA OTOMATIS.
echo "-For Each-";
echo "<br>";

// Tanpa For Each
echo "-Tanpa For Each-";
echo "<br>";

$names = ["Aulia", "Martha", "Brielliant"];
for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Menggunakan For Each
echo "-Menggunakan For Each-";
echo "<br>";

$names = ["Aulia", "Martha", "Brielliant"];

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// For Each Dengan Key
// biasanya di gunakan untuk array yg indexnya lebih dari sati baris.
echo "-For Each Dengan Key-";
echo "<br>";

$person = [
    "first_name" => "Aulia",
    "middle_name" => "Martha",
    "Last_name" => "Brielliant"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

echo "<br>";
echo "<br>";

// Goto Operator
// fitur yang jarang digunakan di PHP 
// karena jika terlau banyak menggunakan goto operator, kode program aplikasinya akan mudah membingungkan yang membaca kodenya.
// GOTO ADALAH FITUR DIMANA KITA BISA LONCAT KE KODE PROGRAM SESUAI DENGAN KEINGINAN KITA
// Agar goto bisa locat ke kode program, kita harus membuat label di php dengan menggunakan nama label lalu di akhiri : (colon)
echo "-Goto Operator-";
echo "<br>";

// yang di awal ga guna jadinya
goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello Aulia" . PHP_EOL;

echo "<br>";
echo "<br>";

// goto Operator di Loop
echo "-Goto Operator di Loop-";
echo "<br>";

$counter = 1;
while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end :
echo "End Loop";

echo "<br>";
echo "<br>";

// Function
// FUNCTION ADALAH BLOK KODE PROGRAM YANG AKAN  BERJALAN SAAT DI PANGGIL
// Sebelumnya kita sudah menggunakan function isset{}, count{}, dll.
// untuk membuat Function di PHP kita bisa menggunakankata kunci function,lalu diikuti dengan nama function, kurung() dan di akhiri dengan blok
// kita bisa memanggil function dengan menggunakan nama function lalu di ikuti dengan kurung()
// Di bahasa pemrograman lain, function juga di sebut dengan method
echo "-Function-";
echo "<br>";

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}
sayHello();
echo "<br>";
sayHello();

// Lokasi Function
// PHP sangat flexible dalam pembuatan function
// tdk seperti pada bahasa pemrograman lainnya yang harus ada aturan lokasi dimana membuat function
// di PHP kita bebas membuat function dimanapun , bisa di dalam is statement, di dalam fuction, dan sebagainya
// Namun perlu diingat, jika kode function yang belum di eksekusi oleh PHP maka function tersebut tidak akan bisa di gunakan
echo "<br>";
echo "<br>";

echo "-Lokasi Function-";
echo "<br>";

// kalo valuenya false hasilnya error
$buat = true;
if ($buat) {
    function hi()
    {
        echo "HIIIIII" . PHP_EOL;
    }
}
hi();

echo "<br>";
echo "<br>";

// Function Argument
// untuk mengirim informasi ke function yang ingin kita panggil perlu menambahkan argumen/parameter di function
// Cara membuat argument sama seperti cara membuat variable
// argument ditempatkan di dalam kurung() di deklarasi function
// Argument bisa lebih dari satu jika lebih dari satu harus dipisah menggunakan tanda koma
echo "-Function Argument-";
echo "<br>";

function sayHi($name)
{
    echo "Hello $name" . PHP_EOL;
}
sayHi("Aulia");
echo "<br>";
sayHi("Brielliant");

echo "<br>";
echo "<br>";

// Default Argument Value
// PHP mendukung default argument value
// fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter, kita bisa menetukan data defaultnya apa
echo "-Default Argument Value-";
echo "<br>";

function sayHai($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}
sayHai();
echo "<br>";
sayHai("Aul");

echo "<br>";
echo "<br>";

// Kesalahan Default Argument Value
// bisa di simpan argument manapun
// Namun jika lebih dari satu dan kita menyimpan default vlue di parameter awal maka itu kurang berguna

// ini contoh yang benar
function sayHaii($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}
sayHaii("Aulia");
echo "<br>";

sayHaii("Martha");
echo "<br>";

sayHaii("Aulia","Martha");

// ini contoh yang salah
// function sayHaii($firstName = "Anonymous", $lastName)
// {
//     echo "Hello $firstName $lastName" . PHP_EOL;
// }

echo "<br>";
echo "<br>";

// Type Declaration
// sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis.
// kadang terlalu dinamis juga menyulitkan jika ternyata jika hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu.
// untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukkan pengecekkan ketika kita mengirim value ke functionn tersebut.
// jika tipe data value tidak sesuai, maka akan terjadi error.
// secara default PHP akan melakukkan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int.
// jadi type declaration akan mengubah secara otomatis jika kita memasukkan data string maka akan otomatis mengubah menjadi tipe data int.
echo "-Type Declaration-";
echo "<br>";

// Valid Types (1)
// type / kata kunci | Keterangan
// Class/ interface | Parameter harus tipe Class / Interface
// self | Parameter harus sama dengan Class dimana function ini di buat
// array | Parameter harus Array
// callable | Parameter harus callable
// bool | Parameter harus boolean
// float | Paramter harus floating point
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum("100","100");
echo "<br>";

sum(100,10);
echo "<br>";

sum(true,false);

echo "<br>";
echo "<br>";

// Variable-length Argument List
// merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value.
// Variable-length Argument List secara otomatis akan akan membuat argument tersebut menjadi arrau, namun kita tidak perlu menual mengirim array ke functionnya.
// Variable-length Argument List hanya bisa dilakukan di argument posisi terakhir.
// untuk membuat Variable-length Argument List,kita bisa menggunakan tanda...(titik tiga kali) sebelum nama argument.
echo "-Variable-length Argument List-";
echo "<br>";

// implode fungsinya untuk merubah array menjadi string
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total" . implode("+", $values) . "= $total" . PHP_EOL;
}

sumAll(10,20,30,40);
echo "<br>";

// ini yang menggunakan array
sumAll(...[10,20,30,40]);

echo "<br>";
echo "<br>";

// Function Return Value
// secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikkan nilai.
// dan di dalam blok function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return.
// lalu diikuti dengan data yang ingin dihasilkan
// kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari 1.
// tidak bisa menggunakan tipe data array 
// jika menggunakan tipe data array maka akan error
echo "-Function Return Value-";
echo "<br>";

// Function Return Value (1)
function sumin(int $first, int $second)
{
    return $first + $second;
}
$total = sumin(10,10);
var_dump($total);
echo "<br>";

$total = sumin(20,20);
var_dump($total);

echo "<br>";
echo "<br>";

// Function Return Value (2)
echo "-Function Return Value (2)-";
echo "<br>";

// jika sudah menggunakan return maka yg di bawahnya tidak akan di eksekusi/ di ignorekan.
function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}
$score = getFinalValue(98);
var_dump($score);
echo "<br>";

$score = getFinalValue(10);
var_dump($score);

echo "<br>";
echo "<br>";

// Return Type Declarations
// Sama se[erti pada argument, pada return valuepun kita bisa mendeklarasikan tipe datanya
// Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakkan untuk menjaga jangan sampai kita mengembalikkan tipe data yang salah di function.
// untuk mendeklarasikan tipe data kembalian function, setelah kurung() kita bisa tambahkan: diikuti tipe data kembaliannya.
echo "-Return Type Declarations-";
echo "<br>";

function lia(int $first, int $second): int 
{
    $total = $first + $second;
    return $total;
}

$result = lia(10, 20);
var_dump($result);
echo "<br>";

function getFinal(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$nilai = getFinal(60);
var_dump($nilai);
echo "<br>";

$nilai = getFinal(100);
var_dump($nilai);

echo "<br>";
echo "<br>";

// Variable Function
// PHP mendukung konsep yang bernama variable function.
// Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable.
// Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument).
// kegunaanya bisa membuat function di sebuah argument yang dimana kita bisa memasukkan nama function yang lain
echo "-Variable Function-";
echo "<br>";

// CONTOH SATU
echo "Contoh (1)";
echo "<br>";

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionName = "foo";
$functionName();

echo "<br>";

$functionName = "bar";
$functionName();

echo "<br>";
echo "<br>";

// CONTOH DUA
echo "Contoh (2)";
echo "<br>";
function sayhola(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

// strtoupper fungsinya untuk menaikkan kata
// strtolower fungsinya untuk menurunkan kata
sayhola("Shawn Mendes", "strtoupper");
echo "<br>";

sayhola("Charlie Puth","strtolower");

echo "<br>";
echo "<br>";

// Anonymous Function
// Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure.
// Anonymous founction biasanya digunakan sebagai argument atau sebagai value di variable.
// Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya.
echo "-Anonymous Function-";
echo "<br>";

// Seakan akan ga ada nama functionnya
$sayHelo = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHelo("Justin Bieber");
echo "<br>";

$sayHelo("Ariana Grande");

echo "<br>";
echo "<br>";

// Anonymous Function Sebagai Argument
echo "-Anonymous Function Sebagai Argument-";
echo "<br>";

function sayGoodbye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodbye("Aulia", function (string $name){
    return strtoupper($name);
});

echo "<br>";
echo "<br>";

// Mengakses Variable di Luar Closure
// Secara default , anonymous function tidak bisa mengakses variable yang terdapat di luar function.
// Jika ingin menggunakan variable yang terdapat di luar anoymous function, kita perlu secara explicit menyebutkannya menggunakan kata kunci "use" lalu diikuti variable-variable yang ingin kita gunakkan.
echo "-Mengakses Variable di Luar Closure-";
echo "<br>";

$firstName = "Selena";
$lastName = "Gomes";

$sayHelloSelena = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloSelena();

echo "<br>";
echo "<br>";

// Arrow Function
// diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya.
// Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama.
// Hal yang membedakan di arrow function adalah,secara otomatis variable diluar clusure bisa digunnakan, tidak seperti anonymous function. melainkan fn.
// Arrow function di khususnya untuk pembuatan function yang sederhana.
// BISANYA DI PHP 7.4
// echo "-Arrow Function-";
// echo "<br>";

// // Menggukan anonymous function
// $firstName = "Tukul";
// $lastName = "Arwana";

// $anonymousFunction = function () use ($firstName, $lastName): string {
//     return "Hai $firstName $lastName" . PHP_EOL;
// };

// $arrowFunction = fn() => "Hai $firstName $lastName" . PHP_EOL;

// Callback Function
// Callback adalah sebuah mekanisme function memanggil function lainnya sesuai dengan yang di berikan di argument.
// Hal ini sebenarnya kita lakukan di materi Variable Function dan Anonymous Function.
// Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable.
// Dan untuk memanggil callback function tersebut,kita bisa menggunakan function call_user_func(callable,arguments)
echo "-Callback Function-";
echo "<br>";

function sayHolla(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHolla("Aulia", function ($name) { return strtoupper($name); });
echo "<br>";
sayHolla("LIA", "strtolower");

echo "<br>";
echo "<br>";

// Recirsive Function
// Recursive function adalah kemampuan function memanggil function dirinya sendiri.
// Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasis factorial.
// 10 (10x9x8x7x6x5x4x3x2x1)
echo "-Recursive Function-";
echo "<br>";

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
// 6x5x4x3x2
var_dump(factorialLoop(6));

echo "<br>";
echo "<br>";

// Factorial recursive
// karena memanggil function itu sendiri
// Problem dengan Recursive
// -walaupun recursive function itu sangat menarik, namun kita perlu berhati-hati.
// jika recirsive terlalu dalam, maka akan ada kemungkinan terjadinya memory overflow, yaitu error dimana memory terlalu banyak di gunakan di PHP.
// Kenapa problem bisa terjadi ? , karena ketika kita memanggil function, PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk ters, dan jika terlalu banyak, maka akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka akan terjadi eorror memory.
echo "-Factorial recursive-";
echo "<br>";

function factorialRecursive(int $value): int{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(7));

echo "<br>";
echo "<br>";

// Komentar
// kadang dalam membuat program, kita sering menempatkan komentar di kode progrm tersebut
// Komentar adalah kode program yang akan di hiraukan saat kode program kita di jalan kan 
// Biasanya komentar digunakan untuk dokumentasi

// String Function
// baca di www.php.net
// Function | Keretangan
// join()/ implode() | menggabungkan array menjadi string.
// explode() | memcah string menjadi array.
// strtolower() | mengubah string menjadi lowercase
// strtoupper() | mengubah string menjadi uppercase
// substr() | mengambil sebagian string
// trim() | menghapus whitespace di depan dan belakang string

var_dump(join(",", [1,2,3,4,5]));
echo "<br>";
var_dump(strtolower("SHAWN MENDES"));
echo "<br>";
var_dump(strtoupper("aulia martha brielliant"));
echo "<br>";

echo "<br>";

// Array Function
// untuk memanipulasi data array
// www.php.net
// Contoh Array Function
// Function | Keterangan
// array_keys() | Mengambil semua keys milih array.
// array_values() | Mengambil semua value milik array.
// array_map() | Mengubah semua data array dengan callback.
// sort() | Mengurutkan array.
// rsort() | Mengurutkan array terbalik.
// shuffle() | Mengubah posisi sata array secara random.
echo "-Array Function-";
$data = [1,2,3,4,5,6,7,8,9,10];
echo "<br>";
rsort($data);
echo "<br>";
var_dump($data);
echo "<br>";
var_dump(array_keys($data));
echo "<br>";
var_dump(array_values($data));
echo "<br>";
echo "<br>";

$person = [
    "first_name" => "Luna",
    "last_name" => "Maya"
];
var_dump(array_keys($person));
echo "<br>";
var_dump(array_values($person));

echo "<br>";
echo "<br>";

// is Function 
// Syntaxnya is_
// Untuk mengecek tipe data daris sabuah data
// cek www.php.net
// Contoh is Function
// Function | Keterangan
// is_string() | Apakah tipe data string.
// is_bool() | Apakah tipe data boolean.
// is_int() | Apakah tipe data integer.
// is_float() | Apakah tipe data floating point.
// is_array() | Apakah tipe data array.
// is_callable | Apakah tipe data callback/callable
echo "-is Function-";
echo "<br>";
$data = "sample";
var_dump(is_string($data));
echo "<br>";
var_dump(is_bool($data));
echo "<br>";
var_dump(is_int($data));
echo "<br>";
var_dump(is_float($data));
echo "<br>";
var_dump(is_array($data));
echo "<br>";
var_dump(is_callable($data));

echo "<br>";
echo "<br>";

// Require dan Include
// Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file.
// Lebih baik dipisah ke beberapa file Gagar kode program tidak terlalu bertumpuk di satu file.
// Require dan Include digunakan untuk mengambil file PHP lain.
// bedanya dengan require dan include
// require jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti.
// include jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan.
echo "-Require dan Include-";
echo "<br>";

// Require
function sayoi(string $firstName, string $lastName): string
{
    return "WOI $firstName $lastName";
}


// Include
include "MyFunction.php";
echo sayoi("ULLL", "GECE");

echo "<br>";
echo "<br>";

// Posisi Require dan Include
// kode program PHP akan di baca dari atas ke bawah oleh karena itu pastikan posisi require dan include sesuai dengan yang kita inginkan
// misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi kita malah memanggil function yang belum ada

// require_once & include_once
// Function require dan include akan selalu mengambil file yang kita inginkan
// jika beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali kali pula kita ambil.
// hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definise function, sehingga jika diambil berkali kali akan menyebabkan error decare function.
// untungnya di PHP terdapat function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

// Variable Scope
// Di PHP kita bisa membuat variable dimanapun yang kita mau
// Sco[e variable adalah dibagian mana saja sebuah variable bisa diakses
// PHP memiliki tiga jenis variable scope
// 1. global
// Global Scope yaitu variable yangdibuat diluar function memiliki scope global. Variable di scope globah hanya bisa diakses dariluar function, artinya di dalam function kita tidak bisa mengakses variable di global scope.
// Global Keyword 
// jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global.
// Dengan menggunakan kata kunci global bisa mengakses variable yang ada di global scope dari dalam function.
echo "-Variable Global Keyword-";
echo "<br>";
// kenapa error karena variable namenya di luar functionnya
$name = "Aulllll"; // global scope
function sayName()
{
    global $name;
    echo $name; //error
}
sayName();

echo "<br>";
echo "<br>";
//  $GLOBAL Variable
// setiap variable yang di buat di global scope, secara otomatis akan di simpan di dalam array $GLOBAL oleh PHP.
// Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variablenya dari dalam function jika ingin mengakses global variable.
//  $GLOBAL adalah variable yang bersifat superglobal artinya bisa di akses dari scope manapun.
echo "-$GLOBAL Variable-";
echo "<br>";
// kenapa error karena variable namenya di luar functionnya
$name = "PARARUSING"; // global scope
function panggilName()
{
    global $name;
    echo $name; //error
    var_dump($GLOBALS); //superglobal
}
panggilName();

echo "<br>";
echo "<br>";

// 2. Local
// yaitu variable yang dibuat di dalam function memiliki scope local.
// variable di scope local hanya bisa di akses dari dalam function itu sendiri.
// artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
echo "-Variable Local Scope-";
echo "<br>";
function createName()
{
    $name = "Aul"; // local scope
}
createName();
echo $name; //error

echo "<br>";
echo "<br>";

// 3. Static scope
// secara default local variable itu siklus hidupnya hanya sebatas function nya di eksekusi
// jika sebuah function selesai di eksekusi maka siklus hiduo local variablenya selesai 
// PHP memiliki scope yang bernama static 
// static scope hanya bisa di set ke local variable
// saat kita membuat sebuah local variable menjadi static , maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai di eksekusi 
// Artinya jika function tersebut dieksekusi lagi maka static variable tersebut akan memiliki value dari sebelumnya
echo "-Static Scope-";
echo "<br>";

function increment()
{
    static $counter = 1;
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}

increment();
echo "<br>";
increment();
echo "<br>";
increment();
echo "<br>";
increment();

echo "<br>";
echo "<br>";

// Reference
// adalah mengakses variable yang sama dengan nama variable yang berbeda
// di PHP tidak sama dengan reference di bahasa pemrogramman seperti C/C++ yang memiliki fitur pointer
// Analogi reference itu seperti file jika variable adalah file dan valuenya adalah isi file, maka reference adalah membuat shortcut(di Windows) atau (di Linux/Mac) terhadap file yang sama
// Saat kita mengubah isi value dari reference , maka secara otomatis value variable aslinya pun berubah
// untuk membuat reference terhadap value kita bisa menggunakan karakter "&"
echo "-Reference-";
echo "<br>";

// Assign By Reference
// Pertama PHP reference bisa memungkinkan kita membuat beberapa variable menuju ke value yang sama
echo "-Assign By Reference-";
echo "<br>";

$name = "lia";
$otherName = &$name;
$otherName = "Ujang";
echo $name . PHP_EOL;
echo "<br>";
echo "<br>";

// Pass By Reference
// mengirim data ke function dengan reference
echo "-Pass By Reference-";
echo "<br>";
function NFT(int &$value)
{
    $value++;
}
$counter = 1;
NFT($counter);
echo $counter . PHP_EOL;

echo "<br>";
echo "<br>";

// Returning References
// PHP juga bisa mengembalikan reference pada function
// Namun hati-hati. gunakan fitur ininjika memang ada alasannya , karena fitur ini bisa membingungkan
echo "-Returning References-";
echo "<br>";
function &keepvalue()
{
    static $value =100;
    return $value;
}
$a = &keepvalue();
$a = 200;
$b = &keepvalue();
echo $b . PHP_EOL;