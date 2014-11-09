<? $copyright=kirbytext($site->copyright());?> 
    <footer class="footer" role="contentinfo">
            
         </div>
        <div class="colophon">
        		  
            <p>Texniq | <a href="//www.texniq.de">www.texniq.de</a></br>
            Imprint: Sonja Broda | Am Jungstück 47 | 55130 Mainz | <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#116;&#101;&#120;&#110;&#105;&#113;.&#100;&#101;">E-Mail</a></p>
        </div>
    </footer> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript">
    $(window).resize(function() {
	
	var winWidth = $(window).width();
    if (winWidth <= 768) {
       // window.location.href = window.location.href;
         $(".toggle_container").hide();
         $('.nav_mobile').removeClass('trigger_active');
    }
        else if (winWidth >768) {
        $(".toggle_container").show();
            }
      
    });
</script> 

<script type="text/javascript">$(document).ready(function(){
     if ($('.nav_mobile.trigger').css('display') !== 'none') {
    $(".trigger").not(".trigger_active").next(".toggle_container").hide();
         
     }
    $(".trigger").click(function(){
        var a=$(this);
            if(a.hasClass("trigger_active")){
                a.next(".toggle_container").slideToggle("slow");
                a.removeClass("trigger_active")}
            else{$(".trigger_active").next(".toggle_container").slideToggle("slow");
                 $(".trigger_active").removeClass("trigger_active");
                 a.next(".toggle_container").slideToggle("slow");
                 a.addClass("trigger_active")}
        return false});
 $('.nav_trigger').click(function() {
        $('.wiki-nav').toggleClass('hide');
    });
});
</script>




<!--[if gte IE 9]><!--> <?= js('assets/js/responsive-tables.js')?><!--<![endif]-->
<script type="text/javascript">
	$('html').removeClass('no-js');
	$('html').addClass('js');
	$('table').addClass('responsive');
</script> 
<script async type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "https") + "://analytics.spicyfamily.de/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "6"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>

</body></html>
