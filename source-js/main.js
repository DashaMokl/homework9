jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e)  {
    var targeted_popup_class = jQuery(this).attr('data-popup-open')
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350)
    e.preventDefault()
  })
  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e)  {
    var targeted_popup_class = jQuery(this).attr('data-popup-close')
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350)
    e.preventDefault()
  })
})

jQuery(document).ready(function() {
  jQuery('.flexslider').flexslider({
    animation: 'slide',
    directionNav: false, //the arrays disappeared
    controlNav: false //the dots disappeared
  })
})

jQuery(document).ready(function() {
  jQuery('.flexslider2').flexslider({
    animation: "slide",
    controlsContainer: jQuery(".custom-controls-container"),
    customDirectionNav: jQuery(".custom-navigation a"),
    controlNav: false, //the dots disappeared
    pauseOnHover: true
  })
})

jQuery(document).ready(function() {
  jQuery('.flexslider3').flexslider({
    animation: "slide",
    controlsContainer: jQuery(".custom-controls-container2"),
    customDirectionNav: jQuery(".custom-navigation2 a"),
    controlNav: false, //the dots disappeared
    pauseOnAction: true
  })
})
