<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Về Learn & Code - Giáo viên</title>
    <link rel="stylesheet" href="main1.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="thanhdieuhuong">
        <nav>
            <a href="teacher_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="teacher_about.php" style="background-color: #fff; color: #9F91CC; padding: 10px; border-radius: 10%;">Về Learn&Code</a></li>
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
                <h1>Chào mừng đến trang Learn&Code</h1>
                <h2>Lập trình Online dành cho trẻ em từ 12-18 tuổi</h2>
                <p>Tại Learn&Code, các khoá học được xây dựng bằng phương pháp giảng dạy hiện đại, phù hợp với mọi độ tuổi. Đưa học sinh đến với thế giới muôn màu của những câu lệnh, nơi các bạn có thể tạo ra sản phẩm công nghệ của riêng mình.</p>
            </div>

            <div class="header_right">
                <div class="header_right_img">
                    <img src="./Photo/student_index.jpg" alt=""> 
                </div>
            </div>
        </div>
    </div>

    <div class="about_index">
        <div class="aboutContainer">
            <h1>Vì sao chọn chúng tôi?</h1>
            <p>Chào mừng bạn đến với Learn&Code, nơi mang đến một trải nghiệm học lập trình tuyệt vời cho trẻ em! 
                Chúng tôi cam kết đưa ra một phương pháp giáo dục sáng tạo và thú vị, giúp trẻ có thể phát triển kỹ năng lập trình.</p>
            <p>
                <b>1. Đội ngũ giáo viên chuyên nghiệp:</b><br>
                Chúng tôi có đội ngũ giáo viên có kinh nghiệm trong giảng dạy lập trình cho trẻ em. Họ không chỉ là những người tài giỏi về mã nguồn mà còn có khả năng truyền đạt kiến thức một cách dễ hiểu và thú vị. <br>

                <b>2. Tài liệu đầy đủ:</b><br>
                Learn&Code cung cấp nhiều khóa học lập trình khác nhau, từ cơ bản đến nâng cao. Điều này giúp phụ huynh và học sinh lựa chọn khóa học phù hợp với trình độ và mong muốn của mình. <br>

                <b>3. Hỗ trợ cá nhân hóa:</b><br>
                Chúng tôi hiểu rằng mỗi đứa trẻ có cách học riêng biệt. Hệ thống của chúng tôi giúp theo dõi tiến độ của học sinh và tùy chỉnh nội dung học tập để phản ánh nhu cầu cụ thể của từng em. <br>
            </p>
        </div>

        <div class="aboutContainer1">
            <h1>Những tính năng trong trang Giáo viên</h1>
            <p>Dưới đây là một số những tính năng mà Learn&Code cung cấp cho giáo viên trong việc dạy học và tạo những bài giảng</p>
            <p>
                <b>1. Tạo khóa học</b><br>
                Giáo viên có thể những khóa học bổ ích cho các học sinh. Mỗi bài học gồm có nhiều bài giảng nhỏ để học sinh có thể học dần những kiến thức mới.<br>

                <b>2. Cung cấp tài liệu</b><br>
                Đăng những tài liệu hoặc bài tập để học sinh có thể theo dõi. Có thể đăng những định dạng tài liệu khác nhau.<br>

                <b>3. Theo dõi tiến độ học tập</b><br>
                Xem tiến độ học tập của từng học sinh trong lớp, bao gồm những bài tập và dự án.<br>
            </p>
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