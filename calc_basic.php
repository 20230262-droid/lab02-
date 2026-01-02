<?php
// =======================
// 1. Khai báo biến
// =======================

$a = 10;
$b = 3;

// =======================
// 2. Tính toán số học
// =======================

$sum = $a + $b;        // tổng
$diff = $a - $b;       // hiệu
$product = $a * $b;    // tích
$quotient = $a / $b;   // thương
$remainder = $a % $b;  // chia lấy dư

// =======================
// 3. In kết quả bằng nối chuỗi
// =======================

// Dùng toán tử nối chuỗi .
echo "<h2>Kết quả tính toán</h2>";

echo "Tổng: " . $a . " + " . $b . " = " . $sum . "<br>";
echo "Hiệu: " . $a . " - " . $b . " = " . $diff . "<br>";
echo "Tích: " . $a . " * " . $b . " = " . $product . "<br>";
echo "Thương: " . $a . " / " . $b . " = " . $quotient . "<br>";
echo "Chia lấy dư: " . $a . " % " . $b . " = " . $remainder . "<br>";

// =======================
// 4. Dùng toán tử .= (nối và gán)
// =======================

$message = "<p>";
$message .= "Giá trị a = " . $a . ", ";
$message .= "giá trị b = " . $b;
$message .= "</p>";

echo $message;

echo "<hr>";

// =======================
// 5. So sánh == và ===
// =======================

echo "<h2>So sánh trong PHP</h2>";

echo "\"5\" == 5 : ";
var_dump("5" == 5);

echo "<br>";

echo "\"5\" === 5 : ";
var_dump("5" === 5);

/*
Giải thích:
- Toán tử == chỉ so sánh giá trị, PHP sẽ tự ép kiểu nên "5" == 5 là true.
- Toán tử === so sánh cả giá trị và kiểu dữ liệu, nên "5" (string) !== 5 (int).
*/
