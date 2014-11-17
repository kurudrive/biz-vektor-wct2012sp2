<?php
/*
Plugin Name: BizVektor WCT2012 SP2
Plugin URI:
Description: BizVektorテーマ用の拡張デザインスキン「WCT2012 SP2」を追加するプラグインです。有効化した後に、デザイン選択のプルダウンで「WCT2012 SP2」が選択出来るようになります。
Author: Vektor,Inc.
Author URI: http://BizVektor/
Version: 0.4.2.0
License: GNU General Public License
License URI: license.txt
*/

add_filter('biz_vektor_themePlus','themePlusWCT2012sp2');
function themePlusWCT2012sp2($biz_vektor_theme_styles){
	$biz_vektor_theme_styles['WCTokyo2012sp2']['label'] = 'WCT2012 SP2';
	$biz_vektor_theme_styles['WCTokyo2012sp2']['cssPath'] = plugins_url("css/wctokyo2012sp2.css", __FILE__);
	$biz_vektor_theme_styles['WCTokyo2012sp2']['cssPathOldIe'] = plugins_url("css/wctokyo2012sp2_oldie.css", __FILE__);
	return $biz_vektor_theme_styles;
}

/*
一つ目の biz_vektor_themePlus はテーマ側で用意されているフィルターフック名
二つ目の themePlusWCT2012 はフィルター処理の関数名です。任意に変更可ですが下の行の function と同じ名前にして下さい。
また、他の関数名とかぶらないようにして下さい。
*/
/*
add_filter('biz_vektor_themePlus','themePlusWCT2012');
function themePlusWCT2012($biz_vektor_theme_styles){
	$biz_vektor_theme_styles['★テーマ識別用引値★']['label'] = ‘★プルダウンに表示されるテーマ名★’;
	$biz_vektor_theme_styles['★テーマ識別用引値★']['cssPath'] = ‘★スタイルシートのURL★’;
	$biz_vektor_theme_styles['★テーマ識別用引値★']['cssPathOldIe'] = ‘★IE8以前用スタイルシートのURL★’;
	return $biz_vektor_theme_styles;
}
*/