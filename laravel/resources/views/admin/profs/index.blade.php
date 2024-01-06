<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست اساتید</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
</head>
<body dir="rtl">
    <h1>لیست اساتید</h1>
    <div class="row">
        <div class="col-md-6" style="margin-right:auto;margin-left:auto;">
            <a href="{{url('/addprof')}}" class="btn btn-success">افزودن</a>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>نام و نام خانوادگی</th>
                    <th>عملیات</th>
                </thead>
                <tbody>
                    @foreach($profs as $prof)
                    <tr>
                        <td>{{$prof->id}}</td>
                        <td>{{$prof->name}}</td>
                        <td><a href="{{url('/showprof/'.$prof->id)}}" class="btn btn-primary">نمایش</a></td>
                        <td><a href="{{url('/edit/'.$prof->id)}}" class="btn btn-warning" target="_blank">ویرایش</a></td>
                        <td><form action="{{route('deleteprof',['id'=>$prof->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$profs->links()}}
        </div>
    </div>
</body>
</html>