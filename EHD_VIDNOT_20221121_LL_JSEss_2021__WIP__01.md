<link rel="stylesheet" href="css/ehd-course-notes.css" />

# COURSE NOTES

### <span class="course-title">JavaScript Essential Training (2021)</span>

## COURSE INFO

| Title:          | JavaScript Essential Training                                   |
| --------------- | --------------------------------------------------------------- |
| URL:            | https://www.linkedin.com/learning/javascript-essential-training |
| Channel:        | LinkedIn Learning                                               |
| Instructor:     | Morten Rand-Hendriksen                                          |
| Release Date:   | 2021-01-20                                                      |
| Date Started:   | 2022-11-21                                                      |
| Date Completed: | --                                                              |
| File Name:      | EHD_VIDNOT_20221121_LL_JSEss_2021__WIP__01.md                   |

<!-- SEC: COURSE PREVIEW -->
|               |                                                   |
| ------------- | ------------------------------------------------- |
| Author Image: | ![](img/person-morten-rand-hendriksen-1.jpg)      |
| Course Thumb: | ![](img/course-thumb-linkedin--js-ess-2021-1.jpg) |

<!-- END SEC: COURSE PREVIEW -->

## COURSE DETAILS

- Course Duration: 5h 29m
- Experience Level: Beginner
- Released: 1/20/2021

#### Skills Covered

