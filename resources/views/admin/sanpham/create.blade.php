@extends('admin.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-3 mb-3">
            <label class="form-label">Tên</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Loại bánh</label>
            <select name="id_type" id="" class="form-select">
                @foreach($loai as $id => $name)
                    <option value="{{$id}}">{{$name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Giá gốc</label>
            <input type="text" class="form-control" name="unit_price">
        </div>        <div class="mt-3 mb-3">
            <label class="form-label">Giá khuyến mại</label>
            <input type="text" class="form-control" name="promotion_price">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Đơn vị</label>
            <input type="text" class="form-control" name="unit">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-check-label">Trạng thái mới</label>
            <input type="text" class="form-control" name="new">
        </div>
        <button class="btn btn-success">Tạo mới</button>
    </form>
    @endsection