$(document).ready(function(){
    
    var lang;
    var current;
    var prev;
    
    $(".logo").hover(function(){
	    $(this).css("color", "#FF0000");
    }, function(){
	    $(this).css("color", "#000000");
    });
    
	$("#english").click(function(){
		lang = 'english';
		$("#logos").css("display", "none");
		$("#intro-english").css("display", "block");
	});
	
	$("#croatian").click(function(){
		lang = 'croatian';
		$("#logos").css("display", "none");
		$("#intro-croatian").css("display", "block");
	});
	
	$(".intro-start").click(function(){
		
		current = 1;
		
		$("#question").css("display", "block");
		
		if(lang == 'english'){
			$("#intro-english").fadeOut(400, function(){
				$("#q1 .english").fadeIn(400, function(){
					$("#next").fadeIn(400);
				});
			});
			$('#next h2').text("next");
			
		} else if (lang == 'croatian') {
			$("#intro-croatian").fadeOut(400, function(){
				$("#q1 .croatian").fadeIn(400, function(){
					$("#next").fadeIn(400);
				});
			});
			$('#next h2').text("sljedeće");
			$('#next').css('left', '408px');
		}
	});
	
	$("#next").click(function(){
		if($('#q'+current+' span').hasClass('selected')) {
							
			var cq = $('#q'+current+' input:checked').attr('name');
			var an = $('#q'+current+' input:checked').val();
			
			$.post('processor.php', {currect_question : cq , answer : an}).done(function(data){			
				$("#error").html('');
				
				if(current == 15){
					$.post('result.php', function(data){
						if (lang == 'english'){
							$('#q'+current).fadeOut(400, function(){
								window.location.replace("result_eng.php");
							});
							
						} else if (lang == 'croatian') {
							$('#q'+current).fadeOut(400, function(){
								window.location.replace("result_cro.php");
							});
						}
					});
				} else {
					prev = current;
					current += 1;
					
					if (lang == 'english'){
						$('#q'+prev).fadeOut(400, function(){
							$('#q'+current+' .english').fadeIn(400, function(){
								if(current == 15){
									$('#next h2').text("submit");
								}
							});
						})
						
					} else if (lang == 'croatian') {
						$('#q'+prev).fadeOut(400, function(){
							$('#q'+current+' .croatian').fadeIn(400, function(){
								if(current == 15){
									$('#next h2').text("prijavi");
								}
							});
						})
					}
				}
				
			});			
		} 
		else {
			if (lang == 'english'){
				$("#error").html('<p>Please make a selection!</p>');
					
			} else if (lang == 'croatian') {
				$("#error").html('<p>Molimo napraviti izbor!</p>');	
			}
		}
		
	});
		
});

$(function(){

	$.fn.fancyRadio = function(){
		return $(this).each(function(){
			var p = $(this),
				container = $('<span class="radio-container"/>'),
				radio = $('<span class="radio"/>');

			p.find('input[type="radio"]').wrap(container);
			p.find('span.radio-container').append(radio);
			p.find('input:selected').parent()
									.find('span.radio').addClass('selected');

			p.find('input[type="radio"]').on('click',function(){
				p.find('span.selected').removeClass('selected');
				$(this).parent().find('span.radio').addClass('selected');
			});
		});
	};
	
	$('form.custom').fancyRadio();
});
