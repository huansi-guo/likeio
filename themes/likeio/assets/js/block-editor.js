wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'fancy-quote',
        label: 'Fancy Quote',
    } );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'underline',
        label: 'Underline',
    } );
} );


wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/gallery', {
        name: 'red-gallery',
        label: 'Red Gallery',
    } );
} );



wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/button', {
        name: 'promo-button',
        label: 'Promo Button',
    } );
} );



wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/image', {
        name: 'about-poster',
        label: 'About Poster',
    } );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/paragraph', {
        name: 'red-div',
        label: 'Red Div',
    } );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/heading', {
        name: 'aboutUs-header',
        label: 'About Us Header',
    } );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/paragraph', {
        name: 'newsletter-ad',
        label: 'Newsletter Ad',
    } );
} );

wp.domReady( function() {
    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'about-quote',
        label: 'About Quote',
    } );
} );