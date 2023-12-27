<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .header{
        background-color: #A8D4FF;
    }
    .header h1,
    .header p {
    display: inline;
    margin-right: 40px; /* Điều chỉnh khoảng cách giữa các phần tử */
    }
    .left{
    display: flex;
    width: 20%;
    height: 400px;
    margin-top: 10px;
    padding: 0px;
    column-gap: 0px;
    border: 2px solid #A8D4FF;
    }

</style>
<body>
<div class="header">
    <ion-icon name="home"></ion-icon>
    <p><a href="tam.php">Trang chủ</a></p>
    <h1>TẬN TÂM - MINH BẠCH - SÁNG TẠO - THÂN THIỆN</h1>
    <p><a href="login.php"><ion-icon name="log-out"></ion-icon>Đăng nhập</a></p>
</div>
<div>
    <img src="image/nen_home.png" width="100%" height="190px">
</div>
<div class="left">
        <div>
        </div>

        <div class="content">
            <h2>Bài viết Ở Trà Vinh</h2>
        </div>
</div>          
</body>
</html>