# Launch Theme README

Welcome to the README for Launch Theme development! Please follow the steps in "Setting up the environment" first. This assumes you have Git installed on your computer, a GitHub account, and an SSH key hooked up to GitHub.

#### Table of Contents

- [Setting up the environment](#setting-up-the-environment)
- [Working with the git repository](#working-with-the-git-repository)
- [Working with the codebase](#working-with-the-codebase)

## Setting up the environment

Note: This project requires Node.js, Gulp.js, Ruby, and Sass. If you do not have these, follow the steps in "Getting Node, Gulp, Ruby, and Sass" after you complete this section.

1. Create a new database called `launch` on your localhost
2. From [wordpress.org](http://wordpress.org/) download the latest version of WordPress
3. Configure your WordPress install to the database `launch` on localhost with the table prefix `launch_`
4. Navigate to `/wp-content/themes/` in your WordPress install and run `$ git clone git@github.com:tatwater/launch.git` for this repository
5. Optional: Import `launch.sql` into your localhost's `launch` database
6. Log into WordPress by viewing the site in your browser and appending `/wp-admin` to the address bar
7. Change the theme through Appearance -> Themes to the "Launch" theme

### Getting Node, Gulp, Ruby, and Sass

1. From [nodejs.org](http://nodejs.org/), download and run the installer
2. From [sass-lang.com](http://sass-lang.com/install/), follow the instructions to install both Ruby and Sass
3. From your terminal, navigate to `/themes/launch/`, and run the following:
    - `$ npm install -g gulp` (might need `sudo` at start to get around privileges)
    - `$ npm install`

## Working with the git repository

Before you make any code changes, complete the following steps:

1. Choose or create an issue in GitHub's issue tracker and assign yourself to it
2. From your terminal, navigate to `/themes/launch/`, and run the following:
    - `$ git checkout -b iss##` (where ## is the issue tracking number for what you'll be working on. **Do not make changes to branch `master`**)
    - `$ git pull origin master` (This will bring your new branch up to date with `master`)
4. If you wish to work with the latest version of the database, import `launch.sql` to your localhost's `launch` database
5. From `/themes/launch/` in your terminal, run `$ gulp`

**While making any file edits to the theme, it is important to have Gulp running so that it can compile your `*.scss` and `*.js` changes.**

After you have made your changes, complete the following steps:

1. If you have made changes to the database, export it and put the new `launch.sql` file into `/themes/launch/`
2. From your terminal, escape the Gulp watch loop with `CMD-C` or `CTRL-C` then run the following (still in `/themes/launch/`):
    - `$ git status`
    - `$ git add .` (or `$ git -rm FILENAME`, depending on the status)
    - `$ git commit -m "COMMIT_MESSAGE"` (See "Git commit style" below)
    - `$ git push origin iss##`
    - `$ git status` again to check that everything is up-to-date
3. Go to the [GitHub pull requests page](https://github.com/tatwater/launch/pulls) and submit a request to have your changes merged into the `master` branch. You will be notified when your changes go live!

### Git commit style

When writing your commit messages, write them as though they start with "This will", for example:
 - ` $ git commit -m "Fix wrapping in main navigation"`
 - ` $ git commit -m "Add calendar styles"`
 - ` $ git commit -m "Clean up superfluous code"`

## Working with the codebase

### Files

- The only files you should edit are the `*.php` ones in the theme root and anything in the `/dev/` folder.
- Please set your indentation size to 2 and use spaces instead of tabs

### Naming conventions

- Be descriptive and clear! A fully-written name like "New Object Name" is clearer than initilisms like "NON" or abbreviations like using "Obj" instad of "Object".
- For CSS and JavaScript hooks (classes, IDs, and data attributes), use a lowercase, hyphenated scheme like `new-object-name`
- For JavaScript variables and functions, use a lower-camelcase scheme like `newObjectName` (Never upper-camelcase like `NewObjectName`!)
- For images, use a lowercase, hyphenated scheme like `my-image.jpg`. Store unused/backup images in `/dev/img/unused/` so that they won't be compiled by Gulp

### Sass

This project follows the Sass architecture guidelines outlined at [sitepoint.com](http://sitepoint.com/architecture-sass-project/) to stay as organized as possible.

Brand fonts are all included. If you wish to use one of the brand fonts that has not been activated yet, uncomment both the import line and the variable declaration for the font (and its italic variation if one exists) in `/dev/scss/base/_typography.scss`.

### JavaScript

The majority of `*.js` files will be written entirely in jQuery, but if you can write simpler tasks in straight JavaScript, please do.

JavaScript should interface with HTML primarily through the use of data attributes instead of class or ID names. This is to make very clear which elements are dynamic.
