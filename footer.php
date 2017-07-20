</section>
<?php
if (git_get_option('git_superfoot_b') && !G_is_mobile()) { ?>
<div id="footbar" style="border-top: 2px solid #8E44AD;"><ul>
<li><p class="first"><?php
    echo git_get_option('git_foottitle1'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent1'); ?></span></li>
<li><p class="second"><?php
    echo git_get_option('git_foottitle2'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent2'); ?></span></li>
<li><p class="third"><?php
    echo git_get_option('git_foottitle3'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent3'); ?></span></li>
<li><p class="fourth"><?php
    echo git_get_option('git_foottitle4'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent4'); ?></span></li>
</ul>
</div>
<?php
} ?>
<footer style="border-top: 1px solid ;
        background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/css/img/footbg.jpg');
        background-repeat: repeat;" class="footer">
    <div class="footer-inner"><div class="footer-copyright" align="center">
            <?php
            if (git_get_option('git_footcode'))
                echo git_get_option('git_footcode'); ?>
            Copyright©2017<a href="http://uusama.com" title="悠悠"> 悠悠 </a>|
            Powered by<a href="http://wordpress.com"> WordPress </a>|
            Theme by<a href="http://googlo.me/" title="乐趣公园" target="_blank"> Git </a>
            <span class="trackcode pull-right"><?php
                if (git_get_option('git_track')) echo git_get_option('git_track'); ?>
            </span>
        </div>
    </div>
</footer>
<?php
if (git_get_option('git_copydialog_b') && is_singular())
    echo '<script type="text/javascript">document.body.oncopy=function(){' .
        'alert("复制成功！若要转载请务必保留原文链接，申明来源，谢谢合作！");}</script>'; ?>
<?php
if (git_get_option('git_snow_b')) { ?>
    <script type="text/javascript" src="assets/js/snow.js"></script>
    <?php
} ?>
<?php
if (git_get_option('git_copy_b') && is_singular())
    echo '<script type="text/Javascript">document.oncontextmenu=function(e){return false;};
document.onselectstart=function(e){return false;};
</script>
<style>
body{ 
-moz-user-select:none;
}
</style>
<SCRIPT LANGUAGE=javascript>
if (top.location != self.location)top.location=self.location;
</SCRIPT><noscript><iframe src=*.html></iframe></noscript>'; ?>

<?php
if (git_get_option('git_footercode')) echo git_get_option('git_footercode'); ?>
<?php

wp_footer();
global $dHasShare;
if ($dHasShare == true) {
    echo '<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="' .
        get_template_directory_uri() . '/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
}
?>
<?php
if (git_get_option('git_topnav_b') && !G_is_mobile()) { ?>
<script type="text/Javascript">
$(function(){
	$('#nav-header').posfixed({
		distance : 0,
		pos : 'top',
		type : 'while',
		hide : false
	});
});
</script>
<?php
} ?>
</body>
</html>