[WordPress](https://www.linkedin.com/learning/search?keywords=WordPress)

### Description:

JavaScript is a scripting language of the web. As the web evolves from a static to a dynamic environment, technology focus is shifting from static markup and styling—frequently handled by content management systems or automated scripts—to dynamic interfaces and advanced interaction. Once seen as optional, JavaScript is now becoming an integral part of the web, infusing every layer with its script.<br><br>Through practical examples and mini-projects, this course helps you build your understanding of JavaScript piece by piece, from core principles like variables, data types, conditionals, and functions through advanced topics including loops, and DOM scripting. Along the way, instructor Morten Rand-Hendriksen provides challenges that allow you to put your new skills to the test.

### Learning objectives

- WordPress APIs
- Action and filter hooks
- Activating and deactivating plugins
- Plugin security
- Creating the directory and files
- Adding menus and the settings page
- Inserting custom functionality
- Including JavaScript and CSS
- Testing and debugging WordPress plugins
- Creating widgets
- Managing users and roles
- Adding custom post types and taxonomies
- Working with custom fields and database queries
- Using APIs: Transients, HTTP, and REST

## Instructor

<table class="author-info">
  <tr style="max-height: 150px;">
    <td style="vertical-align: top;">
        <H3>
            Jeff Starr
        </H3>
    </td>
<td  width="200"  rowspan="2">
      <img src="img/person-jeff-starr-01.jpg" />
    </td>
  </tr>
  <tr>
      <td>
          <a href=" https://www.linkedin.com/learning/instructors/jeff-starr" target="_blank">Jeff Starr: Professional Web Developer and Author with over 15 years of experience</a>
      </td>
  </tr>
</table>




## --- [END 01 - Intro Page] ---

## TOC

~~~
0. Introduction
	0.0 Welcome
	0.1 How to use the exercise files
1. First Steps
	1.0 Course overview
	1.1 Prepare for development
	1.2 Explore WordPress plugins
2. Plugin Basics
	2.0 Get started
	2.1 Explore WordPress APIs
	2.2 Action and filter hooks
	2.3 Plugin activation and deactivation
	2.4 Pluggable WordPress functions
	2.5 Develop secure WordPress plugins
	2.6 Best practices for plugin development
3. Building a WordPress Plugin
	3.0 Create the plugin directory and files
	3.1 Add administration menus
	3.2 Add the plugin settings page
	3.3 Add settings callback functions
	3.4 Validate plugin settings
	3.5 Add custom functionality
	3.6 Include JavaScript and CSS
	3.7 Plugin internationalization
	3.8 Add an uninstall feature
	3.9 Test and debug
4. Essential Plugin Techniques
	4.0 Customize the WordPress loop
	4.1 Create widgets
	4.2 Manage users and roles
	4.3 Work with JavaScript and CSS
	4.4 Use the Options API
5. Extending Plugin Functionality
	5.0 Add custom post types and taxonomies
	5.1 Work with custom fields
	5.2 Add meta boxes
	5.3 Work with custom database queries
	5.4 Integrate admin notices
6. Advanced Plugin Techniques
	6.0 Use the Transients API
	6.1 Use the HTTP API
	6.2 Use WP-Cron
	6.3 Implement Ajax
	6.4 Use the REST API
	6.5 Develop with Gutenberg
7. Conclusion
	7.0 Next steps
~~~


## --- [END 02 - TOC]

## VIDEOS

### 0. Introduction

  #### 0.0 Welcome
  
- How build wp plugins w WP API
- Choosing good dev env
- Secure WP plugins
- Best Practices
- Create complete wp plugin

  #### 0.1 How to use the exercise files

- Exercise file plugin demos are "KEY to mastering the material"
  
- Using default, self-hosted wp install

- https://wordpress.org/download
- MAMP
- Google Chrome
- Firefox
- Atom text editor Atom.io

- All plugin demos and code snippets are open source

- Plugins at https://wordpress.org/plugins
  
### 1. First Steps

  #### 1.0 Course overview

- https://wordpress.org
- WP is free open source content management system based on PHP and MySQL
- When WordPress core files are installed on a web server with a database they work together to create a powerful, flexible website
- WP powered sites enable users to create, publish, and share content with ease

**What are plugins?**

- Plugins: packages of code that extend WP functionality; work together with
 - WP Core Files
 - WP plugins
 - WP themes
 - Consist of javascript, PHP files, images, etc
 
Things plugins can do:

- Improve security
- Improve SEO functionality
- Improve performance with caching
- Integrate third-party services
- Customize the WordPress admin area

Recommend Skills:

- good understanidng of PHP
- Basic understanding of HTML, CSS, and JavaScript
- Familiar with WordPress

Video Resources:

- WordPress training and tutorials
- PHP training and tutorials
- JavaScript training and tutorials
- HTML training and tutorials

Preview of the Course:

- Getting started: Overview and setup
- Plugin basics: Fundamentals, security, and best practices
- Building a plugin: Build a complete plugin, ***start to finish***
- Techniques: Add custom funcionality to your plugins

WordPress Documentation:

- WordPress Codex: https://codex.wordpress.org/
- WP Code Reference: https://developer.wordpress.org/reference/
- WP Coding Standards: https://codex.wordpress.org/WordPress_Coding_Standards
- Plugin Handbook: https://developer.wordpress.org/plugins

"Staying close the the official WordPress documentation is essential to building  
  
  #### 1.1 Prepare for development
  
Popular Local Server apps:
- MAMP
- MAMP PRO
- LAMP
- XAMPP
- WAMP
- AMPPS
- BITNAMI
- UwAmp server
- WampServer
- WebMatrix

Virtual Machines: Give you even more control over your development environment.

- Vagrant
- Docker
- VMWare
- VirtualBox
- Parallels

Version Control: helps keep plugins organized

- Git
- CVS
- SVN (Subversion)
- Mercurial
- Helix
- Vesta
- Microsoft Team Foundation Server

Development Tools:

- Ansible
- NetBeans IDEBullet point
- PHPStorm
- Sublime Text
- Eclipse PDT
- Zend Studio
- Trello
- Asana
- Basecamp
- Xdebug

MAMP Server

- Free software
- Mac and Windows
- Apache, PHP, and MySQL
- Available at: https://mamp.info/

WordPress Variations

- Current WordPress version
- Nightly development version
- WordPress Multisite
- Older version(s) of WordPress
- WordPress set up for other languages

We will work with latest stable WordPress version

WP Development Plugins

- Developer: https://wordpress.org/plugins/developer/
- WP-Dev-Tools: https://wordpress.org/plugins/wp-developer-tools/
- Query Monitor: https://wordpress.org/plugins/query-monitor/
- Debug Bar: https://wordpress.org/plugins/debug-bar/
- More Tools: https://m0n.co/wp-dev-tools/

Enable debug mode on dev site

EX: 01-02 > code-debug-log.txt

Set WP_DEBUG to true in wp-config.php

```php
define('WP_DEBUG', true);
```

WP_DEBUG: Display or Log File

Some people prefer to view debug info directly on the webpages, others prefer to view it in a debug log file. Both are fine.

- Display debug info directly on HTML pages:

```php
define ('WP_DEBUG_DISPLAY', true);
```

- Log debug info in a log file

```php
define('WP_DEBUG_LOG', true)
```

#GOTCHA: You will have to create your own debug file

- Log file located at
/wp-content/debug.log

More info about debug mode at: https://goo.gl/Q2HWXj

You can also monitor the server log file for errors outside the scope of WordPress

  
  #### 1.2 Explore WordPress plugins
  
Why do we build WP plugins?

#1 Rule: Don't modify WP core
- Updates overwrite changes
- Changes can break things
- Use plugins instead

WordPress Plugin Directory

Understanding what has already been done can help us make decisions regarding our own plugins and help us brainstorm new ideas. Me may find one that does exactly what we need, or we may be able to adopt and continue dev on our own or with a team.

- https://developer.wordpress.org/plugins/wordpress-org/take-over-an-existing-plugin/

- WPS Hide Login: Changes default location of WP login page
- Disable Emojis
- Disable Feeds: Useful when WP used as strict CMS and not a blogging platform

- All in One SEO Pack
- W3 Total Cache: helps site performance
- Dashboard Widgets Suite: Jeff's plugin - useful widgets for WP dashboard

#GOTCHA: Plugins come and go, so if any of these are missing "don't sweat it"

"Knowing what's already been done [with plugins] can save you time and help focus your efforts on lucrative projects."

- WP Statistics:
- Social Share Buttons:
- User Submitted Posts: submit content from site front end 

Shopping Cart and Membershipt plugins: Transform your site into full-function e-commerce system

- Easy Digital Downloads


- Book Calendar

- WPL Real Estate

PREMIUM / PRO PLUGINS:

- Code Canyon
- WPMuDev.org
- Plugin Planet

All plugins hosted at WP Plugin Directory are open source, so you are free to explore and reuse the code according to the GPL license.

#GOTCHA: Make sure to confirm the license terms before reusing any plugin code.


### 2. Plugin Basics

  #### 2.0 Get started
  
A great way to break into plugin development is to build a simple plugin.

Hello Dolly plugin is very simple, but most plugins have multiple files organized into a parent directory and subdirs.

Navigate to Plugins directory

Create a Simple Single-File Plugin

- File > Save As > simple-example-plugin.php

#BESTPRACTICE

Because this plugin will only be one file it is fine to put it directly in the plugins/ directory. But, just to be safe in case we want to add more files later, it is best practice to put the plugin file in a folder with the exact same name (minus the extension).

plugins/simple-example-plugin/simple-example-plugin.php

Every plugin must include a proper file header

EX: 02-01 > code-file-header.txt

```php
<?php
/*
Plugin Name:  Simple Example Plugin
Description:  Welcome to WordPress plugin development
Plugin URI:   https://plugin-planet.com/
Author:       Jeff Starr
Version:      1.0
License:      GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

```

The file header contains metadata about the plugin like plugin name, description, author, etc.

Minimally, the file header must include the name of the plugin

If ever in doubt, just look at the Akismet or Hello Dolly plugin headers for reference

Plugin License

Let's keep the license open source just like WordPress itself

- https://opensource.org/licenses/category

Including a proper license lets user know its OK to use your code. Most WP plugins licensed under GPLv2 or later

GPL ensures that WordPress and all its plugins and themes will remain open source for everyone. So it won't get locked down by legal complications and proprietary restrictions.

Add a copying permissions statement to the file header

Grab example from exercise files

EX: 02-01 > gpl-copying-permission-statement.txt

Add to bottom of file header

Additonally, we should include a copy of the GNU license itself (from ex files)

EX: 02-01 > simple-example-plugin > license.txt

Place license in simple-example-plugin/ folder

Plugin is now installed and ready to activate

Doesn't do anything yet, but gives us a starting point to see our plugin on the plugins page

Now activate our new plugin

There are 2 possible locations to install plugins in:

#GOTCHA: You'll have to manually create this folder in the wp-content folder.

We can install in the plugins/ directory, or the wp-content/mu-plugins/ directory

- mu-plugins: must use; activated automatically

Must Use Plugins:

Pros:
- No need to login to admin area
- Loaded before all other plugins

Cons:
- No automatic or one-click updates
- No update notifications
- Activation hooks don't work; no activation/deactivation hooks
- No plugin directories -- single PHP files only

To see how must use plugins work, we will move our plugin to the mu-plugins directory

Deactive plugin first
move only main plugin file to mu-plugins/ dir

"Must-Use" tab appears under the Plugins page header

These plugins are executed automatically on each page load

Plugin Naming Guidelines:

- Plugin name should match the main plugin file

EG: My Simple Plugin = my-simple-plugin.php

- Plugin name should match the main plugin folder

EG: My Simple Plugin = /my-simple-plugin/

- Do som research on potential names: Helps to avoid conflicts with existing plugins
  
  #### 2.1 Explore WordPress APIs

From this point forward, all code we use to build our WP plugin should utilize the **WordPress API**

API: Application programming interface

- https://codex.wordpress.org/WordPress_APIs

The WP API is comprised of "numerous individual APIs, each of which focuses on a specific type of functionality"

- Options API: Store options in WP Database

Understanding which APIs are available helps us to choose the "right tool for the job" when building WP plugins

#GOTCHA: These are all collectively referred to as "the WordPress API"

Most Commonly Used APIs:

- Dashboard Widgets API
- Database API
- HTTP API
- REST API
- File Header API
- Filesystem API
- Metadata API
- Options API

- Plugin API
- Quicktags API
- Rewrite API
- Settings API
- Shortcode API
- Transients API
- Widgets API
- XML-RPC API

In addition to APIs, WordPress provides functions, classes, and template tags that you can use when building your plugins

https://developer.wordpress.org/reference/functions

Understand which classes and functions are available is essential to build safe, secure, standards-based plugins

Plugin Development: Key Resources

For learning more about specific WP functionality. These should first stop.

- WP Codex: https://codex.wordpress.org
- WP Code Reference: https://developer.wordpress.org/reference/
- Plugin Handbook: https://developer.wordpress.org/plugins/

When developing WP plugins using existing functionality whenever possible helps keep your plugins close to core, which helps them to be as fast and secure as possible with minimal input on my part.

Reasons to Use the WP API:

- Makes development easier
- Saves time -- no need to "reinvent the wheel"
- Does the heavy lifting for many tasks (interacting w/ database, sanitizing variables, etc.)
- Ensures your plugin is backward compatible and future proof
- Offers seamless integration with the WordPress admin area

  #### 2.2 Action and filter hooks
  
Hooks are central to WP plugin development. They enable us to interact with WP core, modify, extend, remove core funtionality.

Plugin_API is all about hooks

Two types of hooks: actions and filters

- Action hooks: run custom code at specific points during execution of WP (echo output, write to file, modify DB)

- Filter hooks: modify data during WP execution (modify post content before sending to user)

To use either actions or filters, we need a **callback function**

Let's open the simple-example-plugin from the previous video

EX: 02-03 > simple-example-plugin > simple-example-plugin.php

Add easy callback function for an action hook to send an email

wp_mail() is a WordPress core function - it sends an email


In main plugin file **simple-example-plugin.php**:

```php
function myplugin_action_hook_example() {

  wp_mail( 'email@example.com', 'Subject', Message ...' );

}
add_action( 'init', 'myplugin_action_hook_example' );

```

add_action(): first param specifies the hook, second the callback function name

Email will be sent every time WP executes

What order are Action Hooks executed?

- https://codex.wordpress.org/Plugin_API/Action_Reference

init hook happens very early in the process

we can include our callback function at just about any point (hook)

Filter Hooks:

```php
function myplugin_filter_hook_example( $content ) {

  $content = $content . '<p>Custom content..</p>';
  
  return $content;

}
```

Register the filter function like this:

add_filter( 'the_content' , 'myplugin_filter_hook_example' );

WordPress provides many filter hooks  

https://codex.wordpress.org/Plugin_API/Filter_Reference

Adding custom hooks is smart. Enables other devs to be able to extend and customize our plugins

Also possible to add or remove action and filter hooks whenever necessary

WP Hook Resources:

- Course: **Advanced WordPress: Action and Filter Hooks**
  
  #### 2.3 Plugin activation and deactivation

WP Registration Hooks:

Three hooks that enable us to customize functionality when the plugin is activated, deactivated, or uninstalled

- register_activation_hook() - runs when plugin is activated
- register_deactivation_hook() - runs when plugin is deactivated
- register_uninstall_hook() - runs when plugin is uninstalled

register_activation_hook()

https://goo.gl/gc6brN
https://developer.wordpress.org/reference/functions/register_activation_hook/

- Runs when plugin is activated from plugins page in admin area

- Useful for: adding default options, creating db tables, checking config, etc.

EX: 02-04 > activate-deactivate

Let's create a function that adds options to the options table

The first function is registered with the activation hook:

```php
// do stuff on activation
function myplugin_on_activation() {

  if ( ! current_user_can( 'activate_plugins' ) ) return;
  
  add_option( 'myplugin_posts_per_page', 10 );
  add_option( 'myplugin_show_welcome_page', true);

}
register_activation_hook( __FILE__, 'myplugin_on_activation' );

```

__FILE__: path to current file

2nd parameter is name of callback function

Inside function, we first check if user has sufficient priviledges. If not return without doing anything

Otherwise, we add 2 options: posts per page and whether to display a welcome page

---

Visit admin area and activate the plugin. Check options table in phpMyAdmin to verify that the options were added

Do a quick search in option_name field for the new options

#GOTCHA: Activation hook is great, but there are details / caveats to be aware of

EX: 02-04 > notes-activation-hook.txt

====================================
Notes for register_activation_hook()
====================================



* register_activation_hook() must be called from within the main plugin file.



* register_activation_hook() must not be registered from within another hook (e.g., "plugins_loaded" or "init"), because such hooks are called before the plugin is activated.



* If the activation callback function is located in any file other than the main plugin file, you can include the file before registering with the activation hook, for example:

	include_once dirname( __FILE__ ) . '/includes/activation.php';
	register_activation_hook( __FILE__, 'myplugin_activation_function' );



* If building a plugin for WP Multisite, it is better to use the "admin_init" hook. More info:

	https://core.trac.wordpress.org/ticket/14170#comment:68)



* Never echo/print anything for any of these three hooks:

	register_activation_hook()
	register_deactivation_hook()
	register_uninstall_hook()



* Learn more about register_activation_hook():

	https://codex.wordpress.org/Function_Reference/register_activation_hook
	https://developer.wordpress.org/reference/functions/register_activation_hook/

---

Deactivation Hook:

- Remove temp data, clear rewrite rules, delete transients, etc

```php
// do stuff on deactivation
function myplugin_on_deactivation() {
  
  if ( ! current_user_can( 'activate_plugins' ) ) return;
  
  flush_rewrite_rules();
  
}
register_deactivation_hook( __FILE__, 'myplugin_on_deactivation' );
```

flush_rewrite_rules(): useful for custom post types, etc.

It doesn't do anything visible, so how can we verify it is working?

A: Send email or simply "die" with a message

```php
  wp_die( 'The plugin has been deactivated!' );
```

#GOTCHA: Remember to REMOVE the die function when done testing!

Uninstall Hook:

Runs when plugin is uninstalled / removed via plugins page in admin area

Useful for: removing plugin data from database when plugin is deleted

Use to have plugin **clean up** after itself

```php
// do stuff on uninstall
function myplugin_on_uninstall() {
  
  if ( ! current_user_can( 'activate_plugins' ) ) return;
  
  delete_option( 'myplugin_posts_per_page', 10 );
  delete_option( 'myplugin_show_welcome_page', true );
  
}
register_uninstall_hook( __FILE__, 'myplugin_on_uninstall' );
```

Deactivate before uninstalling

Check phpMyAdmin to verify options have been removed (should return zero results)

#BESTPRACTICE: There is a better method for cleaning up after plugins that will be covered later in the course

"These hooks give us granular control and enable us to ensure that plugins are set up correctly and that they clean up after themselves when they are removed."


  #### 2.4 Pluggable WordPress functions

https://codex.wordpress.org/Pluggable_Functions


Another way to customize WP

Pluggable Functions: functions that can be overridden by our own versions; redefinable functions

CTRL  + G => go to specific line number

pluggable.php > Line 558

Default pluggable function for wp_logout():

```php
if ( !function_exists('wp_logout') ) :
/**
 * Log the current user out.
 *
 * @since 2.5.0
 */
function wp_logout() {
  
  wp_destroy_current_session();
  wp_clear_auth_cookie();
  
  /**
   * Fires after a user is logged-out.
   *
   * @since 1.5.0
   */
  do_action( 'wp_logout' );
  
}
endif;
```

The default behavior:
- destroys session
- clears autho cookies
- fires wp_logout hook

To customize:

- register new function with wp_logout hook
- register callback function with wp logout hook

- Add custom functionality with a callback function

EX: 02-05 > pluggable-functions.php

```php
/*
Plugin Name:  Pluggable Functions
Description:  Basic example demonstrating pluggable functions.
Plugin URI:   https://plugin-planet.com/
Author:       Jeff Starr
Version:      1.0
*/

// customize logout function
function myplugin_custom_logout() {
  
  // do something when the user logs out..
  
}
add_action( 'wp_logout', 'myplugin_custom_logout' );
```

- for most cases, using a hook is the best way to add custom functionality
- If we need more control, we can override the wp_logout() function:

Copy the function without the function_exists() if statement:

Paste function ito our main plugin file. Now we can customize the function in our new version

Add our custom logout function into our version of wp_logout() afte the auth cookie clearing code:

```php
...
wp_clear_auth_cookie();
myplugin_custom_logout();
```

Since we are now calling our wp_logout() function directly, we don't need to register it with the wp_logout hook

So we can remove the add_action() line:

```php
add_action( 'wp_logout', 'myplugin_custom_logout' );
```
This way the function will be called ONLY ONCE: when it is called from our custom logout function

In general, **pluggable functions** enable greater customization than using hooks alone

So, we could replace the standard function calls with our custom function calls like so:

```php
myplugin_destroy_current_session(); // instead of wp_destroy_current_session()
myplugin_clear_auth_cookie(); // instead of wp_clear_auth_cookie()
```

#NOTE: "All pluggable functions are wrapped with a function_exists() condition. These lines instruct PHP to use the function only if it NOT already included"

#GOTCHA: Don't include the function_exists() code when redefining functions

  #### 2.5 Develop secure WordPress plugins
  
Important to ensure plugins are as secure as possible

"When developing plugins there is no 'magic pill' to ensure that everything is secure"
  
Security is **mission critical**

https://codex.wordpress.org/Data_Validation

Security is added as you build your plugins with each variable sanitized, each user validated

WP Security Techniques:

- Data validation
- Sanitizing input
- Sanitizing output
- Using nonces
- Checking users

Documentation: https://developer.wordpress.org/plugins/security/

---

Data Validation:

- The process of checking whether data is valid or invalid

Documentation: https://developer.wordpress.org/plugins/security/data-validation/

Usually the data is provided by user or web server

Examples of Data Validation:

- Check if submitted comment is not blank
- Check if an email address is formatted correctly
- Check if a credit card number only contains numbers
- Check if the number of items is greater than zero
- Check if an address exists in a database

Validating data should be done as early as possible, before the data is used for anything

Three ways to validate with WP


WP Validation Functions:

- is_email() - checks if email is valid
- term_exists() - checks if the term exists
- username_exists() - checks if the username exists
- More validation functions: https://codex.wordpress.org/Data_Validation

PHP Validation Functions:

- isset()
- empty()
- mb_strlen()
- strlen()
- preg_match()
- strpos()
- count()
- in_array()

Documentation: https://secure.php.net/docs.php

Custom Validation Functions:

- Write your own (if no suitable functions can be found)
- Validate any data however is required
- Use any existing WP and PHP functions

Good validation functions return boolean values (true/false)

EX: 02-06 > security-example-validation.php

- Return false if value is empty
- Return false if not formatted as a phone number
- Else return true

```php
// validate phone number
function myplugin_is_phone_number( $phone_number ) {

	// check if empty
	if ( empty( $phone_number ) ) return false;

	// check format
	if ( ! preg_match( "/^\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})$/", $phone_number ) ) return false;

	// all good!
	return true;
```

And this is an example HTML form in which the plugin could be used (also on the same page)

```html
<form>
  <p><label for="phone">Please enter your phone number:</label></p>
  <p><input id="phone" type="tel" name="myplugin-phone-number"></p>
  <p><input type="submit" value="Submit Form"></p>
</form>
```

Next, we need a function to process or "handle" the form when it is submitted by a user

```php
// process submitted form
function myplugin_process_phone_number() {
  
  if ( isset( $_POST[ 'myplugin-phone-number' ] ) ) { 
  
    $phone_number = $_POST[ 'myplugin-phone-number' ];
    
    if ( myplugin_is_phone_number( $phone_number ) ) {
      
      echo '<p>Thank you for your phone number!</p>';
      
    } else {
      
      echo '<p>Please provide a valid phone number!</p>';
      
    }
  
  }
  
}
```

---

Data Sanitization:

- Process of cleaning or filtering data to make it safe

Documentaton: https://developer.wordpress.org/plugins/security/

Making data "safe" depends upon the context in which it is used

Examples of Data Sanitization:

- Display data as HTML -> Sanitize the data as HTML
- Display data as an attribute -> Sanitize data as an attribute
- Display the data as a URL -> Sanitize the data as a URL
- Display the data as "x" -> Sanitize the data as "x"

WP Sanitization Functions:

- sanitize_email() - sanitizes data as an email address
- sanitize_text_field() - sanitizes data for text fields
- sanitize_user() - sanitizes data as a username

More sanitization functions:
https://developer.wordpress.org/reference/functions

---

PHP Sanitization Functions:

- filter_var() - sanitizes data using filters
https://secure.php.net/manual/en/function.filter-var.php

PHP data sanitization

- https://secure.php.net/manual/en/filter.examples.sanitization.php

PHP sanitize filters

- https://secure.php.net/manual/en/filter.filters.sanitize.php

---

Custom Sanitization Functions

- Write your own
- Sanitize any data however is required
- Use any existing WP and PHP functions

EX: 02-06 > security-example-sanitization.php

sanitize_text_field():

- Checks for invalid UTF-8
- Converts single less-than characters (<) to entity
- Strips all tags
- Removes line breaks, tabs, and extra white space

https://developer.wordpress.org/reference/functions/sanitize_text_field

```php
// process submitted form
function myplugin_process_favorite_movie() {
  
  if ( isset( $_POST['myplugin-favorite-movie'] ) ) {
    
    $fav_movie = sanitize_text_field( $_POST[ 'myplugin-favorite-movie' ] );
    
    if ( ! empty( $fav_movie ) ) {
      
      echo '<p>Your favorite movie is '. $fav_movie . '.</p>';
      
    } else {
      
      echo '<p>Please enter your favorite movie!</p>';
      
    }
    
  }
   
}
```

#GOTCHA: It would be better in this case to validate as an actual movie. But, since movie titles can include letters, numbers, punctuantion and special characters, they would be difficult to validate. So, instead of validating we are **sanitizing**

---

Nonce Security:

- Generated strings used to verify request for security purposes

Documentation:

- https://developer.wordpress.org/plugins/security/nonces/
- https://codex.wordpress.org/WordPress_Nonces

Enable us to verify origin and intent of any submitted form request


EX: 02-06 > security-example-nonces.php

```php
// display form
function myplugin_form_favorite_music() {
  
  ?>
  
  <form method="post">
    <p><label for="music">What is your favorite music</label></p>
    <p><input id="music" type="text" name="myplugin-favorite-music"></p>
    <p><input type="submit" value="Submit Form"></p>
    
    <?php wp_nonce_field( 'myplugin_form_action', 'myplugin_nonce_field', false); ?>
    
  </form>
  
  <?php
  
}
```

wp_nonce_field():

- hidden field
- inspect the source code to see the nonce field
- the value is the nonce itself

first arg: nonce action
2nd arg: nonce field

Be as specific as possible when naming these parameters

When form is submitted, we use this function to handle the request

```php
// process submitted form
function myplugin_process_favorite_music() {

	// get the nonce
	if ( isset( $_POST['myplugin_nonce_field'] ) ) {

		$nonce = $_POST['myplugin_nonce_field'];

	} else {

		$nonce = false;

	}

	// process form
	if ( isset( $_POST['myplugin-favorite-music'] ) ) {

		// verify nonce
		if ( ! wp_verify_nonce( $nonce, 'myplugin_form_action' ) ) {

			wp_die( 'Incorrect nonce!' );

		} else {

			$fav_music = sanitize_text_field( $_POST[ 'myplugin-favorite-music' ] );

			if ( ! empty( $fav_music ) ) {

				echo '<p>Your favorite music is '. $fav_music .'.</p>';

			} else {

				echo '<p>Please enter your favorite music!</p>';

			}

		}

	}

}
```

If someone tries to submit the form from another location, the nonce will fail

  #### 2.6 Best practices for plugin development
  
"What puts plugin developers ahead of the competion? Their plugins are developed with the WordPress API and best practices"

Following best practices ensures your plugin will be widely compatible

Best Practices:

- File organization
- Plugin architecture
- Avoid naming collisions
- Choose a good name for your plugin
- Write great documentation
- More best practices
- Plugin boilerplates

File Organization:

Directory Structure:

- Separate admin assets from public assets
- Put general PHP files in the  /includes/ folder
- Add a proper file header to the main plugin file
- Keep the root directory as uncluttered as possible

plugin-root-directory/
  - blank index file
  - main plugin file
  - uninstall file
  - license file
  - readme file


- Add subdirectories as needed to house other files

- most plugins hae includes, languages, admin, and public folders

my-custom-plugin/
  - index.php
  - my-custom-plugin.php
  - uninstall.php
  - license.txt
  - readme.txt
  
  admin/
    css/
    js/
  public/
    css/
    js/

---

Plugin Architecture:

When it comes to organizing plugins, there are no strict rules, only **best practices**

How you organize your code will depend on the size, scope, and complexity of your plugin

Smaller plugins that focus on one specific task generally don't require an elaborate architecture

Larger plugins with lots of code WILL benefit from an **object oriented** approach with PHP classes, etc.

Architecture Patterns:

Many common architecture patterns can be grouped into one of 3 camps:

Single plugin file, containing functions:
- Example at GitHub: https://lnkd.in/github_GaryJones

Single plugin file, containing a class (and maybe some functions)
- Example at GitHub: https://lnkd.in/github_norcross

Main plugin file, then one or more class files
- Example at GitHub: https://lnkd.in/github_DevinVinson

---

Plugin Structure: Best Practices:

- Keep you code well-organized
- Comment your code as needed
- Separate CSS and JavaScript files
- Use conditional loading of code and assets

Example:

```php
<?php // example: conditonal loading

require_once( dirname( __FILE__ ) . '/admin/do-stuff.php' );
```

Save this file as wp-content/examples/example-cond.php

#GOTCHA: As is, this code will include the file in both the admin area AND on all **public facing** pages

We can improve performance by using the is_admin() conditional tag like so:

```php
<?php // example: conditonal loading

if ( is_admin() ) {
  
  require_once( dirname( __FILE__ ) . '/admin/do-stuff.php' );  
  
}
```

We save resources by loading the admin file only in the admin area

WP Conditional Tags:

- is_singular() - single post or page
- is_single() - single post
- is_page() - single page
- is_archive() - archive page

Many more: https://codex.wordpress.org/Conditional_Tags

---

Architecture Patterns: Resources:

Recommended reading for aspiring WP plugin developers

- Slash - Singletons, loaders, actions, screens, and handlers
https://lnkd.in/g3z5Y3A

- Implementing the MVC Pattern in WordPress Plugins
https://lnkd.in/guuaSEx

- WordPress Plugin: WP MVC
https://lnkd.in/gNgFfpH


---

Avoid Naming Collisions:

When 2 or more plugins are trying to use the same name for a variable function or class

- Prefix everything (namespacing)
- Check for existing implementations
- Use object-oriented programming (OOP)
- Use WordPress APIs and core functions

Namespacing: Before

```php
function activation_tasks() {
  ...
}
function deactivation_tasks() {
  ...
}
function uninstall_tasks() {
  ...
}
```

If another active plugin is using any of these plugin names a FATAL ERROR will results

Solution: use OOP and namespacing functions and global variables in your plugin

Namespacing: After

```php
function myplugin_activation_tasks() {
  ...
}
function myplugin_deactivation_tasks() {
  ...
}
function myplugin_uninstall_tasks() {
  ...
}
```

Public Namespace:

Very important to namespace anything in the public namespace

Add a unique prefix to anything in the public namespace

- Functions
- Classes
- Hooks
- Gobal variables
- Public variables
- Database entries
- Anything else that may clash with another plugin

---

Check for Existing Implementations:

The are some PHP existence checking functions.

- Variables - isset()
- Functions - function_exists()
- Classes - class_exists()
- Constants - defined()

Return true if entity exists, false if not

EX: 02-07 > examples > example-func.php

```php
<?php // example: check if function exists

if ( ! function_exists( 'myplugin_customize_something' ) ) {

  function myplugin_customize_something() {
    
    // do stuff ...
    
  }
  
}
```

With function_exists(), PHP will check if any other function has the same name. If so, it will ignor our function

Use Object-Oriented Programming (OOP):

- Simplified the amount of checking in your code
- Instead of checking for existing variables, constants, and so forth, we only need to check whether the class is already defined

```php
<?php // example: oop

if ( ! class_exists( 'Example_Plugin' ) ) {
  
  class Example_Plugin {
    
    public static function init() {
      // do stuff..
    }
    public static function register() {
      // do stuff..
    }
    public static function modify() {
      // do stuff..
    }
    
  }
  
}
```

OOP enables us to keep our function names nice and simple

Choose a Good Name for Your Plugin


"Choosing a good name takes time and is one of the most important decisions you'll make when creating plugins."

Naming Tips:

- Take your time and do some research
- Choose a unique name and avoid copyright issues
- Do not use vulgar or offensive names
- Do not include trademarked names without permission
- Avoid including "WordPress" and/or "Plugin in the name

The goal is to choose the best name possible and then stick with it for the life of the plugin

Write Great Documentation:

Make sure your plugin is well documented. Best way is to look at the example at WordPress.org

https://wordpress.org/plugins/files/2016/06/readme.txt

```
=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: http://example.com/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

This is the long description.  No limit, and you can use Markdown (as well as in the following sections).

For backwards compatibility, if this section is missing, the full length of the short description will be used, and
Markdown parsed.

A few notes about the sections above:

*   "Contributors" is a comma separated list of wordpress.org usernames
*   "Tags" is a comma separated list of tags that apply to the plugin
*   "Requires at least" is the lowest version that the plugin will work on
*   "Tested up to" is the highest version that you've *successfully used to test the plugin*. Note that it might work on
higher versions... this is just the highest one you've verified.
*   Stable tag should indicate the Subversion "tag" of the latest stable version, or "trunk," if you use `/trunk/` for
stable.

    Note that the `readme.txt` of the stable tag is the one that is considered the defining one for the plugin, so
if the `/trunk/readme.txt` file says that the stable tag is `4.3`, then it is `/tags/4.3/readme.txt` that'll be used
for displaying information about the plugin.  In this situation, the only thing considered from the trunk `readme.txt`
is the stable tag pointer.  Thus, if you develop in trunk, you can update the trunk `readme.txt` to reflect changes in
your in-development version, without having that information incorrectly disclosed about the current stable version
that lacks those changes -- as long as the trunk's `readme.txt` points to the correct stable tag.

    If no stable tag is provided, it is assumed that trunk is stable, but you should specify "trunk" if that's where
you put the stable version, in order to eliminate any doubt.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Plugin Name screen to configure the plugin
1. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)


== Frequently Asked Questions ==

= A question that someone might have =

An answer to that question.

= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* A change since the previous version.
* Another change.

= 0.5 =
* List versions from most recent at top to oldest at bottom.

== Upgrade Notice ==

= 1.0 =
Upgrade notices describe the reason a user should upgrade.  No more than 300 characters.

= 0.5 =
This version fixes a security related bug.  Upgrade immediately.

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.

== A brief Markdown Example ==

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
```

Readme file is used to create the documentation for your plugin at the WordPress plugin directory

#BESTPRACTICE: A complete well-written readme file means you'll be spending less time on customer support

WordPress Readme File Validator:

https://wordpress.org/plugins/developers/readme-validator/

Always take a few moments to validate your plugins' readme file

More Best Practices:

Pro Tips:

- Listen to your users
- Maintain consistent development
- Keep a complete and descriptive changelog

- Use semantic versioning: http://semver.org

Plugin Boilerplates:

boilerplate: pre-built starting point that can help speed up development

WordPress Plugin Boilerplate
- https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate

WordPress Plugin Bootstrap
- https://github.com/claudiosmweb/wordpress-plugin-boilerplate

WP Skeleton Plugin
- https://github.com/ptahdunbar/wp-skeleton-plugin

### 3. Building a WordPress Plugin

  #### 3.0 Create the plugin directory and files

Create main plugin folder
- wp-content/plugins/myplugin/

Create main plugin file in myplugin/ with same name as plugin folder

**MyPlugin Architecture:**

```
myplugin/
  myplugin.php
  index.php
  license.txt
  readme.txt
  
  admin/
    css/
    js/
  public/
    css/
    js/
  includes/
  languages/
```

includes: anything in this folder can be used anywhere (admin or public); great for common PHP files

languages: anything related to translating and localization. We will leave this folder empty until later in the course

4:00

index.php

index.php: empty file with simple comment that prevents the public from viewing the contents of our plugin directory

```php
<?php // Silence is golden.
```

Add same index file to the other plugin folders in root:
- admin, includes, languages, public

We don't need to add index files to the assets folders (css/js) because they are already viewable in the source code inspector, and thus would be pointless to try to block


myplugin.php

myplugin.php: main plugin file

EX: 03-01 > code-file-header-complete.txt

Let's keep things simple and go with the basic file header since this is just a demo.

#GOTCHA: Make sure to add the full file header when ready to publish to WordPress plugin directory

EX: 03-01 > code-file-header-basic.txt

```php
<?php
/*
Plugin Name:  MyPlugin
Description:  Example plugin fo rthe video tutorial series, "WordPress: Plugin Development", available at Lynda.com.
Plugin URI:   https://profiles.wordpress.org/specialk
Author:       Jeff Starr
Version:      1.0
Text Domain:  myplugin
Domain Path:  /languages
License:      GPL v2 OR later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/
```

license.txt: copy of standard GPL text file. Including a copy required by GPL license.

http://www.gnu.org/licenses/gpl-2.0.txt


readme.txt: tells all users about your plugin; the documentation and needs to be formatted properly

Example Readme file provided by WordPress.org: https://wordpress.org/plugins/readme.txt

Let' use our own file header from main plugin file

#GOTCHA: Leave the === Plugin Name === part at top alone

After plugin is complete we can flesh out the rest of the readme.txt file and replace placeholders with our information

EX: 03-01 > code-prevent-direct-file-access.txt

```php
// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
```

Add this security snippet before any other PHP plugin code.
- in main plugin file
- NOT in blank index files

STARTER TEMPLATE / BOILERPLATE

As long as there is a correctly formatted file header the plugin should show up on Plugins page, even if there's no code to do anything yet

  #### 3.1 Add administration menus

We will add a menu item in the wp admin menu

Where to add menu item?

- 2 choices: Top-level or Submenu

Top Level Menu vs. Sub-Level:

Top-level menu:

- May contain submenus
- Best for plugins with multiple settings pages

Sub-level menu:

- Added to existing top-level menu
- Best for plugins with only one settings page

Adding a Top-Level Menu:

First, add the function to display our plugin settings page:

EX: 03-02 > 01-code-display-settings.txt

Add this code to bottom of main plugin file

```php
// display the plugin settings page
function myplugin_display_settings_page() {
  
  // check if user is allowed access
  if ( ! current_user_can( 'manage_options' ) ) return;
  
  ?>
  
  <div class="wrap">
    
    <h1><?php echo esc_html( get_admin_page_title() ): ?></h1>
    <form action="options.php" method="post">
    
      <?php
      
      // output security fields
      settings_fields( 'myplugin_options' );
      
      // output settings sections
      do_settings_sections( 'myplugin' );
      
      // submit button
      submit_button();
      
      ?>
    
    </form>
  
  </div>
  
  <?php
  
}
```

- Check if user has permission to access the plugin page
- If yes, output markup to display the page

- get_admin_page_title() - displays plugin name as page heading
- Form action must be "options.php" and method must be "post"

- settings_fields() - output requried security fields; param is the name of settings group to display
- do_settings_sections() - output markup to display the plugin settings; parm is name of menu slug
- submit_button() - displays submit button

#GOTCHA: User can't get to settings page without a menu item

EX: 03-02 > 02-code-add-toplevel-menu.txt

Add this to bottom of main plugin file

```php
// add top-level administrative menu
function myplugin_add_toplevel_menu() {
  
  /*
    add_menu_page(
      string $page_title,
      string $menu_title,
      string $capability,
      string $menu_slug,
      callable $function = '',
      string $icon_url = '',
      int $position = null
    )  
  */
  
  add_menu_page(
    'MyPlugin Settings',
    'MyPlugin',
    'manage_options',
    'myplugin',
    'myplugin_display_settings_page',
    'dashicons-admin-generic',
    null
  );
  
}
add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );
```

add_menu_page() - adds plugin to the settings menu

Parameters:

- Plugin page title
- Title of menu item
- Required user capability (should be manage options unless you have a good reason to do otherwise)
- Menu slug (used for url of plugin page. good idea to use name of plugin)
- Callback function that will display the plugin page. Should match name of function we added at top; myplugin_display_settings_page(), in this case)
- Menu icon: generic dash icon (cog wheel /gear)
- Menu priority: high number, lower (vertically) menu will appear in the Dashboard admin menu. Zero "0" will make it appear at very top. Best to leave it at "null" to avoid clashes

