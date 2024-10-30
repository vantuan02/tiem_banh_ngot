@extends('admin.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-3 mb-3">
            <label class="form-label">Link</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button class="btn btn-success">Tạo mới</button>
    </form>
    @endsection