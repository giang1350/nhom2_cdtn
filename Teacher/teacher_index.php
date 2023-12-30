<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Giáo viên</title>
    <link rel="icon" href="./Photo/user_images.png">
    <link rel="stylesheet" href="main1.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="thanhdieuhuong">
        <nav>
            <a href="teacher_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="teacher_about.php">Về Learn&Code</a></li>
                <li><a href="teacher_course.php">Khóa học</a></li>
                <li><a href="#">Lớp học</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Tin nhắn</a></li>
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

    <!-- Giới thiệu trang chủ -->
    <div class="header_index">
        <div class="headerContainer">
            <div class="header_left">
                <h1>Chào mừng đến trang Learn&Code <br> dành cho Giáo viên</h1>
                <p>Được thiết kế để hỗ trợ giáo viên hoặc nhân viên trong việc giảng dạy lập trình. Giáo viên có thể tìm thấy các khóa học, bài giảng theo từng chủ đề, từ những khái niệm căn bản đến những kiến thức nâng cao.</p>
                <a href="teacher_about.php" class="btn-about">Tìm hiểu thêm</a>
            </div>

            <div class="header_right">
                <div class="header_right_img">
                    <img src="./Photo/teacher_index.jpg" alt=""> 
                </div>
            </div>
        </div>
    </div>

    <!-- Nội dung thêm -->
    <!-- <div class="noidung"> -->

    </div>

    <!-- Footer -->
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