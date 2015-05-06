@extends('frontend.layout.default')
@section('title') Home @stop
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
@endsection
@section('script')

<script>
	seajs.config({
        base: "{{asset('assets/site/sea_js')}}"
    });
    seajs.use('login');
	// $().ready(function(){
	// 	$('#myform').validate({
	// 		debug:true,
	// 		rules:{
	// 			Names:{
	// 				required:true,
	// 				minlength:3
	// 			},
	// 			emails:{
	// 				required:true,
	// 				minlength:3
	// 			},
	// 		},
	// 	});
	// })
</script>
@stop













