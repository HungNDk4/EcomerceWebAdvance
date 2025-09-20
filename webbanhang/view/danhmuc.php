<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Them danh muc</h1>
        <form action="index.php?act=themdm" method="post" enctype="multipart/form-data">
        Name : <br><input type="text" name="name" value="" >
        <button type="submit" >Submit</button>
    </form>

    <h1>Danhmuc</h1>

    <?php 
        for($i=0;$i<count($danhmuc);$i++){
            $rc = $danhmuc[$i];
        ?>
            <p value="<?=$rc["id"]?>"><?=$rc["name"]?> &nbsp; &nbsp; <a href="index.php?act=xoadm&id_dm=<?=$rc["id"]?>">Xóa</a></p> 
        <?php 
        }
        ?>
</body>
</html>