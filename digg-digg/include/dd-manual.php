<?php

// XXX: NEW BUTTONS: Add declarations to $dd_manual_code array, and functions below to initialise class
/***********************************Advance Usage*********************************/
global $dd_manual_code;
$dd_manual_code = array(
	"Twitter" => array(
		"Normal" => "dd_twitter_generate( 'Normal','twitter_username' )",
		"Compact" => "dd_twitter_generate( 'Compact','twitter_username' )"
	),
	"Buffer" => array(
		"Normal" => "dd_buffer_generate( 'Normal' )",
		"Compact" => "dd_buffer_generate( 'Compact' )",
		"No Count" => "dd_buffer_generate( 'No Count' )"
	),
	"FaceBook Like" => array(
		"Like Standard" => "dd_fblike_generate( 'Like Standard' )",
		"Like Button Count" => "dd_fblike_generate( 'Like Button Count' )",
		"Like Box Count" => "dd_fblike_generate( 'Like Box Count' )",
		"Recommend Standard" => "dd_fblike_generate( 'Recommend Standard' )",
		"Recommend Button Count" => "dd_fblike_generate( 'Recommend Button Count' )",
		"Recommend Box Count" => "dd_fblike_generate( 'Recommend Box Count' )"
	),
	"FaceBook Like (XFBML)" => array(
		"Like Standard" => "dd_fblike_xfbml_generate( 'Like Standard' )",
		"Like Button Count" => "dd_fblike_xfbml_generate( 'Like Button Count' )",
		"Like Box Count" => "dd_fblike_xfbml_generate( 'Like Box Count' )",
		"Recommend Standard" => "dd_fblike_xfbml_generate( 'Recommend Standard' )",
		"Recommend Button Count" => "dd_fblike_xfbml_generate( 'Recommend Button Count' )",
		"Recommend Box Count" => "dd_fblike_xfbml_generate( 'Recommend Box Count' )"
	),
	"Google +1" => array(
		"Normal" => "dd_google1_generate( 'Normal' )",
		"Compact (15px)" => "dd_google1_generate( 'Compact (15px)' )",
		"Compact (20px)" => "dd_google1_generate( 'Compact (20px)' )",
		"Compact (24px)" => "dd_google1_generate( 'Compact (24px)' )"
	),
	"Linkedin" => array(
		"Normal" => "dd_linkedin_generate( 'Normal' )",
		"Compact" => "dd_linkedin_generate( 'Compact' )",
		"NoCount" => "dd_linkedin_generate( 'NoCount' )"
	),
	"Digg" => array(
		"Normal" => "dd_digg_generate( 'Normal' )",
		"Compact" => "dd_digg_generate( 'Compact' )",
		"Icon" => "dd_digg_generate( 'Icon' )"
	),
	"Reddit" => array(
		"Normal" => "dd_reddit_generate( 'Normal' )",
		"Compact" => "dd_reddit_generate( 'Compact' )",
		"Icon" => "dd_reddit_generate( 'Icon' )"
	),
	"DZone" => array(
		"Normal" => "dd_dzone_generate( 'Normal' )",
		"Compact" => "dd_dzone_generate( 'Compact' )"
	),
	"Yahoo Buzz" => array(
		"Normal" => "dd_ybuzz_generate( 'Normal' )",
		"Compact" => "dd_ybuzz_generate( 'Compact' )",
		"Compact_Text" => "dd_ybuzz_generate( 'Compact_Text' )"
	),
	"TweetMeme" => array(
		"Normal" => "dd_tweetmeme_generate( 'Normal','twitter_username' )",
		"Normal + URL" => "dd_tweetmeme_generate( 'Normal','twitter_username','awe.sm' )",
		"Normal + URL + API" => "dd_tweetmeme_generate( 'Normal','twitter_username','bit.ly','api_key' )",
		"Compact" => "dd_tweetmeme_generate( 'Compact','twitter_username' )",
		"Compact + URL" => "dd_tweetmeme_generate( 'Compact','twitter_username','awe.sm' )",
		"Compact + URL + API" => "dd_tweetmeme_generate( 'Compact','twitter_username','bit.ly','api_key' )",
	),
	"Tospy" => array(
		"Normal" => "dd_topsy_generate( 'Normal','twitter_username' )",
		"Normal + Theme" => "dd_topsy_generate( 'Normal','twitter_username','theme_code' )",
		"Compact" => "dd_topsy_generate( 'Compact','twitter_username' )",
		"Compact + Theme" => "dd_topsy_generate( 'Compact','twitter_username','theme_code' )"
	),
	"FaceBook Share" => array(
		"Normal" => "dd_fbshare_generate( 'Normal' )",
		"Compact" => "dd_fbshare_generate( 'Compact' )"
	),
	"FBShare.Me" => array(
		"Normal" => "dd_fbshareme_generate( 'Normal' )",
		"Compact" => "dd_fbshareme_generate( 'Compact' )"
	),
	"StumbleUpon" => array(
		"Normal" => "dd_stumbleupon_generate( 'Normal' )",
		"Compact" => "dd_stumbleupon_generate( 'Compact' )"
	),
	"Delicious" => array(
		"Normal" => "dd_delicious_generate( 'Normal' )",
		"Compact" => "dd_delicious_generate( 'Compact' )"
	),
	"Google Buzz" => array(
		"Normal" => "dd_gbuzz_generate( 'Normal' )",
		"Compact" => "dd_gbuzz_generate( 'Compact' )"
	),
	"The Web Blend" => array(
		"Normal" => "dd_thewebblend_generate( 'Normal' )",
		"Compact" => "dd_thewebblend_generate( 'Compact' )"
	),
	"DesignBump" => array(
		"Normal" => "dd_designbump_generate( 'Normal' )"
	),
	"BlogEngage" => array(
		"Normal" => "dd_blogengage_generate( 'Normal' )"
	),
	"PostComment" => array(
		"Normal" => "dd_post_comments_generate( 'Normal' )"
	),
	"Serpd" => array(
		"Normal" => "dd_serpd_generate( 'Normal' )"
	),
	"Pinterest" => array(
		"Normal" => "dd_pinterest_generate( 'Normal' )",
		"Compact" => "dd_pinterest_generate( 'Compact' )"
	),
	"Flattr" => array(
		"Normal" => "dd_flattr_generate( 'Normal','flattr_username' )",
		"Compact" => "dd_flattr_generate( 'Compact','flattr_username' )"
	),
);

