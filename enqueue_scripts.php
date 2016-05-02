//* This can be added pretty much anywhere within the functions.php file, but note that your 'CHILD_THEME_URL' variable must have been defined properly somehwere :) 

add_action( 'wp_enqueue_scripts', 'enqueue_43folders_scripts');
function enqueue_43folders_scripts() {

    wp_register_style( 'customstyling', CHILD_THEME_URL . '/43folders/customstyling.css', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'customstyling' );
	wp_register_script( 'customscripts', CHILD_THEME_URL . '/43folders/customscripts.js', array( 'jquery' ), '1.0.0' );    
	wp_enqueue_script( 'customscripts' );   
    
    //* add new action to allow for shrinking header
    add_action ( 'wp_footer', 'gen_shrink_head', 1 );
}
