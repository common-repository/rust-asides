RustAsides v1.0 Beta 2
-GNU GPL Licensed http://www.gnu.org/licenses/gpl.html
Jan 11 2004
----------
http://russ.innereyes.com/wordpress-plugins/

Description:
This plugin returns an unordered list of "aside" text drawn from the custom fields in a post.

Directions:
1) Upload "rust_asides.php" to your /wp-content/plugins folder,
2) Activate the plugin.
3) Edit your "index.php" file and add the following tag within the Loop:

		<?php ShowRustAsides(); ?>

4) Add a "rustAsidesPost" class to your stylesheet if you want.
5) Done!

Parameters:
	ShowRustAsides($sTitle);
$sTitle = a string containing the text to display as a title above the list. Default is empty.

Example:
	ShowRustAsides("<h4>Asides</h4>");
Usage:
1) Create a new post or edit an existing one.
2) Add a "Custom Field" and name it "aside" (without the quote marks, natch).
3) Put your aside in the "Value" field.
4) Save/Update the post.
5) Done!

Limitations:
Because the plugin relies on post meta-data for it's input, your asides must always be associated with a post.

Have fun!

russ@innereyes.com
