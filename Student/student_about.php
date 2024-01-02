<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Photo/logo-icon.png">
    <title>Về Learn & Code | Learn & Code</title>
    <link rel="stylesheet" href="main_1.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="thanhdieuhuong">
        <nav>
        <a href="student_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="student_about.php" style="background-color: #fff; color: #9F91CC; padding: 10px; border-radius: 10%;">Về Learn&Code</a></li>
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
            <h1>Những lợi ích có trong Learn & Code</h1>
            <p>Dưới đây là một số những lợi ích mà Learn&Code cung cấp cho các em trong học tập và tìm hiểu</p>
            <p>
                <b>1. Đăng ký khóa học</b><br>
                Learn & Code có nhiều khóa học phù hợp cho trình độ, lứa tuổi, kỹ năng của học sinh. Các em lựa chọn khóa học phù hợp với chính mình và đăng ký tham gia.<br>

                <b>2. Tài liệu mới</b><br>
                Tài liệu hoặc bài tập được đăng lên mới và được cập nhật để các em luôn học những bài học cơ bản và phù hợp với xã hội phát triển.<br>

                <b>3. Bài diễn đàn cho mọi người</b><br>
                Các em có thể đọc những bài diễn đàn (blog) hay, mới mẻ. Được phân chia ra nhiều thể loại khác nhau để lựa chọn. Giúp các em tìm hiểu kỹ những tính năng mới khi học tập và tìm hiểu.<br>

                <b>4. Luôn đồng hành với học sinh</b><br>
                Khi học sinh tham gia lớp học, giáo viên sẽ luôn gửi những bài tập hay, ngoài ra còn có một số buổi học Online để học sinh có thể trò chuyện trực tiếp với giáo viên, giúp hiệu quả học tập tốt hơn.<br>

                <b>3. Theo dõi tiến độ học tập</b><br>
                Xem tiến độ học tập của mình trong lớp, bao gồm những bài tập và dự án.<br>
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