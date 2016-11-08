$(function(){
	$('.menu-icon').on('click',function(){
		$(this).fadeOut();
		$('.slide-menu').css('right', '0');
		$('.close').fadeIn();

	});

	$('.close').on('click',function(){
		$(this).fadeOut();
		$('.slide-menu').css('right', '-300px');
		$('.menu-icon').fadeIn();
	});


	//$('#menu-hambuger-nav').hover()
	$('.enter').on('click',function(){
		$(this).fadeOut();
		$('.portfolio').fadeIn().slideDown();
		// $('footer .slant').fadeOut('slow', function(){
		// 	$(this).slideDown();
		// });
		// $('footer').fadeOut('slow', function(){
		// 	$(this).slideDown();
		// });
	});

	$.fn.moveIt = function(){
	  var $window = $(window);
	  var instances = [];
	  
	  $(this).each(function(){
	    instances.push(new moveItItem($(this)));
	  });
	  
	  window.onscroll = function(){
	    var scrollTop = $window.scrollTop();
	    instances.forEach(function(inst){
	      inst.update(scrollTop);
	    });
	  }
	}

	$.fn.moveIt = function(){
	  var $window = $(window);
	  var instances = [];
	  
	  $(this).each(function(){
	    instances.push(new moveItItem($(this)));
	  });
	  
	  window.onscroll = function(){
	    var scrollTop = $window.scrollTop();
	    instances.forEach(function(inst){
	      inst.update(scrollTop);
	    });
	  }
	}

	var moveItItem = function(el){
	  this.el = $(el);
	  this.speed = parseInt(this.el.attr('data-scroll-speed'));
	};

	moveItItem.prototype.update = function(scrollTop){
	  var pos = scrollTop / this.speed;
	  this.el.css('transform', 'translateY(' + -pos + 'px)');
	};

	$(function(){
	  $('[data-scroll-speed]').moveIt();
	});
	
	console.log("It's working");
 	
});