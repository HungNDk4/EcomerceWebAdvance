<?php
   class sanpham {
        private $id_sp = 0;
        private $Name = "";
        private $Price = 0;
        private $Date_import = "";
        private $Viewsp = 0;
        private $Decribe = "";
        private $Mount = 0;
        private $Sale = 0;
        private $Image = "";
        private $id_danhmuc = 0;

        public function __construct(){
        }
        public function setId_danhmuc($id_danhmuc){
            return  $this->id_danhmuc = $id_danhmuc;
        }
        public function getId_danhmuc(){
            return  $this->id_danhmuc;
        }

        public function setPrice($Price){
            return  $this->Price = $Price;
        }
        public function getPrice(){
            return  $this->Price;
        }
        public function setImage($Image){
            return  $this->Image = $Image;
        }
        public function getImage(){
            return  $this->Image;
        }
        public function setSale($Sale){
            return  $this->Sale = $Sale;
        }
        public function getSale(){
            return  $this->Sale;
        }
        public function setMount($Mount){
            return  $this->Mount = $Mount;
        }
        public function getMount(){
            return  $this->Mount;
        }
        public function setDecribe($Decribe){
            return  $this->Decribe = $Decribe;
        }
        public function getDecride(){
            return  $this->Decribe;
        }
        public function setViewsp($Viewsp){
            return  $this->Viewsp = $Viewsp;
        }
        public function getViewsp(){
            return  $this->Viewsp;
        }
        public function setDate_import($Date_import){
            return  $this->Date_import = $Date_import;
        }
        public function getDate_import(){
            return  $this->Date_import;
        }
        public function setName($Name){
            return  $this->Name = $Name;
        }
        public function getName(){
            return  $this->Name;
        }
        public function setId($id_sp){
            return $this->id_sp = $id_sp;
        }
        public function getId(){
            return $this->id_sp;
        }

        // viet function taoj san pham

        public function themsp(sanpham $sp){
            $xl = new xl_data();
            $sql = "INSERT INTO `sanpham` (`id_sp`, `Name`, `Price`, `Date_import`, 
            `Viewsp`, `Decribe`, `Mount`, `Sale`, `image`, `id_danhmuc`) 
            VALUES (".$sp->getId().", '".$sp->getName()."', ".$sp->getPrice().", 
            '".$sp->getDate_import()."', '0', '".$sp->getDecride()."', ".$sp->getMount().", 
            ".$sp->getSale().", '".$sp->getImage()."', ".$sp->getId_danhmuc().");";
            $xl->execute_item($sql);
        }

        public function getallsanpham(){
            $xl = new xl_data();
            $sql = "select * from sanpham";
            return $xl->readitem($sql);
        }

        public function xoasp(sanpham $sp){
            $xl = new xl_data();
            $sql = "DELETE FROM sanpham WHERE `sanpham`.`id_sp` = ". $sp->getId();
            $xl->execute_item($sql);
        }

        public function motsp(sanpham $sp){
            $xl = new xl_data();
            $sql = "SELECT * FROM `sanpham` WHERE id_sp =". $sp->getId();
            $results = $xl->readitem($sql);
            return $results;
        }

        public function capnhatsp(sanpham $sp){
            $xl = new xl_data();
            $sql = "UPDATE `sanpham` 
            SET `Name` = 'laptop120', 
            `Price` = ".$sp->getPrice().", 
            `Viewsp` = ".$sp->getViewsp().", 
            `Decribe` = '".$sp->getDecride()."', 
            `Mount` = ".$sp->getMount().", 
            `Sale` = ".$sp->getSale().", 
            `image` = '".$sp->getImage()."' ,
            `id_danhmuc` = ".$sp->getId_danhmuc()."
            WHERE `sanpham`.`id_sp` = ". $sp->getId();
            $xl->execute_item($sql);
            
        }
    }
   
?>