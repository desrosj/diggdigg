<?php

/**
 * DD_Shortcodes class.
 */
class DD_Shortcodes {

	/**
	 * Add shortcodes for networks
	 *
	 * @access public
	 * @return void
	 */
	function __construct() {
		add_shortcode( 'dd_digg',          array( $this, 'dd_digg' ) );
		add_shortcode( 'dd_linkedin',      array( $this, 'dd_linkedin' ) );
		add_shortcode( 'dd_reddit',        array( $this, 'dd_reddit' ) );
		add_shortcode( 'dd_dzone',         array( $this, 'dd_dzone' ) );
		add_shortcode( 'dd_ybuzz',         array( $this, 'dd_ybuzz' ) );
		add_shortcode( 'dd_twitter',       array( $this, 'dd_twitter' ) );
		add_shortcode( 'dd_tweetmeme',     array( $this, 'dd_tweetmeme' ) );
		add_shortcode( 'dd_topsy',         array( $this, 'dd_topsy' ) );
		add_shortcode( 'dd_fbshare',       array( $this, 'dd_fbshare' ) );
		add_shortcode( 'dd_fbshareme',     array( $this, 'dd_fbshareme' ) );
		add_shortcode( 'dd_fblike',        array( $this, 'dd_fblike' ) );
		add_shortcode( 'dd_stumbleupon',   array( $this, 'dd_stumbleupon' ) );
		add_shortcode( 'dd_delicious',     array( $this, 'dd_delicious' ) );
		add_shortcode( 'dd_gbuzz',         array( $this, 'dd_gbuzz' ) );
		add_shortcode( 'dd_designbump',    array( $this, 'dd_designbump' ) );
		add_shortcode( 'dd_thewebblend',   array( $this, 'dd_thewebblend' ) );
		add_shortcode( 'dd_blogengage',    array( $this, 'dd_blogengage' ) );
		add_shortcode( 'dd_post_comments', array( $this, 'dd_post_comments' ) );
		add_shortcode( 'dd_serpd',         array( $this, 'dd_serpd' ) );
		add_shortcode( 'dd_fblike_xfbml',  array( $this, 'dd_fblike_xfbml' ) );
		add_shortcode( 'dd_google1',       array( $this, 'dd_google1' ) );
		add_shortcode( 'dd_buffer',        array( $this, 'dd_buffer' ) );
		add_shortcode( 'dd_pinterest',     array( $this, 'dd_pinterest' ) );
		add_shortcode( 'dd_flattr',        array( $this, 'dd_flattr' ) );
	}

	/**
	 * dd_digg function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_digg( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact', 'Icon' ) ) )
			$button = 'Normal';

		return dd_digg_generate( $button, $url, $title, false );
	}

	/**
	 * dd_linkedin function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_linkedin( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact', 'NoCount' ) ) )
			$button = 'Normal';

		return dd_linkedin_generate( $button, $url, $title, false );
	}

	/**
	 * dd_reddit function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_reddit( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact', 'Icon' ) ) )
			$button = 'Normal';

		return dd_reddit_generate( $button, $url, $title, false );
	}

	/**
	 * dd_dzone function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_dzone( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_dzone_generate( $button, $url, $title, false );
	}

	function dd_ybuzz( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact', 'Compact_Text' ) ) )
			$button = 'Normal';

		return dd_ybuzz_generate( $button, $url, $title, false );
	}

	//todo: adjust so source works
	function dd_twitter( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'source' => '',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_twitter_generate( $button, $source, $url, $title, false );
	}

	//todo: add more parameters and conditions
	function dd_tweetmeme( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'source' => '',
			'service' => '',
			'serviceapi' => '',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_tweetmeme_generate( $button, $source, $url, $title, false );
	}

	//todo: make all work
	function dd_topsy( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'source' => '',
			'theme' => 'blue',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_topsy_generate( $button, $source, $url, $title, false );
	}

//url doesnt work
	function dd_fbshare( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_fbshare_generate( $button, $url, $title, false );
	}

	//Title?
	function dd_fbshareme( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_fbshareme_generate( $button, $url, $title, false );
	}

	//liking doesnt work
	function dd_fblike( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Like Standard',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Like Standard', 'Like Button Count', 'Like Box Count', 'Recommend Standard', 'Recommend Button Count', 'Recommend Box Count' ) ) )
			$button = 'Like Standard';

		return dd_fblike_generate( $button, $url, $title, false );
	}

	function dd_stumbleupon( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_stumbleupon_generate( $button, $url, $title, false );
	}

	/**
	 * dd_delicious function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_delicious( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_delicious_generate( $button, $url, $title, false );
	}

	function dd_gbuzz( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_gbuzz_generate( $button, $url, $title, false );
	}

	function dd_designbump( $atts ) {
		extract( shortcode_atts( array(
			'url' => '',
			'title' => '',
		), $atts ) );

		return dd_designbump_generate( 'Normal', $url, $title, false );
	}

	function dd_thewebblend( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_thewebblend_generate( $button, $url, $title, false );
	}

	function dd_blogengage( $atts ) {
		extract( shortcode_atts( array(
			'url' => '',
			'title' => '',
		), $atts ) );

		return dd_blogengage_generate( 'Normal', $url, $title, false );
	}

//comments variable?
	function dd_post_comments( $atts ) {
		extract( shortcode_atts( array(
			'url' => '',
			'title' => '',
		), $atts ) );

		return dd_post_comments_generate( 'Normal', $url, $title, false );
	}

	/**
	 * dd_serpd function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_serpd( $atts ) {
		extract( shortcode_atts( array(
			'url' => '',
			'title' => '',
		), $atts ) );

		return dd_serpd_generate( 'Normal', $url, $title, false );
	}

	function dd_fblike_xfbml( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Like Standard',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Like Standard', 'Like Button Count', 'Like Box Count', 'Recommend Standard', 'Recommend Button Count', 'Recommend Box Count' ) ) )
			$button = 'Like Standard';

		return dd_fblike_xfbml_generate( $button, $url, $title, false );
	}

	/**
	 * dd_google1 function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_google1( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact (15px)', 'Compact (20px)', 'Compact (24px)' ) ) )
			$button = 'Normal';

		return dd_google1_generate( $button, $url, $title, false );
	}

	/**
	 * dd_buffer function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_buffer( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact', 'No Count' ) ) )
			$button = 'Normal';

		return dd_buffer_generate( $button, $url, $title, false );
	}

	/**
	 * dd_pinterest function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_pinterest( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_pinterest_generate( $button, $url, $title, false );
	}

	/**
	 * dd_flattr function.
	 *
	 * @access public
	 * @param mixed $atts
	 * @return void
	 */
	function dd_flattr( $atts ) {
		extract( shortcode_atts( array(
			'button' => 'Normal',
			'uid' => '',
			'url' => '',
			'title' => '',
		), $atts ) );

		//Validate options
		if ( ! in_array( $button, array( 'Normal', 'Compact' ) ) )
			$button = 'Normal';

		return dd_flattr_generate( $button, $uid, $url, $title, false );
	}

}

$dd_shortcodes = new DD_Shortcodes();