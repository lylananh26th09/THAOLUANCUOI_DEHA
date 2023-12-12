<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <title>Trang Báo Cáo Admin</title>
</head>
<body>
    <div class="page-container">
        <header>
            <h1></h1>
        </header>
        <section class="report-section">
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>ID Đơn Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Địa Chỉ</th>
                        <th>Số Tiền</th>
                        <th>Thời Gian Đặt</th>
                        <th>Xóa</th>
                        <th>Xác Nhận</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dữ liệu từ database sẽ được thêm vào đây -->
                    <tr>
                        <td>1</td>
                        <td>DH001</td>
                        <td>Lý Lan Anh</td>
                        <td>17 ngõ 126, Nguyễn Đổng Chi</td>
                        <td>500.000</td>
                        <td>2023-01-01 10:00 AM</td>
                        <td><button class="delete-btn">Xóa</button></td>
                        <td><button class="confirm-btn">Xác Nhận</button></td>
                    </tr>
                    <!-- Thêm các hàng khác tương tự nếu cần -->
                </tbody>
            </table>
        </section>
    </div>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.page-container {
    background-color: #fff;
    padding: 20px;
}

header {
    background-color: #f59c42;
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

h1 {
    margin: 0;
}

.report-section {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #e44d26;
}

th {
    background-color: #e44d26;
    color: #fff;
}

tr:nth-child(even) {
    background-color: #ffecd9;
}

.delete-btn, .confirm-btn {
    background-color: #e44d26;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.delete-btn:hover, .confirm-btn:hover {
    background-color: #ff6347;
}
</style>
</body>
</html>