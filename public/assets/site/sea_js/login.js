define("sea_js/login",["js/jquery.validate.js"], function(require, exports, module){
    // 或者可以这么写，
 	$().ready(function(){
		$('#myform').validate({
			debug:true,
			rules:{
				Names:{
					required:true,
					minlength:3
				},
				emails:{
					required:true,
					minlength:3
				},
			},
		});
	})

});