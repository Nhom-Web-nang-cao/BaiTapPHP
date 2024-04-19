<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lí Login</title>
</head>
<body>
    <?php 
    $sUserName = $_REQUEST["username"];
    $sPassword = $_REQUEST["passWord"];
    ?>
    <h1>Kết quả đăng nhập</h1>
    Tên đăng nhập là: <?php echo $sUserName; ?>
    <br/>
    Mật khẩu là: <?php echo $sPassword; ?>
</body>
</html>