$(function () {
	$("#Ban_li li").hover(function(){
		$("#Ban_li li").removeClass("Ban_li");
		// $("#Ban_top li").css("display","none")
		$(this).each(function(){
		$(this).addClass("Ban_li");
		// $("#Ban_top li").css("display","none").eq($(this).index()).css("display","block");
		$("#Ban_top li").css("display","none").eq($(this).index()).css("display","list-item");
		console.log($(this).index())
	})
	},function(){
		// $("#Ban_li li").first().addClass("Ban_li");
		// $("#Ban_top li").first().css("display","block")
	})
})