<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/ee7308e344.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin đăng ký | Learn & Code</title>
    <link rel="stylesheet" href="demo_testing.css">
    <script src=""></script>
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

    <div class="noidung1">
        <section class = "container1">
            <header>Thông tin thanh toán</header>
            <form action="#" class="info-form">
                <div class="input-box">
                    <label for="">Họ tên</label>
                    <input type="text" name="name" placeholder="Nhập họ tên" required>
                </div>

                <div class="input-box">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Nhập địa chỉ Email" required>
                </div>

                <div class="column">
                    <div class="input-box">
                        <label for="">Số điện thoại</label>
                        <input type="number" name="phonenumber" placeholder="Nhập số điện thoại" required>
                    </div>

                    <div class="input-box">
                        <label for="">Ngày sinh</label>
                        <input type="date" placeholder="Nhập ngày sinh" required>
                    </div>
                </div>

                <div class="gender-box">
                    <h3>Giới tính</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" checked>
                            <label for="check-male">Nam</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender">
                            <label for="check-female">Nữ</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender">
                            <label for="check-other">Khác</label>
                        </div>
                    </div>
                </div>

                <div class="input-box address">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" placeholder="Nhập địa chỉ" required>
                    <div class="column">
                        <div class="select-box">
                            <select>
                                <option hidden>Thành phố</option>
                                <option>Thành phố Hồ Chí Minh</option>
                                <option>Hà Nội</option>
                                <option>Huế</option>
                                <option>Hải Phòng</option>
                                <option>Đà Nẵng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="location.href='student_payment_method.php'">Xác nhận</button>
            </form>
        </section>
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