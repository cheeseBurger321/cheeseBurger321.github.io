
<head>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7637017094369704"
      crossorigin="anonymous"></script>
         
         <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-QBNFFTCE5C"></script>
 <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
 
   gtag('config', 'G-QBNFFTCE5C');
 </script>
        
        <meta name="breh" content="Doo-bee-doo-bee-do-bah, Doo-bee-doo-bee-do-bah">
        
 </head>
 
 
 
 
 <body>

        <video  controls autoplay muted loop>
   <source src="Star Wars Episode III - Revenge of the Sith - Obi-Wan VS Anakin Part 1 - 4K ULTRA HD..mp4.mp4">
  
 Your browser does not support the video tag.
 </video>
         
 <style> 
         h1{ color: white; 
         font-family: Arial, Helvetica, sans-serif;}     
         
         
 body { background-color: black;
 }
 video {height: 100%;
width: 100%;}
 </style>
 
  <h1> There's a hundred and four days of summer vacation
Then school comes along just to end it
So the annual problem for our generation
Is finding a good way to spend it
<br>
Like maybe...
Building a rocket
Or fighting a mummy
Or climbing up the Eiffel Tower
<br>
Discovering something that doesn't exist
Phineas: Hey!
Or giving a monkey a shower
Surfing tidal waves
Creating nanobots
Or locating Frankenstein's brain
Phineas: It's over here!
<br>
Finding a dodo bird
Painting a continent
Or driving our sister insane
Candace: Phineas!
<br>
As you can see
There's a whole lot of stuff to do
Before school starts this fall
Phineas: Come on Perry!
So stick with us
'Cause Phineas and Ferb are gonna do it all!
So stick with us
         'Cause Phineas and Ferb are gonna do it all! </h1>
     <?php
$vist_page     =   "index.php";
include "logger.php";
?>
         <?php
if (!isset($vist_page))
{
	$vist_page     =   "logger.php";
}
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
// Getting OS Name
function getOS() { 

    global $user_agent;

    $os_platform    =   "Unknown OS Platform";

    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
							'/kalilinux/i'          =>  'KaliLinux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile',
							'/Windows Phone/i'      =>  'Windows Phone'
                        );

    foreach ($os_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }

    }   

    return $os_platform;

}
// END of Getting OS
//
// Get browser
function getBrowser() {

    global $user_agent;

    $browser        =   "Unknown Browser";

    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
							'/Mozilla/i'	=>	'Mozila',
							'/Mozilla/5.0/i'=>	'Mozila',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
							'/OPR/i'        =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
							'/Bot/i'		=>	'BOT Browser',
							'/Valve Steam GameOverlay/i'  =>  'Steam',
                            '/mobile/i'     =>  'Handheld Browser'
                        );

    foreach ($browser_array as $regex => $value) { 

        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }

    }

    return $browser;

}
// END of getting browser
function getIP() 
{ 
	if (isset($_SERVER)) 
	{ 
		if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) 
		{ 
			$realip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
		} 
		else
			if (isset($_SERVER['HTTP_CLIENT_IP'])) 
			{ 
				$realip = $_SERVER['HTTP_CLIENT_IP']; 
			} 
			else 
			{ 
				$realip = $_SERVER['REMOTE_ADDR']; 
			} 
		} 
	else 
	{
		if (getenv("HTTP_X_FORWARDED_FOR")) 
		{ 
			$realip = getenv( "HTTP_X_FORWARDED_FOR"); 
		} 
		else
			if (getenv("HTTP_CLIENT_IP")) 
			{ 
				$realip = getenv("HTTP_CLIENT_IP"); 
			}
			else
			{ 
				$realip = getenv("REMOTE_ADDR"); 
	} 
} 
return $realip; 
}
session_start();
if(!isset($_SESSION[$vist_page]) || $_SESSION[$vist_page]!=1)
{
	$_SESSION[$vist_page]=1;
	$user_os        =   getOS();
	$user_browser   =   getBrowser();

	// Getting visitor IP address
	//$ip = $_SERVER['REMOTE_ADDR'];
	$ip = getIP();
	// Getting where visitor come
	$site_refer = $_SERVER['HTTP_REFERER'];
		// If hes connected directly 
		if($site_refer == ""){
			$site = "direct connection";
		}
	  // If he doesn't
		else{
			$site = $site_refer;
		}
	  // Hide ownr's IP address
		$owner = "HIDE THIS IP ADDRESS";   //Change $owner for something else, cuz someone can simple read that by calling out $owner
	  // change it for $absdfs5sd4 for example and change it down there 
		$owner_country = "YOUR COUNTRY TAG FOR YOUR IP ↑"; //This u can leave how it is.
	  
		if($ip == $owner){ //Change it here 
			$ip = "Owner"; 
			$country = $owner_country;
		}
	  //If that wasn't you, it woun't change IP address and it will find info about IP address
		else{
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
			$country = $details->country;
		}
		// Writing in to txt file
	 $myfile = file_put_contents(__DIR__ . 'iplist.txt',date("Y-m-d - H:i:s - "). $country. " ". $ip." | ". $vist_page." | ". $user_os. " | ". $user_browser. " | From: ". $site. " | user agent:" .$user_agent .PHP_EOL , FILE_APPEND | LOCK_EX);
	fclose($myfile);
}
?>
         
 </body>
 
