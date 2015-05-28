Boom
====

Starter theme for Drupal 7

To Use
======

* Copy files to new theme folder
  - do not copy the directory so we don't accidentally bring over the git repo
* Rename boom.info
* Rename boom-functions.js
* Search and replace boom with your theme name
* Rename the theme folder to your custom theme name
  - theme names should get a year suffix
   - For example: sitename2015
* This theme is a starting template and should not be used to build a subtheme off of

* You will need Node, Grunt, and Bundler
* From the command line, cd into the folder
* Run "npm install"
* Run "bundle install"
* Run "npm update caniuse-db"
* Run "grunt watch"
* To stop watching, use Ctrl+C

Random Notes
============

* Common Modernizr tests: mediaqueries (non-core), touch, rgba, csstransforms (2d), svg, plus printshiv
* Frequently used Modernizr tests: csscalc (non-core), cssanimations, csstransitions