<?php
function($srcFile, $maxSize){

    list($width_orig, $height_orig, $type) = getimagesize($srcFile);        

    // Get the aspect ratio
    $ratio_orig = $width_orig / $height_orig;

    $width  = $maxSize; 
    $height = $maxSize;

    // resize to height (orig is portrait) 
    if ($ratio_orig < 1) {
        $width = $height * $ratio_orig;
    } 
    // resize to width (orig is landscape)
    else {
        $height = $width / $ratio_orig;
    }

    // Temporarily increase the memory limit to allow for larger images
    ini_set('memory_limit', '32M'); 

    switch ($type) 
    {
        case IMAGETYPE_GIF: 
            $image = imagecreatefromgif($srcFile); 
            break;   
        case IMAGETYPE_JPEG:  
            $image = imagecreatefromjpeg($srcFile); 
            break;   
        case IMAGETYPE_PNG:  
            $image = imagecreatefrompng($srcFile);
            break; 
        default:
            throw new Exception('Unrecognized image type ' . $type);
    }
    header('Content-Type: image/png');
    $im = imagescale($image, $width, $height);
    imagepng($im);
    imagedestroy($im);
}