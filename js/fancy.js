$('.getContactedVegan').hide();

$('#subMenuToggler').click(function() {
  $('#subMenu').toggleClass("active");
});

$('.accordion-heading, .accordion-toggler').each(function(){

  var $content = $(this).closest('section').find('.accordion-content');
  var $parent = $(this).closest('section');
  $(this).click(function(e){
    console.log("test");
    e.preventDefault();

    if($parent.hasClass("active")) {
      $parent.removeClass("active");
      $content.stop().slideUp();
    }else {
      $parent.addClass("active");
      $content.stop().slideDown();
    }
  });
});
