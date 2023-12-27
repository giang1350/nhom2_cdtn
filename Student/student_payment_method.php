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
        <div class="container">
            <div class="ctn_left">
                <p>Phương thức thanh toán</p>
                <hr style="border: 1px solid #ccc; margin: 0 15px;">
                <div class="methods">
                    <div onclick="doFun()" id="tColorA" style="color: #5C4B99;">
                        <i class="fa-solid fa-credit-card" style="color: #5C4B99;"></i>
                        Thẻ ngân hàng
                    </div>
                    <div onclick="doFunA()" id="tColorB">
                        <i class="fa-solid fa-wallet" style="color: #5C4B99;"></i>
                        Ví điện tử
                    </div>
                    <div onclick="doFunB()" id="tColorC">
                        <i class="fa-solid fa-mobile" style="color: #5C4B99;"></i>
                        Chuyển khoản
                    </div>
                </div>
                <hr style="border: 1px solid #ccc; margin: 0 15px;">
            </div>
            <div class="ctn_center">
                <a href="https://www.shift4shop.com/credit-card-logos.html"><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></a>
                <hr style="border: 1px solid #ccc; margin: 0 15px;">

                <div class="card-details">
                    <form>
                        <p>Số thẻ</p>
                        <div class="c-number" id="c-number">
                            <input id="number" class="cc-number" placeholder="1111-2222-3333-4444" maxlength="19" required>
                            <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                        </div>
    
                        <div class="c-details">
                            <div>
                                <p>Hạn thẻ</p>
                                <input id="e-date" class="cc-exp" placeholder="MM/YY" required maxlength="5" required>
                            </div>
                            <div>
                                <p>Mã CVV</p>
                                <div class="cvv-box" id="cvv-box">
                                    <input id="cvv" class="cc-cvv" placeholder="123" required maxlength="3" required>
                                    <i class="fa-solid fa-circle-question" title="Nhập 3 số cuổi ở mặt sau thẻ" style="cursor: pointer;"></i>
                                </div>
                            </div>
                        </div>

                        <div class="email">
                            <p>Email</p>
                            <input type="email" placeholder="example@email.com" id="email" required>
                        </div>

                        <button>THANH TOÁN</button>
                    </form>
                </div>

                <div class="card-details1">
                    <form>
                        <p>Số tài khoản</p>
                        <div class="c-details1" id="c-number">
                            <input id="number" class="cc-number" placeholder="0000000125478563214578" maxlength="24" required>
                            <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                        </div>
    
                        <p style="margin-top: 10px;">Tên tài khoản</p>
                        <div class="c-details1">
                            <input type="text" placeholder="Nhập họ và tên" id="name" required>
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <p style="margin-top: 10px;">Số điện thoại</p>
                        <div class="c-details1">
                            <input type="number" placeholder="Nhập số điện thoại" id="sdt" maxlength="10" required>
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <p style="margin-top: 10px;">Email</p>
                        <div class="c-details1">
                            <input type="email" placeholder="example@email.com" id="email" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <button>THANH TOÁN</button>
                    </form>
                </div>

                <div class="card-details2">
                    <h3 style="text-align: center;">Xin vui lòng chuyển khoản vào thông tin sau:</h3>
                    <p style="margin: 20px; line-height: 2rem;">
                        Số tài khoản: <b>2546875547</b> 
                        <br>
                        Họ và tên: <b>TRUNG TÂM LEARN&CODE</b>
                        <br>
                        Ngân hàng: <b>Ngân hàng BIDV</b>
                    </p>
                    <button>XÁC NHẬN THANH TOÁN</button>
                </div>
            </div>

            <div class="ctn_right">
                <p>Thông tin hóa đơn</p>
                <hr style="border:1px solid #ccc; margin: 0 15px;">
                <div class="details">
                    <div style="font-weight: bold; padding: 3px 0;">Mô tả đặt hàng</div>
                    <div style="padding: 3px 0;">Phương thức thanh toán</div>
                </div>
                <hr style="border:1px solid #ccc; margin: 0 15px;">
                <a href="https://www.shift4shop.com/credit-card-logos.html"><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="auto" /></a>
            </div>
        </div>

        <script>
            let tColorA = document.getElementById('tColorA'),
            tColorB = document.getElementById('tColorB'),
            tColorC = document.getElementById('tColorC'),
            iconA = document.querySelector('.fa-credit-card'),
            iconB = document.querySelector('.fa-wallet'),
            iconC = document.querySelector('.fa-mobile'),
            cDetails = document.querySelector('.card-details');
            cDetails1 = document.querySelector('.card-details1').hidden = true;
            cDetails2 = document.querySelector('.card-details2').hidden = true;


            function doFun(){
            tColorA.style.color = "#5C4B99";
            tColorB.style.color = "#444";
            tColorC.style.color = "#444";
            iconA.style.color = "#5C4B99";
            iconB.style.color = "#aaa";
            iconC.style.color = "#aaa";
            cDetails.style.display = "block";
            cDetails1 = document.querySelector('.card-details1').hidden = true;
            cDetails2 = document.querySelector('.card-details2').hidden = true;
            }

            function doFunA(){
            tColorA.style.color = "#444";
            tColorB.style.color = "#5C4B99";
            tColorC.style.color = "#444";
            iconA.style.color = "#aaa";
            iconB.style.color = "#5C4B99";
            iconC.style.color = "#aaa";
            cDetails.style.display = "none";
            cDetails1 = document.querySelector('.card-details1').hidden = false;
            cDetails2 = document.querySelector('.card-details2').hidden = true;
            }

            function doFunB(){
            tColorA.style.color = "#444";
            tColorB.style.color = "#444";
            tColorC.style.color = "#5C4B99";
            iconA.style.color = "#aaa";
            iconB.style.color = "#aaa";
            iconC.style.color = "#5C4B99";
            cDetails.style.display = "none";
            cDetails1 = document.querySelector('.card-details1').hidden = true;
            cDetails2 = document.querySelector('.card-details2').hidden = false;
            }

            let cNumber = document.getElementById('number');
            cNumber.addEventListener('keyup', function(e){
                let num = cNumber.value;

                let newValue = '';
                num = num.replace(/\s/g, '');
                for(var i = 0; i < num.length; i++) {
                if(i%4 == 0 && i > 0) newValue = newValue.concat(' ');
                newValue = newValue.concat(num[i]);
                cNumber.value = newValue;
            }

            let ccNum = document.getElementById('c-number');
                if(num.length<16){
                    ccNum.style.border="1px solid red";
                }else{
                    ccNum.style.border="1px solid #5C4B99";
                }
            });

            let eDate = document.getElementById('e-date');
            eDate.addEventListener('keyup', function( e ){

                let newInput = eDate.value;

                if(e.which !== 8) {
                    var numChars = e.target.value.length;
                if(numChars == 2){
                    var thisVal = e.target.value;
                    thisVal += '/';
                    e.target.value = thisVal;
                    console.log(thisVal.length)
                }
            }

            if(newInput.length<5){
                eDate.style.border="1px solid red";
            }else{
                eDate.style.border="1px solid #5C4B99";
            }
            });

            let cvv = document.getElementById('cvv');
            cvv.addEventListener('keyup', function(e){

            let elen = cvv.value;
            let cvvBox = document.getElementById('cvv-box');
            if(elen.length<3){
                cvvBox.style.border="1px solid red";
            }else{
                cvvBox.style.border="1px solid #5C4B99";
            }
            })
        </script>
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