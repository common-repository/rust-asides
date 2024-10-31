<?php
/*
Plugin Name: RustAsides
Plugin URI: http://russ.innereyes.com/wordpress-plugins/
Description: Displays "aside" custom field through <code>ShowRustAsides($sTitle)</code> tag.
Author: RustIndy
Author URI: http://russ.innereyes.com
Version: 1.0 Beta 2
*/

function ShowRustAsides($sTitle = "")
{
        $rAsides = get_post_custom_values("aside");
        if(count($rAsides)>0)
        {
                $sTitle = trim($sTitle);
                echo "<div class=\"rustAsidesPost\">$sTitle<ul>";
                for($i=0;$i<count($rAsides);$i++)
                {
                        echo "<li>".trim($rAsides[$i])."</li>";
                }
                echo "</ul></div>\n";
        }
}
?>
