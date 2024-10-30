@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('trang-chu')}}">Home</a> / <span>Chi tiết sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					@if(!empty($sanpham->image))
					<div class="col-sm-4">
						<img src="{{Storage::url($sanpham->image)}}" alt="" height="250px">
					</div>
					@endif
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title">{{$sanpham->name}}</p>
							<p class="single-item-price">
								@if($sanpham->promotion_price==0)
								<span class="flash-sale">{{number_format($sanpham->unit_price)}}đ</span>
								@else
								<span class="flash-del">{{number_format($sanpham->unit_price)}}đ</span>
								<span class="flash-sale">{{number_format($sanpham->promotion_price)}}đ</span>
								@endif
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>{{$sanpham->description}}</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Số lượng:</p>
						<div class="single-item-options">
							<input class="wc-select" name="qty" type="number" min="1" value="1" />
							<a class="add-to-cart" href=""><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô tả</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p>{{$sanpham->description}}</p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản phẩm tương tự</h4>

					<div class="row">
						@foreach($sp_tuongtu as $sptt)
						<div class="col-sm-4">
							<div class="single-item">
								@if($sptt->promotion_price!=0)
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>
								@endif
								@if(!empty($sptt->image))
								<div class="single-item-header">
									<img src="{{Storage::url($sptt->image)}}" alt="" height="250px">
								</div>
								@endif
								<div class="single-item-body">
									<p class="single-item-title">{{$sptt->name}}</p>
									<p class="single-item-price">
										@if($sptt->promotion_price==0)
										<span class="flash-del">{{number_format($sptt->unit_price)}}đ</span>
										@else
										<span class="flash-del">{{number_format($sptt->unit_price)}}đ</span>
										<span class="flash-sale">{{number_format($sptt->promotion_price)}}đ</span>
										@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach
					</div> <!-- .beta-products-list -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection