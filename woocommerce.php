<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php bloginfo('name');?></title>	
    <meta name="description" content="<?php bloginfo('name');?>">
    <meta name="keywords" content="<?php bloginfo('name');?>">
	<meta name="author" content="<?php bloginfo('author');?>">
    <meta name="distribution" content="<?php bloginfo('name');?>">
    <meta name="rating" content="10">
    <meta name="robot" content="index,follow">
    
    <meta HTTP-EQUIV="content-language" content="en">

	<!-- Mobile Specific Metas
  ================================================== -->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    -->
    
    
<!-- CSS FILES  -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />


<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->



<!-- Mobile Specific Metas
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<?php get_header();?>
<div class="container">

   <!--    <p></p>
    <div id="section-all-grills-i">
        <div class="sixteen columns">
            <h1>Products</h1>
            <h2>Interested in buying TEC Infrared Grills, parts or accessories? </h2>
        </div>
    </div>
    -->
    <div class="animation-holder" id="revolution-slider-holder"><!--Animated Slider HOLDER Starts  -->
       <?php echo putRevSlider("Accessories","accessories") ?>
     
    </div><!--Animated Slider HOLDER Ends  --> 
    <div class="sixteen columns"><!-- Sixteen Columns Layout Start -->
    <div class="white-page-holder-all-products"><!-- white page starts  --> 
            <div class="blog-left-cont"><!-- Products listing -->
                <?php if ( is_singular( 'product' ) ) {
                           //  woocommerce_content();
                            woocommerce_get_template( 'single-product.php' );
                      }//else{
                       //For ANY product archive.
                       //Product taxonomy, product search or /shop landing
                     
                      //  woocommerce_get_template( 'archive-product.php' );
                      //}
                   ?>	
            </div>          
    </div><!-- white page ends  --> 
     <div class="blog-right-cont">     
             <?php 
             if ( is_singular( 'product' ) ) {			 ?>
                 <a href="/products" id="allproduct-link">  All Products</a>    	 	
                 
            <?php 		 if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Product Sidebar') ) : 
                 endif;		 
             }else{
                 if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Product Sidebar') ) : 
                 endif;
             }
             ?>
        
           </div>
            
</div><!--  Sixteen Columns Layout End -->
</div>
<?php get_footer();?>
