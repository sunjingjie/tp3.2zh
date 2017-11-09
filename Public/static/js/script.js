



/*******************横幅轮播JS  banner       *************************/






(function($){
		  
	$("div[data-scro='controler'] b,div[data-scro='controler2'] a").click(function(){
		var T = $(this);
		if(T.attr("class")=="down") return false;
		J2ROLLING_ANIMATION.st({
			findObject : T,	//当前点击对象 默认写
			main : T.parent().parent().find("div[data-scro='list']"),	//滚动目标容器窗口对象
			pagSource : T.parent().parent().find("div[data-scro='controler'] b"),	//切换按钮对象
			className : "down",		//选中的样式
			duration : "slow",		//滚动速度 和jquery速度一致
			on : $(this)[0].tagName=="A" ? true : false		//用于判断是否开启无限滚动 or 来回切换
		});
		return false;
	});
	
	var J2SETTIME="", J2Time=true,J2ROLLING_ANIMATION = {
		init : function(){
			this.start();
			this.time();	
		},
		st : function(o){
			if(J2Time){
				this.animate(o.findObject,o.main,o.className,o.duration,o.pagSource,o.on);
				J2Time = false;
			}
		},
		animate : function(T,M,C,S,P,O){
				var _prevDown = O ? P.parent().find("*[class='"+C+"']") : T.parent().find(T[0].tagName+"[class='"+C+"']"),
					_prevIndex = _prevDown.index(),
					_thisIndex = O ? (T.attr("class")=="next" ? _prevIndex+1 : _prevIndex-1) : T.index(),
					_list = M.find(".item"),
					p2n = 1;
				_prevDown.removeClass(C);
				if(O){
					if(_thisIndex==-1) _thisIndex=_list.size()-1;
					if(_thisIndex==_list.size()) _thisIndex=0;
					P.eq(_thisIndex).addClass(C);
				}else{
					T.addClass(C);
				}
				if(T.attr("class")=="prev" || _thisIndex<_prevIndex) p2n = false;
				if((T.attr("class")=="next" || _thisIndex>_prevIndex)&&T.attr("class")!="prev") p2n = true;
				
				!p2n ? _list.eq(_thisIndex).css("left",-M.width()) : '';
				_list.eq(_prevIndex).animate({left:p2n ? -M.width() : M.width()},S,function(){
					$(this).removeAttr("style");	
					J2Time = true;
				});
				_list.eq(_thisIndex).animate({left:"0px"},S);
		},
		start : function(){
			$("#banner div[data-scro='controler'] b,#banner div[data-scro='controler2'] a").mouseover(function(){
				window.clearInterval(J2SETTIME);																			   
			}).mouseout(function(){
				J2ROLLING_ANIMATION.time();
			});
		},
		time : function(){
			J2SETTIME = window.setInterval(function(){
				var num = $("#banner div[data-scro='controler'] b[class='down']").index(),
					_list = $("#banner div[data-scro='list'] li");
				_list.eq(num).animate({"left":-$("#banner div[data-scro='list']").width()},"slow",function(){
					$(this).removeAttr("style");	
					$("#banner div[data-scro='controler'] b").removeClass("down").eq(num).addClass("down");
				});	
				num++;
				if(num==_list.size()){
					num=0;
				}
				_list.eq(num).animate({"left":"0px"},"slow");		
			},4000);
		}
	};
	$("a").click(function(){
		$(this).blur();				  
	});
	
	J2ROLLING_ANIMATION.init();	//是否开启自动轮播
})(this.jQuery || this.baidu);







