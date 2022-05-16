document.querySelector('.header--menu').addEventListener('click', function() {
    document.querySelector('.header--div__navbar').classList.toggle('bienmat');
    document.querySelector('.header--navbar__ul').classList.toggle('hienthi');
})

document.querySelector('.header--div__navbar').addEventListener('click', function() {
    document.querySelector('.header--navbar__ul').classList.remove('hienthi');
    document.querySelector('.header--div__navbar').classList.remove('bienmat');
})
document.querySelector('.header--close').addEventListener('click', function() {
    document.querySelector('.header--navbar__ul').classList.remove('hienthi');
    document.querySelector('.header--div__navbar').classList.remove('bienmat');
})

document.querySelector('.header--close--man400').addEventListener('click', function() {
    document.querySelector('.header--navbar__ul').classList.remove('hienthi');
    document.querySelector('.header--div__navbar').classList.remove('bienmat');
})
document.querySelector('.header--navbar__ul').addEventListener('click', function(e) {
    e.stopPropagation();
})

document.querySelector('.btn-dangky').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-gioithieu').classList.toggle('display-block');
    document.querySelector('.header--suvnav__mobile-dichvu').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-banggia').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-kienthuc').classList.remove('display-block');
})

document.querySelector('.header--li__link-phu-dichvu').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-dichvu').classList.toggle('display-block');
    document.querySelector('.header--suvnav__mobile-banggia').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-kienthuc').classList.remove('display-block');
})

document.querySelector('.header--li__link-phu-banggia').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-banggia').classList.toggle('display-block');
    document.querySelector('.header--suvnav__mobile-dichvu').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-kienthuc').classList.remove('display-block');
})

document.querySelector('.header--li__link-phu-kienthuc').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-kienthuc').classList.toggle('display-block');
    document.querySelector('.header--suvnav__mobile-dichvu').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-banggia').classList.remove('display-block');
})

// window.addEventListener('scroll', function() {
//     var heightTop = document.querySelector('.header--div__top').offsetHeight;

//     var x = pageYOffset;
//     if (x > heightTop) {
//         document.querySelector('.header').classList.add('position');
//     } else {
//         document.querySelector('.header').classList.remove('position');
//     }
// });

document.querySelector('.btn-dangky').addEventListener('click', function() {
    document.querySelector('.modal--dangky').classList.add('display');
})
document.querySelector('.modal-close').addEventListener('click', function() {
    document.querySelector('.modal--dangky').classList.remove('display');
})

document.querySelector('.modal-close--400').addEventListener('click', function() {
    document.querySelector('.modal--dangky').classList.remove('display');
})
document.querySelector('.modal--dangky').addEventListener('click', function() {
    document.querySelector('.modal--dangky').classList.remove('display');
})

document.querySelector('.modal--dangky__container').addEventListener('click', function(e) {
    e.stopPropagation();
})

document.querySelector('#icon-dichVu').addEventListener('click', function(e) {
    e.preventDefault();

})
document.querySelector('#icon-dichVu').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-banggia').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-kienthuc').classList.remove('display-block');
})
document.querySelector('#icon-bangGia').addEventListener('click', function(e) {
    e.preventDefault();
})
document.querySelector('#icon-bangGia').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-dichvu').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-kienthuc').classList.remove('display-block');
})
document.querySelector('#icon-kienThuc').addEventListener('click', function(e) {
    e.preventDefault();
})

document.querySelector('#icon-kienThuc').addEventListener('click', function() {
    document.querySelector('.header--suvnav__mobile-dichvu').classList.remove('display-block');
    document.querySelector('.header--suvnav__mobile-banggia').classList.remove('display-block');
})