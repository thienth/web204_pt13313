<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include './_share/client_assets.php';
     ?>
    <title>Liên hệ</title>
</head>

<body>
    <?php 
    include './_share/header.php';
     ?>
    <div id="content">
        <div class="container">
            <h2 class="title-product">Liên hệ với chúng tôi</h2>
            <form>
                <div>
                    <label>Tên khách hàng
                        <span class="bg-red">*</span>
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div>
                    <label>Số điện thoại
                        <span class="bg-red">*</span>
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div>
                    <label>Email
                        <span class="bg-red">*</span>
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div>
                    <label>Nội dung
                        <span class="bg-red">*</span>
                    </label>
                    <textarea class="content-sub"></textarea>
                </div>
                <a href="#" class="btn btn-danger sub-text" type="submit">Gửi</a>
            </form>
        </div>
    </div>
    <?php 
    include './_share/footer.php';
     ?>
</body>

</html>