With all parameters define, let's now REGISTER this function with the proper hook

For admin menus, use the "admin_menu()" action hook

---

6:00

Sub-level menu item:

To add sub-level menu item we need to remove the top-level menu function we just added

ADD sublevel function from exercise files

EX: 03-02 > 03-code-add-sublevel-menu.txt

Now add this code to add a sublevel menu:

```php
// add sub-level administrative menu
function myplugin_add_sublevel_menu() {
  
  /*
  
  add_submenu_page(
    string    $parent_slug,
    string    $page_title,
    string    $menu_title,
    string    $capability,
    string    $menu_slug,
    callable  $function = ''
  );
  
  */
  
  add_submenu_page(
    'options-general.php',
    'MyPlugin Settings',
    'MyPlugin',
    'manage_options',
    'myplugin',
    'myplugin_display_settings_page'
  );
}
add_action('admin_menu', 'myplugin_add_sublevel_menu');
```

The main difference is here we are using the add_submenu_page() function instead of add_toplevel_page()

Parameters:

- Parent slug: determines toplevel menu to which our plugin will be added

Parent Slugs for add_submenu_page():

- Dashboard menu - index.php
- Posts - edit.php
- Pages - edit.php?post_type=page
- Media = upload.php
- Comments = edit-comments.php
- Themes - themes.php

