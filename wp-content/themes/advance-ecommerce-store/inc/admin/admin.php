<?php
//about theme info
add_action( 'admin_menu', 'advance_ecommerce_store_abouttheme' );
function advance_ecommerce_store_abouttheme() {    	
	add_theme_page( esc_html__('About Ecommerce Theme', 'advance-ecommerce-store'), esc_html__('About Ecommerce Theme', 'advance-ecommerce-store'), 'edit_theme_options', 'advance_ecommerce_store_guide', 'advance_ecommerce_store_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function advance_ecommerce_store_admin_theme_style() {
   wp_enqueue_style('advance-ecommerce-store-custom-admin-style', get_template_directory_uri() .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'advance_ecommerce_store_admin_theme_style');

//guidline for about theme
function advance_ecommerce_store_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Advance Ecommerce Store Theme', 'advance-ecommerce-store'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'advance-ecommerce-store'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'advance-ecommerce-store'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'advance-ecommerce-store'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'advance-ecommerce-store'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'advance-ecommerce-store'); ?></button>
	<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'advance-ecommerce-store'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'advance-ecommerce-store'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'advance-ecommerce-store'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_CONTACT ); ?>"><?php esc_html_e('Support', 'advance-ecommerce-store'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'advance-ecommerce-store'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'advance-ecommerce-store'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'advance-ecommerce-store'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'advance-ecommerce-store'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'advance-ecommerce-store'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'advance-ecommerce-store'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'advance-ecommerce-store'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'advance-ecommerce-store'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'advance-ecommerce-store'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'advance-ecommerce-store'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_ECOMMERCE_STORE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'advance-ecommerce-store'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'The WordPress ecommerce theme is robust, reliable, stylish and engaging with seamless use for all types of online stores and ecommerce shops. It does not matter whether you have a small onsite shop or a giant retail online chain, this theme can serve you to its fullest with its ambitious design and amazing layouts. Its dynamic nature can be guessed from the vast variety of layout designs it offers that let you fulfil the requirements of any online trading business without having to write a single line of code. With banners and sliders, impress your visitors by presenting a larger than life image. All the needs of an ecommerce shop are meticulously fulfilled giving a great experience to users. This WordPress ecommerce theme has a friendly and interactive frontend and backend interface to help use the site to its maximum potential.', 'advance-ecommerce-store' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'advance-ecommerce-store' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'advance-ecommerce-store' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'advance-ecommerce-store' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>
<?php } ?>