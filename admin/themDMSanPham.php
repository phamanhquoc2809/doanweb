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

                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Thêm Danh Mục Sản Phẩm</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Tên Danh Mục Sản Phẩm</label><input type="text" id="company" placeholder="Nhập Tên DM" class="form-control"></div>
                                
                                <a href="quanlydanhmucsanpham.php"> <button type="button" class="btn btn-success">Thêm</button> </a>
                            </div>
                        </div>
                        <a href="quanlydanhmucsanpham.php"> <button type="button" class="btn btn-success"><i class="fa fa-undo"></i> Quay Lại</button> </a>
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
