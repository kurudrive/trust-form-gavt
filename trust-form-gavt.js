jQuery(document).ready(function(){
	var pagetitle = jQuery("title").html();
	// 今のURLを取得
	// var url = jQuery(location).attr('href');
	// WordPressのサイトURLを取得
	// var siteurl = '<?php echo site_url(); ?>';
	// 今のURLからWordPressのサイトURLを削除
	// url = url.replace(siteurl,'');
	//　確認画面へのボタンにVPV　_confirmを設定
	var onClickItemKakunin = "_gaq.push(['_trackPageview', '" + pagetitle + "_confirm'])";
	jQuery('div#trust-form.contact-form-input #confirm-button input').attr({ onClick:onClickItemKakunin});
	//　送信ボタンにVPV　_sendを設定
	var onClickItemSoushin = "_gaq.push(['_trackPageview', '" + url + "_send'])";
	jQuery('div#trust-form.contact-form-confirm #confirm-button input[name="send-to-finish"]').attr({ onClick:onClickItemSoushin});
	//　戻るボタンにVPV　_returnを設定
	var onClickItemModoru = "_gaq.push(['_trackPageview', '" + url + "_return'])";
	jQuery('div#trust-form.contact-form-confirm #confirm-button input[name="return-to-input"]').attr({ onClick:onClickItemModoru});
});