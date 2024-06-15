<?php
add_shortcode('nrp_content', 'nrp_html');

function nrp_html()
{ ?>

    <div class="wrap">
        <ul class="tabs group">
            <li><a class="active" href="#/one">جدیترین ها</a></li>
            <li><a href="#/two" class="">محبوب ترین ها</a></li>
            <li><a href="#/three" class="">پربازدید ترین ها</a></li>
        </ul>
        <div id="content">
            <div id="one">

                <?php include_once nrp_PLUGIN_DIR . '_inc/new-post.php'; ?>

            </div>
            <div id="two" style="display: none;">
                <?php include_once nrp_PLUGIN_DIR . '_inc/comment-post.php'; ?>
            </div>
            <div id="three" style="display: none;">
            <?php include_once nrp_PLUGIN_DIR . '_inc/rand-post.php'; ?>


            </div>
        </div>
    </div>
<?php
}
?>