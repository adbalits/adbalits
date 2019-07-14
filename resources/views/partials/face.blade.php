<?php
    $readSize = function($siz) {
        switch($siz)
        {
            case 'lg':
                $edge   = 100;
                $radius = 50;
                break;
            case 'md':
                $edge   = 75;
                $radius = 37.5;
                break;
            case 'sm':
            default:
                $edge   = 50;
                $radius = 25;
                break;
        }
        return sprintf('height:%dpx;width:%dpx; border-radius: %dpx', $edge, $edge, $radius);
    };

    $readPos  = function($pos) {
        switch($pos)
        {
            case 'top_left':
                return 'position:absolute;top:0;left:0;';
            case 'top_right':
                return 'position:absolute;top:0;right:0;';
            case 'bottom_left':
                return 'position:absolute;bottom:0;left:0;';
            case 'bottom_right':
            default:
                return 'position:absolute;bottom:0;right:0;';
        }
    };

    $position   = isset($position)
        ? $position
        : 'top_left';
    $size       = isset($size)
        ? $size
        : 'sm';
    $posStyles  = $readPos($position);
    $sizeStyles = $readSize($size);
?>

<img class="face_img" src="images/face.jpg" alt="face.jpg" style="{{ $posStyles }} {{ $sizeStyles  }}"/>