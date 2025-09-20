<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Them san pham</h1>
    <form action="index.php?act=xl_themsp" method="post" enctype="multipart/form-data">
      
        DanhMuc: <br>
        <select name="id_danhmuc" >
        <?php 
        for($i=0;$i<count($danhmuc);$i++){
            $rc = $danhmuc[$i];
        ?>
            <option value="<?=$rc["id"]?>"><?=$rc["name"]?></option>
        <?php 
        }
        ?>
        </select><br><br>
        Masp : <br><input type="number" name="id_sp" value="">
        <br><span style="color: red;"><?=$id_sp_er?></span><br>
        Name : <br><input type="text" name="name" value="" >
        <br><span style="color: red;"><?=$name_er?></span><br>
        Price : <br><input type="number" min =1  name="price" value="" >
        <br><span style="color: red;"><?=$price_er?></span><br>
        Mount : <br><input type="text" name="mount" value="" >
        <br><span style="color: red;"><?=$mount_er?></span><br>
        Image : <br><input type="file" name="image" >
        <br><span style="color: red;"><?=$image_er?></span><br>
        Sale : 
        <select name="sale" >
            <option value="">choose sale</option>
            <option value="0">0%</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
            <option value="30">30%</option>
            <option value="50">50%</option>
        </select>
        <br><span style="color: red;"><?=$sale_er?></span><br>
        Decribe : <br> <textarea name="decribe" rows="4" cols="50"></textarea> 
        <br><span style="color: red;"><?=$decribe_er?></span><br>
        <button type="submit" >Submit</button>
        </form>
    
    <h1>Danh sach san pham</h1>
     <table border="1" width ="100%">
        <thead>
            <tr>
                <td>danhmuc</td>
                <td>masp</td>
                <td>hinhanh</td>
                <td>tensp</td>
                <td>gia</td>
                <td>ngay nhap</td>
                <td>miêu tả</td>
                <td>số lượng</td>
                <td>giảm giá</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i = 0;$i< count($danhsach);$i++){
                    $rc = $danhsach[$i];
            ?>
            <tr>
                <td><?=$rc['id_danhmuc']?></td>
                <td><?=$rc['id_sp']?></td>
                <td><img height="100px" width="100px" src="../view/image/<?=$rc['image']?>" ></td>
                <td><?=$rc['Name']?></td>
                <td><?=$rc['Price']?></td>
                <td><?=$rc['Date_import']?></td>
                <td><?=$rc['Decribe']?></td>
                <td><?=$rc['Mount']?></td>
                <td><?=$rc['Sale']?></td>
                <td>Edit</td>
                <td><a href="index.php?act=deletesp&idsp_del=<?=$rc['id_sp']?>">Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>