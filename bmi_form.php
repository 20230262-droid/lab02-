<?php
// Khởi tạo biến để tránh undefined index
$fullName = $_GET['fullName'] ?? '';
$height   = $_GET['height'] ?? '';
$weight   = $_GET['weight'] ?? '';

$result = '';
$error = '';

// Kiểm tra khi submit
if (isset($_GET['submit'])) {

    // Validate dữ liệu
    if ($fullName === '' || $height === '' || $weight === '') {
        $error = "Vui lòng nhập đầy đủ thông tin.";
    } elseif (!is_numeric($height) || !is_numeric($weight) || $height <= 0 || $weight <= 0) {
        $error = "Chiều cao và cân nặng phải là số > 0.";
    } else {
        // Tính BMI
        $bmi = $weight / ($height * $height);
        $bmi = round($bmi, 2);

        // Phân loại BMI
        if ($bmi < 18.5) {
            $category = "Gầy";
        } elseif ($bmi < 25) {
            $category = "Bình thường";
        } elseif ($bmi < 30) {
            $category = "Thừa cân";
        } else {
            $category = "Béo phì";
        }

        // Chuỗi kết quả
        $result  = "<h3>Kết quả BMI</h3>";
        $result .= "<p>Họ tên: <strong>$fullName</strong></p>";
        $result .= "<p>BMI: <strong>$bmi</strong></p>";
        $result .= "<p>Phân loại: <strong>$category</strong></p>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính BMI</title>
</head>
<body>

<h2>Form tính BMI</h2>

<form method="get">
    <p>
        Họ tên:<br>
        <input type="text" name="fullName" value="<?php echo htmlspecialchars($fullName); ?>">
    </p>

    <p>
        Chiều cao (m):<br>
        <input type="text" name="height" value="<?php echo htmlspecialchars($height); ?>">
    </p>

    <p>
        Cân nặng (kg):<br>
        <input type="text" name="weight" value="<?php echo htmlspecialchars($weight); ?>">
    </p>

    <p>
        <button type="submit" name="submit">Tính BMI</button>
    </p>
</form>

<!-- Hiển thị lỗi -->
<?php
if ($error !== '') {
    echo "<p style='color:red;'>$error</p>";
}
?>

<!-- Hiển thị kết quả -->
<?php
if ($result !== '') {
    echo $result;
}
?>

</body>
</html>
