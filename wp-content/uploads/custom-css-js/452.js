<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
      const initialHeight = $("#background img").height()
      $(window).scroll(function () {
        $('#background img')
          .css({ 'width': '95vw', 'height': `${initialHeight + $(this).scrollTop()}px` })
        if ($(window).scrollTop() + $(window).height() == $(document).height())
          $('#background img')
            .css({ 'width': '95vw', 'height': `${700}vh` })
        else
          $('#background img')
            .css({ 'width': '95vw', 'height': `${initialHeight + $(this).scrollTop()}px` })
      });
});

</script>
<!-- end Simple Custom CSS and JS -->
