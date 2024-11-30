<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Điều Hướng</title>
    <style>
        /* CSS sẽ được thêm ở phần tiếp theo */
        /* Xóa style mặc định của danh sách */
ul.menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa; /* Màu nền */
    display: flex; /* Hiển thị các mục trên cùng một dòng */
    border-bottom: 2px solid #ddd; /* Đường kẻ dưới menu */
}

/* Style từng mục */
ul.menu li {
    margin: 0;
    padding: 0;
}

/* Style cho link */
ul.menu li a {
    display: block;
    padding: 10px 20px;
    text-decoration: none; /* Bỏ gạch chân */
    color: #333; /* Màu chữ */
    font-weight: bold; /* Chữ đậm */
}

/* Thay đổi màu khi hover */
ul.menu li a:hover {
    background-color: #007bff; /* Màu nền khi hover */
    color: white; /* Màu chữ khi hover */
    transition: 0.3s; /* Hiệu ứng mượt */
}

    </style>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Administration</a></li>
            <li><a href="home.php">Trang chủ</a></li>
            <li><a href="external.php">Trang ngoài</a></li>
            <li><a href="categories.php">Thể loại</a></li>
            <li><a href="author.php">Tác giả</a></li>
            <li><a href="article.php">Bài viết</a></li>
        </ul>
    </nav>
</body>
</html>
