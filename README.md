UU2014
===

Hello. This theme is derived from Automattic's '_s', or 'underscores' theme.  It will be kept in sync with _s over time to ensure it takes advantage of most of the current features of WordPress.

You can learn more about the theme including setup and configuration on it's website:
http://www.faithandreason.dreamhosters.com/

Here are some of the other more interesting things you'll find in this theme:

* The theme will intelligently prompt you to install several plugins that add functionality to the theme.  You can skip their installation but the theme will automatically use:
    - Meteor Slides: This plugin allows you to create slides and slideshows.  The UU2014 settings page allows you to set a slideshow as a rotating header throughout the site.
    - Featured Articles Lite: This plugin allows you to create a very nice new post slider on your homepage.  This is especially nice if you use a page as your homepage.  You set the ID# of your home page slider in the UU2014 settings page.
* The 'style.css' file is organized so that you can see which styles came from _s and which have been updated by UU2014.
* Please provide feedback to the authors if you have improvements that could benefit other congregations using the theme. 
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

You can download the theme from the WordPress.org theme repository directly in your copy of WordPress or you can also download the very latest versions from the GitHub repository:

1. Download the latest UU2014 release from https://github.com/dflippo/UU2014/releases (choose the “zip” option)
2. Go to the Themes -> Add New Theme screen and click the Upload tab
3. Upload the zipped archive directly
4. Go to the Themes screen click Activate
5. Optionally download and activate the plugins your are prompted to install from the top of all WordPress administration screens
6. You can use the plugins to create a header image slideshow and a featured articles slider on your front page
7. Visit Appearance -> Customize to tell the theme the name of your header slideshow and featured articles slider.  There are a number of other theme-specific additions to the customizer.

Getting Updates
---------------

This theme supports updates from WordPress.org but as of version 1.0.6 it also supports more frequent updates from GitHub. To enable the updates from GitHub, you need to add the “GitHub Updater” plugin to WordPress. This plugin is not available on the WordPress.org plugin directory and you need to download the latest version from GitHub:

1. Download the latest GitHub Updater release from https://github.com/afragen/github-updater/releases (choose the “zip” option)
2. Go to the Plugins -> Add New Plugin screen and click the Upload tab
3. Upload the zipped archive directly
4. Go to the Plugins screen and click Activate


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
