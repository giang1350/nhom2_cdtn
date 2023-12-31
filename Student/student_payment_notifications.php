<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Photo/logo-icon.png">
    <title>Thông báo đăng ký | Learn & Code</title>
    <link rel="stylesheet" href="demo_testing.css">
    <style type="text/css">
        .error{
            color: red;
            padding-top: 10px;
        }
    </style>

</head>
<body>
    <?php include "connect.php";?>
    <?php
        $Loi1 = "";
        $Loi2 = "";
        $Loi3 = "";
        $Loi4 = "";
        $Loi5 = "";

        //Điều kiện
        if (isset($_POST['confirm'])) {
            if (empty($_POST['name'])) {
                $Loi1 = "Xin vui lòng nhập họ tên.";
            }
            else{
                $name = $_POST['name'];
            }

            if (empty($_POST['email'])) {
                $Loi2 = "Xin vui lòng nhập email.";
            }
            else{
                $email = $_POST['email'];
            }

            if (empty($_POST['phonenumber'])) {
                $Loi3 = "Xin vui lòng nhập số điện thoại.";
            }
            else{
                $email = $_POST['phonenumber'];
            }

            if (empty($_POST['birth-date'])) {
                $Loi4 = "Xin vui lòng nhập ngày sinh.";
            }
            else{
                $birthdate = $_POST['birth-date'];
            }

            if (empty($_POST['address'])) {
                $Loi5 = "Xin vui lòng nhập địa chỉ.";
            }
            else{
                $address = $_POST['address'];
            }


            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phonenumber']) && !empty($_POST['birth-date']) && !empty($_POST['address'])) {
                echo "<script>
                        window.location.href='student_payment_method.php';
                    </script>";
            }
        }
    ?>
    <div class="thanhdieuhuong">
        <nav>
        <a href="student_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="student_about.php">Về Learn&Code</a></li>
                <li><a href="student_course.php">Khóa học</a></li>
                <li><a href="student_file.php">Lớp học</a></li>
                <li><a href="student_blog.php">Blog</a></li>
                <li><a href="student_message.php">Tin nhắn</a></li>
                <li><a href="student_payment_info.php">Đăng ký học thử</a></li>
            </ul>
            <img src="./Photo/user_images.png" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./Photo/user_images.png">
                        <h3>Nguyễn Văn A</h3>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="" alt="">
                        <p>Chỉnh sửa thông tin</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="" alt="">
                        <p>Cài đặt</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="" alt="">
                        <p>Trợ giúp</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="" alt="">
                        <p>Đăng xuất</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="noidung">
        <div class="noti">
            <h1>ĐĂNG KÝ THÀNH CÔNG</h1>
            <p>
                Cảm ơn bạn đã đăng ký khóa học! <br>
                Xin vui lòng đợi 2-3 ngày được xác nhận khóa học được mở.
            </p>
            <button name="confirm" onclick="location.href='student_index.php';">Quay lại trang chủ</button>
        </div>
    </div>

    <footer>
        <div class="footerContainer">
            <div class="mxh">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-at"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="student_about.php">Về Learn&Code</a></li>
                    <li><a href="student_course.php">Khóa học</a></li>
                    <li><a href="student_file.php">Lớp học</a></li>
                    <li><a href="student_blog.php">Blog</a></li>
                    <li><a href="student_message.php">Tin nhắn</a></li>
                </ul>
            </div>
            <div class="footerBottom">
                <p>CopyRight &copy;2023; Designed by <span class="designer">Nhóm 2</span></p>
            </div>
        </div>
    </footer>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>