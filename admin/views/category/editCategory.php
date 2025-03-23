<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php?act=edit-Category&id=<?=$category['id']?>" method="post">
  <div class="mb-3">
    <label for="nameCategory" class="form-label">Tên Danh Mục</label>
    <input type="text" class="form-control" name="name" value="<?=$category['name']?>">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Trạng Thái</label>
    <select class="form-select" name="status">
        <option value="1"<?=($category['status'] == 1 ) ? 'slected' : '' ?> >Hiện</option>
        <option value="2"<?=($category['status'] == 2 ) ? 'slected' : '' ?> >Ẩn</option>
        <option value="3"<?=($category['status'] == 3 ) ? 'slected' : '' ?> >Hết Hàng</option>
    </select>
  </div>
  <button class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>
