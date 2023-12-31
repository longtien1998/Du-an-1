<div class="tong1">
    <div class="trangchu1">
        <h5><a href="/index.php?action=home">Trang Chủ |</a></h5>
        <!-- <h5><a href="room.html">Phòng |</a></h5> -->
        <span>Tìm Phòng</span>
    </div>
</div>
<section class="se2">
    <div class="timkiem">
        <div class="a2">
            <h2>Tìm Phòng</h2>
        </div>
    </div>
</section>
<section class="order-1 container-fluid p-0">
    <div class="sahow border col-lg-8 border-warning  py-4  m-auto bg-light">
        <form action="" class="row justify-content-around" method="POST">
            <div class="form-group col-lg">
                <label for="" class="col-form-label">Ngày Đến:</label>
                <input id="" name="ngayDen" type="date" class="form-control" required value="<?= $date; ?>" />
                <span class="form-message"></span>
            </div>
            <div class="form-group col-lg">
                <label for="" class="col-form-label">Ngày Đi:</label>
                <input id="" name="ngayDi" type="date" class="form-control" required />
                <span class="form-message"></span>
            </div>
            <div class="form-group col-lg">
                <label for="" class="col-form-label">Người Lớn:</label>
                <input id="" name="nguoiLon" type="number" min="1" max="10" class="form-control" value="1" required />
                <span class="form-message"></span>
            </div>
            <div class="form-group col-lg">
                <label for="" class="col-form-label">Loại Phòng</label>
                <select id="" name="loaiPhong" type="text" class="form-control" placeholder="0" required>
                    <option value="">Chọn loại phòng</option>
                    <option value="phongDon">Phòng đơn</option>
                    <option value="phongDoi">Phòng đôi</option>
                    <option value="phongGiaDinh">Phòng gia đình</option>
                    <option value="phongVip">Phòng VIP</option>
                </select>
                <span class="form-message"></span>
            </div>
            <div class="align-self-center text-center col-lg">
                <!-- <input id="" name="" type="submit" class="form-control text-dark border-warning bg-transparent text-uppercase" value="Kiểm tra" required /> -->
                <input type="submit" name="timngay" value="TÌM NGAY" class="custom-buy15 buy-15">
                <span class="form-message"></span>
            </div>
        </form>
    </div>
</section>
<section class="stc1 row col-lg-12 py-5 m-0 pt-lg-5">
    <div class="don1 col-lg-6 p-1">
        <!-- <div class="slide"> -->
        <img src="../content/images/room1-big.jpeg" width="100%" height="100%" alt="">
        <!-- </div> -->
    </div>
    <div class="noidungg col-lg-6 p-1 pl-lg-5 ">
        <div class="noidung-1">
            <h4>Phòng Đơn</h4>
        </div>
        <div class="noidung-2">
            <p>Hãy tận hưởng những căn hộ sang trọng của chúng tôi với toàn bộ sự tinh tế và sự thoải mái mà nội
                thất của nó mang lại... <br>
                Nó đi kèm với những tiện ích cần thiết như một TV màn hình phẳng 45", WiFi
                và 1 phòng tắm, cùng với một phòng khách
            </p>
        </div>
        <div class="tien4">
            <p>
                <span class="vnd4">VND</span>
                <span class="so4">699.000</span>
                /1 đêm
            </p>
        </div>
        <div class="danhsach4">
            <ul>
                <li>Người lớn: 1</li>
                <li>Tiện nghi: <span style="color: goldenrod;">Bồn tắm và vòi sen đồng hồ cùng máy sấy tóc đi kèm.
                        Bảo mật cá nhân được đảm bảo với Wi-Fi tốc độ cao miễn phí và kết nối internet cáp.
                        Giải trí với truyền hình màn hình phẳng HD.</span></li>
                <li>Kích cỡ: 25m<span class="num">2</span></li>
                <li>Loại giường: 1 Giường đơn</li>
                <li>Loại: Đơn</li>
            </ul>
        </div>
        <div class="hop5">
            <button class="custom-buy6 buy-6"><span><a style="text-decoration: none; " href="index.php?action=view1">ĐẶT NGAY</a></span></button>
        </div>
    </div>
