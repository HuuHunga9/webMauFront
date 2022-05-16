<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web01</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <header class="header">
        <div class="header--div__top">
            <p class="header--top__hotline">
                Hotline: (+84)24.3371.7777
            </p>
            <div class="header--top__icons">
                <a title="Follow On Facebook" href="" class="header--icons__logo"><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a title="Follow On Instagram" href="" class="header--icons__logo"><i
                        class="fa-brands fa-instagram"></i></a>
                <a title="Send us an email" href="" class="header--icons__logo"><i class="fa-solid fa-envelope"></i></a>
                <a title="Follow On Youtobe" href="" class="header--icons__logo"><i
                        class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="header--div">
            <p class="header--menu"><i class="fa-solid fa-bars"></i></p>
            <a href="index.php" class="header--div__logo"><img
                    src="https://alisadental.com/wp-content/uploads/2019/07/Alisalogo-trang.png" alt="logo"
                    class="header--logo__img"></a>
            <div class="header--div__navbar">
                <p class="header--close"><i class="fa-solid fa-xmark"></i></p>
                <ul class="header--navbar__ul">
                    <div class="header--navbar__ul-div">
                        <a href="index.php" class="header--div__logo-mobile-man400"><img
                                src="https://alisadental.com/wp-content/uploads/2019/07/Alisalogo-trang.png" alt="logo"
                                class="header--logo__img"></a>
                        <p class="header--close--man400"><i class="fa-solid fa-xmark"></i></p>
                    </div>
                    <!-- <li class="header--ul__li">
                        <p class="header--li__link header--li__link-gioithieu margin-top--28px margin-top--0px">Giới thiệu<i class="fa-solid fa-angle-down"></i></p>
                        <div class="header--suvnav">
                            <ul class="header--suvnav__ul">
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bác sĩ Nguyễn văn A</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bác sĩ nguyễn văn B</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Nha khoa thăng</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-gioithieu ">
                            <ul class="header--suvnav__mobile-ul">
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bác sĩ Nguyễn văn A</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bác sĩ nguyễn văn B</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Nha khoa thăng</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="header--ul__li">
                        <a href="dichVu.php" class="header--li__link header--li__link-phu-dichvu">dịch vụ<i
                                class="fa-solid fa-angle-down" id="icon-dichVu"></i></a>
                        <div class="header--suvnav__dchVu">
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">Niềng răng
                                            chỉnh nha</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Niềng răng mắc cài</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Niềng răng Invisalign</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">Răng sứ thẩm
                                            mỹ</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Dán sứ Veneer</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Bọc răng sứ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">Cấy ghép răng
                                            implant</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Trồng răng Implant</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Trồng răng Implant toàn
                                            hàm</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">Dịch vụ bệnh
                                            lý</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Lấy cao răng</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Nhổ răng khôn</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Hàn trám răng</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Điều trị tủy</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Tẩy trắng răng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-dichvu">
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">Niềng răng
                                            chỉnh nha</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Niềng
                                            răng mắc cài</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Niềng
                                            răng Invisalign</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">Răng sứ thẩm
                                            mỹ</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Dán sứ
                                            Veneer</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Bọc răng
                                            sứ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">Cấy ghép răng
                                            implant</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Trồng
                                            răng Implant</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Trồng
                                            răng Implant toàn hàm</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">Dịch vụ bệnh
                                            lý</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Lấy cao
                                            răng</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Nhổ răng
                                            khôn</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Hàn trám
                                            răng</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Điều trị
                                            tủy</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Tẩy
                                            trắng răng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="header--ul__li">
                        <a href="bangGia.php" class="header--li__link header--li__link-phu-banggia">bảng giá<i
                                class="fa-solid fa-angle-down" id="icon-bangGia"></i></a>
                        <div class="header--suvnav">
                            <ul class="header--suvnav__ul">
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá niềng răng 5 Safes</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá niềng răng Invisalign</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá trồng răng Implant</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá trồng răng toàn hàm</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá răng sứ thẩm mỹ</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá tẩy trắng răng</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Bảng giá nhổ răng khôn</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-banggia">
                            <ul class="header--suvnav__mobile-ul">

                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá niềng răng 5
                                        Safes</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá niềng răng
                                        Invisalign</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá trồng răng
                                        Implant</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá trồng răng toàn
                                        hàm</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá răng sứ thẩm mỹ</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá tẩy trắng răng</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Bảng giá nhổ răng khôn</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header--ul__li">
                        <a href="" class="header--li__link header--li__link-phu-kienthuc">kiến thức<i
                                class="fa-solid fa-angle-down" id="icon-kienThuc"></i></a>
                        <div class="header--suvnav">
                            <ul class="header--suvnav__ul">
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Về niềng răng</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Về Implant</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Về răng sứ thẩm mỹ</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Về bệnh lý</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-kienthuc">
                            <ul class="header--suvnav__mobile-ul">
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Về niềng răng</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Về Implant</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Về răng sứ thẩm mỹ</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Về bệnh lý</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header--ul__li">
                        <a href="lienHe.php" class="header--li__link">đặt lịch và liên hệ</a>
                    </li>
                    <li class="header--ul__li">
                        <a href="tel: 1900102012" class="header--li__link-phone"> <img class="iconPhone"
                                src="https://alisadental.com/wp-content/uploads/2019/09/boxtop-call.png"
                                alt="Ảnh icon điện thoại"> 0385821056</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>