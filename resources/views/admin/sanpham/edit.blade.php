@extends('admin.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFproductd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mt-3 mb-3">
            <label class="form-label">Tên</label>
            <input type="text" class="form-control" name="$product->name">
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
            <input type="text" class="form-control" name="$product->description">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Giá gốc</label>
            <input type="text" class="form-control" name="$product->unit_price">
        </div>        <div class="mt-3 mb-3">
            <label class="form-label">Giá khuyến mại</label>
            <input type="text" class="form-control" name="$product->promotion_price">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="$product->image">
            @if(!empty($pro->image))
                <div style="width: 100px;height: 100px;">
                    <img src="{{Storage::url($product->image)}}"
                         style="max-width: 100%; max-height: 100%;" alt="">
                </div>
            @endif
        </div>
        <div class="mt-3 mb-3">
            <label class="form-label">Đơn vị</label>
            <input type="text" class="form-control" name="$product->unit">
        </div>
        <div class="mt-3 mb-3">
            <label class="form-check-label">Trạng thái mới</label>
            <input type="text" class="form-control" name="$product->new">
        </div>
        <button class="btn btn-success">Cập nhật</button>
    </form>
    @endsection