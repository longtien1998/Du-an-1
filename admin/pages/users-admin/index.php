<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">List Admin</span></h2>
    </div>
    <div class="container-fluid">
        <h3 class="bg-info p-3 text-center"><a href="/admin/index.php?controller=user-admin&action=new-admin">Thêm tài khoản Admin +</a></h3>
    </div>
    <?php
    
    ?>
    <div class="container-fluid table-responsive-lg">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 70px;">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = "1";
                // hiển thị danh sách sản phẩm từ cơ sở dữ liệu
                $conn =  connect_pdo();
                $stmt = $conn->prepare("SELECT * FROM useradmin");
                $stmt->execute();
                // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $row) {
                    echo ' <tr>
                                <td>' . $i . '</td>
                                <td>' . $row['id'] . '</td>
                                <td>' . $row['fullname'] . '</td>
                                <td>' . $row['username'] . '</td>
                                <td>' . $row['password'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['phone'] . '</td>
                                <td style="width: 100px;"><a class="sua" href="/admin/index.php?controller=user-admin&action=updateAdmin&id='.$row['id'].'">sửa</a></td>
                                <td style="width: 100px;">
                                    <form onSubmit="return xoaad()" action="" method="post">
                                        <input type="hidden" name="id"  value="'.$row['id'].' ">
                                        <input type="submit" name="deleteadmin"  class="xoa border-0" value="Xóa" >
                                    </form>
                                </td>   
                            </tr>';
                    $i++;
                }

                ?>

            </tbody>
        </table>
    </div>
</div>
<?php
if (isset($_POST['deleteadmin']) && isset($_POST['id'])) {
    if (!empty($_POST['id'])) {
        user_delete($_POST['id']);
        echo "<script>
        window.location.href = 'http://localhost:3000/admin/index.php?controller=user-admin';
        </script>
        ";
    }
}
?>
<script>
    function xoaad() {
        let optad = confirm("Bạn có muốn xóa Admin này không ?");
        if (optad) {
            return true;
        } else {
            return false;
        }
    }
</script>