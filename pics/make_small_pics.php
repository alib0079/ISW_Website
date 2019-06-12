<?php
session_start();
# Constants
define(IMAGE_BASE, './');
define(MAX_WIDTH, 200);
define(MAX_HEIGHT, 200);
# Get image location
$image_file = str_replace('..', '', $_SERVER['QUERY_STRING']);
#$image_path = IMAGE_BASE . "/$image_file";
$picname="$_GET[pic]";
$image_path = IMAGE_BASE . "./$_GET[f]/$picname";
# Load image
$img = null;
$ext = strtolower(end(explode('.', $image_path)));
if ($ext == 'jpg' || $ext == 'jpeg') {
    $img = @imagecreatefromjpeg($image_path);
} else if ($ext == 'png') {
    $img = @imagecreatefrompng($image_path);
# Only if your version of GD includes GIF support
} else if ($ext == 'gif') {
    $img = @imagecreatefrompng($image_path);
} else { $error = "set";}

# If an image was successfully loaded, test the image for size
if(!$error){
if(!$img ){exit;}

if ($img  ) {
    # Get image size and scale ratio
    $width = imagesx($img);
    $height = imagesy($img);
    $scale = min(MAX_WIDTH/$width, MAX_HEIGHT/$height);

    # If the image is larger than the max shrink it
    if ($scale < 1) {
        $new_width = floor($scale*$width);
        $new_height = floor($scale*$height);

        # Create a new temporary image
        $tmp_img = imagecreatetruecolor($new_width, $new_height);

        # Copy and resize old image into new image
        imagecopyresized($tmp_img, $img, 0, 0, 0, 0,
                         $new_width, $new_height, $width, $height);
        imagedestroy($img);
        $img = $tmp_img;
$tb_picname="./$_GET[f]/tb_$picname";
imagejpeg($img,$tb_picname); 


    }else{
//exit;
$new_width = $width;
$new_height = $height;

        # Create a new temporary image
        $tmp_img = imagecreatetruecolor($new_width, $new_height);

        # Copy and resize old image into new image
        imagecopyresized($tmp_img, $img, 0, 0, 0, 0,
                         $new_width, $new_height, $width, $height);
        imagedestroy($img);
        $img = $tmp_img;
$tb_picname="./$_GET[f]/tb_$picname";
imagejpeg($img,$tb_picname); 



}
}

# Create error image if necessary
}
if (!$img) {
//echo "NO IMAGE";
    //$img = imagecreate(MAX_WIDTH, MAX_HEIGHT);
    //imagecolorallocate($img,0,0,0);
    //$c = imagecolorallocate($img,70,70,70);
    //imageline($img,0,0,MAX_WIDTH,MAX_HEIGHT,$c2);
    //imageline($img,MAX_WIDTH,0,0,MAX_HEIGHT,$c2);
}?>