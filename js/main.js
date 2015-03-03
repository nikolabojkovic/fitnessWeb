$(document).ready(function(){
					$("#top-page").on("click",function(){
						 $("html, body").animate({ scrollTop: 0 }, "medium");
					});					
					$(".item-hover").hover(function(){
						$(this).children().css("visibility","visible");
						$(this).parent().children("hr").css("border-color","white");
					},
					function(){
						$(this).children().css("visibility","hidden");
						$(this).parent().children("hr").css("border-color","#909090");
					});
});