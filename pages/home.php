<div class="slider col-lg-12">
  <div class="d-flex flex-column align-items-center justify-content-center h-100 text-light">
    <div class="s">
      <ul class="row list-unstyled">
        <li class="m-lg-4">
          <i class="fa-solid fa-star"></i>
        </li>
        <li class="m-lg-4">
          <i class="fa-solid fa-star"></i>
        </li>
        <li class="m-lg-4">
          <i class="fa-solid fa-star"></i>
        </li>
        <li class="m-lg-4">
          <i class="fa-solid fa-star"></i>
        </li>
      </ul>
    </div>
    <span class="text-uppercase text-center lead m-3">Tận hưởng với chúng tôi</span>
    <h1 class="name m-3 text-center font-weight-bold ">Cảnh quan tuyệt đẹp</h1>
    <p class="comment my-3">
      Mỗi phòng tại khách sạn của chúng tôi không chỉ mang lại sự thoải mái cao
      mà còn có tầm nhìn tuyệt vời ra khung cảnh biển.
    </p>
  </div>
</div>
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
<section class="box1 container-fluid col pt-5">
  <div class="row p-3 py-5">
    <div class="col-lg-6 p-5 py-5">
      <P>Chào mừng tới</P>
      <H1 class="my-4">Boncha Best - Hotel!</H1>
      <p class="my-5">
        Khách sạn Boncha tọa lạc ngay trung tâm Thành phố Đà Nẵng là một nơi
        nghỉ dưỡng chào đón cả những người đi du lịch khắp đất nước và cho các
        doanh nhân đến thăm Thành phố Đà Nẵng của chúng tôi để thực hiện một số
        công việc thương mại. Tại đây, chúng tôi luôn đảm bảo rằng bạn sẽ có bất
        kỳ nhu cầu nào của bạn hài lòng, dù đó là một phòng khách sạn tiện nghi
        có tín hiệu WiFi mạnh và dịch vụ phòng chu đáo, khu vực ăn uống và tiếp
        khách hoặc bất kỳ dịch vụ bổ sung nào những tiện nghi mà du khách có thể
        muốn...
      </p>
      <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=gioithieu"><span class="dat">Xem thêm...</span></a></span></button>
    </div>
    <div class="col-lg-6 text-center py-lg-5">
      <img src="../content/images/view.jpg" alt="" width="700" height="500" class="border-1" />
    </div>
  </div>