Parent Slugs for add_submenu_page():

- Plugins - plugins.php
- Users - users.php
- Tools - tools.php
- Settings - options-general.php


- For this plugin (and most plugins) we want to display the menu item under the settings menu, so we use "options-general.php" for the first parameter

The remaining params are almost same as for toplevel

7:40

Organize by moving our two new functions into their own files

Create new file admin/admin-menu.php

```php
<?php // MyPlugin - Admin Menu

myplugin_add_sublevel_menu()
```

Create new file admin/settings-page.php

```php
<?php // MyPlugin - Settings Page
```

Move display settings func into this file

Add the no direct access code (ABSPATH) to each of these two new files, before any other PHP code

Next, include each of these new files in main plugin file:

```php
// if admin area
if ( is_admin() ) {
  
  // include dependencies
  require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
  require_once plugin_dir_path( __FILE__ ) . 'admin/setttings-page.php';
  
}
```

  #### 3.2 Add the plugin settings page

Use the Settings API

Step 1: Planning:
- Which settings to we need?

Hello Dolly has zero settings

Akismet has its own sub-level menu item under the Settings menu. And it also has its own settings page where the plugin can be customized

Any options we add will be displayed on the settings page

Plugin Planning:

Our plugin will display its settings in 2 section

Custom login page:
- URL for login link
- Title attribute for login link
- Enable custom login styles
- Custom login message

