
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
.s-left{
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding-top: 20px;

}

.s-left-item{
    display: flex;
    align-items: center;
    color: #ffffff;
    /* Cách hai cái, muốn xài phải display */
    gap: 15px;
    padding: 10px 10px;
}

.s-left-item ion-icon{
    align-items: right;
    font-size: 17px;
    padding-left: 5px;
}

.s-left-item{
    color: #ffffff;
    text-decoration: none;
}

.s-left-item:hover{
    background-color: #FFCC70;
    border-radius: 5px;
    font-weight: 600;
    color: black;
}


/* Div đăng xuất nè */

.s_dx{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px;
    width: 100%;
    background-color: #008170;
    height: 40px;
    color: #ffffff;
}


.s_dx_item {
    display: flex;
    align-items: center;
    color: #ffffff;
    /* Cách hai cái, muốn xài phải display */
    gap: 15px;
    padding: 10px 0;
    align-items: center;
    text-decoration: none;
}

.s_dx_item:hover{
    color: #FFCC70;
    font-weight: 600;
}


.s_dx_item a{
    color: #ffffff;
}

.s_dx_item ion-icon{
    align-items: right;
    font-size: 17px;
    padding-left: 5px;
}

		</style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Lấy tất cả các phần tử có class là "s-left-item"
    var menuItems = document.querySelectorAll('.s-left-item');
    
    // Lấy trạng thái active từ sessionStorage
    var activeItemIndex = sessionStorage.getItem('activeItemIndex');
    
    // Nếu có trạng thái active, thêm lớp "s-left-active"
    if (activeItemIndex !== null) {
        menuItems[activeItemIndex].classList.add('s-left-active');
    }

    // Lặp qua từng phần tử và thêm sự kiện click
    menuItems.forEach(function(item, index) {
        item.addEventListener('click', function(event) {
            event.preventDefault();

            // Xóa lớp "s-left-active" từ tất cả các phần tử
            menuItems.forEach(function(innerItem) {
                innerItem.classList.remove('s-left-active');
            });

            // Thêm lớp "s-left-active" cho phần tử được chọn
            item.classList.add('s-left-active');

            // Lưu trạng thái active vào sessionStorage
            sessionStorage.setItem('activeItemIndex', index);

            // Xử lý chuyển hướng
            window.location.href = item.getAttribute('href');
        });
    });
});
    </script>
</head>
<body>
        
            <div class="s_dx">
			<a href="admin.php" class="s-left-item">
                    <ion-icon name="home"></ion-icon>
                    <p>Trang chủ</p>
				<h3>TẬN TÂM - MINH BẠCH - SÁNG TẠO - THÂN THIỆN</h3>
                <a href="login.php" class="s-left-item">
                    <ion-icon name="log-out"></ion-icon>
                    <p>Đăng nhập</p> 
            </div>

</script>
</body>
</html>