</section>
<section class="box2 container-fluid col">
  <div class="py-lg-5 m-lg-5">
    <div class="text-center ">
      <h1 class="m-4">Phòng & Căn hộ</h1>
      <p class=" p-5 text-black-50">
        Khách sạn Hiện đại có 20 phòng cổ điển có máy lạnh và nội thất trang
        nhã, sẽ là lựa chọn hoàn hảo cho cả khách doanh nhân lẫn khách du
        lịch...
      </p>
    </div>
    <div class="row justify-content-around">
      <div class="col-lg-4 mb-5">
        <div class="image">
          <img src="../content/images/suite1.jpg" alt="" width="100%" class="border-2" />
        </div>
        <div class="text-center">
          <h1 class="m-4">Phòng VIP</h1>
          <p>
            <span class="namephong">699.000 </span><sup>VND</sup>/mỗi đêm
          </p>
        </div>
        <div>
          <ul class="text-black-50">
            <li>Chỉ còn 5 phòng</li>
            <li>Bao gồm bữa sáng</li>
            <li>Giá chưa bao gồm VAT & phí dịch vụ</li>
          </ul>
        </div>
        <div class="text-center mt-5">
          <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=view4"><span class="dat">ĐẶT NGAY</span></a></span></button>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="image">
          <img src="../content/images/doubleroom_.jpg" alt="" width="100%" class="border-2" />
        </div>
        <div class="text-center">
          <h1 class="m-4">Phòng đơn</h1>
          <p>
            <span class="namephong">269.000 </span><sup>VND</sup>/mỗi đêm
          </p>
        </div>
        <div>
          <ul class="text-black-50">
            <li>Hoàn hảo cho các cặp đôi đi du lịch</li>
            <li>Không bao gồm bữa sáng</li>
            <li>Dịch vụ hướng dẫn khách</li>
          </ul>
        </div>
        <div class="text-center mt-5">
          <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=view1"><span class="dat">ĐẶT NGAY</span></a></span></button>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="image">
          <img src="../content/images/family-room-design.jpg" alt="" width="100%" class="border-2" />
        </div>
        <div class="text-center">
          <h1 class="m-4">Phòng gia đình</h1>
          <p>
            <span class="namephong ">1.299.000 </span><sup>VND</sup>/mỗi đêm
          </p>
        </div>
        <div>
          <ul class="text-black-50">
            <li>Hai giường đôi</li>
            <li>Cơ sở giữ trẻ</li>
            <li>1 giường miễn phí theo yêu cầu</li>
          </ul>
        </div>
        <div class="text-center mt-5">
          <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=view3"><span class="dat">ĐẶT NGAY</span></a></span></button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="box3 container-fluid col ">
  <div class="pt-5 mt-5">
    <div class="text-center ">
      <!-- <p class="text-black-50 m-4">Rất nhiều phòng...</p> -->
      <h1 class="m-4">Nhà hàng & BAR</h1>
      <p class=" p-5 text-black-50">
        Hãy nếm thử những loại cocktail đặc trưng của chúng tôi và tận hưởng trải nghiệm ẩm thực thực sự độc đáo... <br>
        Khi mặt trời lặn và bầu trời chuyển sang màu tím, chúng tôi kỷ niệm giờ màu tím và ngày kết thúc trước khi chào đón màn đêm bắt đầu.
      </p>
    </div>
    <div class="text-center row justify-content-center">
      <div id="monchinh" class="tich text-black-50 text-uppercase lead showmenu px-2 m-2">Món Chính</div>
      <div id="montrangmieng" class="tich text-black-50 text-uppercase lead px-2 m-2">Món Tráng Miệng</div>
      <div id="douong" class="tich text-black-50 text-uppercase lead px-2 m-2">Đồ Uống</div>
    </div>
  </div>
  <div class="row col-lg-12 p-lg-3 m-0">
    <div class="monchinh row p-lg-2">
      <div class="col-lg-7 p-lg-5 ">
        <div class="row p-lg2 px-lg-5">
          <div class="col-9 p-2">
            <h3>Salad Bò mix cùng Phô Mai Feta & Xốt Mù Tạt</h3>
            <p class="text-black-50">GRILLED BEEF SALAD with Feta Cheese & Mustard Dressing</p>
          </div>
          <div class="col-3 p-2 text-center">
            <p class="gia">790.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>Súp Bí Đỏ dùng kèm Bánh Mì Giòn & Thịt Xông Khói Khô</h3>
            <p class="text-black-50">PUMPKIN SOUP with Croutons & Dried Bacon</p>
          </div>
          <div class=" col-3 text-center p-2">
            <p class="gia">870.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class=" col-9 p-2">
            <h3>Ức Vịt Nướng dùng kèm Bánh Ngàn Lớp Nấm & Sốt Cam Tươi</h3>
            <p class="text-black-50">ROAST DUCK BEAST with Mushroom Mille Feuille & Orange Sauce</p>
          </div>
          <div class=" col-3 text-center p-2">
            <p class="gia">990.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>Hải Sản Nướng dùng kèm Cà Tím & Sốt Cà Chua La Maison</h3>
            <p class="text-black-50">BBQ GRILLED SEAFOOD with Grilled Eggplant & La Maison's Tomato Salsa</p>
          </div>
          <div class="col-3 text-center p-2">
            <p class="gia">1.200.000 <span>VND</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-5 text-center py-5">
        <img src="../content/images/bocobe.jpg" alt="" width="700" height="500" class="border-1" />
      </div>
    </div>
    <div class="montrangmieng row p-2">
      <div class="col-lg-7 p-lg-5">
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>Kem Lạnh La Maison dùng kèm Trái Cây Tươi</h3>
            <p class="text-black-50">LA MAISON'S FRUIT SORBET</p>
          </div>
          <div class="col-3 p-2 text-center">
            <p class="gia">100.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>Bánh nhà làm đặc biệt trong ngày</h3>
            <p class="text-black-50">HOMEMADE SPECIAL CAKE</p>
          </div>
          <div class=" col-3 text-center p-2">
            <p class="gia">120.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class=" col-9 p-2">
            <h3>Kem cháy kiểu Pháp vị Vani</h3>
            <p class="text-black-50">VANILLA CREME BRULEE</p>
          </div>
          <div class=" col-3 text-center p-2">
            <p class="gia">135.000 <span>VND</span></p>
          </div>
        </div>


      </div>
      <div class="col-lg-5 text-center py-5">
        <img src="../content/images/kem.jpg" alt="" width="700" height="500" class="border-1" />
      </div>
    </div>
    <div class="douong row p-2">
      <div class="col-lg-7 p-lg-5">
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>1679 CORBIÈRES</h3>
            <p class="text-black-50">80% Syrah, 20% Grenache | Corbières | 14% acl/ vol</p>
          </div>
          <div class="col-3 p-2 text-center">
            <p class="gia">550.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>BONECHANCE BORDEAUX</h3>
            <p class="text-black-50">Merlot | Pays d'Oc | 14% acl/ vol</p>
          </div>
          <div class=" col-3 text-center p-2">
            <p class="gia">865.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class=" col-9 p-2">
            <h3>INTRIGO PIANTAFERRO</h3>
            <p class="text-black-50">Nero D'avola | Sicilia | 13% acl/ vol</p>
          </div>
          <div class=" col-3 text-center p-2">
            <p class="gia">900.000 <span>VND</span></p>
          </div>
        </div>
        <div class="row p-lg-2 px-lg-5">
          <div class="col-9 p-2">
            <h3>VALDIVIESO WINEMAKER'S RESERVA</h3>
            <p class="text-black-50">79% Cabernet Sauvignon, 21% Cabernet Franc |
              D.O Valle Del Maipo | 14,5% acl/ vol</p>
          </div>
          <div class="col-3 text-center p-2">
            <p class="gia">1.440.000 <span>VND</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-5 text-center py-5">
        <img src="../content/images/ruou.jpg" alt="" width="700" height="500" class="border-1" />
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center text-center">
    <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=nhahang"><span class="dat">ĐẶT NGAY</span></a></span></button>
  </div>
