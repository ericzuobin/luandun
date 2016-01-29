<?php

//存放CDN静态文件的目录
function sahinn_blog_m_source(){
	//非CDN配置
	//echo "http://img.zuobin.net";
	//CDN配置
	echo "http://source.zuobin.net";
}

function sahinn_blog_m_source_f(){
	//非CDN配置
	//return "http://img.zuobin.net";
	//CDN配置
	return "http://source.zuobin.net";
}

add_action( 'foundation_enqueue_scripts', 'bauhaus_enqueue_scripts' );

function bauhaus_enqueue_scripts() {
	wp_enqueue_script(
		'bauhaus-js',
		BAUHAUS_URL . '/default/bauhaus.js',
		array( 'jquery' ),
		BAUHAUS_THEME_VERSION,
		true
	);
}

//修改来适应移动端,配合CDN
function enqueue_our_required_stylesheets(){
	wp_enqueue_style(
		'font-awesome',
		sahinn_blog_m_source_f().'/m/font-awesome/css/font-awesome.min.css');
}
add_action('foundation_enqueue_scripts','enqueue_our_required_stylesheets');

//Add alimama
function enqueue_our_required_ali(){
	wp_enqueue_style(
		'alimama',
		sahinn_blog_m_source_f().'/m/font-awesome/ali/iconfont.css');
}
add_action('foundation_enqueue_scripts','enqueue_our_required_ali');


function bauhaus_should_show_thumbnail() {
	$settings = bauhaus_get_settings();

	switch( $settings->bauhaus_use_thumbnails ) {
		case 'none':
			return false;
		case 'index':
			return is_home();
		case 'index_single':
			return is_home() || is_single();
		case 'index_single_page':
			return is_home() || is_single() || is_page();
		case 'all':
			return is_home() || is_single() || is_page() || is_archive() || is_search();
		default:
			// in case we add one at some point
			return false;
	}
}

function bauhaus_should_show_taxonomy() {
	$settings = bauhaus_get_settings();

	if ( $settings->bauhaus_show_taxonomy ) {
		return true;
	} else {
		return false;
	}
}

function bauhaus_should_show_date(){
	$settings = bauhaus_get_settings();

	if ( $settings->bauhaus_show_date ) {
		return true;
	} else {
		return false;
	}
}

function bauhaus_should_show_author(){
	$settings = bauhaus_get_settings();

	if ( $settings->bauhaus_show_author ) {
		return true;
	} else {
		return false;
	}
}

function bauhaus_should_show_search(){
	$settings = bauhaus_get_settings();

	if ( $settings->bauhaus_show_search ) {
		return true;
	} else {
		return false;
	}
}

function bauhaus_should_show_comment_bubbles(){
	$settings = bauhaus_get_settings();

	if ( $settings->bauhaus_show_comment_bubbles ) {
		return true;
	} else {
		return false;
	}
}