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
            <table class="bordered-table" id="orderTable">
                <thead>
                    <tr>
                        <th class="centered-text orange-bg">STT</th>
                        <th class="centered-text orange-bg">ID Đơn Hàng</th>
                        <th class="centered-text orange-bg">Tên Khách Hàng</th>
                        <th class="centered-text orange-bg">Địa Chỉ</th>
                        <th class="centered-text orange-bg">Số Tiền</th>
                        <th class="centered-text orange-bg">Thời Gian Đặt</th>
                        <th class="centered-text orange-bg">Xóa</th>
                        <th class="centered-text orange-bg">Xác Nhận</th>
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
                        <td><button class="delete-btn" data-order-id="DH001">Xóa</button></td>
                        <td><button class="confirm-btn" data-order-id="DH001">Xác Nhận</button></td>
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

        .bordered-table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #e44d26; /* Màu viền cam */
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #e44d26;
            border-right: 1px solid #e44d26; /* Viền phải */
        }

        th.orange-bg {
            background-color: #e44d26; /* Màu cam đậm */
            color: #fff; /* Màu chữ trắng */
        }

        tr:last-child td {
            border-bottom: none; /* Loại bỏ đường viền dưới của hàng cuối cùng */
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

        .centered-text {
            text-align: center;
        }
    </style>

    <script>
        class OrderManager {
            constructor() {
                this.initEventListeners();
            }

            initEventListeners() {
                const deleteButtons = document.querySelectorAll('.delete-btn');
                const confirmButtons = document.querySelectorAll('.confirm-btn');

                deleteButtons.forEach(button => {
                    button.addEventListener('click', () => this.handleDeleteOrder(button.dataset.orderId));
                });

                confirmButtons.forEach(button => {
                    button.addEventListener('click', () => this.handleConfirmOrder(button.dataset.orderId));
                });
            }

            handleDeleteOrder(orderId) {
                alert('Đã xóa đơn hàng có ID: ' + orderId);
            }

            handleConfirmOrder(orderId) {
                alert('Đã xác nhận đơn hàng có ID: ' + orderId);
            }
        }

        // Khởi tạo đối tượng quản lý đơn hàng
        const orderManager = new OrderManager();
    </script>
</body>
</html>
