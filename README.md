wordpress OG integration
========================

My small snippet to integrate OG protocol in my wordpress templates, i use it in all my wordpress projects to add the facebook OpenGraph protocol to show feat image, description, link and that stuff when page or posts are shared in facebook.

How to use it
=============

Ypu can simply copy paste on your `header.php` file or can upsload in your includes files (i usually choose this option) and call it in `header.php` like this...

```php
<?php include (TEMPLATEPATH . '/inc/sidebar-activitats-loop.php' ); ?>
```

Whatever you choose (copy or call) must do it between `<head>` and `</head>` tags

Pay attention to app_id and admins values! Read more info about it:

```html
<!-- Facebook app and admin ID -->  

<meta property="fb:app_id" content="your_fb_app_id" />  
<meta property="fb:admins" content="your_fb_admin_id" />  
```

You must use your values! read more about open graph protocol in <a href="http://ogp.me/">opg.me</a>, in <a href="https://developers.facebook.com/docs/opengraph/getting-started/">facebook</a> or in <a href="http://www.hyperarts.com/blog/how-to-create-facebook-application-to-get-an-app-id-for-your-website/">this tutorial</a>

License
=======

I'm not even sure if makes sense talk about "license" but... Feel free to copy, edit or whatever with this snippet, it's "free for all"

