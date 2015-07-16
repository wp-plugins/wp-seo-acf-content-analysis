=== WordPress SEO ACF Content Analysis ===
Contributors: ryuheixys
Donate link: http://y-designs.com/
Tags: yoast, seo, keywords, custom fields, acf, acf-repeater, advanced custom fields, acf-flexicontent
Requires at least: 4.2.1
Tested up to: 4.2.2
Stable tag: 4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This Plugin adds all ACF fields into the content being analyzed by Yoast's Wordpress SEO Plugin

== Description ==

Adds all ACF fields into the content being analyzed by Yoast's Wordpress SEO Plugin

This plugin gets every string out of ACF (Advanced Custom Fields) and puts it into the SEO analysis for Yoast's Wordpress SEO plugin using the `wpseo_pre_analysis_post_content` filter hook.

This plugin is specifically made for ACF and its field types so you'll need to be using ACF.  This should work with Flexible Content and Repeaters too.

Requirements:
1. [Yoast's Wordpress SEO](https://wordpress.org/plugins/wordpress-seo/)
1. [Elliot Condon's Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)

TL;DR for below note: Ignore keyword count on Yoast's first tab (General), click onto the second tab (Page Analysis).

NOTE: The plugin may appear to not work on first look.  The data is affected, but since the first tab of Yoast's SEO plugin uses front-end Javascript to count the number of times the word is used in the Content field, it won't count the true keyword density of your page.

Another note: If you don't display whatever string that this plugin adds to analysis, it won't count either.

Check us out too: [Y-Designs, Inc](http://y-designs.com)

== Installation ==

1. Install from the plugin search.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go optimize some pages.

== Frequently Asked Questions ==

= Why is it not working? =

I give no guarantees ;)

= Can you make it do X, Y and Z so its easy for me? =

No. You should be able to do it ;)  This plugin is really meant for developers/webmasters/SEOs who are actually making/maintaining/optimizing websites for their clients.  Obviously, if there are bugs in the code, I'd be happy to take a look.


== Screenshots ==

No screens required?

== Changelog ==

= 0.1 =
* initial release

== Upgrade Notice ==

= 0.1 =
* initial release
