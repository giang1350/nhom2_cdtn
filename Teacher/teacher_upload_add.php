<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng tài liệu - Giáo viên</title>
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
        $Error5 = "";

        //Điều kiện
        if(isset($_POST['add'])){

            if (empty($_POST['TenTL'])) {
                $Error1 = "Xin vui lòng nhập tiêu đề";
            }
            else{
                $TenTL = $_POST['TenTL'];
            }

            if (empty($_POST['TenTK'])) {
                $Error2 = "Xin vui lòng nhập tên người tạo";
            }
            else{
                $TenTK = $_POST['TenTK'];
            }

            if (empty($_POST['TenKH'])) {
                $Error3 = "Xin vui lòng nhập tên khóa học";
            }
            else{
                $TenKH = $_POST['TenKH'];
            }

            if (empty($_POST['NoiDung'])) {
                $Error4 = "Xin vui lòng nhập nội dung";
            }
            else {
                $NoiDung = $_POST['NoiDung'];
            }


            if (empty($_POST['TenFile'])) {
                $Error5 = "Xin vui lòng thêm tài liệu";
            }
            else{
                $TenFile = $_POST['TenFile'];
            }

            if (!empty($_POST['TenTL']) && !empty($_POST['TenTK']) && !empty($_POST['TenKH']) && !empty($_POST['TenFile'])) {
                if ($conn -> query("INSERT INTO tailieu (TenTL, TenTK, TenKH, NoiDung, TenFile) 
                VALUES (N'$TenTL', N'$TenTK', N'$TenKH', N'$NoiDung', N'$TenFile')")) {
                echo "<script>
                        alert('Đã lưu thành công!');
                        window.location.href='teacher_file.php';
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

        //Đăng tài liệu
        // $folder_path = 'Photo/';
        // $file_path = $folder_path.$_FILES['TenFile']['name'];

        // $flag_ok = true;

        // $ex = array('jpg', 'png', 'jpeg');
        // $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        // if (in_array($file_type, $ex)) {
        //     $flag_ok = false;
        // }

        // if ($FILES) {
        // }
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
            <h2>TẠO MỘT TÀI LIỆU</h2>
            <div class="form_content">
                <form id="upload_form1" method="post">
                    <table class="lesson-table">
                        <!-- Tiêu đề -->
                        <tr>
                            <td><label>Tiêu đề</label></td>
                            <td>
                                <input type="text" id="title" name="TenTL" placeholder="Nhập tiêu đề" value= "<?php if (isset($TenTL)) echo $TenTL;?>">
                                <?php if (isset($Error1)) echo "<span class='error'>$Error1</span>"
                                ?>
                            </td>
                        </tr>

                        <!-- Tên người tạo -->
                        <tr>
                            <td><label>Tên người tạo</label></td>
                            <td>
                                <input type="text" id="name_uploader" name="TenTK" placeholder="Nhập họ tên người đăng" value= "<?php if (isset($TenTK)) echo $TenTK;?>">
                                <?php echo "<span class='error'>$Error2</span>"?>
                            </td>
                        </tr>

                        <!-- Tên khóa học -->
                        <tr>
                            <td><label>Khóa học</label></td>
                            <td>
                                <input type="text" id="course_name" name="TenKH" placeholder="Nhập khóa học" value= "<?php if (isset($TenKH)) echo $TenKH;?>">
                                <?php echo "<span class='error'>$Error3</span>"?>
                            </td>
                        </tr>

                        <!-- Nội dung -->
                        <tr>
                            <td><label>Nội dung</label></td>
                            <td>
                                <textarea name="NoiDung" id="detail" cols="30" rows="10" value= "<?php if (isset($NoiDung)) echo $NoiDung;?>"></textarea>
                                <?php echo "<span class='error'>$Error4</span>"?>
                            </td>
                        </tr>

                        <!-- Tải tài liệu -->
                        <tr>
                            <td><label>Tài liệu</label></td>
                            <td id="upload">
                                <input type="file" id="upload_file" name="TenFile" placeholder="" value= "<?php if (isset($TenFile)) echo $TenFile;?>">
                                <?php echo "<span class='error'>$Error5</span>"?>
                            </td>
                        </tr>
                    </table>

                    <!-- Nút xác nhận -->
                    <button name="add" class="abc" onclick="">Lưu tài liệu</button>
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