</section>
<section class="box4 container-fluid p-1">
  <div class="pt-5 mt-5">
    <div class="text-center ">
      <h1 class="m-4">Dịch vụ</h1>
      <p class=" p-5 text-black-50">
        Bên cạnh các dịch vụ chính, chúng tôi luôn có rất nhiều tiện ích bổ sung để cung cấp. Bắt đầu từ bãi đậu xe và WiFi miễn phí, <br>
        đến trung tâm Nhà hàng và Phòng Tiệc, chúng tôi có thể biến mọi mong muốn của bạn thành hiện thực!
      </p>
    </div>
  </div>
  <div class="row p-lg-3 m-0">
    <div class="col-lg-7 text-center py-5">
      <img src="../content/images/plane.jpg" alt="" width="700" height="500" class="border-2" />
    </div>
    <div class="col-lg-5 p-lg-5">
      <h1 class="p-3">Đặt phòng VIP ngay NHẬN xe đưa đón sân bay MIỄN PHÍ</h1>
      <p class="p-3">Đúng vậy! Chúng tôi quyết tâm biến trải nghiệm của bạn tại khách sạn của chúng tôi trở nên thú vị,
        đến mức chúng tôi muốn cung cấp cho bạn dịch vụ đưa đón sân bay miễn phí nếu bạn đặt phòng với chúng tôi!</p>
      <h2 class="px-3">Giá bắt đầu từ</h2>
      <p class="px-3">
        <span class="namephong"> 2.149.000</span><sup>VND</sup>/mỗi đêm
      </p>
      <div class="px-3 py-4">
        <button class="custom-buy3 buy-3 nutmua"><span><a style="text-decoration: none; " href="/index.php?action=view4"><span class="dat">ĐẶT NGAY</span></a></span></button>
      </div>
    </div>
  </div>

