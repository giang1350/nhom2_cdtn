<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng tài liệu - Giáo viên</title>
    <link rel="icon" href="./Photo/user_images.png">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .error{
            color: red;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <?php include "connect.php";?>
    <?php
        //Gắn thông báo lỗi
        $Error1 = "";
        $Error2 = "";
        $Error3 = "";
        $Error4 = "";

        //Điều kiện
        if(isset($_POST['add'])){

            if (empty($_POST['TenKH'])) {
                $Error1 = "Xin vui lòng nhập tên khóa học";
            }
            else{
                $TenKH = $_POST['TenKH'];
            }

            if (empty($_POST['DoTuoi'])) {
                $Error2 = "Xin vui lòng nhập độ tuổi";
            }
            else{
                $DoTuoi = $_POST['DoTuoi'];
            }

            if (empty($_POST['Gia'])) {
                $Error3 = "Xin vui lòng nhập giá";
            }
            else{
                $Gia = $_POST['Gia'];
            }

            if (empty($_POST['SoBaiGiang'])) {
                $Error4 = "Xin vui lòng nhập số bài giảng";
            }
            else {
                $SoBaiGiang = $_POST['SoBaiGiang'];
            }

            if (!empty($_POST['TenKH']) && !empty($_POST['DoTuoi']) && !empty($_POST['Gia']) && !empty($_POST['SoBaiGiang'])) {
                if ($conn -> query("INSERT INTO learnandcode.khoahoc (TenKH, DoTuoi, Gia, SoBaiGiang) 
                VALUES (N'$TenKH', N'$DoTuoi', N'$Gia', N'$SoBaiGiang')")) {
                echo "<script>
                        alert('Đã lưu thành công!');
                        window.location.href='teacher_course.php';
                    </script>";
                }
                else {
                    echo "<script>
                        alert('Không thể lưu được!')
                    </script>";
                }
            }
        }
        $conn-> close();
    ?>
    <div class="thanhdieuhuong">
        <nav>
            <a href="teacher_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="teacher_about.php">Về Learn&Code</a></li>
                <li><a href="teacher_course.php" style="background-color: #fff; color: #9F91CC; padding: 10px; border-radius: 10%;">Khóa học</a></li>
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
                        <i class="fa-solid fa-user-pen" style="color: #5c4b99;"></i>
                        <p>Chỉnh sửa thông tin</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="fa-solid fa-gear" style="color: #5c4b99;"></i>
                        <p>Cài đặt</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="fa-solid fa-circle-info" style="color: #5c4b99;"></i>
                        <p>Trợ giúp</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <i class="fa-solid fa-right-from-bracket" style="color: #5c4b99;"></i>
                        <p>Đăng xuất</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="noidung">
        <div class="upload_form">
            <h2>TẠO KHÓA HỌC</h2>
            <div class="form_content">
                <form id="upload_form1" method="post">
                    <table class="lesson-table">
                        <!-- Tên khóa học -->
                        <tr>
                            <td><label>Tên khóa học</label></td>
                            <td>
                                <input type="text" id="course_name" name="TenKH" placeholder="Nhập tên khóa học" value= "<?php if (isset($TenKH)) echo $TenKH;?>">
                                <?php if (isset($Error1)) echo "<span class='error'>$Error1</span>"
                                ?>
                            </td>
                        </tr>

                        <!-- Tên người tạo -->
                        <tr>
                            <td><label>Độ tuổi</label></td>
                            <td>
                                <input type="text" id="course_age" name="DoTuoi" placeholder="Nhập độ tuổi" value= "<?php if (isset($DoTuoi)) echo $DoTuoi;?>">
                                <?php echo "<span class='error'>$Error2</span>"?>
                            </td>
                        </tr>

                        <!-- Tên khóa học -->
                        <tr>
                            <td><label>Giá</label></td>
                            <td>
                                <input type="text" id="course_price" name="Gia" placeholder="Nhập giá" value= "<?php if (isset($Gia)) echo $Gia;?>">
                                <?php echo "<span class='error'>$Error3</span>"?>
                            </td>
                        </tr>

                        <!-- Nội dung -->
                        <tr>
                            <td><label>Số bài giảng</label></td>
                            <td>
                                <input type="text" id="course_lesson" name="SoBaiGiang" placeholder="Nhập số bài giảng" value= "<?php if (isset($SoBaiGiang)) echo $SoBaiGiang;?>">
                                <?php echo "<span class='error'>$Error4</span>"?>
                            </td>
                        </tr>
                    </table>

                    <!-- Nút xác nhận -->
                    <button name="add" class="abc1" onclick="">Lưu khóa học</button>
                </form>
            </div>
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
        // Kéo thanh cá nhân
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>