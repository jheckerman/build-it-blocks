build-it-blocks
	->select-page
		contains the module selection pages and the
		module page
		->images
			miscealleanous imgs such as the buttons, 
			dots, logo
		->font
			font used in the sliders
		->css
			contains the css files used in the sliders
			of module page. NOTE: look in module-stylesheet
			to find where widths of sliders are set
		jquery-1.4.2.min, jquery.color, jquery.slides.min 
			used to animate the the button hovering on
			module selection pages
		module-selection-art,junk,lego...
			module selection pages. Each of these pages 
			creates the menu of subcategories associated with 
			the page. The icons of the modules is created by
			module-selection-modified
	->module-images
		contains all of the images of the module,: 
		applications, instructions, icons
	->menu-icons
		contains images of the main page menu
	->images NOTE: redundant images
		miscealleanous imgs such as the buttons, 
		arrows, logo
	->dev
		pages to be used by developers, will allow a 	
		developer to add modules to database easily 
		through the browser
	module-selection-modified.php
		this accesses the database to create the module icons
		on the module selection page
	menu-stylesheet.css
		a stylesheet used with tthe animated menu of
		"bib-main-page"
	jquery.easing.1.3.js
		plugin used on animated menu of "bib-main-page"
	db-connect.php
		contains the login info for the sql database
	builditblocks.sql
		used to import the database
	biy-stylesheet.css
		main stylesheet that is used on every page
	biy-header.html
		header extracted from build-it-yourself. only
		used on bib-main-page
	biy-bottom-info.html
		footer containing copyright info. extracted 
		from build-it-yourself site and
		modified to save vertical space
		included in: bib-main-page, module selection...,
		build-it-blocks-module-page
	bib-main-page.php
		the first page user gets to upon arriving at build
		it blocks. will contain a pitch describing the 
		usefulness of blocks
	bib-header-menu.php
		The build it blocks navigation bar. Included in:
		module selection..., build-it-blocks-module-page
	stickytooltip.css
		The stylesheet needed for the Tooltips that appear in the module selection page.
	stickytooltip.js
		The javascript file from the Sticky Tooltip jQuery plugin for the tooltips in the module selection page.
		