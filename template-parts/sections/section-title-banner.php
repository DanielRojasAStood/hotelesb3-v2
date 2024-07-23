<?php 
    $sitename = get_bloginfo('name');
    $group_title = get_query_var('group_title');
?>
<section class="customTitleBanner" style="background-image: url(<?php echo $group_title['banner']?>)">
    <div class="container">
        <div class="customTitleBanner__copy">
            <h1 class="h1 <?php echo $args['class']?>"><?php echo $group_title['title']; ?></h1>
        </div>
    </div>
</section>