

$(document).ready(function() {   
  
  $(window).scroll( function() {
    
    $('.hideme').each( function(i){
      
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      
      if( bottom_of_window > bottom_of_object ){
        $(this).addClass("active");
      }
    }); 
  });
  function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
  }
  $('.panel-group').on('hidden.bs.collapse', toggleIcon);
  $('.panel-group').on('shown.bs.collapse', toggleIcon);
  
});


$(document).click(function(e) {
	if (!$(e.target).is('.panel-body')) {
    	$('.collapse').collapse('hide');	    
    }
});