Customize Admin Area:

- Custom footer text
- Remove toolbar items
- Choose admin color scheme

Customize login page:

Plan the types of field to use

- URL for login link              -> Text input   <input type="text">
- Title attribute for login link  -> Text input   <input type="text">
- Enable custom login styles      -> Radio input  <input type="radio">
- Custom login message            -> Textarea     <textarea>

Customize admin area:

- Custom footer text              -> Text input   <input type="text">
- Remove toolbar items            -> Checkbox     <input type="checkbox">
- Choose admin color scheme       -> Select menu  <select>

HTML Fields:

Here are the general field types that can be used in any plugin

- Text input    <input type="text">
- Radio input   <input type="radio">
- Checkbox      <input type="checkbox">
- Textarea      <textarea>
- Select menu   <select>


Register Setting:

To add a setting we first need to REGISTER it with the register_setting() function

EX: 03-03 > 01-code-register-settings.txt

Add register setting code at bottom of main plugin file

```php
// register plugin settings
function myplugin_register_settings() {
  
  /*
  
  register_setting(
    string    $option_group,
    string    $option_name,
    callable $sanitize_callback
  );
  
  */
  
  register_setting(
    'myplugin_options',
    'myplugin_options',
    'myplugin_callback_validate_options'
  );
  
}
add_action( 'admin_init', 'myplugin_register_settings' );
```

