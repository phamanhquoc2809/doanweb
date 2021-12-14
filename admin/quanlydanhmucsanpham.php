<?php
    include("config/conn.php");
    $sql_lietke_danhmucsp = "SELECT * FROM dmsanpham ";
    $query_lietke_danhmucsp = mysqli_query($con,$sql_lietke_danhmucsp);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php include 'layout/header.php'?>
<body>
    <!-- Left Panel -->

    <?php include 'layout/leftmenu.php'?>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'layout/rightmenu.php'?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Quản lý Danh Mục</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                    <a href="themDMSanPham.php"> <button type="button" class="btn btn-success"><i class="fa fa-plus-square"></i> Thêm Mới DM Sản Phẩm</button> </a>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh Sách Danh Mục</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th>Tên Danh Mục Sản Phẩm</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i =0;
                                        while ($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                                            $i++;
                                        ?>
                                        <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $row['tendm'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</button>
                                            <a href="chitietDMSP.php"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</button></a>
                                        </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

<?php include 'layout/footer.php' ?>


</body>
</html>
