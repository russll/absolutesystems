<?php
	$action = $_GET["action"];
	switch($action) {
		case 1: //Get images size
				$images = split(",", $_GET["images"]);
				getImagesSize($images);
				break;
		case 2: //Get image
	            $img = $_GET["img"];
	            $w1 = (float)$_GET["w1"];
	            $h1 = (float)$_GET["h1"];         
	            $w2 = (float)$_GET["w2"];
	            $h2 = (float)$_GET["h2"];                     
				$xP = (float)$_GET["xP"];         
				$yP = (float)$_GET["yP"];  	            
				getImage($img, $w1, $h1, $w2, $h2, $xP, $yP);		
				break;	
	}

	function getImagesSize($images){
		ob_start();

		header ("Content-type: text/xml");	
		$outputStr = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		$outputStr .= "<Images>";		
		$count = count($images);
		for ($i=0; $i<$count; $i++) {
			$size = GetImageSize($images[$i]);
			$outputStr .= "<Item " . $size[3] . "/>";
		}
		
		$outputStr .= "</Images>";		 
		echo($outputStr);
		ob_end_flush();

	}          
  
	
	function getImage($img, $w1, $h1, $w2, $h2, $xP, $yP){


require_once 'Image/Transform.php';


            $size = GetImageSize($img);
            $x = $xP * $size[0] /100;             
            $y = $yP * $size[1] /100;

define('IMAGE_TRANSFORM_IM_PATH', '/usr/local/bin/'); 
$a = Image_Transform::factory('IM');
// factory pattern - returns an object
$a->load($img);
// load the image file
error_log('w1='.$w1);
error_log('h1='.$h1);
error_log('x='.$x);
error_log('y='.$y);

$a->crop(w1, h1, $xP, $yP);
//$a->resize($x, $y, $w2, $h2,);
$a->scalebyPercentage(25);
// scale image by percentage - 40% of its original size
$a->display('JPG',80);
$a->free();

/*

            header ("Content-type: image/jpeg");	
               
            $size = GetImageSize($img);
            $x = $xP * $size[0] /100;             
            $y = $yP * $size[1] /100;

			error_log ("x=".$x);
			error_log ("y=".$y);

            $im_in = ImageCreateFromJPEG($img);
            $im_out=  ImageCreateTrueColor($w1, $h1);
            ImageCopyResampled($im_out, $im_in, 0, 0, $x, $y, $w2, $h2, $size[0], $size[1]);
            ImageJpeg($im_out);
			$size=ob_get_length(); 
			header("Content-Length: $size");		

            ImageDestroy($im_in);            
            ImageDestroy($im_out);	
			ob_end_flush();
*/

	}   
?>
