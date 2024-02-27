
<?php
 /**
  * Title: Blog Posts 3 Columns
  * Slug: visualcompany/blog-posts-3-columns
  * Categories: visualcompany
  */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:4rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"12px","letterSpacing":"1px","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary"} -->
<p class="has-text-align-left has-primary-color has-text-color" style="font-size:12px;font-style:normal;font-weight:600;letter-spacing:1px">NEWS &amp; UPDATES</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size">From Our Company Blog</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"typography":{"fontSize":"13px","textTransform":"uppercase","letterSpacing":"1px"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:13px;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button" href="#">VIEW ALL NEWS</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{"category":[]},"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"className":"home-posts","layout":{"type":"constrained"}} -->
<div class="wp-block-group home-posts" style="margin-top:3rem"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:query {"queryId":1,"query":{"perPage":"8","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4},"className":"loop-4"} -->
<div class="wp-block-query loop-4"><!-- wp:post-template {"textColor":"tertiary","fontSize":"small"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"15px","right":"20px","bottom":"20px","left":"20px"}}},"className":"entry-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header" style="padding-top:15px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-date {"style":{"typography":{"fontSize":"12px","textTransform":"none"}},"textColor":"black"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->