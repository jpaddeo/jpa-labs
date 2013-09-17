<?php
session_start();

function IsActive($id) {
	$AMenu_ID = array();
	$AMenu_ID = explode(',',$_SESSION['menu_id']);		
	$paghab=false;
	for($i=0;$i<count($AMenu_ID);$i++){
	  if ($AMenu_ID[$i]==$id){
		 $paghab=true;
	  }		  
	}
	if ($paghab==false)	{
	  return false;  
	}
	else{
	  return true;
	}
}

function UserBrowser() {
    if((ereg("Nav", $_SERVER["HTTP_USER_AGENT"])) || (ereg("Gold",
    $_SERVER["HTTP_USER_AGENT"])) || (ereg("X11",
    $_SERVER["HTTP_USER_AGENT"])) || (ereg("Mozilla",
    $_SERVER["HTTP_USER_AGENT"])) || (ereg("Netscape",
    $_SERVER["HTTP_USER_AGENT"])) AND (!ereg("MSIE",
    $_SERVER["HTTP_USER_AGENT"]) AND (!ereg("Konqueror",
    $_SERVER["HTTP_USER_AGENT"])))){
            $browser = "Netscape";
    }
      elseif(ereg("MSIE", $_SERVER["HTTP_USER_AGENT"])){
              $browser = "MSIE";
      }
      elseif(ereg("Lynx", $_SERVER["HTTP_USER_AGENT"])){
              $browser = "Lynx";
      }
      elseif(ereg("Opera", $_SERVER["HTTP_USER_AGENT"])){
              $browser = "Opera";
      }
      elseif(ereg("Netscape", $_SERVER["HTTP_USER_AGENT"])){
              $browser = "Netscape";
      }
      elseif(ereg("Konqueror", $_SERVER["HTTP_USER_AGENT"])){
              $browser = "Konqueror";
      }
      elseif((eregi("bot", $_SERVER["HTTP_USER_AGENT"])) ||
      (ereg("Google", $_SERVER["HTTP_USER_AGENT"])) || (ereg("Slurp",
      $_SERVER["HTTP_USER_AGENT"])) || (ereg("Scooter",
      $_SERVER["HTTP_USER_AGENT"])) || (eregi("Spider",
      $_SERVER["HTTP_USER_AGENT"])) || (eregi("Infoseek",
      $_SERVER["HTTP_USER_AGENT"]))){
              $browser = "Bot";
      }else{
          $browser = "Other";
      }
      return $browser;
}  
?>
