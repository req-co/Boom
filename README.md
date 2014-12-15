Boom
====

Starter theme for Drupal 7, using SASS.

To Use
======

* You will need Node, Grunt, and Bundler
* From the command line, cd into the folder
* Run "npm install"
* Run "bundle install"
* Run "grunt watch"
* To stop watching, use Ctrl+C

To Do
=====

* Add more of the frequently used tpls and preprocess functions
* Get SASS globbing working without Compass
* Modify Gruntfile so we don't need the no-prefix CSS file as an intermediate step
* Play with making $no-query the default for breakpoint mixin - this may or may not wind up being a good idea, depending on the project
* Play with custom Modernizr build via Grunt - https://github.com/Modernizr/grunt-modernizr 
* Get LiveReload working
* Play with KSS - http://warpspire.com/kss/ & http://mikefowler.me/2013/10/14/static-styleguides-kss-node/ & https://github.com/t32k/grunt-kss 
* Create a "starter" icon font of frequently used icons (Facebook, Twitter, arrows, etc.)
* Add matchHeight.js
* Add formalize.js

Random Notes
============

* We usually use the Drupal jQuery Update module to change public pages to v. 1.7 and leave admin pages alone
* We pretty much always use the following Modernizr tests: mediaqueries (non-core), touch, rgba, csstransforms (2d), svg, plus printshiv
* We also use these Modernizr tests a lot: csscalc (non-core), cssanimations, csstransitions, others as needed