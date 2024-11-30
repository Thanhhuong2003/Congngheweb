<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể loại</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div style="padding: 20px;">
        <h1>Quản lý thể loại</h1>
        <!-- Nút Thêm mới -->
        <button style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
            Thêm mới
        </button>
        
        <!-- Bảng hiển thị dữ liệu -->
        <table border="1" style="width: 100%; margin-top: 20px; border-collapse: collapse; text-align: center;">
            <thead style="background-color: #f1f1f1;">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá thành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sản phẩm 1</td>
                    <td>1000 VND</td>
                    <td><a href="#" style="color: blue; text-decoration: none;">✏️</a></td>
                    <td><a href="#" style="color: red; text-decoration: none;">🗑️</a></td>
                </tr>
                <tr>
                    <td>Sản phẩm 2</td>
                    <td>2000 VND</td>
                    <td><a href="#" style="color: blue; text-decoration: none;">✏️</a></td>
                    <td><a href="#" style="color: red; text-decoration: none;">🗑️</a></td>
                </tr>
                <tr>
                    <td>Sản phẩm 3</td>
                    <td>3000 VND</td>
                    <td><a href="#" style="color: blue; text-decoration: none;">✏️</a></td>
                    <td><a href="#" style="color: red; text-decoration: none;">🗑️</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer style="text-align: center; margin-top: 20px; font-size: 18px;">
        <hr>
     <b>   TLU'S MUSIC GARDEN </b>
    </footer>
</body>
</html>
