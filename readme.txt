=== Plugin Name ===
Contributors: uniquewebdevelopment
Donate link: http://wordpress.org/
Tags: css, css refresh, cssrefresh
Requires at least: 2.0.2
Tested up to: 3.4.1
Stable tag: 2.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

CSS Refresh allows WordPress detect when your CSS-file is updated and autmoatically implement changes without having to refresh your browser.

== Description ==

Eliminate the need to constantly refresh your website everytime you make a change to your CSS file.  Let CSS Refresh do the heavy lifting - automatically.

CSS Refresh will now add your template CSS file automatically.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `/css-refresh/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= It's not working =

1. Double check to ensure that the css-refresh.js is directly below your stylesheet.  This plugin automatically includes your stylesheet (`style.css` within your template), therefore you do NOT need to include it in your header.
2. Check to see if your stylesheet is being included twice.  If it is, you need to remove all other instances of your main stylesheet.

== Changelog ==

= 2.1 =

* This version removes the refresh mechanism from the admin section as it wasn't needed.
* Append the stylesheet based on the template file CSS 

= 2.0 =

* Out of Beta

== Upgrade Notice ==

