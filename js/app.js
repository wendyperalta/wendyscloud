//angular object
var app = angular.module("portfolioApp", []);

$(document).ready(function() {
	$("#dropdown").hide();
  $("#top-button").hide();
  $("#form-confirm").hide();
  $("#form-error").hide();

  //Page scrolling feature with jQuery Easing plugin
  $('a[href*=#]').each(function() {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         $(this).click(function() {
           $('html, body').stop().animate({scrollTop: targetOffset}, 1500, 'easeInOutExpo');
           return false;
         });
      }
  });


  //Show dropdown menu when hamburger icon is clicked
  $('#bar-container').click(function() {
  	$('#dropdown').slideToggle();
  });

  //Smoothly hides when a link in the dropdown menu is clicked
  $('#dropdown ul li a').click(function() {
  	$('#dropdown').slideToggle();
  });

  $(window).scroll(function(){
    if($(this).scrollTop() > 100) {
      $('#top-button').fadeIn();
    } else {
      $('#top-button').fadeOut();
    }
  });

  
  //float-label
   $('.floatlabel_2').floatlabel({
        labelStartTop: '50px',
        transitionDuration: 0.2,
        transitionEasing: 'ease'
   });
   $('.floatlabel_3').floatlabel();
   $('textarea.floatlabel_2').floatlabel();


  //--------FORM HANDLER------------//
  //form validate
  $("#ajax-form").validate({
    highlight: function(element){
      $(element).addClass('error');
    },unhighlight: function(element){
      $(element).removeClass('error');
    }
  });

  // Get the form.
  var form = $('#ajax-form');

  // Set up an event listener for the contact form.
  $(form).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();
    
    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Clear the form.
      $(form)[0].reset();
      $("#form-confirm").slideToggle('slow').delay(5000).slideToggle('slow');
      $('input').removeClass('.floatlabel_2 .floatlabel_3');
    })
    .fail(function(data) {
      $(form)[0].reset();
      $("#form-error").slideToggle('slow');
    });

  });

});