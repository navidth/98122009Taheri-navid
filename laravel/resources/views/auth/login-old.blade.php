<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="col-md-6" style="margin-left:auto;margin-right:auto;">
    <form action="" method="post">
    @csrf()    
        <div class="form-group">
            <label for="">ایمیل</label>
        <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">کلمه عبور</label>
        <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">دخیره</button>
    </form>
    </div>
</body>
</html>