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

* You will need Node, Grunt, and Bundler
* From the command line, cd into the folder
* Run "npm install"
* Run "bundle install"
* Run "grunt watch"
* To stop watching, use Ctrl+C

Random Notes
============

* Common Modernizr tests: mediaqueries (non-core), touch, rgba, csstransforms (2d), svg, plus printshiv
* Frequently used Modernizr tests: csscalc (non-core), cssanimations, csstransitions