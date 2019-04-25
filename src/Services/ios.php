<?php

namespace App\Services;

use SunCat\MobileDetectBundle\DeviceDetector\MobileDetector;

class ios
{

    /**
     * @var MobileDetect
     */
    private $mobileDetect;

      public function __construct($mobileDetect)
    {
        $this->mobileDetect = $mobileDetect;
    }



    public function route()
    {

        if($this->mobileDetect->isIphone()){
            $twig = "devices/iphone/";
        }
        elseif($this->mobileDetect->isIpad()){
            $twig = "devices/ipad/";
        }
        else{
            $twig = "";
        }


        return $twig;
    }
}