<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php':
        $title = "BIG WEBSITE";
        $logo = 'fa-home';
        $logo_color = ' style="color:blue"';
        $PageID = 'Index';
    break;
    case 'ResponsiveVSMobile.php':
        $title = "Responsive VS Mobile";
        $logo = 'fa-desktop';
        $logo_color = ' style="color:blue"';
        $PageID = 'ResponsiveVSMobile';
    break;
    case 'Galleries.php':
        $title = "Galleries";
        $logo = 'fa-camera-retro';
        $logo_color = ' style="color:blue"';
        $PageID = 'Galleries';
    break;
    case 'Flexbox.php':
        $title = "Flexbox";
        $logo = 'fa-cube';
        $logo_color = ' style="color:blue"';
        $PageID = 'Flexbox';
    break;
    case 'ShoppingCarts.php':
        $title = "Shopping Carts";
        $logo = 'fa-shopping-basket';
        $logo_color = ' style="color:blue"';
        $PageID = 'ShoppingCarts';
    break;
    case 'Calendar.php':
        $title = "Calendar";
        $logo = 'fa-calendar';
        $logo_color = ' style="color:blue"';
        $PageID = 'Calendar';
    break;
    case 'Webcam.php':
        $title = "Webcam";
        $logo = 'fa-eye';
        $logo_color = ' style="color:blue"';
        $PageID = 'Webcam';
    break;
    case 'Youtube.php':
        $title = "Youtube";
        $logo = 'fa-eye';
        $logo_color = ' style="color:blue"';
        $PageID = 'Youtube';
    break;
    case 'contactme.php':
        $title = "Abdullah Contact Page";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:red"';
        $PageID = 'Contact Abdullah';
        
    
   default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>

