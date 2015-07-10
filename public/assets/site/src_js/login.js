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
//========滑动加载
	// $(window).on('load',function(){
	// 	waterfall();
	// 	var dataInt = {'data':[{'src':'1.jpg'},{'src':'2.jpg'},{'src':'3.jpg'},{'src':'4.jpg'}]};
	// 	$(window).on('scroll',function(){
	// 		if(checkscrollside()){
	// 			$.each(dataInt.data,function(key,value){
	// 				var oPin = $('<div>').addClass('pin').appendTo($("#main"));
	// 				var oBox = $('<div>').addClass('box').appendTo($(oPin));
	// 				$('<img>').attr('src',"/assets/site/images/imgs/"+ $(value).attr('src')).appendTo($(oBox));
	// 			});
	// 	waterfall();
	// 		}			
	// 	})
	// })
	// function waterfall(parent,pin){
	// 	var $aPin = $('#main>div'); //只能查到main的父及div
	// 	var iPinW = $aPin.eq(0).outerWidth();//一个框快的宽度
	// 	var num   = Math.floor( $(window).width()/ iPinW );//每行中能容纳的pin个数【窗口宽度除以一个块框宽度
	// 	// $('#main').width(iPinW*num).css('margin','0 auto');
	// 	// window.resize = function(){
	// 	// 	if($(window).width()< num*iPinW){
	// 	// 		$('#main').width(iPinW*num).css('margin','0 auto');				
	// 	// 	}
	// 	// }				
	// 	    $( "#main" ).css({
 //        	'width' : iPinW * num,
 //       		'margin': '0 auto'
 //    });
	// 	var pinHArr = [];//用于存储 每列中的所有块框相加的高度。
	// 	$aPin.each(function(index,value){
	// 		var pinH = $aPin.eq(index).outerHeight();
	// 		if(index<num){
	// 			pinHArr[index] = pinH;//第一行中的num个块框pin 先添加进数组pinHArr
	// 		}else{
	// 			var minH = Math.min.apply(null,pinHArr);
	// 			var minHIndex = $.inArray(minH,pinHArr);
	// 			$(value).css({
	// 				'position':'absolute',
	// 				'top':minH+15,
	// 				'left':$aPin.eq(minHIndex).position().left
	// 			});
	// 			pinHArr[minHIndex]+= $aPin.eq(index).height()+15;
	// 		}
	// 	});
	// }
	// function checkscrollside(){
	// 	var $aPin = $("#main>div");
	// 	var lastPinH  = $aPin.last().get(0).offsetTop + Math.floor($aPin.last().height()/2);
	// 	var scrollTop = $(window).scrollTop();
	// 	var documentH = $(document).width();
	// 	return(lastPinH<scrollTop + documentH)? true : false;
	// }
//======
$( window ).on( "load", function(){
   // 调用waterfall函数
   waterfall();
   var dataInt = {'data':[{'src':'1.jpg'},{'src':'2.jpg'},{'src':'3.jpg'},{'src':'4.jpg'}]};
   window.onscroll = function(){//拖动出现滚动条
    if(checkscrollside()){
   		$.each(dataInt.data,function(key,value){
   			var $oPin = $('<div>').addClass('pin').appendTo($('#main'));
   			var $oBox = $('<div>').addClass('box').appendTo($oPin);
   			$('<img>').attr('src','/assets/site/images/imgs/'+$(value).attr('src')).appendTo($oBox);
   		})
   		waterfall();
   	}

   }
   // window.resize = function(){
   // 	alert(window.width);
   // };
});
function waterfall(){
 // 计算及定位数据块显示分散效果
 	var $aPin = $("#main>div");
 //一个框快的宽度	
 	var iPinW =  $aPin.eq(0).outerWidth();
 	var win_W = $(window).width();
 	var num = Math.floor(win_W / iPinW);//一列有几个pin
 	// $(window).on('resize',function(){
 		$('#main').css({
 		'margin':'0 auto',
 		'width' : iPinW * num
 	// })
 		// $('#main').css({
 		// 'margin':'0 auto',
 		// 'width' : iPinW * num
 	});
 	var pinHArr = [];//用于存储 每列中的所有块框相加的高度。
	 	$aPin.each(function(index,value){
	 		var PinH = $aPin.eq(index).outerHeight();
	 		if(index<num){
	 			pinHArr[index] = PinH;//第一行中的num个块框pin 先添加进数组pinHArr
	 		}else{
	 			var minH = Math.min.apply(null,pinHArr);
	 			var minHIndex = $.inArray(minH,pinHArr);
	 			$(value).css({
	 				'position':'absolute',
	 				'top':minH+15,
	 				'left':$aPin.eq(minHIndex).position().left
	 			});
	 			pinHArr[minHIndex] += $aPin.eq(index).height()+15;
	 		}
	 	})
}
function checkscrollside(){
  // 检测是否具备了加载数据块的条件
  	var $aPin = $("#main>div");
  	var lastPinH = $aPin.last().get(0).offsetTop + Math.floor($aPin.last().height()/2);
  	var scrollTop = $(window).scrollTop();
  	var documentH = $(document).width();
  	return (lastPinH<scrollTop+documentH)? true : false;
}
});















