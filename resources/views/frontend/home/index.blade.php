@extends('frontend.layout.default')
@section('title') Home @stop
@section('top-pic')
	<div class="carousel slider" id="generic" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="generic" data-slide-to="0" class="active"></li>
			<li data-target="generic" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner imgs" role="listbox">
			<div class="item active">
				<img src ="{{asset('assets/site/images/banan1.jpg')}}" alt="2222"/>
			</div>
			<div class="item">
				<img src="{{asset('assets/site/images/banan1.jpg')}}" alt="111">
			</div>
		</div>
		<a class="left carousel-control" href="#generic" role="buttom" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">previous</span>
		</a>
		<a class="right carousel-control" href="#generic" role="buttom" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">next</span>
		</a>
	</div>
@endsection
@section('content')
	<div class="row">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail">
				<img src="{{asset('assets/site/images/banan1.jpg')}}"  class="img-circle"/>
				<div class="caption">
					<h4>aaaaa</h4>
					<p>12312312</p>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail">
				<img src="{{asset('assets/site/images/banan1.jpg')}}"  class="img-circle"/>
				<div class="caption">
					<h4>aaaaa</h4>
					<p>12312312</p>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail">
				<img src="{{asset('assets/site/images/banan1.jpg')}}"  class="img-circle"/>
				<div class="caption">
					<h4>aaaaa</h4>
					<p>12312312</p>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail">
				<img src="{{asset('assets/site/images/banan1.jpg')}}"  class="img-circle"/>
				<div class="caption">
					<h4>aaaaa</h4>
					<p>12312312</p>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2">
			<div class="thumbnail">
				<img src="{{asset('assets/site/images/banan1.jpg')}}"  class="img-circle"/>
				<div class="caption">
					<h4>aaaaa</h4>
					<p>12312312</p>
				</div>
			</div>
		</div>
		<div class="col-sm-1 col-md-1"></div>
	</div>
	<div class="product-head">
		<div class="p_head">我们的茶品</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-md-4">
			<div class="product">
				<h4>aaaaa</h4>
				<p>bbbbbb</p>
				<button type="button" class="btn btn-info">dianji</button>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<div class="product">
				<h4>aaaaa</h4>
				<p>bbbbbb</p>
				<button type="button" class="btn btn-info">dianji</button>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<div class="product">
				<h4>aaaaa</h4>
				<p>bbbbbb</p>
				<button type="button" class="btn btn-info">dianji</button>
			</div>
		</div>
	</div>
		<div class="product-head">
			<div class="p_head">我们的茶品</div><hr/>		
		</div>
		<div class="row">
		<div class="col-sm-4 col-md-4">
			<div class="product">
				<h4>aaaaa</h4>
				<p>bbbbbb</p>
				<button type="button" class="btn btn-info">dianji</button>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<div class="product">
				<h4>aaaaa</h4>
				<p>bbbbbb</p>
				<button type="button" class="btn btn-info">dianji</button>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<div class="product">
				<h4>aaaaa</h4>
				<p>bbbbbb</p>
				<button type="button" class="btn btn-info">dianji</button>
			</div>
		</div>
	</div>
@endsection














