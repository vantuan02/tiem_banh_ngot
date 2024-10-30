@extends('admin.master')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên</th>
            <th scope="col">Loại</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Giá gốc</th>
            <th scope="col">Giá khuyến mại</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Đơn vị</th>
            <th scope="col">Trạng thái hàng mới</th>
            <th scope="col">hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->id_type}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->unit_price}}</td>
            <td>{{$item->promotion_price}}</td>
            <td>
                <!-- <a href="product.html"><img src="source/image/product/{{$item->image}}" alt="" height="200px"></a> -->
            <td>
                @if(!empty($item->image))
                <div style="width: 100px;height: 100px;">
                    <img src="{{Storage::url($item->image)}}" style="max-width: 100%; max-height: 100%;" alt="">
                </div>
                @endif
            </td>
            </td>
            <td>{{$item->unit}}</td>
            <td>{{$item->new}}</td>
            <td>
                <button class="btn btn-success"><a href="{{route('products.edit', $item->id)}}" style="color: #fff;">Sửa</a></button>
            </td>
            <td>
                <form action="{{route('products.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
<button class="btn btn-primary"><a href="{{route('products.create')}}" style="color: #fff;">Thêm</a></button>
    </tbody>
</table>
@endsection