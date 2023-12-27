<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài học | Learn&Code</title>
    <link rel="stylesheet" href="main_1.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "connect.php";?>
    <?php
        $result = $conn -> query("SELECT * FROM tailieu");
    ?>

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

        <div class="lesson_show">
            <!-- <div class="lesson_box">
                <div class="lesson_box_img">
                    <img src="./Photo/purple_tech_bg.jpg" alt="">
                </div>
                
                <div class="lesson_box_content">
                    <label><h2>Bài 1</h2></label>
                    <p style="margin: 20px 0; padding-right: 20px;">Đây là một tài liệu giúp các em có thể làm quen với Scratch</p> 
                </div>
                
                <div class="lesson_box_btn">
                    <button onclick="location.href = 'student_file_detail.php';">Xem chi tiết</button>
                </div>
            </div>

            <div class="lesson_box">
                <div class="lesson_box_img">
                    <img src="./Photo/purple_tech_bg.jpg" alt="">
                </div>
                
                <div class="lesson_box_content">
                    <label><h2>Bài 2</h2></label>
                    <p style="margin: 20px 0; padding-right: 20px;">Đây là một tài liệu giúp các em có thể làm quen với Scratch</p> 
                </div>
                
                <div class="lesson_box_btn">
                    <button onclick="location.href = 'student_file_detail.php';">Xem chi tiết</button>
                </div>
            </div>

            <div class="lesson_box">
                <div class="lesson_box_img">
                    <img src="./Photo/purple_tech_bg.jpg" alt="">
                </div>
                
                <div class="lesson_box_content">
                    <label><h2>Bài 3</h2></label>
                    <p style="margin: 20px 0; padding-right: 20px;">Đây là một tài liệu giúp các em có thể làm quen với Scratch</p> 
                </div>
                
                <div class="lesson_box_btn">
                    <button onclick="location.href = 'student_file_detail.php';">Xem chi tiết</button>
                </div>
            </div> -->

            <?php while ($row = mysqli_fetch_assoc($result)):?>
            <div class="lesson_box">
                
                <div class="lesson_box_img">
                    <img src="./Photo/purple_tech_bg.jpg" alt="">
                </div>
                
                <div class="lesson_box_content">
                    <label><h2><?php echo $row['TenTL']?></h2></label>
                    <p style="margin: 20px 0; padding-right: 20px;"><?php echo $row['NoiDung']?></p> 
                </div>
                
                <div class="lesson_box_btn">
                    <button onclick="location.href = 'student_class.php?MaTL=<?php echo $row['MaTL'] ?>';">Xem chi tiết</button>
                    
                </div>
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