function dd_digg_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_digg = new DD_Digg();
    $dd_digg->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_digg->finalURL;
	else
		return $dd_digg->finalURL;
}

function dd_linkedin_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_linkedin = new DD_Linkedin();
    $dd_linkedin->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	$dd_linkedinJS = '<script type="text/javascript" src="' . DD_PLUGIN_URL . '/js/diggdigg-linkedin.js?ver=' . DD_VERSION . '"></script>';

	if ( $echo )
		echo $dd_linkedinJS . ' ' . $dd_linkedin->finalURL;
	else
		return $dd_linkedinJS . ' ' . $dd_linkedin->finalURL;
}

function dd_reddit_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_reddit = new DD_Reddit();
    $dd_reddit->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_reddit->finalURL;
	else
		return $dd_reddit->finalURL;
}

function dd_dzone_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_dzone = new DD_DZone();
    $dd_dzone->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_dzone->finalURL;
	else
		return $dd_dzone->finalURL;
}

function dd_ybuzz_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_ybuzz = new DD_YBuzz();
    $dd_ybuzz->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_ybuzz->finalURL;
	else
		return $dd_ybuzz->finalURL;
}

function dd_twitter_generate( $buttonDesign = 'Normal', $source = '', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

	$source = sanitize_text_field( $source );

    global $globalcfg;
	if ( ! empty( $source ) ) {
	    $globalcfg[ DD_GLOBAL_TWITTER_OPTION ][ DD_GLOBAL_TWITTER_OPTION_SOURCE ] = $source;
	}

    $dd_twitter = new DD_Twitter();
    $dd_twitter->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false, $globalcfg );

	if ( $echo )
		echo $dd_twitter->finalURL;
	else
		return $dd_twitter->finalURL;
}

function dd_tweetmeme_generate( $buttonDesign = 'Normal', $source = '', $service = '', $serviceapi = '', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    global $globalcfg;
    $globalcfg[ DD_GLOBAL_TWEETMEME_OPTION ][ DD_GLOBAL_TWEETMEME_OPTION_SOURCE ] = $source;
    $globalcfg[ DD_GLOBAL_TWEETMEME_OPTION ][ DD_GLOBAL_TWEETMEME_OPTION_SERVICE ] = $service;
    $globalcfg[ DD_GLOBAL_TWEETMEME_OPTION ][ DD_GLOBAL_TWEETMEME_OPTION_SERVICE_API ] = $serviceapi;

    $dd_tweetmeme = new DD_TweetMeme();
    $dd_tweetmeme->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false, $globalcfg );

	if ( $echo )
		echo $dd_tweetmeme->finalURL;
	else
		return $dd_tweetmeme->finalURL;
}

function dd_topsy_generate( $buttonDesign = 'Normal', $source = '', $theme = 'blue', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    global $globalcfg;
    $globalcfg[ DD_GLOBAL_TOPSY_OPTION ][ DD_GLOBAL_TOPSY_OPTION_SOURCE ] = $source;
    $globalcfg[ DD_GLOBAL_TOPSY_OPTION ][ DD_GLOBAL_TOPSY_OPTION_THEME ] = $theme;

    $dd_topsy = new DD_Topsy();
    $dd_topsy->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false, $globalcfg );

	if ( $echo )
		echo $dd_topsy->finalURL;
	else
		return $dd_topsy->finalURL;
}

