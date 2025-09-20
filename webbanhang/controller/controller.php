<?php
include "../controller/danhmuc.php";
include "../controller/sanpham.php";
class controller{

    //San Pham
    public function hienthisanpham(){
        $sp = new sanpham();
        return $sp->getallsanpham();
    }
    public function themsp(sanpham $sp){
                
        //goi them san pham trong class sanpham trong model
        $sp->themsp($sp);
    }

    //Danh Muc
    public function hienthidm(){
        $dm = new danhmuc();
        return $dm->getDS_Danhmuc();
    }
    public function xoadm($id){
        $dm = new danhmuc();
        $dm->xoaDM($id);
    }
   public function themdm(danhmuc $dm){
                
        //goi them danh muc trong class danhmuc trong model
        $dm->themDM($dm);
    }


}