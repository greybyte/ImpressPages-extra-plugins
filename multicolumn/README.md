MultiColumn Widget for ImpressPages CMS
=======================================

This widget allows to insert multiple columns into a page, at any location 
where content can be placed. Each column can hold arbitrary widgets.

Installation
------------
1. Upload `multicolumn` to `ip_plugins\extra` folder of your website.
2. Login to administration area
3. Go to "Developer -> Modules" and press "install".
4. Visit your website. You should now have multicolumn widget in widget area.

Usage
-----
Just drag the multicolumn widget into any editable block on the page, select
column template to use. After that, the new columns will appear on the page,
which can be filled with Text, Images, ... 

Note to template designers
--------------------------
The default preview templates for Multi Column Widget use tables to achieve
the column effect, because the plugin cannot know which grid system is used 
in an actual template. If your template has a proper grid system, it is 
strongly recommended to override the given templates with the correct markup
for grid columns. To do this, simply create a folder 

`modules\extra\multicolumn\widget\IpMultiColumn\preview`

in your template's root folder and add column templates there.

Installation Note
-----------------
At the time of this writing, this plugin requires patches to the core, see
https://github.com/greybyte/ImpressPages-CMS/tree/block_widget_nesting