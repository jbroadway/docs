# Elefant Docs App

This app is the basis for the [Elefant CMS documentation](http://www.elefantcms.com/docs).
It provides the browsing functionality around pages stored in
[PHP Markdown](http://michelf.ca/projects/php-markdown/) format
in its `docs` folder.

It is meant to be used by forking it on Github and using Git to
manage pages in the `docs` folder. This way, documentation can
be collaborated on just as easily as source code.

# Usage summary

1. Fork this project on Github. This page will refer to the forked project as `project-docs`.
2. Add your pages to the `docs` folder (see below for more info).
3. Clone the project into the `apps/docs` folder of your [Elefant CMS](http://www.elefantcms.com/) installation:
		
		cd /path/to/your/site
		git clone https://github.com/user/project-docs.git apps/docs
		
4. Copy your `apps/docs/conf/config.php` file to `conf/app.docs.config.php` and customize your app settings there.
5. Log into Elefant and go to Tools > Navigation. Add the new `Documentation` page to your site tree.

## Editing the docs

The documentation is written in [PHP Markdown](http://michelf.ca/projects/php-markdown/)
(with some small additions). The pages are stored as `.md` files in the `docs` subfolder
using the following naming convention:

    docs/1.0.md     # The docs index page for the 1.0 version
    docs/1.0-nav.md # The sidebar navigation for the 1.0 version
    docs/1.0/*.md   # Additional pages for the 1.0 version

The file names should be the "url-ified" equivalent of the page title,
as returned by [`URLify::filter()`](https://github.com/jbroadway/urlify).
For example:

    Getting started with Project Name -> getting-started-with-project-name

## Markdown extensions

The documentation is written in [PHP Markdown](http://michelf.ca/projects/php-markdown/)
with the following additions:

### Internal links

To link to a page within the documentation, you can use the following
format:

    [[Page title]]

This will link to `/docs/${CURRENT_VERSION}/page-title` with the link text
`Page title`, for example:

	<a href="/docs/1.0/page-title">Page title</a>

To link to a child page within the documentation, you can use the following
format:

    [[>Page title]

This will link to `/docs/${CURRENT_VERSION}/${CURRENT_PAGE}/page-title` with
the link text `Page title`, for example:

	<a href="/docs/1.0/current-page/page-title">Page title</a>

You can also ensure the page is a sibling of the current page like this:

    [[:Page title]

And of course if a page is nested, you can specify its path via:

    [[Parent page / Child page]]

This will create a link like the following:

	<a href="/docs/1.0/parent-page/child-page">Child page</a>

### Targets

Targets, are different audiences the documentation may be targeting. This could
be different languages (PHP, JavaScript), or platforms (PC, Mac, iOS), or
anything else.

Targets help to eliminate information that needs explaining to only
one group, but that would otherwise have to be repeated for the others
as well.

Here is the syntax to specify targets for different content:

    Show this content to everyone.
    
    --- Platform: Linux ---
    
    Show this content to Linux users.
    
    --- Platform: Mac ---
    
    Show this content to Mac users.
    
    --- Platform: Windows ---
    
    Show this content to Windows users.
    
    --- /Platform ---
    
    More content...

This will create a "Platform" select box in the top-right of the page contents
with options for Linux, Mac, and Windows. The first part is the name of the
type of target, following by the target name.

The first one is the default selected for new visitors, but it will set a
cookie to remember your preferences across site visits in the same browser.

To link directly to a target, which will set that target as the user's chosen
default, add the following to your links:

    ?docs:platform=windows

Make both sides lowercase, and if your values contain spaces then replace them
with hyphens, for example:

    <a href="/docs/1.0/hardware-setup?docs:hardware=oculus-rift">Oculus Rift setup</a>

If your target is defined as `--- Hardware: Oculus Rift ---`, the above link
will set that choice for your users.

### Tables

Tables are very common in laying out documentation, but Markdown relying on
raw HTML isn't very user friendly. We've added several macros that convert to
HTML table tags:

    :table
    	First row, first column contents...
    :col
    	First row, second column contents...
    :row
    	Second row, first column contents...
    :col
    	Second row, second column contents...
    :endtable

This will be converted to the following HTML:

	<table>
		<tr>
			<td>
    			First row, first column contents...
    		</td>
    		<td>
    			First row, second column contents...
    		</td>
    	</tr>
    	<tr>
    		<td>
    			Second row, first column contents...
    		</td>
    		<td>
    			Second row, second column contents...
    		</td>
    	</tr>
    </table>

You can also specify `<td>` attributes like this:

	:table style="width: 25%"
		Column one...
	:col style="width: 75%"
		Column two...
	:endtable

Two additional simple macros can also help with formatting tables. Here's a more
complex table example:

	:table style="width: 25%"
		![Alt text](/path/to/reference-image.png)
	:col style="width: 5%"
		:nbsp
	:col style="width: 70%"
		:p Explanatory text goes here...
	:endtable

You can also specify the end of the table with this shorthand:

	:/table

### Divs

Divs provide an alternative to tables for some types of documentation layout. There
are two macros provided for adding divs to control your documentation layout:

	:div
		Div contents go here
	:enddiv

You can also specify the end of the div with this shorthand:

	:div
		Div contents go here
	:/div

And like tables, you can add properties to the div like this:

	:div class="my-class"

### Simple macros

* `:nbsp` is converted to a non-breaking space (`&nbsp;`) with newlines padded around it.
* `:p Some text` forces the line to be converted to a paragraph (`<p>`) tag even when Markdown
  may not interpret it as such due to limited padding.

Notice too that unlike the other macros, these macros can be indented. The reason is
that these macros are parsed before the rest of the Markdown parsing, but the
others are all parsed afterwards in order to allow Markdown to parse itself within
the table cells.

### Gifs

Animated gifs are another common element in documentation, so we've added a `:gif`
macro to make it easier to embed both regular `.gif` files as well as the more
optimal `.mp4` versions via:

	:gif /files/some-example.mp4
	
	:gif /files/some-example.gif

The former will convert to an HTML5 `<video>` tag that plays muted, looping, and
without player controls, to simulate a gif using an mp4 file which are often
substantially smaller and more efficient.

The latter will convert to a traditional `<img>` tag for the regular gif file.

### Embedding scripts

You can embed any of [Elefant's helpers](https://elefantcms.com/helpers) as well
as your own custom handlers using the following macro:

	:embed blog/archives

This is the equivalent of embedding the following PHP code:

	<?php echo $controller->run ('blog/archives');

### Omitting some pages from search

You can omit any page from Flipside's search index by adding this tag:

	:omit-from-search
