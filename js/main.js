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
					$(".toggle-item").hide();
					$(".faq div section").first().show();
					$(".faq div div span").first().text("-");
					$(".toggle").click(function(){
						$(this).parent().children(".toggle-item").slideToggle("slow");
						if($(this).children(".toggle .mark").text() === "+")
							$(this).children(".toggle .mark").text("-");
						else 
							$(this).children(".toggle .mark").text("+");
					});
					//$(".dropdown,open").click(function(){
					//	$(this).parent().children(".dropdown-manu").slideToggle("slow");
					//});
});