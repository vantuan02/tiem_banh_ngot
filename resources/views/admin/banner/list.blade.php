@extends('admin.master')
@section('content')
<button class="btn btn-primary"><a href="{{route('banner.create')}}" style="color: #fff;">Thêm</a></button>
<table class="table table-striped">
    <thead>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Hình ảnh</th>
            <th>hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                @if(!empty($item->image))
                <div style="width: 100px;height: 100px;">
                    <img src="{{Storage::url($item->image)}}" style="max-width: 100%; max-height: 100%;" alt="">
                </div>
                @endif
            </td>
            <td>
                <button class="btn btn-success"><a href="" style="color: #fff;">Sửa</a></button>
            </td>
            <td>
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-success">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection