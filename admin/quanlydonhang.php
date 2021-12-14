<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php include 'layout/header.php'?>
<body>
    <!-- Left Panel -->
    <?php include 'layout/leftmenu.php'?>
    <!-- /#left-panel -->

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
                                    <li class="active">Quản lý Đơn Hàng</li>
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
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh Sách Đơn Hàng</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th class="avatar">Mã Đơn Hàng</th>
                                            <th>Tên Khách Hàng</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Địa Chỉ</th>
                                            <th>Email</th>
                                            <th>Trạng Thái</th>
                                            <th>Chi Tiết Đơn Hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arrTen = array("Phạm Anh Quốc","Phan Văn Thành");
                                        $arrMDH= array("#123","#456");
                                        $arrSDT = array("0764544572","0764544572");
                                        $arrDiaChi = array("Hồ Chi Minh","Quy Nhơn");
                                        $arrEmail = array("DH51802752@gmail.com","DH51801961@gmail.com");
                                        $arrTinhTrang = array("Đã xử lý","Chưa xử lý");
                                        for($i = 0; $i <count($arrTen);$i++){
                                        echo '<tr>';
                                        echo '<td class="serial">'.($i+1).'.</td>';
                                        echo '   <td>'.$arrMDH[$i].'</td>';
                                        echo '   <td>';
                                        echo '       <span>'.$arrTen[$i].'</span>';
                                        echo '   </td>';
                                        echo '   <td>'.$arrSDT[$i].'</td>';
                                        echo '   <td> <span class="name">'.$arrDiaChi[$i].'</span> </td>';
                                        echo '   <td> <span class="product">'.$arrEmail[$i].'</span></td>';
                                        echo '   <td><span>'.$arrTinhTrang[$i].'</span></td>';
                                        echo '   <td>';
                                        echo '   <a href="chitietdonhang.php"> <button type="button" class="btn btn-danger"><i class="fa fa-eye"></i> Xem</button></a>';
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
