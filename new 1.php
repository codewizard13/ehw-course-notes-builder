<?php // MyPlugin - Admin Menu


<?php if ( is_single) ): ?>

  <h1>HTML goes here

<?php endif; ?>



What hook for pages or posts?
- init

How to add test posts to wordpress for testing?


How to Add Dummy Content for Theme Development in WordPress


- Import Theme Unit Test Data

<?php echo get_avatar(get_the_author_meta('ID'), 512) ?>




<?php wpautop( get_the_author_meta ( ' description' ) ); ?>



register_post_type()



function custom_callback_function() {
  
  // todo: add code here
  
  echo 'I will be fired on WP initialization';
  
}
add_action( 'init', 'custom_callback_function' );



wp_footer


echo get_the_author_meta('display_name', $author_id)
get_the_author_meta( 'ID' )


When used in the WordPress Custom REST API endpoint you can do it like this:

function customrestapiplugin_getpost( $slug ) {
    $args = [
        'name' => $slug['slug'],
        'post_type' => 'post'
    ];

    $post = get_posts($args);
    
    $data[$i]['id'] = $post[0]->ID;
        $data['title'] = $post[0]->post_title;
        $data['content'] = $post[0]->post_content;
        $data['excerpt'] = $post[0]->post_excerpt;
        $data['slug'] = $post[0]->post_name;
        $data['date'] = $post[0]->post_date;
        $data['link'] = get_permalink($post[0]->ID);
        $data['author'] = get_the_author_meta('display_name', $post[0]->post_author);
        $data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post[0]->ID, 'thumbnail');
        $data['featured_image']['medium'] = get_the_post_thumbnail_url($post[0]->ID, 'medium');
        $data['featured_image']['large'] = get_the_post_thumbnail_url($post[0]->ID, 'large');

    return $data;
}





---


Used By	Description
the_author_icq()
wp-includes/deprecated.php
Display the ICQ number of the author of the current post.

the_author_yim()
wp-includes/deprecated.php
Display the Yahoo! IM name of the author of the current post.

the_author_msn()
wp-includes/deprecated.php
Display the MSN address of the author of the current post.

the_author_aim()
wp-includes/deprecated.php
Display the AIM address of the author of the current post.

the_author_url()
wp-includes/deprecated.php
Display the URL to the home page of the author of the current post.

the_author_ID()
wp-includes/deprecated.php
Display the ID of the author of the current post.

the_author_description()
wp-includes/deprecated.php
Display the description of the author of the current post.

the_author_login()
wp-includes/deprecated.php
Display the login name of the author of the current post.

the_author_firstname()
wp-includes/deprecated.php
Display the first name of the author of the current post.

the_author_lastname()
wp-includes/deprecated.php
Display the last name of the author of the current post.

the_author_nickname()
wp-includes/deprecated.php
Display the nickname of the author of the current post.

the_author_email()
wp-includes/deprecated.php
Display the email of the author of the current post.











