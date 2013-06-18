<?php
/*
Plugin Name: Trust Form Google Analytics virtual tracking
Plugin URI:
Description: Trust Form で確認画面への移動時、送信時のバーチャルページビューを取得出来るようになります。
Author: Hidekazu　Ishikawa
Author URI:
Version: 1.1
*/

add_action( 'wp_footer', 'add_gavt' );
function add_gavt() {
	wp_enqueue_script( 'jquery' );
	// echo site_url()がjsファイルだと使えないので直書きに戻しました。
	// wp_register_script( 'gavtjs' , plugins_url().'/trust-form-gavt/trust-form-gavt.js', array('jquery'), '20130618' );
	// wp_enqueue_script( 'gavtjs' );
	?>
	<script language="JavaScript">
	<!--
	jQuery(document).ready(function(){
		var pagetitle = jQuery("title").html();
		// 今のURLを取得
		var url = jQuery(location).attr('href');
		// WordPressのサイトURLを取得
		var siteurl = '<?php echo site_url(); ?>';
		// 今のURLからWordPressのサイトURLを削除
		url = url.replace(siteurl,'');
		//　確認画面へのボタンにVPV　_confirmを設定
		var onClickItemKakunin = "_gaq.push(['_trackPageview', '" + url + "_confirm'])";
		jQuery('div#trust-form.contact-form-input #confirm-button input').attr({ onClick:onClickItemKakunin});
		//　送信ボタンにVPV　_sendを設定
		var onClickItemSoushin = "_gaq.push(['_trackPageview', '" + url + "_send'])";
		jQuery('div#trust-form.contact-form-confirm #confirm-button input[name="send-to-finish"]').attr({ onClick:onClickItemSoushin});
		//　戻るボタンにVPV　_returnを設定
		var onClickItemModoru = "_gaq.push(['_trackPageview', '" + url + "_return'])";
		jQuery('div#trust-form.contact-form-confirm #confirm-button input[name="return-to-input"]').attr({ onClick:onClickItemModoru});
	});
	-->
	</script>
	<?php
}