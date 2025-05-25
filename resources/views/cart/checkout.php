<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<h2>Thanh toán</h2>

<form action="process_order.php" method="POST">
    <h3>Thông tin người nhận</h3>
    <label>Họ tên:</label>
    <input type="text" name="ten_nguoi_nhan" required><br><br>

    <label>Số điện thoại:</label>
    <input type="text" name="dien_thoai" required><br><br>

    <label>Địa chỉ giao hàng:</label>
    <textarea name="dia_chi_giao" required></textarea><br><br>

    <h3>Đơn hàng</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>

        <?php foreach ($cart as $item): ?>
            <?php
                $lineTotal = $item['price'] * $item['quantity'];
                $total += $lineTotal;
            ?>
            <tr>
                <td><?= htmlspecialchars($item['name']) ?></td>
                <td><?= number_format($item['price']) ?>đ</td>
                <td><?= $item['quantity'] ?></td>
                <td><?= number_format($lineTotal) ?>đ</td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="3"><strong>Tổng cộng</strong></td>
            <td><strong><?= number_format($total) ?>đ</strong></td>
        </tr>
    </table>

    <br>
    <button type="submit">Đặt hàng</button>
</form>
