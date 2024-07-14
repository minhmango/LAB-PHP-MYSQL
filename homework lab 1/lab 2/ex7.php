<!DOCTYPE html>
<html>
<body>
<?php
// Hàm để tìm các giá trị không duy nhất trong một mảng
function array_not_unique($my_array) {
    $same = array(); // Mảng để lưu các giá trị trùng lặp
    natcasesort($my_array); // Sắp xếp mảng theo thứ tự không phân biệt chữ hoa chữ thường
    reset($my_array); // Đưa con trỏ mảng về phần tử đầu tiên
    $old_key = NULL; // Khởi tạo khóa cũ
    $old_value = NULL; // Khởi tạo giá trị cũ

    // Duyệt qua mảng
    foreach ($my_array as $key => $value) {
        if ($value === NULL) { // Nếu giá trị là NULL thì bỏ qua
            continue;
        }
        if ($old_value == $value) { // Nếu giá trị hiện tại bằng giá trị trước đó
            $same[$old_key] = $old_value; // Lưu giá trị trùng lặp vào mảng $same với khóa cũ
            $same[$key] = $value; // Lưu giá trị trùng lặp vào mảng $same với khóa hiện tại
        }
        $old_value = $value; // Cập nhật giá trị cũ
        $old_key = $key; // Cập nhật khóa cũ
    }
    return $same; // Trả về mảng các giá trị trùng lặp
}

// Mảng chứa các địa chỉ email
$emails = array(
    "john.doe@example.com",
    "jane.smith@example.com",
    "john.doe@example.com",
    "alice.jones@example.com",
    "bob.brown@example.com",
    "alice.jones@example.com"
);

// Gọi hàm để tìm các địa chỉ email không duy nhất
$non_unique_emails = array_not_unique($emails);

// Kiểm tra và hiển thị kết quả
if (!empty($non_unique_emails)) {
    echo "Các địa chỉ email không duy nhất:<br>";
    foreach ($non_unique_emails as $email) {
        echo $email . "<br>"; // Hiển thị các địa chỉ email trùng lặp
    }
} else {
    echo "Tất cả các địa chỉ email đều duy nhất."; // Thông báo khi không có email trùng lặp
}
?>
</body>
</html>