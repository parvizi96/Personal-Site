// JavaScript Document
 
$(document).ready(function(){
	if (screen.width>1000){
  $(window).scroll(function() {
	    
			  if($(document).scrollTop() >280) {
             $('.aboutMeText').animate({
            
          opacity:'1'
        },"slow");
	
    }
  });
	 $(window).scroll(function() {
    if ($(document).scrollTop() >280) {
             $('.html').animate({
            
           width:'100%'
        },"slow");
    }
  });
	 $(window).scroll(function() {
    if ($(document).scrollTop() >300) {
             $('.css').animate({
            
           width:'100%'
        },"slow");
    }
  });
		 $(window).scroll(function() {
    if ($(document).scrollTop() >400) {
             $('.js').animate({
            
           width:'40%'
        },"slow");
    }
  });
		 $(window).scroll(function() {
    if ($(document).scrollTop() >490) {
             $('.jq').animate({
            
           width:'20%'
        },"slow");
    }
  });
			 $(window).scroll(function() {
    if ($(document).scrollTop() >1330) {
             $('.consulting-post').animate({
           
           opacity:'1'
        },"slow");
    }
  });
					 $(window).scroll(function() {
    if ($(document).scrollTop() >700) {
             $('.imagePort').animate({
           
           opacity:'1'
        },"slow");
    }
  });

}
	else{
		  $(window).scroll(function() {
	    
			  if($(document).scrollTop() >10) {
             $('.aboutMeText').animate({
            
          opacity:'1'
        },"slow");
	
    }
  });
	 $(window).scroll(function() {
    if ($(document).scrollTop() >10) {
             $('.html').animate({
            
           width:'100%'
        },"slow");
    }
  });
	 $(window).scroll(function() {
    if ($(document).scrollTop() >10) {
             $('.css').animate({
            
           width:'100%'
        },"slow");
    }
  });
		 $(window).scroll(function() {
    if ($(document).scrollTop() >10) {
             $('.js').animate({
            
           width:'40%'
        },"slow");
    }
  });
		 $(window).scroll(function() {
    if ($(document).scrollTop() >10) {
             $('.jq').animate({
            
           width:'20%'
        },"slow");
    }
  });
			 $(window).scroll(function() {
    if ($(document).scrollTop() >10) {
             $('.consulting-post').animate({
           
           opacity:'1'
        },"slow");
    }
  });
					 $(window).scroll(function() {
    if ($(document).scrollTop() >10) {
             $('.imagePort').animate({
           
           opacity:'1'
        },"slow");
    }
  });
	}
 });
