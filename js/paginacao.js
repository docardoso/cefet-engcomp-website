
$(document).ready(function () {
	
	
	
	/*$("#arquivosButton").hover(function(e){
		e.preventDefault;
		console.log("hover");
	});
	
	$("#arquivosButton").click(function(e){
		e.preventDefault;
		console.log("OK");
		//$("#listaArquivos").toggle();
	});*/
	
	$("a.page-scroll").click(function(e) {
		e.preventDefault();



		var position = $($(this).attr("href")).offset().top;

		$("body, html").animate({
			scrollTop: position-130
		} /* speed */ );

		$(".nav-item.active").removeClass("active");			
		$(this).parent().addClass("active");
	});
	
	
	$(window).scroll(function() {
    if ($(this).scrollTop() > 60) {
        $('#menu').css("opacity","0.9");
		
    } else {
        $('#menu').css("opacity","1.0");
    }
	
	//manual efeito rolling with navbar
	/*var home = $("#myCarousel").position().top;
	var informacao = $("#info").position().top;
	var comochegar = $("#comochegar").position().top;
	var aluno = $("#aluno").position().top;
	var professores = $("#prof").position().top;
	var contato = $("#contat").position().top;
	
		
	if($(this).scrollTop() > home){
		$(".nav-item.active").removeClass("active");			
		$(".nav-item:nth-child(1)").addClass("active");
	}
		
	if($(this).scrollTop() > informacao){
		$(".nav-item.active").removeClass("active");			
		$(".nav-item:nth-child(2)").addClass("active");
	}
		
	if($(this).scrollTop() > professores){
		$(".nav-item.active").removeClass("active");			
		$(".nav-item:nth-child(6)").addClass("active");
	}
	
	if($(this).scrollTop() > contato){
		$(".nav-item.active").removeClass("active");			
		$(".nav-item:nth-child(7)").addClass("active");
	}*/
	
	
	});
	
	if($(window).width() < 719){
			$("#menu div").removeClass("mx-auto d-sm-flex d-block flex-sm-nowrap");
			$(".nav-item:nth-child(4)").css("display","none");
	}
	
	
	$(window).resize(function() {
  		if($("#menu").width() < 719){
			$("#menu div").removeClass("mx-auto d-sm-flex d-block flex-sm-nowrap");
			$(".nav-item:nth-child(4)").css("display","none");
		} else {
			$("#menu div").addClass("mx-auto d-sm-flex d-block flex-sm-nowrap");
			$(".nav-item:nth-child(4)").css("display","block");
		}
	});
	
	/*  botaoo arquivos */
	
	
});

