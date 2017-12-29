<?php
class Shutter {
	// Shutter numbers
	public static $shutter_number = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24];
	// Shutter colors, loops through randomly
	public static $shutter_color = ['darkcyan','steelblue','rosybrown','darkkhaki']; // https://www.w3schools.com/colors/colors_hex.asp	
	// Text content inside shutters
	public static $shutter_content = ['One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen','Twenty','Twentyone','Twentytwo','Twentythree','Twentyfour. <h4>Merry Christmas!</h4>
		<img src="images/snowflake.svg" class="inline" style="width:170px; position:relative; margin-top: -20px; margin-left:20px" alt="snowflake">',
		// Error content
		'May be opened on '];
	// Image content in the shutters
	public static $shutter_image = ['images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter.jpg','images/shutter24.jpg'];
	
	// Create shutter with number as argument
	public static function createShutter($num) {
		// Correct index number 
		$corrnum = $num+1;
		echo '<div id="shutter'.$corrnum.'" class="shutter default_border">'.Shutter::$shutter_number[$num].'</div>';
	}
	// Create boxes for shutter content with number as argument
	public static function createContent($num) {
		// Heading error message on shutter content when wrong date
		$error = "You are not allowed to see this!";
		// Correct index number 
		$corrnum = $num+1;
		// Check if date is right to open the shutter...
		if(date("F")=="December"&&date("j")>=$corrnum) {
			echo '<div id="content'.$corrnum.'" class="content hide" style="background-color:';
			// Special color on Christmas Eve
			if($corrnum==24) {
				echo 'DarkGoldenRod';
			} else {
				echo self::$shutter_color[mt_rand( 0, (count(Shutter::$shutter_color)-1) )];
			}
			echo '"><h2>'.date("F").' '.$corrnum.'</h2><img class="content_image" src="'.Shutter::$shutter_image[$num].'" alt="Shutter '.$corrnum.'">This is content for shutter number: '.Shutter::$shutter_content[$num].'.<span class="close" title="Close the box">&times;</span></div>';
		// ... else show error message instead of content
		} else {
			echo '<div id="content_error'.$corrnum.'" class="content_error hide"><h2>'.$error.'</h2>'.Shutter::$shutter_content[24].date("F").' '.$corrnum.'.<span class="close close_error" title="Close the box">&times;</span></div>';
		}
	}
}
?>