$(function(){
	
	//确认订单页面JS
	
	$(".address_box .show input[type='radio']").each(function(index){
	$(this).click(function(){
		var n = index + 1;
		$(this).parent().hide();
		$(this).parent().siblings().show();
		$("#address"+n).attr("checked",true);
		$(this).parents('.address_box').siblings('.address_box').children(".hidden").hide();
		$(this).parents('.address_box').siblings('.address_box').children(".show").show();
											
		})
	});	
	
	
	
	
	//确认订单页面的加减
	
	var one = parseInt("1");
 	
	$("#makesure_page .reduce").click(function(){
			var one = parseInt("1");//一个值需要转为数字作为加减法运算
			var $inputvalue= $(this).siblings("input").val();//找到input 框里面的值
			var $input_reduce = $inputvalue-one;//将input 框里面的值减1
			var $value=$(this).siblings("input").val($input_reduce);//再将值设置出去
			
			
			
			if($(this).siblings("input").val()<1){
				$(this).siblings("input").val("1");
				}	
		});
		
	$("#makesure_page .add").click(function(){
			
			var $inputvalue= $(this).siblings("input").val();
			var $input_add = +$inputvalue+1; //运算前加+号使它变成数值+++++++++++++++++++++++++++++++++++
			var $inputvalue=$(this).siblings("input").val($input_add);
			
		});	



//尺码表页面JS

$(".thickness").click(function(){
		var $thickness = $(this).attr('status');
		if($thickness=="on"){
			$(this).css({border:"2px solid #d20303"});
			$(this).attr("status","off");
			$thickneww=$(this).text();
			$("input[name='thicknessvalue']").val($thickneww);
			$(this).siblings(".thickness").css({border:"2px solid #fff"}).attr("status","on");
		}
		if($thickness=="off"){
			$(this).css({ border:"2px solid #fff" });
			$(this).siblings(".thickness").css({border:"2px solid #fff"}).attr("status","on");
			$(this).attr("status","on");
		}	
	});
	
	
	$("span.size").click(function(){
		var $size = $(this).attr('status');
	
		if($size=="on"){
			$(this).css({ border:"2px solid #d20303" });
			$(this).attr("status","off");
			$size=$(this).text();
			$("input[name='sizevalue']").val($size);
			$(this).siblings(".size").css({border:"2px solid #fff"}).attr("status","on");
			
		}
		if($size=="off"){
			$(this).css({ border:"2px solid #fff" });
			$(this).siblings(".size").css({border:"2px solid #fff"}).attr("status","on");
			$(this).attr("status","on");
			
		}	
	});
	
	
	
	$("span.color").click(function(){
		var $color = $(this).attr('status');
	
		if($color=="on"){
			$(this).css({ border:"2px solid #d20303" });
			$(this).attr("status","off");
			$color=$(this).text();
			$("input[name='colorvalue']").val($color);
			$(this).siblings(".color").css({ border:"2px solid #fff" }).attr("status","on");
		}
		if($color=="off"){
			$(this).css({ border:"2px solid #fff" });
			$(this).siblings(".color").css({border:"2px solid #fff"}).attr("status","on");
			$(this).attr("status","on");
			
		}	
	});



 $(".size_form #count_number").click(function(){
	 
	 if($(this).val()<1){
				$(this).val("1");
				}	
	 
	 
	 });




	//部分页面的数值加减
	var one = parseInt("1");
 	
	$(".numbers_override .reduce").click(function(){
			var one = parseInt("1");//一个值需要转为数字作为加减法运算
			var $inputvalue= $(this).siblings("input").val();//找到input 框里面的值
			var $input_reduce = $inputvalue-one;//将input 框里面的值减1
			var $value=$(this).siblings("input").val($input_reduce);//再将值设置出去
			
			
			
			if($(this).siblings("input").val()<1){
				$(this).siblings("input").val("1");
				}	
		});
		
	$(".numbers_override .add").click(function(){
			
			var $inputvalue= $(this).siblings("input").val();
			var $input_add = +$inputvalue+1; //运算前加+号使它变成数值+++++++++++++++++++++++++++++++++++
			var $inputvalue=$(this).siblings("input").val($input_add);
			
		});	


	//全选 反选 功 能  #all=#check_all  #content  =#check_list_show
var allBtn = $("#all");
var checkboxObj = $("#list_show_content .list_info_title input");
//全选按钮的事件操作
allBtn.click(function(){
	var status = allBtn.is(":checked");
	if(status){
		// alert('这里放置全选功能');
		checkboxObj.each(function(){
			$(this).prop("checked","checked");
		});
	}else{
		// alert('这里放置全部取消功能');
		checkboxObj.each(function(){
			$(this).removeAttr("checked");
		});
	}
});


//这是content区域checkbox的事件操作
checkboxObj.each(function(){
	$(this).click(function(){
		var status = $(this).is(":checked");
		var checkedObj = $("#list_show_content .list_info_title input:checked");
		var totalLength = checkboxObj.length;
		var checkedLength = checkedObj.length;
		if(status){
			// alert('全选按钮被选中');
			if(totalLength == checkedLength){
				allBtn.prop("checked","checked");
			}
		}else{
			//alert('全选按钮取消选中');
			if(checkedLength < totalLength){
				allBtn.removeAttr("checked");
			}
		}
	});
});
		






//登录页面的JS	
$(function (){
	
	//当input.uname获得光标录入文字的时候文字变成
	$(".formlist input.uname").focus(function(){
		
		var sss="手机/会员名/邮箱";
		var $sss=$("input.uname").val();
		if(sss!=$sss){$("input.uname").css("color","#000");}
	});
	
	//当input.uname失去光标的时候文字变成如果里面的值等于默认值则将颜色设置成b6b6b6
	$(".formlist input.uname").blur(function(){
		var sss="手机/会员名/邮箱";
		var $sss=$("input.uname").val();
		if($sss=='手机/会员名/邮箱'){$("input.uname").css("color","#b6b6b6");}
		
	});
});


	
	//注册界面的JS
	




	
	
	});



$(function(){
	
	$(".form_regist input.uname").focus(function(){
		
		var pleaseinteruname="请输入手机号/会员名/邮箱";
		var $pleaseinteruname=$("input.uname").val();
		if(pleaseinteruname!=$pleaseinteruname){$("input.uname").css("color","#000");}
	});
	
	//当input.uname失去光标的时候文字变成如果里面的值等于默认值则将颜色设置成b6b6b6
	$(".form_regist input.uname").blur(function(){		
	var pleaseinteruname="请输入手机号/会员名/邮箱";
	var $pleaseinteruname=$("input.uname").val();
		if($pleaseinteruname=='请输入手机号/会员名/邮箱'){$("input.uname").css("color","#b6b6b6");}
	});
	
	
	
	
	
	
	$(".purchase_records .order_list form .list_info p a").click(function (){
		$(this).parent().parent().remove();
		});
	
	
	
	
	
	
	
	$(".purchase_records .order_list form .list_info .list_info_content .content_right .delete").click(function (){
		$(this).parent().parent().parent().remove();
		});
	
	});









