/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    $(document).ready(function(){
	/*
	imageW = 360;
	var items = $('#carouselTop ul li').length;
	
	$("#carouselTop ul").css('width',(items*(imageW+5))+'px');
	
	var moveItem = function(){
	    
	    $("#carouselTop ul").animate({'left':'-=365px'},1000,function(){
		
		var item = $("#carouselTop ul li").first().html();
		
		$("#carouselTop ul li").first().remove();
		
		$("#carouselTop ul").css('left','0px');
		
		$("#carouselTop ul").append('<li>'+item+'</li>')
		
	    });
	    
	       
	}
	
	setInterval(moveItem,3000);
	*/
       
       var myAnim = 'fade';  // slide / fade
       
       
				        $('#frame_1').bjqs({
					 width    : 360,  
					height    : 265,				  
					responsive: true,
					automatic : false,
					animtype  : myAnim,
					animspeed : 3000,
					showcontrols : true, // show next and prev controls
					centercontrols : false, // center controls verically
					showmarkers : false, // Show individual slide markers
					centermarkers : false, // Center markers horizontally

					});
					
					$('#frame_2').bjqs({
					 width    : 360,  
					height    : 265,				  
					responsive: true,
					automatic : false,
					animtype  : myAnim,
					animspeed : 4000,
					showcontrols : true, // show next and prev controls
					centercontrols : false, // center controls verically
					showmarkers : false, // Show individual slide markers
					centermarkers : false, // Center markers horizontally

					});
					
					$('#frame_3').bjqs({
					 width    : 360,  
					height    : 265,				  
					responsive: true,
					automatic : false,
					animtype  : myAnim,
					animspeed : 5000,
					showcontrols : true, // show next and prev controls
					centercontrols : false, // center controls verically
					showmarkers : false, // Show individual slide markers
					centermarkers : false, // Center markers horizontally

					});
       
       
        var playTree = function(){
	   
	   $("#frame_3 .bjqs-next a").click();
	   
       }
       
       var playTwo = function(){
	   
	   $("#frame_2 .bjqs-next a").click();
	   
	   setTimeout(playTree,1000);
	   
       }
       
       var playOne = function(){
	   
	   $("#frame_1 .bjqs-next a").click();
	   
	   setTimeout(playTwo,1000);
	   
       }
       
       
       setInterval(playOne,5000);
      
       
       
    });