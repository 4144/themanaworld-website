<?php

/**
 * Foreground Skin
 *
 * @file
 * @ingroup Skins
 * @author Garrick Van Buren, Jamie Thingelstad, Tom Hutchison
 * @license 2-clause BSD
 */

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'foreground' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['SkinForeground'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for foreground skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return;
}

// Note: Don't forget when updating to update the skin.json file with the same change.

$wgExtensionCredits['skin'][] = array(
	'path'		 => __FILE__,
	'name'		 => 'Foreground',
	'url'		 => 'http://foreground.thingelstad.com/',
	'version'	 => '1.2.0',
	'author'	 => array(
		'Garrick Van Buren',
		'Jamie Thingelstad',
		'Tom Hutchison',
		'...'
	),
	'descriptionmsg' => 'foreground-desc'
);

$wgValidSkinNames['foreground'] = 'Foreground';

$wgAutoloadClasses['SkinForeground'] = __DIR__ . '/Foreground.skin.php';

$wgMessagesDirs['SkinForeground'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['SkinForeground'] = __DIR__ . '/Foreground.i18n.php';

$wgResourceModules['skins.foreground.styles'] = array(
	'position'       => 'top',
	'styles'         => array(
		'foreground/assets/stylesheets/normalize.css',
		'foreground/assets/stylesheets/font-awesome.css',
		'foreground/assets/stylesheets/foundation.css',
		'foreground/assets/stylesheets/foreground.css',
		'foreground/assets/stylesheets/foreground-print.css',
		'foreground/assets/stylesheets/jquery.autocomplete.css',
		'foreground/assets/stylesheets/responsive-tables.css',
        'foreground/assets/stylesheets/tmw-custom.css'
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);

$wgResourceModules['skins.foreground.js'] = array(
	'position'       => 'top',
	'scripts'        => array(
		'foreground/assets/scripts/vendor/custom.modernizr.js',
		'foreground/assets/scripts/vendor/fastclick.js',
		'foreground/assets/scripts/vendor/responsive-tables.js',
		'foreground/assets/scripts/foundation/foundation.js',
		'foreground/assets/scripts/foundation/foundation.topbar.js',
		'foreground/assets/scripts/foundation/foundation.dropdown.js',
		'foreground/assets/scripts/foundation/foundation.section.js',
		'foreground/assets/scripts/foundation/foundation.clearing.js',
		'foreground/assets/scripts/foundation/foundation.cookie.js',
		'foreground/assets/scripts/foundation/foundation.placeholder.js',
		'foreground/assets/scripts/foundation/foundation.forms.js',
		'foreground/assets/scripts/foundation/foundation.alerts.js',
		'foreground/assets/scripts/foreground.js',
		'foreground/assets/scripts/tmw.js'
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory']
);
