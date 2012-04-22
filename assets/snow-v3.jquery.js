(function(){
	//参数
	var num  = 300;//数量越大数量越多
	var speed= 5;//数字越小速度越快
	//=======================================================
	//=======================================================
	$(document).ready(function(){
	var html_body = $("body");
	var html_height = $(document).height() - 10;
	var html_width = $(document).width();
	var win_height = $(window).height();
	var scroll_top = 0;
	var h= 0;
	$(document).mousemove(function(e){
		h =e.clientX - html_width /2;
		//$("#a").html(h);
	})
	$(document).scroll(function(){
		scroll_top = $(document).scrollTop();
	})
//=============================================================	
	function snow(){
		var size =8;
		var css_top = -10 + scroll_top;
		var css_left = Math.random()*99;
		var thisSnow = $("<div></div>");
		thisSnow.css({
			"height":8,
			"width":8,
			"color":"#fff",
			"font-size":6+Math.random()*6 + "px",
			"position":"absolute",
			"top":css_top,
			"left":css_left+"%"
		});
		thisSnow.append("●");
		html_body.append(thisSnow);
	//	thisSnow.animate({top:html_height},html_height*2,function(){
	//		thisSnow.remove();
	//	});
	var time = setInterval(function(){
		thisSnow.css("top",css_top = css_top+1.5);
		thisSnow.css("left",(css_left = (css_left+h/9000)) + "%");
		if(css_left > 99){
			css_left = css_left - 99;
		}
		if(css_left < 0){
			css_left = css_left + 99;
		}
		if(css_top > (win_height+scroll_top)){
			clearInterval(time);	
			thisSnow.remove();
		}
	},speed);
};
//======start================================================	


setInterval(function(){snow();},num);
	//===ready_over====================	
	})
})();