</section>
<section class="box5 container-fluid p-1">
  <div class="pt-5 mt-5">
    <div class="text-center ">
      <p class="text-black-50 m-4">Đọc các nhận xét, viết về ...</p>
      <h1 class="m-4">Khách sạn của chúng tôi</h1>
    </div>
  </div>
  <div class="row justify-content-around text-center m-0">
    <?php
    $i = 0;
    $data = danhgia();
    foreach ($data as $key) {
      echo '
    <div class="col-lg-3 p-lg-4 my-5">
      <div class="imguser">
        <img src="../content/images/face.png" width="100%" alt="">
        <h2 class="py-3">' . $key['email'] . '!</h2>
      </div>
      <div>
        <p class="text-black-50">' . $key['binhLuan'] . '</p>
        <h3 class="p-3">-' . $key['hoTen'] . '-</h3>
      </div>
    </div>
    
    ';
      $i++;
      if ($i === 3) break;
    }

    ?>
  </div>
</section>
<section class="box6 container-fluid p-1">
  <div class="row p-lg-5 m-0">
    <div class="col-lg-4 p-4">
      <div class="pt-5 mt-5">
        <div class="text-center ">
          <p class="text-black-50 m-4">Vị trí & Bản đồ khách sạn</p>
          <h1 class="m-4">Hướng dẫn lái xe</h1>
          <p class=" p-lg-5 text-black-50">
            Đi theo đường Bạch Đằng rồi nhìn về phía tay trái.
          </p>
        </div>
      </div>
      <div class=" row justify-content-center pt-lg-5 text-center">
        <div class="p-lg-3 col-lg-6">
          <h1>5.2 km</h1>
          <p>Cách xa tòa nhà trung tâm hành chính</p>
        </div>
        <div class="p-lg-3 col-lg-6">
          <h1>8.4 km</h1>
          <p>Cách xa sân bay</p>
        </div>
      </div>
    </div>
    <div class="map col-lg-8 d-flex justify-content-center ">
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d239.63470957226258!2d108.24671958113845!3d16.0574261728479!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1701358971681!5m2!1svi!2s" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<section class="box7 container-fluid p-1">
  <div class="row m-0 guithongtin col-lg-12">
    <div class="guithongtin1 col-lg-6">
      <h1>Đăng ký nhận bản tin...</h1>
      <p class="text-light-50">...và không bao giờ bỏ lỡ các ưu đãi và tin tức đặc biệt CỦA CHÚNG TÔI!</p>
    </div>
    <div class="align-self-center col-lg-6">
      <form action="" class="row">
        <div class="col-lg-9">
          <input type="text" name="" id="" placeholder="Nhập email của bạn..." class="form-control guithongtin3">
        </div>
        <div class="col-lg-2 text-center">
          <button class="custom-buy3 buy-3 nutmua "><span><a style="text-decoration: none; " href=""><span class="dat">Đăng ký ngay</span></a></span></button>

        </div>
      </form>
    </div>
  </div>
</section>
<script>
  let showmonchinh = document.querySelector('#monchinh');
  let showmontrangmieng = document.querySelector('#montrangmieng');
  let showdouong = document.querySelector('#douong');
  let monchinh = document.querySelector('.monchinh');
  let montrangmieng = document.querySelector('.montrangmieng');
  let douong = document.querySelector('.douong');

  showmonchinh.addEventListener('click', function() {
    showmontrangmieng.classList.remove('showmenu');
    showdouong.classList.remove('showmenu');
    showmonchinh.classList.add('showmenu');
    montrangmieng.style.display = "none";
    douong.style.display = "none";
    monchinh.style.display = "flex";
  });
  showmontrangmieng.addEventListener('click', function() {
    showmonchinh.classList.remove('showmenu');
    showdouong.classList.remove('showmenu');
    showmontrangmieng.classList.add('showmenu');
    douong.style.display = "none";
    monchinh.style.display = "none";
    montrangmieng.style.display = "flex";
  });
  showdouong.addEventListener('click', function() {
    showmonchinh.classList.remove('showmenu');
    showmontrangmieng.classList.remove('showmenu');
    showdouong.classList.add('showmenu');
    monchinh.style.display = "none";
    montrangmieng.style.display = "none";
    douong.style.display = "flex";
  });
</script>