Parameter 1 of register_settings() must match parameter 1 of settings_fields() in settings-page.php display settings page function

Param 2: used for retrieving the option from the database

Parm 3: callback function to validate the settings

Register function with admin_init() hook - fires only in admin area

Next, define validation function

EX: 03-03 > 02-code-validate-settings.txt

```php
// validate plugin settings
function myplugin_validate_options($input) {
  
  // todo: add validation functionality ...
  
  return $input;
  
}
```

3:48

We have now successfully registered our plugin settings :)
- inlcluedes register_settings function and validation function

---

NEXT, add 2 sections for settings

EX: 03-03 > 03-code-add-settings-section.txt

```php
/*

add_settings_section(
  string    $id,
  string    $title,
  callable  $callback,
  string    $page
);

*/

add_settings_section(
  'myplugin_section_login',
  'Customize Login Page',
  'myplugin_callback_section_login',
  'myplugin'
);

add_settings_section(
  'myplugin_section_admin',
  'Customize Admin Area',
  'myplugin_callback_section_admin',
  'myplugin'
);
```

Add to existing function myplugin_register_settings()

Param 1: section ID
Param 2: section title (displayed as section heading)
Param 3: Callback function - display description of the section
Param 4: Menu slug of page on which to be displayed


Now, ADD the two callback functions at the bottom of the main plugin file

