$(document).ready(function(){
 var navbarPosition = 0;
 var isFixed = false;

 
 
$(window).on('scroll', function(navbarPosition){
  navbarPosition = ($(".js-navbar-marker").offset().top - $(window).scrollTop());
  
  if (navbarPosition < 0 && !isFixed){
    isFixed = true;
    $(".navbar-wrapper").addClass("js-fixedPos");
    $('.scrolled-title').css({height: '50px'});
  }
  if (navbarPosition > 0 && navbarPosition) {
      isFixed = false;
      $(".navbar-wrapper").removeClass("js-fixedPos");
      $('.scrolled-title').css({height: '0'});
      
    }
  
 
});

function endAnimation(){
  console.log("animation finished");
}

// fliter section
var slideSpeed = 500;
var $menuItemLink = $(".menu-item a");
var $galleryGrid = $(".gallery-grid");

$menuItemLink.on('click', function(e){
  e.preventDefault();
  $(this).parents(".menu").find("a").removeClass("active");
  $(this).addClass("active")
  
  var $filterKey = $(this).text().toLowerCase();
  console.log($filterKey);
  
  
  //
  $galleryGrid.slideUp(slideSpeed, function(){
    $galleryGrid.children().hide()
    if ($filterKey == "all"){
    
          $galleryGrid.children().fadeIn(slideSpeed);
    }else {
      $galleryGrid.find("."+$filterKey).fadeIn(slideSpeed);
    }
  }).slideDown(slideSpeed);
    
  
  
});



});
