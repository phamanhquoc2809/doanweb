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
                                <strong class="card-title">Chi Tiết Đơn Hàng</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th>Mã Sản Phẩm</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Số Lượng</th>
                                            <th>Đơn Giá</th>
                                            <th>Thành Tiền</th>

                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    include './Util/FormatTien.php';
                                    $arrTenSanPham = array("Asus","Lenovo","Dell");
                                    $arrMDH = array("#123","#456","#789");
                                    $arrSoLuong = array(1,2,1);
                                    $arrDonGia = array(25000000,30000000,40000000);
                                    for($i=0;$i<count($arrTenSanPham);$i++){
                                    echo'   <tr>';
                                    echo'        <td class="serial">'.($i+1).'.</td>';
                                    echo'        <td>'.$arrMDH[$i].'</td>';
                                    echo'       <td>';
                                    echo'            <span>'.$arrTenSanPham[$i].'</span>';
                                    echo'       </td>';
                                    echo'       <td>'.$arrSoLuong[$i].'</td>';
                                    echo'        <td> <span>'.number_format($arrDonGia[$i],0,",",".").' VNĐ</span> </td>';
                                    echo'        <td> <span>'.thanhTien($arrSoLuong[$i],$arrDonGia[$i]).'</span></td>';
                                    echo'   </tr>';
                                    }
                                    ?>
                                    </tbody>
                                    <thead>
                                    <?php
                                    echo'   <tr>';
                                    echo'       <th>Tổng Tiền: </th>';
                                    echo'       <th>95.000.000 VNĐ</th>';
                                    echo'   </tr>';
                                    
                                    ?>
                                    </thead>
                                    
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                        <a href="quanlydonhang.php"> <button type="button" class="btn btn-success"><i class="fa fa-undo"></i> Quay Lại</button> </a>
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