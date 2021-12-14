<?php
    function thanhTien( $Soluong,$DonGia){
        return number_format(($Soluong * $DonGia),0,",",".")." VNĐ";
    }
    

?>