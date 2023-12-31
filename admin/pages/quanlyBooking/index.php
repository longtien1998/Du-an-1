<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Danh Sách Booking</span></h2>
    </div>
    <!-- <div class="container-fluid">
        <h3 class="bg-info p-3 text-center"><a href="/admin/index.php?controller=user-nhanvien&action=new-nhanvien">Thêm tài khoản Nhân Viên +</a></h3>
    </div> -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $getmanhanvien = $_POST['manhanvien'];
    //     nhanvien_delete($getmanhanvien);
    // }
    ?>
    <div class="container-fluid table-responsive-lg">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 50px;">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">email</th>
                    <th scope="col">Ngày Giờ đặt</th>
                    <th scope="col">Tổng thanh toán</th>
                    <th scope="col">Trạng thái thanh toán</th>
                    <th scope="col">Trạng thái đơn hàng</th>
                    <th scope="col">Xem chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = "1";
                // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
                $sql = "SELECT * FROM donhang";
                $result = getData($sql);
                rsort($result);
                foreach ($result as $row) {

                    if ($row['pttt'] === '1') $pttt = "Chưa thanh toán";
                    else $pttt = "Đã thanh toán";
                    
                    switch ($row['trangThaiDonHang']) {
                        case 1:
                            $mess1 = '<td id="ttdh" class="bg-warning text-light p3-2 ">Chưa xác nhận</td>';
                            break;
                        case 2:
                            $mess1 = '<td id="ttdh" class="bg-success text-light p3-2 ">Đã xác nhận</td>';
                            break;
                        case 3:
                            $mess1 = '<td id="ttdh" class="bg-danger text-light p3-2 ">Hủy</td>';
                            break;

                        default:
                            $mess1 = '<td id="ttdh" class="bg-warning text-light p3-2 ">Chưa xác nhận</td>';
                            break;
                    }
                    echo ' <tr>
                                <td>' . $i . '</td>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['madh'] . '</td>
                                <td>' . $row['hoten'] . '</td>
                                <td>' . $row['tel'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['ngayGioDat'] . '</td>
                                <td>' . currency_format($row['tongdonhang'])  . '</td>
                                <td class="pttt">' . $pttt . '</td>
                                ' . $mess1. '
                                <td style="width: 100px;"><a class="sua" href="/admin/index.php?controller=quanlyBooking&action=xemchitiet&madonhang=' . $row['madh'] . '">xem</a></td>  
                            </tr>';
                    if ($i === "20") break;
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    let pttt = document.querySelectorAll('.pttt');
    for (const item of pttt) {
        if (item.innerText === "Chưa thanh toán") {
            item.style.color = "red";
        } else item.style.color = "green";
    }
</script>