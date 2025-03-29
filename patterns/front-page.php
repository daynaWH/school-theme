<?php
/**
 * Title: front-page
 * Slug: school-theme/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/drawing-wireframes-1.jpg","alt":"a woman drawing wireframes","dimRatio":70,"overlayColor":"contrast","isUserOverlayColor":true,"focalPoint":{"x":0.49,"y":0.51},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-cover alignwide"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="a woman drawing wireframes" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/drawing-wireframes-1.jpg" style="object-position:49% 51%" data-object-fit="cover" data-object-position="49% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color">School Demo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">This is the demo site for WordPress Site #3 (School) in the BCIT FWDP 3600 course.<br></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"right":"10rem","left":"10rem"}},"typography":{"lineHeight":"1.7"}}} -->
<p class="has-text-align-left" style="margin-right:10rem;margin-left:10rem;line-height:1.7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in posuere quam. In ac posuere justo. Aliquam convallis dictum ex, posuere euismod nunc placerat non. Mauris vel dapibus eros, lobortis luctus nulla. Etiam ut mauris dapibus, tincidunt turpis sit amet, bibendum nisl. Vivamus at enim scelerisque, facilisis est eget, tristique purus. Fusce at tristique diam, at pharetra urna. Praesent quis vulputate leo. Praesent malesuada at turpis id dignissim. Maecenas scelerisque nisl nec congue molestie. Nullam sem quam, facilisis elementum blandit ac, sagittis non nisl.<br></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"1000px","height":"400px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-right:var(--wp--preset--spacing--70);margin-left:var(--wp--preset--spacing--70)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-meeting.jpg" alt="a team meeting" style="object-fit:cover;width:1000px;height:400px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0rem","left":"0rem","top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:0;padding-right:0rem;padding-bottom:0;padding-left:0rem"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Experienced Instructors</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}}} -->
<p class="has-text-align-center" style="line-height:1.7">Ut vitae odio nec risus facilisis commodo. Donec ultrices at felis at accumsan. Duis mollis sem eget magna cursus pellentesque. Ut sit amet urna pulvinar.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Dedicated Students</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}}} -->
<p class="has-text-align-center" style="line-height:1.7">Aenean vel diam dui. Morbi aliquet neque nisl, sit amet dictum mi tincidunt ac. Proin ut maximus mi. Integer eu accumsan felis. Vestibulum posuere nulla nisi.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/students-working.mp4","dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"backgroundType":"video","focalPoint":{"x":0.56,"y":1},"minHeight":430,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/students-working.mp4" style="object-position:56% 100%" data-object-fit="cover" data-object-position="56% 100%"></video><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"x-large"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-x-large-font-size">Student Success</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color">Find out more about what our school has to offer.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Education Journey</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.7"}}} -->
<p class="has-text-align-left" style="line-height:1.7">Aliquam eget ligula diam. In et metus et dolor luctus imperdiet. Proin convallis ligula sit amet erat tempor euismod. Mauris vel nulla malesuada, euismod nulla eu, porta orci. Duis malesuada libero non iaculis ullamcorper. In hac habitasse platea dictumst. Etiam molestie tellus orci, ut euismod lectus tristique.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:media-text {"mediaId":99,"mediaLink":"http://localhost:8888/school-site/designer-photoshop/","mediaType":"image","backgroundColor":"accent"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-accent-background-color has-background"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/designer-photoshop-1024x683.jpg" alt="a photoshop designer" class="wp-image-99 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h4 class="wp-block-heading has-base-color has-text-color has-link-color">Learning</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.7"}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="line-height:1.7">Sed vitae leo lobortis, viverra mi a, lobortis velit. Proin nec est enim. Integer metus est, fermentum id bibendum vitae, malesuada sagittis leo sed mollis pulvinar.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaPosition":"right","mediaId":104,"mediaLink":"http://localhost:8888/school-site/presentation-1/","mediaType":"image","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"hover","textColor":"base"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile has-base-color has-hover-background-color has-text-color has-background has-link-color"><div class="wp-block-media-text__content"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Practicing</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">Morbi nec euismod diam. Ut bibendum nibh in odio molestie, eget placerat mi molestie. Nunc semper diam sed mollis pulvinar. Sed vitae leo lobortis, viverra mi a, lobortis velit.</p>
<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/presentation-1-1024x682.jpg" alt="a woman presenting" class="wp-image-104 size-full"/></figure></div>
<!-- /wp:media-text -->

<!-- wp:media-text {"mediaId":106,"mediaLink":"http://localhost:8888/school-site/programmers-collaborating/","mediaType":"image","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"accent","textColor":"base"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-base-color has-accent-background-color has-text-color has-background has-link-color"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/programmers-collaborating-1024x681.jpg" alt="two-programmers-collaborating" class="wp-image-106 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Working</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">Imperdiet odio, quis porta nisl. Fusce semper cursus diam, pulvinar egestas leo faucibus quis. Morbi nec euismod diam bibendum nibh in odio molestie, eget placerat mi molestie.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"News"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Latest News</h3>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"medium","align":"center"} /-->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="http://localhost:8888/school-site/blog/" data-type="page" data-id="77">See All News</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Pullquote"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:pullquote {"style":{"spacing":{"padding":{"top":"6.2rem","bottom":"6.2rem"}}}} -->
<figure class="wp-block-pullquote" style="padding-top:6.2rem;padding-bottom:6.2rem"><blockquote><p>"A very profound and thought provoking quote."</p><cite>Someone Famous</cite></blockquote></figure>
<!-- /wp:pullquote --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--40)">Dynamic and Modern</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"}}} -->
<p style="line-height:1.7">Cras rutrum placerat lectus, eu commodo risus tristique at. Vivamus tempor ultricies urna, nec scelerisque ante tristique in. Nunc sed nulla semper, pretium arcu ac, pulvinar sapien. Etiam neque dui, volutpat id justo vel, bibendum viverra tortor. Vivamus blandit tellus eget ex scelerisque, in tempus velit placerat. Nullam et convallis urna.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:gallery {"linkTo":"media","className":"lightgallery"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped lightgallery"><!-- wp:image {"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coding-workshop-1024x683.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coding-workshop-1024x683.jpg" alt="A team brainstorming ideas for their workshop."/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/learning-code-1024x683.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/learning-code-1024x683.jpg" alt="An instructor helping a team at a coding workshop.
"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pug-working-1024x683.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pug-working-1024x683.jpg" alt="Our most pugnacious student!
"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-brainstorm-1024x683.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-brainstorm-1024x683.jpg" alt="Students using our lounge to plan their next project.
"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-working-1024x683.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-working-1024x683.jpg" alt="A team working hard!
"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"media"} -->
<figure class="wp-block-image size-large"><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-whiteboarding-1024x683.jpg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/team-whiteboarding-1024x683.jpg" alt="A team whiteboarding in a meeting room
"/></a></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laughing-meeting.jpg","alt":"a man laughing while coding","dimRatio":50,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.52,"y":0.45},"minHeight":638,"style":{"color":{"duotone":"var:preset|duotone|midnight"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"blockGap":"0"}},"textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-cover has-base-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--70);padding-bottom:0;padding-left:var(--wp--preset--spacing--70);min-height:638px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="a man laughing while coding" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laughing-meeting.jpg" style="object-position:52% 45%" data-object-fit="cover" data-object-position="52% 45%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"90px"}},"fontFamily":"noto-sans"} -->
<h2 class="wp-block-heading has-noto-sans-font-family" style="font-size:90px">YOUR FUTURE </h2>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"90px"},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"fontFamily":"noto-sans"} -->
<h2 class="wp-block-heading has-noto-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:90px">BEGINS TODAY.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"9.2rem","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons" style="margin-top:9.2rem;margin-bottom:0"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="http://localhost:8888/school-site/apply-now/" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--70)"><strong>EXPLORE</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->