<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
	  $('#bgd_santa').fadeOut()
	  var height = $(document).height();
	  var window_ = $(window).height();
      const initialHeight = $("#background img").height()
      $(window).scroll(function () {
        $('#background img')
          .css({ 'width': '95vw', 'height': `${initialHeight + $(this).scrollTop()}px` })
        if ($(window).scrollTop() + $(window).height() == $(document).height())
          $('#background img')
            .css({ 'width': '95vw', 'height': `${500}vh` })
        else
          $('#background img')
            .css({ 'width': '95vw', 'height': `${initialHeight + $(this).scrollTop()}px` })
//      	console.log($(this).scrollTop())
        //SANTA
        /*
        
        const santa = $('#bgd_santa')
        if (290 <= $(this).scrollTop()) 
          santa.css({ 'top': `${window_ + 290}%`, 'left': `-${santa.width()/4}px` }).fadeIn(200);
        else
          $('#bgd_santa').css({ 'top': '85vh', 'left': `-${santa.width()}px` }).fadeOut();
        if (860 <= $(this).scrollTop()) 
          $('#bgd_dulce').css({ 'top': '150vh', 'right': '-7vh' }).fadeIn();
        else
          $('#bgd_dulce').css({ 'top': '150vh', 'right': '-7vh' }).fadeOut();
        if (1990<= $(this).scrollTop())
          $('#bgd_regalo').css({ 'top': '250vh', 'left': '-4vh' }).fadeIn();
        else
          $('#bgd_regalo').css({ 'top': '250vh', 'left': '-4vh' }).fadeOut();
        */
      });
});

jQuery(document).ready(function( $ ){
      const initialHeight = $("#backgroundMobil img").height()
      $(window).scroll(function () {
        $('#backgroundMobil img')
          .css({ 'width': '96vw', 'height': `${initialHeight + $(this).scrollTop()}px` })
        if ($(window).scrollTop() + $(window).height() >= ($(document).height()-20))
          $('#backgroundMobil img')
            .css({ 'width': '96vw', 'height': `${700}vh` })
        else
          $('#backgroundMobil img')
            .css({ 'width': '96vw', 'height': `${initialHeight + $(this).scrollTop()}px` })
      });
});</script>
<!-- end Simple Custom CSS and JS -->
