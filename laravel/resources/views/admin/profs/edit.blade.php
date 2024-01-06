<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit prof</h1>
    <div class="col-md-8" style="margin-right:auto;margin-left:auto;">
    <form action="{{route('saveprof',['id'=>$prof->id])}}" method="post">
        @csrf
        @method('PUT')
        <div class="from-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$prof->name}}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-success">
        </div>
    </form>
    </div>
</body>
</html>