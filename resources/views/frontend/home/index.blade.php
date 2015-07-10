@extends('frontend.layout.default')
@section('title') Home @stop
@section('css')
<style>
	label{
		margin-top: 5px;
}
</style>
@stop
@section('content')
	<form class="form-horizontal" id="myform">
		<div class="form-group">
			<label for="Names" class="col-sm-1 control-label">Name</label>
			<div class="col-sm-4">
				<input type="text" class="form-control focus" id="Names" name="Names"placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="emails" class="col-sm-1 control-label">email</label>
			<div class="col-sm-4">
				<input type="text" class="form-control focus" id="emails" name="emails" placeholder="emails">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-1 control-label">password</label>
			<div class="col-sm-4">
				<input type="password" class="form-control focus" id="password" name="password"placeholder="password">
			</div>
		</div>
		<div class="form-group">
			<label for="age" class="col-sm-1 control-label">age</label>
			<div class="col-sm-4">
				<input type="text" class="form-control focus" id="age" name="age" placeholder="age">
			</div>
		</div>
				
		<input type="submit" class="btn btn-default" id="aa" value="提交">
	</form>	
	<br/>
	<hr/>
	<!-- //特效 -->
<!-- 	<div class="nav_list">
		<ul>
			<li><a class="toolist effect-1" href="#"> HOME  <span class="toolist-content"><i class="glyphicon glyphicon-home"></i></span></a></li>
			<li><a class="toolist effect-2" href="#"> About Me <span class="toolist-content"><i class="glyphicon glyphicon-user"></i></span></a></li>
			<li><a class="toolist effect-3" href="#"> Photo <span class="toolist-content"><i class="glyphicon glyphicon-camera"></i></span></a></li>
			<li><a class="toolist effect-4" href="#"> Work <span class="toolist-content"><i class="glyphicon glyphicon-briefcase"></i></span></a></li>
			<li><a class="toolist effect-5" href="#"> Content <span class="toolist-content"><i class="glyphicon glyphicon-picture"></i></span></a></li>
		</ul>
	</div> -->
	<div id="main">
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/1.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/2.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/3.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/4.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/5.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/6.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/7.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/8.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/9.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/10.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/11.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/12.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/13.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/14.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/15.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/16.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/17.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/18.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/19.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/20.jpg">
			</div>
		</div>
		<div class="pin">
			<div class="box">
				<img src="/assets/site/images/imgs/21.jpg">
			</div>
		</div>
	</div>
@endsection
@section('script')
<script>
	seajs.config({
        base: "/assets/site/"
    });
    seajs.use("src_js/login");
</script>
@stop













