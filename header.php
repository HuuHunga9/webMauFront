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
                        <p class="header--li__link header--li__link-gioithieu margin-top--28px margin-top--0px">Gi???i thi???u<i class="fa-solid fa-angle-down"></i></p>
                        <div class="header--suvnav">
                            <ul class="header--suvnav__ul">
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B??c s?? Nguy???n v??n A</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B??c s?? nguy???n v??n B</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">Nha khoa th??ng</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-gioithieu ">
                            <ul class="header--suvnav__mobile-ul">
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B??c s?? Nguy???n v??n A</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B??c s?? nguy???n v??n B</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">Nha khoa th??ng</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="header--ul__li">
                        <a href="dichVu.php" class="header--li__link header--li__link-phu-dichvu">d???ch v???<i
                                class="fa-solid fa-angle-down" id="icon-dichVu"></i></a>
                        <div class="header--suvnav__dchVu">
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">Ni???ng r??ng
                                            ch???nh nha</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Ni???ng r??ng m???c c??i</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Ni???ng r??ng Invisalign</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">R??ng s??? th???m
                                            m???</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">D??n s??? Veneer</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">B???c r??ng s???</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">C???y gh??p r??ng
                                            implant</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Tr???ng r??ng Implant</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Tr???ng r??ng Implant to??n
                                            h??m</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--dichvu__khoi1">
                                <ul class="header--suvnav-dichVu__ul">
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link link-inDam">D???ch v??? b???nh
                                            l??</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">L???y cao r??ng</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">Nh??? r??ng kh??n</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">H??n tr??m r??ng</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">??i???u tr??? t???y</a>
                                    </li>
                                    <li class="header--suvnav-dichVu__ul--li">
                                        <a href="" class="header--suvnav-dichVu__ul--li-link">T???y tr???ng r??ng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-dichvu">
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">Ni???ng r??ng
                                            ch???nh nha</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Ni???ng
                                            r??ng m???c c??i</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Ni???ng
                                            r??ng Invisalign</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">R??ng s??? th???m
                                            m???</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">D??n s???
                                            Veneer</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">B???c r??ng
                                            s???</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">C???y gh??p r??ng
                                            implant</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Tr???ng
                                            r??ng Implant</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Tr???ng
                                            r??ng Implant to??n h??m</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header--mobile-dichvu__khoi1">
                                <ul class="header--suvnav__mobile-ul">
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link link-inDam">D???ch v??? b???nh
                                            l??</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">L???y cao
                                            r??ng</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">Nh??? r??ng
                                            kh??n</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">H??n tr??m
                                            r??ng</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">??i???u tr???
                                            t???y</a>
                                    </li>
                                    <li class="header--suvnav__mobile-ul--li">
                                        <a href="" class="header--suvnav__mobile-ul--li-link margin-left__28px">T???y
                                            tr???ng r??ng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="header--ul__li">
                        <a href="bangGia.php" class="header--li__link header--li__link-phu-banggia">b???ng gi??<i
                                class="fa-solid fa-angle-down" id="icon-bangGia"></i></a>
                        <div class="header--suvnav">
                            <ul class="header--suvnav__ul">
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? ni???ng r??ng 5 Safes</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? ni???ng r??ng Invisalign</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? tr???ng r??ng Implant</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? tr???ng r??ng to??n h??m</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? r??ng s??? th???m m???</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? t???y tr???ng r??ng</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">B???ng gi?? nh??? r??ng kh??n</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-banggia">
                            <ul class="header--suvnav__mobile-ul">

                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? ni???ng r??ng 5
                                        Safes</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? ni???ng r??ng
                                        Invisalign</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? tr???ng r??ng
                                        Implant</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? tr???ng r??ng to??n
                                        h??m</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? r??ng s??? th???m m???</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? t???y tr???ng r??ng</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">B???ng gi?? nh??? r??ng kh??n</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header--ul__li">
                        <a href="" class="header--li__link header--li__link-phu-kienthuc">ki???n th???c<i
                                class="fa-solid fa-angle-down" id="icon-kienThuc"></i></a>
                        <div class="header--suvnav">
                            <ul class="header--suvnav__ul">
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">V??? ni???ng r??ng</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">V??? Implant</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">V??? r??ng s??? th???m m???</a>
                                </li>
                                <li class="header--suvnav__ul--li">
                                    <a href="" class="header--suvnav__ul--li-link">V??? b???nh l??</a>
                                </li>
                            </ul>
                        </div>

                        <div class="header--suvnav__mobile header--suvnav__mobile-kienthuc">
                            <ul class="header--suvnav__mobile-ul">
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">V??? ni???ng r??ng</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">V??? Implant</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">V??? r??ng s??? th???m m???</a>
                                </li>
                                <li class="header--suvnav__mobile-ul--li">
                                    <a href="" class="header--suvnav__mobile-ul--li-link">V??? b???nh l??</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header--ul__li">
                        <a href="lienHe.php" class="header--li__link">?????t l???ch v?? li??n h???</a>
                    </li>
                    <li class="header--ul__li">
                        <a href="tel: 1900102012" class="header--li__link-phone"> <img class="iconPhone"
                                src="https://alisadental.com/wp-content/uploads/2019/09/boxtop-call.png"
                                alt="???nh icon ??i???n tho???i"> 0385821056</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>