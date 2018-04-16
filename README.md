# WordPress Starter Theme

Built to work within the needs of 40Digits, our theme functions as a starting point for our projects. Now that 40D is Barkley Digital, we still use this theme for WordPress development.

***Now Included***

While the project includes a base `package.json`, the WordPress Starter Theme also comes with a `package-wp-ready.json` for a jump-start on development with our Polaris Sass framework and custom JS framework of choice. To use this one instead of the base JSON file, delete the other `package.json`, change the name of the `package-wp-ready.json` to `package.json`, change the names of your local site (located twice within the code), the dev site, and production site, and then proceed with your `npm install`.

## Stylesheet Declaration

To setup the WordPress theme, make sure to add the necessary theme declarations to `_src/sass/style.scss`

```scss
/*!
 *  Theme Name: Project Name
 *  Theme URL: http://www.project-url.com/
 *  Description: Project or website descriptions.
 *  Author: 40Digits
 *  Author URI: http://www.barkleyus.com
 *  Version: 0.01 */
```