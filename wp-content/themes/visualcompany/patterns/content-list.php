<?php
 /**
  * Title: Content List
  * Slug: visualcompany/content-list
  * Categories: visualcompany
  */
?>

<!-- wp:group {"className":"content-loop","layout":{"type":"constrained"}} -->
<div class="wp-block-group content-loop"><!-- wp:query {"queryId":11,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"width":"210px","height":"210px","style":{"spacing":{"margin":{"right":"1.6rem","top":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.4rem"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"10px","left":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"typography":{"fontSize":"13px"}},"textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-tertiary-color has-text-color has-link-color" style="font-size:13px"><!-- wp:post-author {"showAvatar":false,"byline":"","isLink":true} /-->

<!-- wp:paragraph -->
<p>•</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"10px","bottom":"0px"}}},"fontSize":"small"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"},"fontSize":"tiny"} -->
<!-- wp:query-pagination-previous {"label":"Previous","style":{"typography":{"fontSize":"12px","letterSpacing":"1px","textTransform":"uppercase"}}} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next","style":{"typography":{"textTransform":"uppercase","fontSize":"12px","letterSpacing":"1px"}}} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->