function dd_fbshare_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_fbshare = new DD_FbShare();
    $dd_fbshare->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_fbshare->finalURL;
	else
		return $dd_fbshare->finalURL;
}

function dd_fbshareme_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_fbshareme = new DD_FbShareMe();
    $dd_fbshareme->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_fbshareme->finalURL;
	else
		return $dd_fbshareme->finalURL;
}

function dd_fblike_generate( $buttonDesign = 'Like Standard', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_fblike = new DD_FbLike();
    $dd_fblike->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_fblike->finalURL;
	else
		return $dd_fblike->finalURL;
}

function dd_stumbleupon_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_stumbleupon = new DD_StumbleUpon();
    $dd_stumbleupon->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_stumbleupon->finalURL;
	else
		return $dd_stumbleupon->finalURL;
}

function dd_delicious_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_delicious = new DD_Delicious();
    $dd_delicious->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_delicious->finalURL;
	else
		return $dd_delicious->finalURL;
}

function dd_gbuzz_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_gbuzz = new DD_GBuzz();
    $dd_gbuzz->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_gbuzz->finalURL;
	else
		return $dd_gbuzz->finalURL;
}

function dd_designbump_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_designbump = new DD_DesignBump();
    $dd_designbump->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_designbump->finalURL;
	else
		return $dd_designbump->finalURL;
}

function dd_thewebblend_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_webblend = new DD_TheWebBlend();
    $dd_webblend->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_webblend->finalURL;
	else
		return $dd_webblend->finalURL;
}

function dd_blogengage_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_blogengage = new DD_BlogEngage();
    $dd_blogengage->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_blogengage->finalURL;
	else
		return $dd_blogengage->finalURL;
}

function dd_post_comments_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_comments = new DD_Comments();
    $dd_comments->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false, '', $comments );

	if ( $echo )
		echo $dd_comments->finalURL;
	else
		return $dd_comments->finalURL;
}

function dd_serpd_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_serpd = new DD_Serpd();
    $dd_serpd->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_serpd->finalURL;
	else
		return $dd_serpd->finalURL;
}

function dd_fblike_xfbml_generate( $buttonDesign = 'Like Standard', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_fblike_xfbml = new DD_FbLike_XFBML();
    $dd_fblike_xfbml->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_fblike_xfbml->finalURL;
	else
		return $dd_fblike_xfbml->finalURL;
}

function dd_google1_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_google1 = new DD_Google1();
    $dd_google1->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_google1->finalURL;
	else
		return $dd_google1->finalURL;
}


function dd_buffer_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_buffer = new DD_Buffer();
    $dd_buffer->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_buffer->finalURL;
	else
		return $dd_buffer->finalURL;
}

function dd_pinterest_generate( $buttonDesign = 'Normal', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

    $dd_pinterest = new DD_Pinterest();
    $dd_pinterest->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false );

	if ( $echo )
		echo $dd_pinterest->finalURL;
	else
		return $dd_pinterest->finalURL;
}

function dd_flattr_generate( $buttonDesign = 'Normal', $uid = '', $url = '', $title = '', $echo = true  ) {
	$post_data = dd_getPostData( $url, $title );

	global $globalcfg;
	if ( ! empty( $uid ) )
		$globalcfg[ DD_GLOBAL_FLATTR_OPTION ][ DD_GLOBAL_FLATTR_OPTION_UID ] = sanitize_text_field( $uid );

    $dd_flattr = new DD_Flattr();
    $dd_flattr->constructURL( $post_data['link'], $post_data['title'], $buttonDesign, $post_data['id'], false, $globalcfg );

	if ( $echo )
		echo $dd_flattr->finalURL;
	else
		return $dd_flattr->finalURL;
}

/**
 * Returns an array of information about a post for use in a share button
 *
 * @access public
 * @param string $url (default: '')
 * @return void
 */
function dd_getPostData( $url = '', $title = '', $echo = true  ) {
	global $post;

	//Sanitize
	$url = esc_url( $url );
	$title = sanitize_text_field( $title );

	//Make sure we have a URL
	if ( empty( $url ) )
    	$link = split( DD_DASH, get_permalink( $post->ID ) ); //split the link with '#', for comment
    else
    	$link = split( DD_DASH, $url ); //split the link with '#', for comment

    if ( empty( $title ) )
    	$title = $post->post_title;

    return array( 'id' => $post->ID, 'link' => $link[0], 'title' => trim( $title ) );
}