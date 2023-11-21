<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Add prof</h1>
    <div class="col-md-8" style="margin-right:auto;margin-left:auto;">
    <form action="" method="post">
        @csrf
        <div class="from-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success">
        </div>
    </form>
    </div>
</body>
</html>