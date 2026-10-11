<?php
/**
 * Title: Section One
 * Slug: wens-travel-hub/section-one
 * Categories: wens-travel-hub
 *
 * @package wens-travel-hub
 * @since 1.0.0
 */

?>

<!-- wp:group {"metadata":{"name":"banner"},"align":"full","style":{"spacing":{"blockGap":"54px"}},"layout":{"type":"constrained"},"anchor":"banner"} -->
<div class="wp-block-group alignfull" id="banner"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/one.jpg","dimRatio":40,"overlayColor":"custom-color-3","isUserOverlayColor":true,"sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"top":"72px","bottom":"72px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:72px;padding-bottom:72px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/one.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-custom-color-3-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-text-0"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"}},"textColor":"custom-text-0","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-custom-text-0-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"2px","lineHeight":"1.2","textAlign":"left"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="letter-spacing:2px;line-height:1.2"><?php echo esc_html__( 'Discover Trips Tailored Just for You', 'wens-travel-hub' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
<p class="has-text-align-left"><?php echo esc_html__( 'Search, compare, and book from thousands of curated travel experiences worldwide—all in one place.', 'wens-travel-hub' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:html -->


 <div class="search-box">
        <h2><?php echo esc_html__( 'Find Your Perfect Trip', 'wens-travel-hub' ); ?></h2>

        <form class="trip-form">

            <div class="form-group">
                <label><?php echo esc_html__( 'Search:', 'wens-travel-hub' ); ?></label>
                <input class="search-text" type="text" placeholder="Ex: Trekking">
            </div>

            <div class="form-group">
                <label><?php echo esc_html__( 'Trip Type:', 'wens-travel-hub' ); ?></label>
                <select>
                    <option><?php echo esc_html__( 'All', 'wens-travel-hub' ); ?></option>
                </select>
            </div>

            <div class="form-group">
                <label><?php echo esc_html__( 'Location:', 'wens-travel-hub' ); ?></label>
                <select>
                    <option><?php echo esc_html__( 'All', 'wens-travel-hub' ); ?></option>
                </select>
            </div>

            <div class="form-btn">
                <button><?php echo esc_html__( 'Search Now', 'wens-travel-hub' ); ?></button>
            </div>

        </form>
    </div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->