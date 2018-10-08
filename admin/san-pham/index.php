<?php 
session_start();
// hien thi danh sach danh muc cua he thong
$path = "../";
require_once $path.$path."commons/utils.php";
checkLogin();
// dem ton so record trong bang danh muc
$sql = "select 
          p.*,
          c.name as catename
        from products p
        join categories c
          on p.cate_id = c.id
        ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();
// dd($cates);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Quản lý sản phẩm</title>

  <?php include_once $path.'_share/top_asset.php'; ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include_once $path.'_share/header.php'; ?> 

  <?php include_once $path.'_share/sidebar.php'; ?>  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Quản lý sản phẩm</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= $adminUrl?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sản phẩm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-body">
                <table class="table table-bordered">
                  <tbody>
                  <tr>
                    <th style="width: 10px">Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th style="width: 100px">Ảnh</th>
                    <th>Giá bán</th>
                    <th>Giá khuyến mại</th>
                    <th>Lượt view</th>
                    <th style="width: 135px;">
                      <a href="<?= $adminUrl?>san-pham/add.php"
                        class="btn btn-xs btn-success"
                        >
                        <i class="fa fa-plus"></i> Thêm mới
                      </a>
                    </th>
                  </tr>
                  <?php foreach ($products as $p): ?>
                    
                    <tr>
                      <td><?= $p['id']?></td>
                      <td><?= $p['product_name']?></td>
                      <td>
                        <?= $p['catename']?>
                      </td>
                      <td>
                        <img id="imageTarget" src="<?= $siteUrl . $p['image']?>" class="img-responsive" >
                      </td>
                      <td>
                        <?= $p['list_price']?>
                      </td>
                      <td>
                        <?= $p['sell_price']?>
                      </td>
                      <td>
                        <?= $p['views']?>
                      </td>
                      <td>
                        <a href="<?= $adminUrl?>san-pham/edit.php?id=<?= $p['id']?>"
                        class="btn btn-xs btn-info"
                        >
                          <i class="fa fa-pencil"></i> Cập nhật
                        </a>
                        <a href="javascript:;"
                          linkurl="<?= $adminUrl?>san-pham/remove.php?id=<?= $p['id']?>"
                          class="btn btn-xs btn-danger btn-remove"
                        >
                          <i class="fa fa-trash"></i> Xoá
                        </a>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
                </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">»</a></li>
                </ul>
              </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once $path.'_share/sidebar.php'; ?>  

</div>
<!-- ./wrapper -->
<?php include_once $path.'_share/bottom_asset.php'; ?>  

</body>
</html>
