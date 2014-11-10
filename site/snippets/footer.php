</div>
<footer id="footer">
    <div class="footer-container">
        <?php echo kirbytext($site->copyright()) ?>
    </div>
  </footer>
 <script src="https://code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<?php echo js('assets/js/jquery.ajaxify.min.js') ?>
<script>
$.Ajaxify.pageChange(function() {
   

if ( $( '.panel-collapse' ).not(this).hasClass( "collapse" ) ) {
        $('.panel-heading a h3').show();
    }
$(".panel-heading a").click(function() {
    $('.panel-heading a').not(this).find('h3').show();
    $(this).find('h3').toggle();
    $(this).find('span').toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
    $('html,body').animate({
        scrollTop: $(this).offset().top
    }, 2000);
});
});
</script>
<script>
if ( $( '.panel-collapse' ).not(this).hasClass( "collapse" ) ) {
        $('.panel-heading a h3').show();
    }
$(".panel-heading a").click(function() {
    $('.panel-heading a').not(this).find('h3').show();
    $(this).find('h3').toggle();
    $(this).find('span').toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
    $('html,body').animate({
        scrollTop: $(this).offset().top
    }, 2000);
});

</script>

<script>
$.Ajaxify.pageChange(function() {
$('.open').click(function(){
    var href = $(this).attr('href');
    $('html, body').animate({
                        scrollTop: $('div ' +href).offset().top
                    }, 2000);
    $('div ' +href).addClass('in');
    $('div ' +href).prev().find('h3').hide();
    
});
});
</script>
<script>
    $.Ajaxify.container = '.shell';
    $.Ajaxify.all();
</script>




</body>