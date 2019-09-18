<?php
$error = array();

if ($_POST['DienTich'] < 30) {
    $error['DienTich'] = 'Diện Tích phải lớn hơn 30m2';
}

if ($_POST['SoNguoiToiDa'] <= 0 || $_POST['SoNguoiToiDa'] > 20) {
    $error['SoNguoiToiDa'] = 'Số lượng người tối đa phải >0 và nhỏ hơn <20';
}

if ($_POST['SoTang'] < 0) {
    $error['SoTang'] = 'Số tầng phải số nguyên dương';
}
