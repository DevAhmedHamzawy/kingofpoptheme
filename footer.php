<footer class="row">

<div class="grid-3">
<h3 class="heading">Twitter</h3>
<a class="twitter-timeline" href="https://twitter.com/search?q=%40michaeljackson" data-widget-id="741213264772747264"
data-chrome=" noscrollbar nofooter noheader  transparent"  style="color:#f2f2f2;"  data-tweet-limit="1" height="200">Tweets @michaeljackson</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="grid-3">
<h3 class="heading">About</h3>
<p class="content">All about the memories of our king of pop , a simple tribute for him and for the moonwalkers family</p>
</div>
<div class="grid-3">
<!-- <h3 class="heading">subscribe</h3>
<p class="content"><p class="noone newsletter"><input type="text" name="noone" id="noone" class="feedback-input" dir="rtl" placeholder="yourawesomename@domain.com" /></p>
<p class="submitone newsletter"><input type="button" id="button" name="submit" value="أرسل" /></p></p>  -->
<h3 class="heading">Always Alive</h3>
<p class="content">1958-forever</p>
</div>
</footer>
<?php wp_footer(); ?>
</body>
<script>
  $(document).ready(function(){
                    $("#nav-mobile").html($("#nav-main").html());
                    $("#nav-trigger span").click(function(){
                        if ($("nav#nav-mobile ul").hasClass("expanded")) {
                            $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                            $(this).removeClass("open");
                        } else {
                            $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                            $(this).addClass("open");
                        }
                    });
                });
</script>
</html>