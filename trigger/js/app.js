//angular object
var app = angular.module("triggerApp", []);
$(document).ready(function(){
  //bxSlider plugin properties for the different carousels
  //main Header carousel
  $('.carousel').bxSlider({
    controls: false,  //no left and right controls
    easing: 'ease-in-out',
    auto: true,  
    pause: 5000  //5 second delay
  });

  $('.client-carousel').bxSlider({
    controls: false,
    easing: 'ease-in-out',
    auto:true,
    pager: false,   //no pager controls (like header carousel selectors)
    pause: 5000
  });

  //animation for user page scrolling for all sections and footer
  $('section, footer').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp', //animate.css fadeInUp class
        offset: 50
  });

  $(document).on("scroll", onScroll);
    //affects links with "#" and their target position
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        //clears active class from all links
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active'); //adds active class to link clicked
      
        var target = this.hash, //target variable saves # location
            menu = target;   //id selector
        $target = $(target);  //target id is jQuery selector
        //smoothscroll animation
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });

  //Show dropdown menu when hamburger icon is clicked
  //Hides when a link in the dropdown menu is clicked
  $('#menu, #dropdown ul li a').click(function() {
    $('#dropdown').slideToggle("slow", function(){
      $(this).removeAttr('style').toggleClass('show');

    });
  });
});


function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#nav-list ul li a, #dropdown ul li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }

    });
}
