@extends('layouts.main')
@section('body')
<div class="col-md-6" style="margin-left:auto;margin-right:auto;">
    <form action="{{route('loginuser')}}" method="post">
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

@endsection