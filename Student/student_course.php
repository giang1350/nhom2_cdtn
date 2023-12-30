<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa học | Learn & Code</title>
    <link rel="stylesheet" href="main_1.css">
    <link rel="icon" href="./Photo/logo-icon.png">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "connect.php";?>
    <?php
        $result = $conn -> query("SELECT * FROM khoahoc");
    ?>

    <div class="thanhdieuhuong">
        <nav>
            <a href="student_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="student_about.php">Về Learn&Code</a></li>
                <li><a href="student_course.php" style="background-color: #fff; color: #9F91CC; padding: 10px; border-radius: 10%;">Khóa học</a></li>
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
        <div class="title">
            <h2>CÁC KHÓA HỌC</h2>
        </div>

        <div class="course_show">
            <div class="course_box">
                <img src="./Photo/scratch_bg.jpg" alt="">
                <label><h2>Bài học về Scratch</h2></label>
                <p class = "price">200.000 Đồng</p>
                <button onclick="location.href = 'student_file.php';">Xem chi tiết</button>
            </div>

            <div class="course_box">
                <img src="./Photo/html_background.jpg" alt="">
                <label><h2>Complete HTML Tutorial (Part 1)</h2></label>
                <p class = "price">100.000 Đồng</p>
                <button onclick="location.href = 'student_payment_info.php';">Xem chi tiết</button>
            </div>

            <div class="course_box">
                <img src="./Photo/css_background.jpg" alt="">
                <label><h2>Complete CSS Tutorial (Part 1)</h2></label>
                <p class = "price">150.000 Đồng</p>
                <button onclick="location.href = 'student_payment_info.php';">Xem chi tiết</button>
            </div>

        </div>

        <div class="course_show">
            <?php 
            ?>
            <?php while ($row = mysqli_fetch_assoc($result)):?>
            <div class="course_box" name = course_box>
                <img src="./Photo/purple_tech_bg.jpg" alt="">
                <label><h2><?php echo $row['TenKH']?></h2></label>
                <p class = "price"><?php echo $row['Gia']?></p>
                <button onclick="location.href = 'student_payment_info.php';">Xem chi tiết</button>
            </div>
            <?php endwhile?>
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
                    <li><a href="#">Về Learn&Code</a></li>
                    <li><a href="#">Khóa học</a></li>
                    <li><a href="#">Lớp học</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Tin nhắn</a></li>
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