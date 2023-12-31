<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Photo/logo-icon.png">
    <title>Chi tiết bài học | Learn & Code</title>
    <link rel="stylesheet" type="text/css" href="main_1.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="thanhdieuhuong">
        <nav>
            <a href="student_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="student_about.php">Về Learn&Code</a></li>
                <li><a href="student_course.php">Khóa học</a></li>
                <li><a href="student_file.php" style="background-color: #fff; color: #9F91CC; padding: 10px; border-radius: 10%;">Lớp học</a></li>
                <li><a href="student_blog.php">Blog</a></li>
                <li><a href="student_message.php">Tin nhắn</a></li>
                <li><a href="student_payment.php">Đăng ký học thử</a></li>
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
        <div class="title_course">
            <h2>SCRATCH</h2>
            <img src="./Photo/scratch_bg.jpg" alt="">
        </div>

        <?php
            include "connect.php";
            $query = mysqli_query($conn, "Select * from tailieu where MaTL =".$_GET['MaTL']);
            $result = mysqli_fetch_assoc($query);
            // var_dump($result);
        ?>

        <div class="file_detail">
            <h1><?php echo $result['TenTL']?></h1>
            <div class="file_detail_content">
                <table class="file_detail_table">
                    <tr>
                        <td><label>Người tạo</label></td>
                        <td><?php echo $result['TenTK']?></td>
                    </tr>
                    <tr>
                        <td><label>Khóa học</label></td>
                        <td><?php echo $result['TenKH']?></td>
                    </tr>
                    <tr>
                        <td><label>Nội dung</label></td>
                        <td><?php echo $result['NoiDung']?></td>
                    </tr>
                    <tr>
                        <td>Tài liệu</td>
                        <td>
                            <a href="student_read.php"><?php echo $result['TenFile']?></a>
                            <!-- <input type="file"> -->
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="pdfviewers" >
            <iframe id="pdfviewer" src="./uploads/TimHieuVeScratch.pdf" style="height: 100%;" type=""></iframe>
        </div>
        <br>
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