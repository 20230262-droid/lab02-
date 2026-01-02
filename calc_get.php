<?php
// =======================
// GET Calculator
// =======================

// Kiểm tra đủ tham số hay chưa
if (!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['op'])) {
    echo "<h3>Hướng dẫn sử dụng</h3>";
    echo "<p>URL mẫu:</p>";
    echo "<code>
        http://localhost/lab02_20230262/ex04/calc_get.php?a=10&b=3&op=add<br>
        http://localhost/lab02_20230262/ex04/calc_get.php?a=10&b=3&op=sub<br>
        http://localhost/lab02_20230262/ex04/calc_get.php?a=10&b=3&op=mul<br>
        http://localhost/lab02_20230262/ex04/calc_get.php?a=10&b=3&op=div
    </code>";
    exit;
}

// Ép kiểu sang số
$a = (float) $_GET['a'];
$b = (float) $_GET['b'];
$op = $_GET['op'];

$result = null;
$symbol = "";

// Xử lý phép toán
switch ($op) {
    case "add":
        $result = $a + $b;
        $symbol = "+";
        break;

    case "sub":
        $result = $a - $b;
        $symbol = "-";
        break;

    case "mul":
        $result = $a * $b;
        $symbol = "*";
        break;

    case "div":
        if ($b == 0) {
            echo "<p style='color:red;'>Không thể chia cho 0</p>";
            exit;
        }
        $result = $a / $b;
        $symbol = "/";
        break;

    default:
        echo "<p style='color:red;'>Phép toán không hợp lệ</p>";
        exit;
}

// In kết quả
echo "<h3>Kết quả</h3>";
echo "$a $symbol $b = $result";
