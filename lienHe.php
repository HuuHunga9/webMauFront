<?php
include_once('header.php');
?>
<div class="main">
    <div class="lienhe" style="background-color: #f4f4f4;">
        <h1 class="trangphu--heading">ĐẶT LỊCH VÀ LIÊN HỆ</h1>
        <div class="lienhe--container grid wide">
            <!-- style="background-color: #f4f4f4;" -->
            <div class="lienhe--container__row row">
                <div class="lienhe--container__col col l-6 m-12 c-12">
                    <div class="lienhe--container__item">
                        <h5 class="lienhe--item__h5">ĐẶT LỊCH ONLINE:</h5>
                        <p class="lienhe--item__hotline"><span>Hotline:</span>0243.371.7777 – 091.206.1031</p>
                        <p class="lienhe--item__fanpage"><span>Fanpage:</span><a
                                href="">https://www.facebook.com/AlisaDental</a></p>
                        <p class="lienhe--item__diachi"><span>Địa chỉ:</span>Số 33 nguyễn Phong Sắc, Cầu Giấy, Hà Nội
                        </p>
                        <div class="lienhe--item__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9587670222727!2d105.82818671424472!3d20.99428989433164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6267b3b777%3A0x3ba3a6e10d506099!2zMTUgTmfDtSAxNzYgTMOqIFRy4buNbmcgVOG6pW4sIEtoxrDGoW5nIE1haSwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1652264018927!5m2!1svi!2s"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="lienhe--container__col col l-6 m-12 c-12">
                    <div class="lienhe--container__item">
                        <h5 class="lienhe--item__h5 lienhe--item__khachhang margin-top--16px">Thông tin khách hàng</h5>
                        <form action="" class="form--lienhe1" id="form--lienhe1">
                            <div class="lienhe--form__row row">
                                <div class="lienhe--form__col col l-12 m-12 c-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Họ và Tên <span
                                                class="batbuoc">(*)</span></label>
                                        <input type="text" class="form-input" id="fname" placeholder="Họ và Tên">
                                        <span class="form-message"></span>
                                    </div>
                                </div>

                                <div class="lienhe--form__col col l-12 m-12 c-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Số điện thoại <span
                                                class="batbuoc">(*)</span></label>
                                        <input type="text" class="form-input" id="fphone" placeholder="Số điện thoại">
                                        <span class="form-message"></span>
                                    </div>
                                </div>

                                <div class="lienhe--form__col col l-12 m-12 c-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Địa chỉ Email <span
                                                class="batbuoc">(*)</span></label>
                                        <input type="text" class="form-input" id="femail" placeholder="Địa chỉ Email">
                                        <span class="form-message"></span>
                                    </div>
                                </div>

                                <div class="lienhe--form__col col l-12 m-12 c-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Chọn dịch vụ <span
                                                class="batbuoc">(*)</span></label>
                                        <select name="" id="fdichVu" class="form-select">
                                            <option value="">---</option>
                                            <option value="1">Dịch vụ 1</option>
                                        </select>
                                        <span class="form-message"></span>
                                    </div>
                                </div>

                                <div class="lienhe--form__col col l-12 m-12 c-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Chọn ngày thăm khám <span
                                                class="batbuoc">(*)</span></label>
                                        <input type="date" class="form-input" id="lienheNgay">
                                        <span class="form-message"></span>
                                    </div>
                                </div>

                                <div class="lienhe--form__col col l-12 m-12 c-12">
                                    <div class="form-group">
                                        <label for="" class="form-label">Chọn giờ thăm khám <span
                                                class="batbuoc">(*)</span></label>
                                        <input type="text" class="form-input" id="ngayGio"
                                            placeholder="Nhập giờ thăm khám">
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn--submit">Gửi đi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/validate.js"></script>
<script>
validator({
    form: '#form--lienhe1',
    rules: [
        validator.isRequired("#femail", "Email không được để trống!"),
        validator.isEmail("#femail", "Email nhập không chính xác!"),
        validator.isRequired("#fname", "Họ và tên không được để trống!"),
        validator.isRequired("#fphone", "số điện thoại không được để trống!"),
        validator.phone('#fphone', 'Số điện thoại nhập không hợp lệ!'),
        validator.isRequired("#fdichVu", "dịch vụ không được để trống!"),
        validator.isRequired("#lienheNgay", "Ngày thăm khám không được để trống!"),
        validator.isRequired("#ngayGio", "Giờ thăm khám không được để trống!"),
    ]
});
</script>
<?php
include_once('footer.php');
?>