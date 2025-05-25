<?php
session_start();
include 'connect.php'; // Kết nối DB

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = $_SESSION['user_id'] ?? 0; // Lấy ID người dùng từ session đăng nhập
    $ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
    $dien_thoai = $_POST['dien_thoai'];
    $dia_chi_giao = $_POST['dia_chi_giao'];
    $cart = $_SESSION['cart'] ?? [];

    if (empty($cart)) {
        echo "Giỏ hàng trống.";
        exit;
    }

    // Tạo đơn hàng
    $stmt = $conn->prepare("INSERT INTO don_hang (id_user, thoi_diem_mua_hang, ten_nguoi_nhan, dien_thoai, dia_chi_giao, trang_thai, created_at, updated_at) VALUES (?, NOW(), ?, ?, ?, 0, NOW(), NOW())");
    $stmt->bind_param("isss", $id_user, $ten_nguoi_nhan, $dien_thoai, $dia_chi_giao);
    $stmt->execute();
    $id_don_hang = $stmt->insert_id;

    // Thêm từng sản phẩm vào don_hang_chi_tiet
    $stmt_ct = $conn->prepare("INSERT INTO don_hang_chi_tiet (id_dh, id_sp, so_luong, gia, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())");

    foreach ($cart as $item) {
        $id_sp = $item['id'];
        $so_luong = $item['quantity'];
        $gia = $item['price'];

        $stmt_ct->bind_param("iiii", $id_don_hang, $id_sp, $so_luong, $gia);
        $stmt_ct->execute();
    }

    unset($_SESSION['cart']); // Xoá giỏ hàng
    echo "✅ Đặt hàng thành công! Mã đơn hàng: #" . $id_don_hang;
    echo "<br><a href='index.php'>Về trang chủ</a>";
}
?>
