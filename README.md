UU2014
===

####UU2014 is a Responsive and Accessibility-Ready WordPress Theme designed to meet the needs of Unitarian Universalist Congregations and other UU organizations
* *Mobile Device Support:* The theme is fully responsive to smaller screens such as mobile phones and uses the Underscores framework to provide the latest WordPress, accessibility, and browser compatibility features. 
* *Customizable:* The theme is easy to customize with support for 2 menus and 6 widget areas in two sidebars, the header, the footer, and the header/footer of the primary content area on pages and single posts. It also allows you to easily modify features in the WordPress Customizer including the title image, footer image, comments, favicon, sidebars, and widget areas. Through the use of transparency, colors throughout the theme will shift to complement whatever image or color you choose for the page background. Sections have been added to the WordPress Customizer to set the font-sizes and mobile font-sizes for many theme regions. You can choose between traditional UU Chalice symbols and the new UUA logo for your header and footer.  This and many other custom theme settings are available in the `Appearance -> Customize` menu of WordPress.
* *Plugin Integration:* Optional integration has been added for the UpThemes Typecase Web Fonts plugin to select different font-families for these theme regions. The theme also features optional integration with the CodeFlavors Featured Articles Lite plugin for featured post sliders and the SiteOrigin Page Builder plugin for responsive, multi-column layouts. The theme will intelligently prompt you to install these plugins.
* *Accessibility:* The theme was the 10th theme to earn the accessibility-ready tag from WordPress.org which requires a theme to undergo an independent review against the [WordPress.org accessibility guidelines](http://make.wordpress.org/themes/guidelines/guidelines-accessibility/). These guidelines ensure that WordPress themes allow users to navigate by keyboard, use screen readers, and easily read text with sufficient contrast. This will be a continued focus for future maintenance of the theme.
* *Supported:* You can find the support forum for questions and requests on GitHub
* *Floating Widget Area:* The theme can display a floating widget area to the right of pages and individual posts.  It will hide the widget area if the page is to narrow.

####To see the theme in action with live content, visit some of the UU websites who have adopted the theme:
* [Unitarian Universalist Church of Kent, Ohio](http://www.kentuu.org)
* [Unitarian Universalist Fellowship of Columbus, Georgia](http://www.uucolumbusga.org/)
* [Unitarian Universalist Fellowship of Santa Cruz County](http://uufscc.org/wordpress)
* [Unitarian Universalist Church of Washington County](http://uuccwc.org)
* [CERGing Forward - The CERG Regional Blog](http://www.cerguua.org/cergingforward)
* [Better Together - By the Staff of the Ohio-Meadville and St. Lawrence Districts](http://ohiomeadville.org/bettertogether)
* [The Newberry UU - Clayton Memorial Unitarian Universalist Church](http://newberryuu.org/)
* [First Unitarian Universalist Congregation of Albuquerque, NM](http://uuabq.com/)
* [Florence Unitarian Universalist Fellowship](http://www.florenceuuf.org)
* [Unitarian Universalist Fellowship of the Eastern Slopes](http://uufes.org/)
* [San Gabriel Unitarian Universalist Fellowship](http://sangabrieluu.org/)
* [Unitarian Fellowship of South Florida](http://www.uuhollywood.com/)
* [Thermal Belt Unitarian Universalist Fellowship](http://www.tbuuf.org)

####The latest releases are always available at [WordPress.org/themes/uu-2014](https://wordpress.org/themes/uu-2014).
####You can view the source code or contribute to the project at https://github.com/dflippo/UU2014.
####If you have any questions, comments, suggestions, or issues please [create an issue on GitHub](https://github.com/dflippo/UU2014/issues) where the author or another user of the theme can help you.
####You can learn more about the theme including setup and configuration on it's website, http://uuwp.org
####Please provide feedback to the authors if you have improvements that could benefit other congregations using the theme. 
####Licensed under GPLv2 or later. :) Use it to make something cool.

####If you are unfamiliar with UU, additional information is available on the Unitarian Universalist Association website:
[Unitarian Universalist Beliefs](http://www.uua.org/beliefs/)
[Principles and Purpose](http://www.uua.org/beliefs/principles/index.shtml)
[Are My Beliefs Welcome?](http://www.uua.org/beliefs/welcome/index.shtml)
[Other Frequently Asked Questions](http://www.uua.org/beliefs/faq/index.shtml)
[Flaming Chalice: Symbol of Unitarian Universalism](http://www.uua.org/beliefs/chalice/)

Getting Started
---------------

You should download the latest release from within WordPress:
1. Go to the `Appearance -> Themes -> Add New Theme` screen and search for "UU 2014"
2. Click `Install` and then `Activate`
3. Optionally download and activate any plugins your are prompted to install from the top of all WordPress administration screens
4. Visit `Appearance -> Customize` to tell the theme the name of your header slideshow and featured articles slider.  There are a number of other theme-specific additions to the customizer.
5. Alternatively, visit `Appearance -> Header` to change the header image or set the theme to randomly choose which image to display.

Adding Your Own Header Images
-----------------------------

While the UU2014 theme comes with a set of default images, you can add your own images by going to `Appearance -> Header`.  The images bundled with the theme are 940 pixels by 198 pixels.  The maximum suggested width of images is 1200 pixels and we strongly suggest that you use a consistent height. During the upload process you will have the option to crop the image.  The theme _will_ work with larger or smaller images if you wish.

If you upload multiple images you will then see a choice for "Random" which will cause the theme to randomly display one of your images when a page is viewed (including when a page is refreshed).

Getting Updates
---------------

This theme supports updates from WordPress.org.  Please update your copy of the theme when new releases are available to ensure that your copy of the theme has the latest accessibility and responsive features.

Changelog
---------

### v1.3.7
* Introduced a new menu for mobile use that improves usability and accessibility. The previous menu had issues with spotty double-tap support on some mobile devices and the menu fonts were too small to easily tap. The new menu utilizes the same accessible JavasScript but clicking the menu button creates a simpler tree of all menu links. The size and visual contrast of the button and menu links have all been substantially increased (100% white on 100% back). Like the previous menu, the menu is accessible by keyboard navigation even on mobile devices.
* Replaced triangle .gif files with use of WordPress's built-in Dashicons font.
* Added control to the customizer that allows users to clear all theme customizations.
* Mobile CSS now kicks in at 782px just like WordPress's mobile UI

### v1.3.6
* Added extensive controls in the WordPress Customizer that allow users to pick both font-sizes and font-families. The theme now includes customizer controls for the font-sizes but modifications to font-families is done through theme support for the Typecase Web Fonts plugin. There are also separate customizer controls for all the font-sizes when viewed on mobile devices. The theme defines many different theme regions and each region can have a different font-family (through the plugin), font-size, and mobile font-size.
* Synced theme with recent updates to the _s framework.
* Cleaned up a lot of CSS that was in the way when customizing fonts. The theme now sets the default font families in only two places. Any changes the theme was making to the default _s font sizes have been removed from style.css and are now set by the customizer CSS.
* Improved CSS for the new version of Featured Articles Lite plugin. Fixed issue that was causing large gaps when post titles wrapped. Like elsewhere, users can now control the font sizes and font families for the plugin in the customizer.
* Fixed issue in the post editor where the screen flickered when you clicked in the editor and CSS styles were applied. The editor is much more likely now to display exactly like posts on the front-end.
* Improved support for post formats. Image posts are displayed in single posts and lists using the new content-image.php template.
* Eliminated the content-single.php template and added an if condition to content.php to handle single posts.  Single.php now uses post formats to pick the best content template.
* For post types other than standard, content.php will now display a link that users can click to display posts of that type.

### v1.3.5
* Minor changes to be compliant with WordPress.org rules.
* Removed text from an ALT tag in header.php.
* Updated description to include newer features

### v1.3.4
* Removed "Flaming Chalice" from ALT attribute for cosmetic image in header.  Cosmetic images should not have ALT tags for accessibility and translation reasons.

### v1.3.3
* Added two additional widget areas. The new areas are above and below the primary content area on pages and single posts. These areas are ideal for slideshow widgets (both Cyclone Slider and Featured Articles Lite work well) or social media sharing buttons. These areas address issues that slider plugins can have when they try to automatically inject themselves in posts/pages.
* Added tight integration for the Page Builder plugin by SiteOrigin. This plugin is now automatically recommended by the theme but is not required and you can disable the prompt to install it. This plugin allows users to create advanced responsive, multi-column layouts very easily. You can see the plugin in use on the homepage of uuwp.org. A row-style has been added that surrounds widgets in a border. Users who do not use a primary left sidebar on pages should especially find this plugin helpful for laying out their full-width pages. This plugin can cause issues with other plugins that attempt to hook into the main loop and that is one reason I added the new content header and footer widget areas.
* Fixed CSS for the Featured Articles Lite plugin when used with this theme. The theme has specific CSS rules to optimize both the 2.4.x and new 3.x versions of Featured Articles Lite. Be aware that the new version of the plugin has fewer FA themes. For version 3.x only the new "Simple" theme is optimized but it looks modern and polished so that isn't a big problem. New instructions with recommended settings for the plugin will be posted to uuwp.org.
* Further optimized images with the EWWW plugin to reduce size
* Fixed a missing function for posts with the image post-type
* Removed Meteor Slides customization since it has not been needed since implementing a header widget area
* Updated TGM Plugin Activation library to avoid theme check errors

### v1.3.2
* Tweaked the padding around the title for mobile devices so that longer titles fix on iPhone
* Fixed the double-tap support for mobile devices so that only menus with a sub-menu require a double-tap
* Updated the theme homepage to the new URL, uuwp.org

### v1.3.1
* This release includes a lot of changes to make the theme accessible for users who need to use keyboard navigation or a screen reader to view sites. The theme has also gone through the independent review to have the accessibility-ready tag on WordPress.org. UU2014 is only the tenth WordPress theme to complete that process.

### v1.2.5
* Updated the customizer to allow users to disable the UU symbols in the title and footer
* Synchronized the latest changes to _s with the theme to gain minor HTML5 support improvements

### v1.2.4
* The Photon Filters allowed the theme to use the WordPress Photon service to host images. However, it apparently doesn’t work correctly if JetPack is installed but Photon is not activated.

### v1.2.3
* This version reverts the GitHub URI because the change broke updating from older GitHub releases.

### v1.2.2
* WordPress.org deployed this version promptly but made me take out the lines that required the GitHub Updater. I wasn’t too surprised with this requirement. The theme does still support GitHub Updater but you are not prompted to install it now if you don’t already have it. I have also switched the GitHub name from UU2014 to UU-2014 because WP.org has been putting a dash for the folder name in their own zip files. I believe this difference causes some unexpected behavior when updating using both WP.org and Github.

### v1.2.1
* Updated screenshot, optimized images and packaged for WordPress.org

### v1.2.0
* One of the most significant cosmetic changes since release. In response to a request I received, I've updated the theme to be a bit cleaner and less "rectangular".  Essentially, the background of the primary sidebar now is the same color as the main content dashboard.  They background to the left and right of the header has also been converted into a semi-transparent gradient and the edge of the main content now appears to float above the page background.

### v1.1.2
* For the UUKent website, we transitioned from using Meteor Slides to Cyclone Slider for our header images. Instead of adding integration for Cyclone Slider, I have created a more flexible widget area for headers. If you add a widget for Meteor Slides, Cyclone Slider, or any other slider plugin to this area it will replace the WordPress header image with your widget. If you were using Meteor Slides, you should go into your Widgets control panel and add your slideshow to the Header Widget Area.

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
* There is still a way to maintain multiple different menus on different pages and to add and remove content selectively but it involves a WordPress plugin.  Automattic, the company that maintains WordPress.com, much of WordPress.org, and the Underscores Theme that UU2014 is built on, has a very popular plugin called Jetpack.  This plugin is highly recommended and has a number of good features that you should consider enabling.  One of it’s features is “Widget Visibility” which provides the ability to selectively display or hide widgets on different pages in your site.
