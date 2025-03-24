<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thương Hiệu</title>
</head>
<body>
<form action="index.php?act=edit-Brands&id=<?=$brands['id']?>" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="nameBrands" class="form-label">Tên Thương hiệu</label>
    <input type="text" class="form-control" name="name" value="<?=$brands['name']?>">
  </div>
  <div class="mb-3">
    <label for="logoBrands" class="form-label">Logo</label>
    <input type="file" class="form-control" name="logo">
    <img src="../upload/brands/<?=$brands['logo']?>" alt="" width="50px">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Trạng Thái</label>
    <select class="form-select" name="status">
        <option value="1"<?=($brands['status'] == 1 ) ? 'slected' : '' ?> >Hiện</option>
        <option value="2"<?=($brands['status'] == 2 ) ? 'slected' : '' ?> >Ẩn</option>
    </select>
  </div>
  <button class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>
