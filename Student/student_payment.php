<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán | Learn & Code</title>
    <link rel="stylesheet" href="payment.css">
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="thanhdieuhuong">
        <nav>
        <a href="student_index.php"><img src="./Photo/Learn&CodeLogo_White_Transparent.png" class="logo"></a>
            <ul>
                <li><a href="student_about.php">Về Learn&Code</a></li>
                <li><a href="student_course.php">Khóa học</a></li>
                <li><a href="student_file.php">Lớp học</a></li>
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
        <div class="wrapper">
            <h2>THANH TOÁN KHÓA HỌC</h2>
            <form action="" method="POST">
                <!-- Thông tin Cá nhân -->
                <h4>Thông tin tài khoản</h4>
                <div class="input_group">
                    <div class="input_box">
                        <input type="text" placeholder="Họ và tên" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                    <div class="input_box">
                        <input type="text" placeholder="Chủ tên thẻ" required class="name">
                        <i class="fa fa-user icon"></i>
                    </div>
                </div>
                <div class="input_group">
                    <div class="input_box">
                        <input type="email" placeholder="Địa chỉ Email" required class="name">
                        <i class="fa fa-envelope icon"></i>
                    </div>
                </div>
                <div class="input_group">
                    <div class="input_box">
                        <input type="text" placeholder="Số điện thoại" required class="name">
                        <i class="fa fa-mobile icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_group">
                    <div class="input_box">
                        <input type="text" placeholder="Thành phố" required class="name">
                        <i class="fa fa-institution icon"></i>
                    </div>
                </div>

                <!-- Ngày sinh & Giới tính -->
                <div class="input_group">
                    <div class="input_box">
                        <h4>Ngày sinh</h4>
                        <input type="text" placeholder="DD" required maxlength="2" class="dob">
                        <input type="text" placeholder="MM" required  maxlength="2" class="dob">
                        <input type="text" placeholder="YYYY" maxlength="4" required class="dob">
                    </div>
                    <div class="input_box">
                        <h4>Giới tính</h4>
                        <input type="radio" name="gender" class="radio" id="b1" checked>
                        <label for="b1">Nam</label>

                        <input type="radio" name="gender" class="radio" id="b2">
                        <label for="b2">Nữ</label>

                        <input type="radio" name="gender" class="radio" id="b3">
                        <label for="b3">Khác</label>

                    </div>
                </div>

                <!-- Thông tin thanh toán -->
                <div class="input_group">
                    <div class="input_box">
                        <h4>Thông tin Thanh toán</h4>
                        <input type="radio" name="pay" class="radio" id="bc1" checked>
                        <label for="bc1"><span>
                            <i class="fa-solid fa-credit-card"></i>   Thẻ ngân hàng
                        </span></label>

                        <input type="radio" name="pay" class="radio" id="bc2">
                        <label for="bc2"><span>
                            <i class="fa-solid fa-wallet"></i>   Ví điện tử
                        </span></label>

                        <input type="radio" name="pay" class="radio" id="bc3">
                        <label for="bc3"><span>
                            <i class="fa-solid fa-wallet"></i>   Chuyển khoản
                        </span></label>
                    </div>
                </div>

                <div class="input_group">
                    <div class="input_box">
                        <input type="tel" class="name" placeholder="Số thẻ 1111-2222-3333-4444" required>
                        <i class="fa-solid fa-credit-card icon"></i>
                    </div>
                </div>
                <div class="input_group">
                    <div class="input_box">
                        <input type="tel" class="name" placeholder="Mã CVV 314" required>
                        <i class="fa fa-user icon"></i>
                    </div>
                </div>
                <div class="input_group">
                    <div class="input_box">
                    <div class="input_box">
                        <input type="number" class="name" placeholder="Tháng hết hạn" required>
                        <i class="fa fa-calendar icon"></i>
                    </div>
                </div>
                    <div class="input_box">
                        <input type="number" class="name" placeholder="Năm hết hạn" required>
                        <i class="fa fa-calendar-o icon"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="number" class="name" placeholder="Nhập số tiền" required>
                    <i class="fa fa-money icon"></i>
                </div>
                <div class="input_group">
                    <div class="input_box">
                        <button type="submit">Thanh toán</button>
                    </div>
                </div>
            </form>
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