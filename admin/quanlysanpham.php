<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<?php include 'layout/header.php' ?>

<body>
    <!-- Left Panel -->
    <?php include 'layout/leftmenu.php' ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'layout/rightmenu.php' ?>
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
                                    <li class="active">Quản lý Sản Phẩm</li>
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
                    <a href="themsanpham.php"> <button type="button" class="btn btn-success"><i class="fa fa-plus-square"></i> Thêm Mới Sản Phẩm</button> </a>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh Sách Sản Phẩm</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th class="avatar">Mã Sản Phẩm</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Hình Ảnh</th>
                                            <th>Giá Bán</th>
                                            <th>DM Sản Phẩm</th>
                                            <th>Nội Dung</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arrTenSanPham = array("Asus","Lenovo","Dell");
                                        $arrDonGia = array(25000000,30000000,40000000);
                                        $arrDMSanPham = array("Asus","Lenovo","Dell");
                                        for($i = 0;$i < count($arrTenSanPham);$i++){
                                        echo '<tr>';
                                        echo '    <td class="serial">'.($i+1).'.</td>';
                                        echo '   <td class="avatar">';
                                        echo '       #1231723';
                                        echo '    </td>';
                                        echo '    <td>'.$arrTenSanPham[$i].'</td>';
                                        echo '    <td> <span class="name">anh.PNG</span> </td>';
                                        echo '    <td> <span class="product">'.number_format($arrDonGia[$i],0,",",".").' VNĐ</span> </td>';
                                        echo '   <td><span>'.$arrDMSanPham[$i].'</span></td>';
                                        echo '   <td>';
                                        echo '       <span">Nội Dung</span>';
                                        echo '   </td>';
                                        echo '   <td>';
                                        echo '       <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Xóa</button>';       
                                        echo'        <a href="chitietsanpham.php"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i> Sửa</button></a>';
                                        echo '   </td>';
                                        echo '</tr>';
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