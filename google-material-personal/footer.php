<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


</main>
<div class='container p-y-md'>
    <div class='control'>
        <div class='btn-material'></div>
        <i class='material-icons icon-material-search'>search</i>
    </div>

   
</div>

<!-- full screen form controls -->
<i class='icon-close material-icons'>close</i>
<div class='search-input'>
    <input id="site-search" class='input-search' placeholder='Start Typing' type='text'>
</div>


</div>



<!--
<footer class="mdl-mini-footer">

</footer>
-->
<?php wp_footer(); ?>

<script>


    jQuery('.control').click( function(){
        jQuery('body').addClass('search-active');
        jQuery('.input-search').focus();
    });

    jQuery('.icon-close').click( function(){
        jQuery('body').removeClass('search-active');
    });


    </script>

<script>

    document.getElementById("site-search")
        .addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode == 13) {
                var searchKey= document.getElementById('site-search').value;
                var url=document.location.origin + '/?s='+encodeURIComponent(searchKey);
                window.location.href=url;
            }
        });

</script>

</body>
</html>