EX: 03-03 > 04-code-section-callbacks.txt

```php

// callback: login section
function myplugin_callback_section_login() {
  echo '<p>These settings enable you to customize the WP Login screen.</p>';
}

// callback: admin section
function myplugin_callback_section_admin() {
  echo '<p>These settings enable you to customize the WP Admin Area.</p>';
}
```

FINAL STEP: Add settings fields

EX: 03-03 > 05-code-add-settings-fields.txt

#GOTCHA: Looks like a lot of code, but it is mostly repetitive patterns

ADD the code inside our existing register_settings() function

```php

// one of the login section fields
add_settings_field(
  'custom_url',
  'Custom URL',
  'myplugin_callback_field_text',
  'myplugin',
  'myplugin_section_login',
  [ 'id' => 'custom_url', 'label' => 'Custom URL for the login logo link' ]
);

...

// one of the admin section fields
add_settings_field(
  'custom_footer',
  'Custom Footer',
  'myplugin_callback_field_text',
  'myplugin',
  'myplugin_section_admin',
  [ 'id' => 'custom_footer', 'label'   => 'Custom footer text' ]
);

```

7 settings for this plugin

Param 1: setting ID -- for retrieving from database
Param 2: setting Title (displayed on page)
Param 3: callback function - output markup to display the settings

#GOTCHA: We will add the callback functions in the next video

Param 4: page on which to display the settings. should be same as menu slug in add_submenu_page function

Param 5: section that should display the setting . should match the section ID in add_settings_section func

Param 6: Array of anything we want to pass to the callback func. Including field ID and label

ADD callback functions

EX: 03-03 > 06-code-settings-callbacks.txt

Add the callback code at end of main plugin file

#GOTCHA: For now, callback functions are simple text placeholders to show us they are working

```php
// callback: text field
function myplugin_callback_field_text($args) {
  
  // todo: add callback functionality..
  
  echo 'This will be a text field.';
}

// callback: radio field
function myplugin_callback_field_radio($args) {
  
  // todo: add callback functionality..
  
  echo 'This will be a radio field';
}

// these are the other callback field types
myplugin_callback_field_textarea($args)

myplugin_callback_field_checkbox($args)

myplugin_callback_field_select($args)
```

