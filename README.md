UU2014
===

UU2014 is a Responsive WordPress Theme designed to meet the needs of Unitarian Universalist Congregations and other UU organizations. Many congregations have used the UU2011 WordPress theme. With permission of the UU2011 theme author, UU2014 extends UU2011 by making the theme fully responsive to smaller screens such as mobile phones. The theme also migrates the look and feel into the Underscores framework to provide the latest WordPress features and browser compatibility.

####To see the theme in action with live content, visit some of the UU websites who have adopted the theme:
* [Unitarian Universalist Church of Kent, Ohio](http://www.kentuu.org)
* [Unitarian Universalist Fellowship of Santa Cruz County](http://uufscc.org/wordpress)
* [Unitarian Universalist Church of Washington County](http://uuccwc.org)
* [Florence Unitarian Universalist Fellowship](http://www.florenceuuf.org)
* [Thermal Belt Unitarian Universalist Fellowship](http://www.tbuuf.org)
* [CERGing Forward - The CERG Regional Blog](http://www.cerguua.org/cergingforward)
* [Better Together - By the Staff of the Ohio-Meadville and St. Lawrence Districts](http://ohiomeadville.org/bettertogether)

####The latest releases are always available at https://github.com/dflippo/UU2014/releases.
####You can view the source code or contribute to the project at https://github.com/dflippo/UU2014.
####If you have any questions, comments, suggestions, or issues please [create an issue on GitHub](https://github.com/dflippo/UU2014/issues) where the author or another user of the theme can help you.
####You can learn more about the theme including setup and configuration on it's website, http://www.faithandreason.dreamhosters.com
####Here are some of the more interesting things you'll find in this theme:
* You can choose between traditional UU Chalice symbols and the new UUA logo for your header and footer.  This and many other custom theme settings are available in the `Appearance -> Customize` menu of WordPress.
* The theme will intelligently prompt you to install several plugins that add functionality to the theme.  You can skip their installation but the theme will automatically use:
    - GitHub Updater: This plugin will notify you when new releases of UU2014 have been released on GitHub.  Like other themes and plugins, you will be able to update the theme in `Dashboard -> Updates`
    - Meteor Slides: This plugin allows you to create slides and slideshows.  The UU2014 settings page allows you to set a slideshow as a rotating header throughout the site.
    - Featured Articles Lite: This plugin allows you to create a very nice new post slider on your homepage.  This is especially nice if you use a page as your homepage.  You set the ID# of your home page slider in the UU2014 settings page.
* Floating Widget Area: The theme can display a floating widget area to the right of pages and individual posts.  It will hide the widget area if the page is to narrow.
* The 'style.css' file is organized so that you can see which styles came from _s and which have been updated by UU2014.
* Please provide feedback to the authors if you have improvements that could benefit other congregations using the theme. 
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

You can download the latest release from the GitHub repository:

1. Download the latest UU2014 release from https://github.com/dflippo/UU2014/releases (choose the “zip” option)
2. Go to the `Themes -> Add New Theme` screen and click the `Upload` tab
3. Upload the zipped archive directly
4. Go to the `Themes` screen click `Activate`
5. Optionally download and activate the plugins your are prompted to install from the top of all WordPress administration screens
6. You can use the plugins to create a header image slideshow and a featured articles slider on your front page
7. Visit `Appearance -> Customize` to tell the theme the name of your header slideshow and featured articles slider.  There are a number of other theme-specific additions to the customizer.
8. Alternatively, visit `Appearance -> Header` to change the header image or set the theme to randomly choose which image to display.

Adding Your Own Header Images
-----------------------------

While the UU2014 theme comes with a set of default images, you can add your own images by going to `Appearance -> Header`.  The images bundled with the theme are 940 pixels by 198 pixels.  The maximum suggested width of images is 1200 pixels and we strongly suggest that you use a consistent height. During the upload process you will have the option to crop the image.  The theme _will_ work with larger or smaller images if you wish.

If you upload multiple images you will then see a choice for "Random" which will cause the theme to randomly display one of your images when a page is viewed (including when a page is refreshed).

Getting Updates
---------------

This theme supports updates from WordPress.org but we recommend users update the theme directly from GitHub. When you activate the theme, it will prompt you to install the “GitHub Updater” plugin. Please follow the instructions to download and activate the plugin so that you will receive update notifications when future versions of the UU2014 theme are released.

Changelog
---------

### v1.2.0
* One of the most significant cosmetic changes since release
    - In response to a request I received, I've updated the theme to be a bit cleaner and less "rectangular".  Essentially, the background of the primary sidebar now is the same color as the main content dashboard.  They background to the left and right of the header has also been converted into a semi-transparent gradient and the edge of the main content now appears to float above the page background.

### v1.1.0
* Making GitHub Updater Required
    - It has been over 4 months since I released a version of UU2014 to WordPress.org and the theme still isn't visible in the directory. I will continue to deal with that process but I am now making GitHub Updater a "required" plugin for the theme. If you don't have it, the theme will help you download and activate it. You can still choose to not install the plugin but that will now require more effort.
    - It is highly recommended that people update to this version of the theme so that you get future updates automatically. Since the process to install the plugin is now integrated, it is no longer necessary to install GitHub Updater manually.

### v1.0.10
* The new CSS for the background image was being over-ridden by the CSS on the page. Added tags to the HTML to ensure images are scaled to fit footer.

### v1.0.9
* Added GitHub Access Token
    - GitHub throttles unauthenticated API requests.  This token will ensure users don't get throttled when using the GitHub Updater with the theme.

### v1.0.8
* New UUA Image Support
    - The theme customizer now has a new section that allows you to choose between chalice images and the new UUA image.  For the header, I have provided silver and red images in two different sizes.
* Updates for issue #13 - tweaks to the README.md file about adding images.
* Also a few tweaks to the markdown to make menu choices stand out a bit more.
* Fixes #14. Normalizes all line endings to "LF".

### v.1.0.7
* Added HTML5Shiv to theme for old versions of IE
	- Right on the heals of the last release, this minor release adds a few lines of JavaScript to include the HTML5Shiv library, https://github.com/aFarkas/html5shiv, which addresses HTML 5 compatibility issues with Internet Explorer.

### v1.0.6
* This release supports an additional automated solution for updating the theme.  The theme still supports updates from WordPress.org but it also supports direct updates from GitHub.  To enable the updates from GitHub, you need to add the "GitHub Updater" plugin to WordPress.  This plugin is not available on the WordPress.org plugin directory and you need to download the latest version from GitHub:
	1. Download the latest **GitHub Updater** release from https://github.com/afragen/github-updater/releases (choose the "zip" option)
	2. Go to the `Plugins -> Add New Plugin` screen and click the `Upload` tab
	3. Upload the zipped archive directly
	4. Go to the `Plugins` screen and click `Activate`
* Unfortunately, you will only receive automatic updates for future updates so it is still necessary to update your theme manually one final time. (You can see why I wanted to support automatic updates)
	1. Download the latest **UU2014** release from https://github.com/dflippo/UU2014/releases (choose the "zip" option)
	2. Go to `Themes` in WordPress
	3. Temporarily activate a different theme other than UU2014 such as Twenty Fourteen
	4. Click on `Theme Details` for the UU2014 theme and click `Delete` in the bottom right corner to remove the old version
	5. Go to the `Themes` -> `Add New Theme` screen and click the `Upload` tab
	6. Upload the zipped archive directly
	7. Go to the `Themes` screen click `Activate`

### v1.0.5
* Based on feedback from elseloop at WordPress.org, the following issues were reported and resolved:
	- Error when Meteor Slides is not installed
	- Posts with no title have no link to the single view from the index list
	- "Comments are disabled" notice should be displayed on posts with comments disabled
	- Width of floating sidebar isn't responsive to widget width
	- Need to add CSS for widgets in footer sidebar
	- Issue with sidebar CSS for recent comments 
	- Additional information on each bug is online at: https://github.com/dflippo/UU2014/issues?state=closed
* While resolving the issues above, the following features have been added:
	- The customizer has a new section to allow you to choose whether to display comments for posts, pages, and image pages.  The default is yes for all three but I recommend disabling comments for all three for most congregation websites.
	- The customizer has a new section to allow you to choose whether to display a byline for the author of each post.  In the past the bylines were not displayed.  The default is now to display the byline.

### v1.0.4
* Replaced integration with the Sharebar plugin with embedded us of the CSS and JS from the plugin. 
	- The plugin was generating WP errors due to poor PHP but there weren't any issues with the CSS or JS. 
	- Instead of the plugin screens, we now have a new floating widget area and you can put whatever widgets you want in there. 
	- Settings for display have been added to customizer and the Sharebar section was removed. 
	- Theme will no longer recommend installing Sharebar plugin.
	
### v1.0.3
* Updated theme to utilize the WP Customizer API for all theme settings.  This eliminated the need for any custom options screens in functions.php.  These settings include the content width and all integration in recommended plugins.  WP Customizer allows you to see the effect of the plugin integration in the preview window.  It is also cleaner and more future-proof.
* Reformatted PHP using NetBeans
* Regenerated Translation Files

### v1.0.2
* Updated footer to include a small bit of text to track theme usage

### v1.0.1
* Removed <meta name="description" from header.php
* Removed hard coded RSS link in header.php.
* Renamed all functions in functions.php to be prefixed with uu2013 including the setup_theme_admin_menus() function.
* Added license and copyright text for images used in the theme.

### v1.0.0
* Initial Release of UU2014 for public use

Notes for Congregations Migrating from the UU2011 Theme
-------------------------------------------------------

While this theme was designed to mimic most of the look and feel of UU2011, there are some differences you should be aware of:

* In UU2011, there were multiple page templates and a different menu was maintained for each template.  This caused several problems:
    - Expanding the number of sections in your website required website maintainers to create new page templates in PHP.
    - Different page templates had completely different sidebar menus and it was very easy to miss a menu if you were restructuring your website.
    - Adding widgets to your sidebar would possibly involve changing many widget areas since each page template had a different widget area.
* To eliminate this work, the UU2014 theme is designed with only two page templates (Default and No Sidebar) and you maintain a single menu for both the top and all sidebar menus.
* The sidebar menu will automatically expand and contract depending on the context of the current page to recreate the same look and feel as before.  This approach means that it is now trivial to reconfigure the number of tabs in your website.  Since implementing this on the UUCK website, we have re-arranged our menu several times to improve usability.
* There is a single sidebar widget area that is displayed consistently on every page in your site.
* There is also a new footer widget area that allows you to easily add links, text, or pictures to appear at the bottom of every page.  Previously you would have needed to manually edit the footer.php file to add items to your footer.
* There is a floating widget area that can appear to the right of pages and posts
* There is still a way to maintain multiple different menus on different pages and to add and remove content selectively but it involves a WordPress plugin.  Automattic, the company that maintains WordPress.com, much of WordPress.org, and the Underscores Theme that UU2014 is built on, has a very popular plugin called Jetpack.  This plugin is highly recommended and has a number of good features that you should consider enabling.  One of it’s features is “Widget Visibility” which provides the ability to selectively display or hide widgets on different pages in your site.
