<?php
/*
Plugin Name: MyBlogLog Avatar
Plugin URI: http://mr.hokya.com/mybloglog-avatar
Description: MBL avatar comes from words MyBlogLog's avatar. It switches default gravatar on comments into MyBlogLog or Yahoo's avatar.
Version: 1.8
Author: Julian Widya Perdana
Author URI: http://mr.hokya.com/
*/


function mblavatar () {
	echo '<img src = "http://pub.mybloglog.com/coiserv.php?href='.get_comment_author_url().'" width=50 height=50 />';
}

function mblavatar_notice () {
	echo "<p>You currently using <strong><a href='http://mr.hokya.com/mybloglog-avatar/' target='_blank'>MyBlogLog's Avatar</a></strong> as your avatar on your site</p>";
}

add_action('get_avatar', 'mblavatar');
add_action('rightnow_end','mblavatar_notice');

?>