Let's Organize our settings code with two new files

admin/settings-register.php
admin/settings-callbacks.php

- MOVE the appropriate sections into their new homes
- ADD the prevent direct access snippet to top of each file (under file header)
- Add require_once statements for each of these two files in main plugin file

  #### 3.3 Add settings callback functions
  
We are working in settings-callbacks.php

We will complete the 5 field callback functions in this video

EX: 03-04 > 01-code-get-plugin-options.txt

```php
// default plugin options
function myplugin_options_default() {
  
  return array(
    'custom_url'        => 'https://wordpress.org/',
    'custom_title'      => 'Powered by wordPress',
    'custom_style'      => 'disable',
    'custom_message'    => '<p class="custom-message">My custom message</p>',
    'custom_footer'     => 'Special message for users',
    'custom_toolbar'    => false,
    'custom_scheme'     => default,
  );
  
}
```

ADD this function directly to the main plugin file

Returns an array containing default values for our plugin settings. They are used by the plugins until user makes changes on settings page.

REPLACE the text field callback placeholder with something more complete

EX: 03-04 > 02-code-settings-callbacks.txt

Just grab the first function for now and paste it over the one in settings-callbacks.php

```php
// callback: text field
function myplugin_callback_field_text($args) {
  
  $options = get_option('myplugin_options', myplugin_options_default());
  
  $id     = isset($args['id'])    ? $args['id']    : '';
  $label  = isset($args['label']) ? $args['label'] : '';
  
  $value  = isset($options['id']) ? sanitize_text_field($options[$id]) : '';
  
  echo '<input id="myplugin_options_' . $id . '" name="myplugin_options[' . $id . ']" type="text" size="40" value="' . $value . '"><br />';
  echo '<label for="myplugin_options_' . $id . '">' . $label . '</label>';
  
}
```

1st define variables

Then output field markup

Use get_option to get plugin options from the database

Option name is defined in 2nd param of settings register function
Param 2: specified default options to use if plugin options not found in database

$args is defined in the add_settings_field function calls

Next, define the field value and sanitize with sanitize_text_field() function

Now, will all the variables defined, we output the HTML required to display the text input field

We are using the previously defined variables for the tag attributes

```php
// callback: radio field
function myplugin_callback_field_radio($args) {
  
  $options = get_option('myplugin_options', myplugin_options_default());
  
  $id     = isset($args['id'])    ? $args['id']    : '';
  $label  = isset($args['label']) ? $args['label'] : '';
  
  $selected_option = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';
  
  $radio_options = array(
    
    'enable'  => 'Enable custom styles',
    'disable' => 'Disable custom styles'
  );
  
  foreach ($radio_options as $value => $label) {
    
    $checked = checked($selected_option === $value, true, false);
    
    echo '<label><input name="myplugin_options[' . $id . ']" type="radio" value="' . $value . '"' . $checked . '> ';
    echo '<span>' . $label . '</span></label><br />';
    
  }
}
```

Check if current radio option is selected using checked() function

REPLACE Textarea callback

```php
// callback: textarea field
function myplugin_callback_field_textarea($args) {
  
  $options = get_option('myplugin_options', myplugin_options_default());
  
  $id     = isset($args['id'])    ? $args['id']    : '';
  $label  = isset($args['label']) ? $args['label'] : '';
  
  $allowed_tags = wp_kses_allowed_html('post');
  
  $value = isset($options[$id]) ? wp_kses(stripslashes_deep($options[$id]), $allowed_tags) : '';
  
  echo '<textarea id="myplugin_options_' . $id . '" name="myplugin_options[' . $id . ']" rows="5" cols="50">' . $value . '</textarea><br />';
  echo '<label for="myplugin_options_' . $id . '">' . $label . '</label>';

}
```

wp_kses_allowed_html gives us an array of allowed HTML tags. This enables user to add basic markup to the textarea box

NEXT replace the checkbox callback

```php
// callback: checkbox field
function myplugin_callback_field_checkbox($args) {
  
  $options = get_option('myplugin_options', myplugin_options_default());
  
  $id     = isset($args['id'])    ? $args['id']    : '';
  $label  = isset($args['label']) ? $args['label'] : '';
  
  $checked = isset($options[$id]) ? checked($options[$id], 1, false) : '';
  
  echo '<input id="myplugin_options_' . $id . '" name="myplugin_options[' . $id . ']" type="checkbox" value="1"' . $checked . '> ';
  echo '<label for="myplugin_options_' . $id . '">' . $label . '</label>';
  
}
```

checked() function determines whether or not the checkbox should be select

FINALLY, replace the select callback

```php
// callback: select field
function myplugin_callback_field_select($args)
{

  $options = get_option('myplugin_options', myplugin_options_default());

  $id    = isset($args['id'])    ? $args['id']    : '';
  $label = isset($args['label']) ? $args['label'] : '';

  $selected_option = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';

  $select_options = array(

    'default'   => 'Default',
    'light'     => 'Light',
    'blue'      => 'Blue',
    'coffee'    => 'Coffee',
    'ectoplasm' => 'Ectoplasm',
    'midnight'  => 'Midnight',
    'ocean'     => 'Ocean',
    'sunrise'   => 'Sunrise',

  );

  echo '<select id="myplugin_options_' . $id . '" name="myplugin_options[' . $id . ']">';

  foreach ($select_options as $value => $option) {

    $selected = selected($selected_option === $value, true, false);

    echo '<option value="' . $value . '"' . $selected . '>' . $option . '</option>';
  }

  echo '</select> <label for="myplugin_options_' . $id . '">' . $label . '</label>';
}
```


$selected_option = isset( $optins[$id] );

$select_options = array(

  'default'     => 'Default',
  'light'       => 'Light',
  ...
  'sunrise'     => 'Sunrise',

);

selected() function checks to see if the current option is selected

Check the debug.log file for errors

(Confirmed: The file created itself when we enabled WP_DEBUG_LOG earlier :)

Cleared debug log because errors were resolved



























  
  #### 3.4 Validate plugin settings
  #### 3.5 Add custom functionality
  #### 3.6 Include JavaScript and CSS
  #### 3.7 Plugin internationalization
  #### 3.8 Add an uninstall feature
  #### 3.9 Test and debug
### 4. Essential Plugin Techniques
  #### 4.0 Customize the WordPress loop
  #### 4.1 Create widgets
  #### 4.2 Manage users and roles
  #### 4.3 Work with JavaScript and CSS
  #### 4.4 Use the Options API
### 5. Extending Plugin Functionality
  #### 5.0 Add custom post types and taxonomies
  #### 5.1 Work with custom fields
  #### 5.2 Add meta boxes
  #### 5.3 Work with custom database queries
  #### 5.4 Integrate admin notices
### 6. Advanced Plugin Techniques
  #### 6.0 Use the Transients API
  #### 6.1 Use the HTTP API
  #### 6.2 Use WP-Cron
  #### 6.3 Implement Ajax
  #### 6.4 Use the REST API
  #### 6.5 Develop with Gutenberg
### 7. Conclusion
  #### 7.0 Next steps


---

## RESOURCES & REFERENCE

- https://www.linkedin.com/learning/instructors/nigel-french)

## --- [END 03 - FIN]


## <u>---{ LAST PLACE }</u>













































