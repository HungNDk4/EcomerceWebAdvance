<?php
    include '../controller/controller.php';
$id_sp_er = ""; $name_er = ""; $price_er=""; $mount_er="";
$decribe_er="";  $sale_er = ""; $image_er = "";
$valided = true;

if(isset($_REQUEST['act'])){
    $act= $_REQUEST['act'];

    switch($act){
        case 'themdm':
           $name= $_REQUEST['name'];
           $dm = new danhmuc();
           $dm->setName($name);
           $controller = new controller();
           $controller->themdm($dm);
           $danhmuc = $controller->hienthidm();
            include '../view/danhmuc.php';
            break;
        case 'xoadm':
            $id_dm= $_REQUEST['id_dm'];
            $controller = new controller();
            $controller->xoadm($id_dm);
            $danhmuc = $controller->hienthidm();
            include '../view/danhmuc.php';
        break;
        case "hienthidm":
            $controller = new controller();
            $danhmuc = $controller->hienthidm();
            include '../view/danhmuc.php';
        break;
        case "hienthi_sp":
            $controller = new controller();
            $danhmuc = $controller->hienthidm();
            $danhsach = $controller->hienthisanpham();
            include '../view/sanpham.php';
        break;
        case "xl_themsp":           
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
                if(empty($_POST["id_sp"])){ 
                    $id_sp_er = "input id_sp";
                    $valided = false;
                }
                if(empty($_POST["name"])){ 
                    $name_er = "input name";
                    $valided = false;
                }
                if(empty($_POST["price"])){ 
                    $price_er = "input price";
                    $valided = false;
                }
                if(empty($_POST["mount"])){ 
                    $mount_er = "input mount";
                    $valided = false;
                }
                if(empty($_POST["decribe"])){ 
                    $decribe_er = "input describe";
                    $valided = false;
                }
                if(isset($_POST["sale"]) == ""){ 
                    $sale_er = "input sale";
                    $valided = false;
                }
                if($_FILES["image"]["error"] <> 0){ 
                    $image_er = "input image";
                    $valided = false;
                }
                if($valided){
                    $sp = new sanpham();
                    $sp->setId($_POST["id_sp"]);
                    $sp->setName($_POST["name"]);
                    $sp->setPrice($_POST["price"]);
                    $sp->setMount($_POST["mount"]);
                    $sp->setDecribe($_POST["decribe"]);
                    $sp->setSale($_POST["sale"]);
                    $sp->setDate_import(date('d-m-y h:i:s'));
                    $sp->setId_danhmuc($_POST['id_danhmuc']);
                    $hinhsp = basename($_FILES['image']['name']) ;
                    $sp->setImage($hinhsp);
                    $path = __DIR__ . './../view/image/';
                    $target_file = $path . $hinhsp;
                    //upload hình ảnh
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                    $controller = new controller();
                    $controller->themsp($sp);
                }
                $controller = new controller();
                $danhmuc = $controller->hienthidm();
                $danhsach = $controller->hienthisanpham();
                include '../view/sanpham.php';
            }
        break;


    }
}else{


    $controller = new controller();
    $danhmuc = $controller->hienthidm();
    include '../view/trangchu.php';
}
    





?>
