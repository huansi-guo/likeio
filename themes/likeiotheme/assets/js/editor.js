wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote'
} );

wp.blocks.registerBlockStyle( 'core/heading', {
    name: 'banner-heading',
    label: 'Banner Heading'
} );

wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'banner-hashtag',
    label: 'Banner Hashtag'
} );


wp.blocks.registerBlockStyle( 'core/image', {
    name: 'feature-banner-image',
    label: 'Feature Banner Image'
} );

//this is the group for holding images and texts together 
wp.blocks.registerBlockStyle( 'core/group', {
    name: 'feature-banner-group',
    label: 'Feature Banner Group'
} );


wp.blocks.registerBlockStyle( 'core/group', {
    name: 'feature-bottom-banner-group',
    label: 'Feature Bottom Banner Group'
} );

wp.blocks.registerBlockStyle( 'core/group', {
    name: 'feature-bottom-banner-single-group',
    label: 'Feature Bottom Banner Single Group'
} );


wp.blocks.registerBlockStyle( 'core/group', {
    name: 'feature-banner-texts',
    label: 'Feature Banner Texts'
} );



wp.blocks.registerBlockStyle( 'core/group', {
    name: 'footer-promotion-banner-group',
    label: 'Footer Promotion Banner Group'
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'add-to-cart-button',
    label: 'Add To Cart Button'
} );

wp.blocks.registerBlockStyle( 'core/button', {
    name: 'shop-now-button',
    label: 'Shop Now Button'
} );

wp.blocks.registerBlockStyle( 'core/group', {
    name: 'single-shop-group',
    label: 'Single Shop Group'
} );

wp.blocks.registerBlockStyle( 'core/group', {
    name: 'latest-collection-group',
    label: 'Latest Collection Group'
} );

wp.blocks.registerBlockStyle( 'core/group', {
    name: 'call-to-action-group',
    label: 'Call To Action Group'
} );

wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'product-label',
    label: 'Product Label'
} );

wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
} );