</section>
<hr style="border: 1px solid gray;">
<section class="stc2 row col-lg-12 py-5 m-0">
    <div class="doi2 col-lg-6 p-1">
        <!-- <div class="slide1"> -->
        <img src="../content/images/phongdoi1-big.png" height="100%" width="100%" alt="">
        <!-- </div> -->
    </div>
    <div class="noidung-3 col-lg-6 p-1 pl-lg-5">
        <div class="noidung-4">
            <h4>Phòng Đôi</h4>
        </div>
        <div class="noidung-5">
            <p>Đây là phòng đôi tuyệt vời, được nâng cấp với 2 giường cỡ king, </p>
            <p>một TV màn hình phẳng và một không gian rộng lớn, đủ cho một đôi...</p>
        </div>
        <div class="tien5">
            <p>
                <span class="vnd5">VND</span>
                <span class="so5">869.000</span>
                /1 đêm
            </p>
        </div>
        <div class="danhsach5">
            <ul>
                <li>Người lớn: 3</li>
                <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số, TV màn hình
                        phẳng HD, Điện thoại.</span></li>
                <li>Kích cỡ: 28m<span class="num">2</span></li>
                <li>Loại giường: 1 giường</li>
                <li>Loại: Đôi ,Đơn</li>
            </ul>
        </div>
        <div class="hop6">
            <button class="custom-buy7 buy-7"><span><a style="text-decoration: none; " href="index.php?action=view2">ĐẶT NGAY</a></span></button>
        </div>
    </div>
</section>
<hr style="border: 1px solid gray;">
<section class="stc3 row col-lg-12 py-5 m-0">
    <div class="giadinh1 col-lg-6 p-1">
        <!-- <div class="slide1"> -->
        <img src="../content/images/phonggiadinh1-big.jpg" width="100%" height="100%" alt="">
        <!-- </div> -->
    </div>
    <div class="noidung-6 col-lg-6 p-1 pl-lg-5">
        <div class="noidung-7">
            <h4>Phòng Gia Đình</h4>
        </div>
        <div class="noidung-8">
            <p>Hãy tận hưởng sự sang trọng và thoải mái trong các căn hộ cổ điển của chúng tôi...</p>
            <p>Chúng tích hợp những tiện ích quan trọng như TV màn hình phẳng 45",</p>
            <p>kết nối Wi-Fi và 2 phòng tắm với một phòng khách và 2 phòng ngủ, đủ lớn và lịch lãm để coi như là
                những phòng ngủ của một căn hộ</p>
        </div>
        <div class="tien6">
            <p>
                <span class="vnd6">VND</span>
                <span class="so6">1.299.000</span>
                /1 đêm
            </p>
        </div>
        <div class="danhsach6">
            <ul>
                <li>Người lớn: 2</li>
                <li>Tiện nghi: <span style="color: goldenrod;">Tủ quần áo với móc treo, Két cá nhân số hóa, Wi-Fi
                        tốc độ cao miễn phí và kết nối internet cáp.</span></li>
                <li>Kích cỡ: 30m<span class="num">2</span></li>
                <li>Loại giường: 1 giường </li>
                <li>Loại: Đôi</li>
            </ul>
        </div>
        <div class="hop7">
            <button class="custom-buy8 buy-8"><span><a style="text-decoration: none; " href="index.php?action=view3">ĐẶT NGAY</a></span></button>
        </div>
    </div>
</section>
<hr style="border: 1px solid gray;">
<section class="showlist d-flex justify-content-center">
    <div class="s1">
        <span><a href="#">01</a></span>
        <span><a href="#">02</a></span>
        <span><a href="#">03</a></span>
        <span><a href="#">04</a></span>
        <span><a href="#">05</a></span>
        <span><a href="#">06</a></span>
        <span><a href="#">07</a></span>
        <span><a href="#">...</a></span>
        <span><a href="#">22</a></span>
        <span><a href="#">Next ></a></span>
    </div>
</section>