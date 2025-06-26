<?php
echo "<h2>Perbedaan fungsi isset() dan empty()</h2>";

echo "<h3>isset():</h3>";
echo "<p>Fungsi <code>isset()</code> digunakan untuk memeriksa apakah sebuah variabel sudah diatur (dideklarasikan dan bukan NULL).<br>";
echo "Ini mengembalikan TRUE jika variabel ada dan memiliki nilai selain NULL, dan FALSE jika variabel tidak ada atau bernilai NULL.</p>";

echo "<h4>Contoh isset():</h4>";
$var1 = "Hello";
$var2 = null;
$var3; // Belum diatur

echo "Variabel \$var1 = 'Hello'; <br>";
echo "<code>isset(\$var1)</code>: " . (isset($var1) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$var2 = null; <br>";
echo "<code>isset(\$var2)</code>: " . (isset($var2) ? "TRUE" : "FALSE") . "<br>"; // FALSE

echo "Variabel \$var3 (belum diatur); <br>";
echo "<code>isset(\$var3)</code>: " . (isset($var3) ? "TRUE" : "FALSE") . "<br>"; // FALSE (akan menghasilkan 'Notice' untuk variabel yang belum didefinisikan)

echo "Variabel \$var4 = ''; (string kosong)<br>";
$var4 = '';
echo "<code>isset(\$var4)</code>: " . (isset($var4) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$var5 = 0; (integer 0)<br>";
$var5 = 0;
echo "<code>isset(\$var5)</code>: " . (isset($var5) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "<br>";

echo "<h3>empty():</h3>";
echo "<p>Fungsi <code>empty()</code> digunakan untuk memeriksa apakah sebuah variabel dianggap 'kosong'.<br>";
echo "Ini mengembalikan TRUE jika variabel tidak ada, atau jika nilainya adalah salah satu dari berikut:<br>";
echo "<ul>";
echo "<li>Sebuah string kosong ('')</li>";
echo "<li>Integer 0</li>";
echo "<li>Float 0.0</li>";
echo "<li>String '0'</li>";
echo "<li>NULL</li>";
echo "<li>FALSE</li>";
echo "<li>Array kosong</li>";
echo "<li>Variabel yang tidak dideklarasikan</li>";
echo "</ul>";
echo "Ini mengembalikan FALSE untuk semua nilai lain.</p>";

echo "<h4>Contoh empty():</h4>";
$e_var1 = ""; // string kosong
$e_var2 = 0; // integer 0
$e_var3 = "0"; // string "0"
$e_var4 = null; // NULL
$e_var5 = false; // FALSE
$e_var6 = []; // array kosong
$e_var7 = "Hello"; // string tidak kosong
$e_var8 = 123; // integer tidak 0
// $e_var9; // tidak dideklarasikan

echo "Variabel \$e_var1 = ''; (string kosong)<br>";
echo "<code>empty(\$e_var1)</code>: " . (empty($e_var1) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$e_var2 = 0; (integer 0)<br>";
echo "<code>empty(\$e_var2)</code>: " . (empty($e_var2) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$e_var3 = '0'; (string \"0\")<br>";
echo "<code>empty(\$e_var3)</code>: " . (empty($e_var3) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$e_var4 = null; (NULL)<br>";
echo "<code>empty(\$e_var4)</code>: " . (empty($e_var4) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$e_var5 = false; (FALSE)<br>";
echo "<code>empty(\$e_var5)</code>: " . (empty($e_var5) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$e_var6 = []; (array kosong)<br>";
echo "<code>empty(\$e_var6)</code>: " . (empty($e_var6) ? "TRUE" : "FALSE") . "<br>"; // TRUE

echo "Variabel \$e_var7 = 'Hello'; <br>";
echo "<code>empty(\$e_var7)</code>: " . (empty($e_var7) ? "TRUE" : "FALSE") . "<br>"; // FALSE

echo "Variabel \$e_var8 = 123; <br>";
echo "<code>empty(\$e_var8)</code>: " . (empty($e_var8) ? "TRUE" : "FALSE") . "<br>"; // FALSE

echo "Variabel \$e_var9 (tidak dideklarasikan); <br>";
echo "<code>empty(\$e_var9)</code>: " . (empty($e_var9) ? "TRUE" : "FALSE") . "<br>"; // TRUE (tidak menghasilkan peringatan untuk variabel yang tidak didefinisikan)

echo "<h3>Kesimpulan:</h3>";
echo "<p>Singkatnya, <code>isset()</code> memeriksa keberadaan dan ketiadaan nilai NULL, sedangkan <code>empty()</code> memeriksa apakah nilai variabel dianggap 'kosong' dalam berbagai bentuk, termasuk NULL, 0, string kosong, dll.</p>";
echo "<p>Penting untuk dicatat bahwa jika variabel tidak dideklarasikan, <code>isset()</code> akan mengembalikan FALSE dan biasanya menghasilkan 'Notice' (peringatan), sedangkan <code>empty()</code> akan mengembalikan TRUE tanpa menghasilkan peringatan.</p>";

?>