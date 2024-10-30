@extends('admin.master')
@section('content')
<table class="table table-striped">
    <thead>

        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Loại</th>
            <th>Mô tả</th>
            <th>Giá gốc</th>
            <th>Giá khuyến mại</th>
            <th>Ảnh</th>
            <th>Đơn vị</th>
            <th>Trạng thái hàng mới</th>
            <th>hành động</th>
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
            <!-- <td>
                <a href="product.html"><img src="storage/app/products/{{$item->image}}" alt="" height="200px"></a>
            </td> -->
                    <td>
                        @if(!empty($item->image))
                            <div style="width: 100px;height: 100px;">
                                <img src="{{Storage::url($item->image)}}"
                                     style="max-width: 100%; max-height: 100%;" alt="">
                            </div>
                        @endif
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
                        <button type="submit" class="btn btn-success">Xóa</button>
                    </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<center><button class="btn btn-primary"><a href="{{route('products.create')}}" style="color: #fff;">Thêm</a></button></center>
@endsection