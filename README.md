# FiftySix24 #

An HTML site template and Wordpress blank theme template for LearningWorks Ltd based on a 56px column/24px gutter grid layout using Susy grids. 


## Requirements ##

To use this template you will need to install the following:

1. Ruby
2. SASS v3.3 or higher
3. Susy v2

Note: If you are on Mac OS X, Ruby comes pre-installed. For Windows operating systems you can can download the installer here: http://rubyinstaller.org/downloads/

### Install SASS and Susy ###

Once you have Ruby installed on your system you can install SASS and Susy using the following commands:

###### SASS #######
> gem install sass

###### Susy #######
> gem install susy


#### Installing behind proxy ####

If you're behind a proxy which blocks Ruby from being able to download and install the gems using the commands above, then go to http://rubygems.org and download the appropriate gems to your computer. Open up a command window in the directory where the downloaded gems are stored and enter the following command to install them:

> gem install *gem_name* --local



## Usage ##

This section describes the layout and usage.

### HTML ###

Included is a template file, index.html, which demonstrates the layout described here. 

The body is split into several sections (*.global-header*, *.global-content*, and *.global-footer*), wrapped by *.page*. The mobile navigation menu sits outside of *.page*. 

The first section, *.global-header*, should contain the navigation elements at the top of the page, often including the site logo too. *.global-content* should contain all of the modules for the page, while *.global-footer* should hold any navigation elements for the bottom of the page, or any blocks which are to be displayed across the bottom of all pages.

Each module within *.global-content* should be independent of another.


### SASS ###

The SASS is set up as follows:

>	base/
>
> 		_fonts.scss
>
>		_mixins.scss
>
> 		_reset.scss
>
> 		_tags.scss
>
>		_variables.scss
>
>	components/
>
>		_component-icons.scss
>
>		_component-button.scss
>	
> 	modules/
>
>		_common.scss
>
>		_module-example.scss
>
> 	screen.scss


Within the *sass* directory, there are 3 subdirectories; *base*, *components*, and *modules* (described further below), and the file; *screen.scss*.

###### screen.scss ######
Imports all the SASS partials and Susy. This is what you compile to generate your css.


------


Within the *base* directory, there are 5 SASS partial files which define the base stylings for the template. 


###### _fonts.scss ######
Contains all font definitions for the site.


###### _mixins.scss ######
Contains SASS mixins and functions to handle setting the Susy container, breakpoints, and general mixins (such as font-size, transitions, animations, etc). To use some of the common general mixins:

Font-size (FUNCTION):

	.element {
		font-size: font-size(normal, $type--body);
	}


Transition:

	.element {
		@include transition(color .3s ease);
	}


Keyframe and Animation:

 	@include keyframes(slide-down) {
		0% { opacity: 1; }
 		90% { opacity: 0; }
	}
	
	.element {
		@include animation('slide-down 5s 3');		
	}


###### _reset.scss ######
Resets the CSS.


###### _tags.scss ######
Sets up some default styling for the bare HTML tags based on the variables within *_variables.scss*.


###### _variables.scss #######
Defines Susy grids parameters and contains maps for common site settings. Default maps include:

* *$color* for defining site colours. All colours should be stored as a field within the map - there should be  no bare colours within the SASS modules.
* *$typeset--body* for defining body text styling, such as font-family, weight, size, case.
* *$typeset--heading* for defining heading weight, case, font and sizes h1-6.


------


Within the *components* directory, each component should be defined in their own SASS partials file, e.g. *_component-button.scss*. A component defines the styling for specific reusable elements such as buttons, icons, etc.

###### _component-button.scss ######
The component button partial comprises of a mixin which defines the styles which should be shared by all buttons. By default, there are 2 button types: button and button--alt. These use the colours set in your variables file.


------


Within the *modules* directory, each module should be defined in their own SASS partials file, e.g. *_module-example.scss*. A module defines a layout structure for a block within the page.

###### _common.scss ######
The common module partial contains styling for layout classes (such as *.page*, *.global-header*, *.global-footer*, *.mobile-nav-container* etc.) and common blocks/elements which can be shared across all modules (such as *.module*, *.icon*).

Within this file, the class *.container* is defined. This is used to impose the Susy grid layouts to the page. You must have a div with the *.container* class wrapping your module's content to be able to use Susy grids for that module. For more on Susy grids, see http://susydocs.oddbird.net/


#### Naming Conventions ####

The template uses BEM (Block-Element-Modifier) style naming conventions. 

> .block {}
>
> .block__element {}
>
> .block--modifier {}
>
> .block__element--modifier {}


###### Block ######
A block is an independent entity, a "building block" of a module. A block can be either simple or compound (containing other blocks).


###### Element ######
An element is a part of a block that performs a certain function. Elements are context-dependent: they only make sense in the context of the block they belong to.


###### Modifier ######
To avoid developing another block that is only minimally different from an existing one, we can use a modifier. A Modifier is a property of a block or an element that alters its look or behavior. A modifier has a name and a value - note these should be semantic names and not directly regurgitating css properties, because the visual display of an element may change later on in development.

For more explanation on BEM and how it is used, see: http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/


#### Compiling the SASS ####

Included in the sass directory is compile.cmd which can be run to compile the SASS (on Windows) which will output the SASS as */css/screen.css*. You can also compile the SASS manually by opening a terminal window in the sass directory and entering the following command:

> sass -r susy screen.scss:../css/screen.css --style compressed

The parameter *--style compressed* will automatically minify the css for you. If you don't want the css minified, you can remove the *--style* parameter entirely, or change *compressed* to *expanded* for closing } to be on a new line.



### Javascript ###

The javascript file, *site.js*, is set up to work based on the SASS modules included within the page. It is dependent upon jQuery. Included is jQuery version 1.11, however you are free to use whichever version you want.

Also included is the *development* version of Modernizr. Within the SASS framework there is a mixin dependent upon checking for SVGs using Modernizr, otherwise you can customise your build and remove unwanted features when you push to production. See http://modernizr.com/download/

Each module should have it's own initialising function which contains the functions and event handlers for that module. Each module's function should also contain a check to ensure that the module exists on the page, so that the code is only executed when it is needed.