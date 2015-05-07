define('src_js/login',['/assets/site/js/jquery.min.js','/assets/site/js/bootstrap.min.js','/assets/site/js/jquery.validate.js'],function(require, exports, module){	
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
				password:{
					required:true,
					minlength:6
				}
			},
			messages:{
				Names:{
					required:'选项为必填',
					minlength:'最小长度为3位',
				}	
			}
				 	
		});
	})

});