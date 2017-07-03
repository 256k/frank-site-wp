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



// fliter section
var slideSpeed = 200;
var $menuItemLink = $(".menu-item a");
var $galleryGrid = $(".gallery-grid");

$menuItemLink.on('click', function(e){
  e.preventDefault();
  $galleryGrid.children().slideUp(slideSpeed);
  var $filterKey = $(this).text().toLowerCase();
  if ($filterKey == "all"){
    console.log($filterKey);
    $galleryGrid.children().slideUp(slideSpeed);
    $galleryGrid.children().slideDown(slideSpeed);
  }else {
    console.log($filterKey);
    $galleryGrid.find("."+$filterKey).slideDown(slideSpeed);
  }
});

});
