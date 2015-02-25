# Arquitecta
Wordpress child theme, based on [Infrastrukt](http://github.com/rediris/infrastrukt)


## Developer use:

### Preparing
Make sure you have the most recent NPM installed.
In the arquitectura directory, run these commands:

- `npm install`
- `bower install`
- `bower prune`

### Grunt Tasks
- `grunt build` (initial build: compiles SASS to CSS, minifies CSS and JS files)
- `grunt` (default watch task, executes build upon changes)

### Adding Additional Dependencies
- JavaScript library: `bower install -S [package]`
- NodeJS package: `npm install --save-dev [package]`