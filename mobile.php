<?php

include "Mobile_Detect.php";
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');


// print_r($a);


// phone : 스마트폰
// tablet : 태블릿
// computer : 컴퓨터


if($deviceType == "computer") {

    echo "컴퓨터로 접속하셨습니다.";

 

} elseif($deviceType =="phone") {
    echo "모바일로 접속하셨습니다.<br />\n";
   
    if($a = $detect->match('iPhone')){
        echo "제조사 : apple<br />\n";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a = $detect->match('BlackBerry')){
        echo "제조사 : BlackBerry<br />\n";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a = $detect->match('Samsung')){
        echo "제조사 : Samsung<br />\n";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a = $detect->match('Motorola')){
        echo "제조사 : Motorola<br />\n";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a =$detect->match('LG')){
        echo "제조사 : LG<br />\n";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }
   
   
 

}else{
    echo "태블릿으로 접속하셨습니다.<br />\n";
    if($a = $detect->match('iPad')){
        echo "제조사 : apple";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a = $detect->match('NexusTablet')){
        echo "제조사 : NexusTablet";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a = $detect->match('GoogleTablet')){
        echo "제조사 : GoogleTablet";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a = $detect->match('SamsungTablet')){
        echo "제조사 : SamsungTablet";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }elseif($a= $deteect->match('LGTablet')){
        echo "제조사 : LGTablet";
        if($a =$detect->match('\biPhone.*Mobile|\biPod|\biPad|AppleCoreMedia')){
            echo "OS : iOS";
        }elseif($a =$detect->match('Android')){
            echo "OS : AndroidOS";
        }elseif($a =$detect->match('BlackBerryOS')){
            echo "OS : BlackBerryOS";
        }elseif($a =$detect->match('SymbianOS')){
            echo "OS : SymbianOS";
        }
    }
}

?>