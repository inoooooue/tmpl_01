<?php

## setting　* 必記述

	// db
	define( 'DB_HOST',              'mysql631.db.sakura.ne.jp' );
	define( 'DB_USER',              'blueprintdesign' );
	define( 'DB_PASSWORD',          'bm94UGY6' );
	define( 'DB_NAME',              'blueprintdesign_tmpl_01' );

## key　* 必記述

	/*
		認証用ユニークキー　※ 下記アドレスで生成してコピペ
		@since 2.6.0
		https://api.wordpress.org/secret-key/1.1/salt/
	*/
	define('AUTH_KEY',         'O^@{pjG@xT9F%]7*ubl/#4/Z_@`*U,&mj}ysN-tRjL]l;5IhRy0AiD!FPbccFiz4');
	define('SECURE_AUTH_KEY',  'Gf`/LM`!LaAQ+%2Gl&c|=w/)UJAIgB8sN1l/ D/jy).t<E_+LpLLxkSoWHes4LBq');
	define('LOGGED_IN_KEY',    'Gc}tTEU+rK0N>qH|`g4}n56dgE,Y@LEi9ovH[`xveB-RN|SBy&T3M@3wp3Ua$q-.');
	define('NONCE_KEY',        '*|-3 %o-E>Hh!F-{f$-!acjRVJkTo1<e][+nX|KGp];Sr|XjK>-9Pwa|EnSS!IqU');
	define('AUTH_SALT',        '-icu=Z(,H1_HR@kXQGXhmV7#.z<<WTSUg8+h8q:XBAXM=BEhl$t@!R+pA7]Im/!O');
	define('SECURE_AUTH_SALT', 'OJ2QrpoO6eHSx-CJ)~q!|-<@h}eADKvUv+ME<aHJH/^t?Lybd%*kP4V/!1TEEWFH');
	define('LOGGED_IN_SALT',   'AtTe7J s-dc5G!}nNxOy) gS<$4M;5-+$S$6gc$9Fa*Sy&P3;9FO-yTo q9(}YB^');
	define('NONCE_SALT',       '$*#n&t8I$2mA*nz00uEZPEG1hEHNjy,xBUFP]K2SH|GCB~pII?vO3j]hMMwoaxB1');

## option

	// db
	define( 'DB_CHARSET',           'utf8' );
	define( 'DB_COLLATE',           '' );
	// multisite
	define( 'WP_ALLOW_MULTISITE',   false );
	define( 'MULTISITE',            false );
	// site
	define( 'SUBDOMAIN_INSTALL',    false );
	define( 'SITE_ID_CURRENT_SITE', 1 );
	define( 'BLOG_ID_CURRENT_SITE', 1 );

## default　* 編集不可

	// prefix
	$table_prefix = 'wp_';
	// lang
	define( 'WPLANG', 'ja' );
	// debug_mode
	define( 'WP_DEBUG', false );
	// run wordpress
	if( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname(__FILE__) . '/' );
	}
	require_once(ABSPATH . 'wp-settings.php' );
