<?php 
    $sitename = get_bloginfo('name');
?>
<section class="customTitleBanner" style="background-image: url(<?php echo $args['banner']?>)">
    <div class="container">
        <div class="customTitleBanner__copy">
            <h1 class="h1 <?php echo $args['class']?>"><?php echo $args['title']; ?></h1>
        </div>
    </div>
</section>