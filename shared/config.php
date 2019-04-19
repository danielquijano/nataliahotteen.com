<?php 
	// ipstack.com: detect ips
	function ipstack(){
		$cookie_name = 'ipstack.com';
		$cookie_value = true;

		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

		if(!isset($_COOKIE[$cookie_name])){
			if(!empty($_SERVER['HTTP_CLIENT_IP'])){
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			}
			
			elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} 

			else{
				$ip = $_SERVER['REMOTE_ADDR'];
			}

			$access_key = '8996adae174936321087cd9dab9df90a';

			$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key=' . $access_key . '');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$json = curl_exec($ch);
			curl_close($ch);
			$api_result = json_decode($json, true);

			if(($api_result['country_code'] == 'MX') && (($api_result['region_code'] == 'NLE') || ($api_result['region_code'] == 'COA') || ($api_result['region_code'] == 'TAM'))){
				header('Location: https://www.google.com.mx');
			}
		};
	};

	// ipstack();



	// Get server's protocol
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} 

	else { $uri = 'http://'; }


	// Setting some page values
	$site_directory = 'webapps/sass-nataliahotteen';

	switch($_SERVER['SCRIPT_NAME']){
		case '/' . $site_directory . '/index.php':
			$title = 'Natalia Hot Teen';
			$keywords = '';
			$bodyclass = 'view-index';
			$identifier = 'index';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME'];
			break;

		case '/' . $site_directory . '/join.php':
			$title = 'Join Natalia Hot Teen';
			$keywords = '';
			$bodyclass = 'view-join';
			$identifier = 'join';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME']  . '/join.php';
			break;

		case '/' . $site_directory . '/members.php':
			$title = 'Members Login';
			$keywords = '';
			$bodyclass = 'view-members';
			$identifier = 'members';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME'] . '/members.php';
			break;

		case '/' . $site_directory . '/models-wanted.php':
			$title = 'Models Wanted';
			$keywords = '';
			$bodyclass = 'view-models-wanted';
			$identifier = 'modelswanted';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME'] . '/models-wanted.php';
			break;

		default:
			$title = '';
			$keywords = '';
			$bodyclass = 'view-index';
			$identifier = '';
			$description = '';
			$canonicalurl = $uri . $_SERVER['SERVER_NAME'];
	}


	// Urls
	// Main
	$joinurl = 'join.php';
	$indexurl = 'index.php';
	$membersurl = 'members.php';

	// We need you
	$modelswantedurl = 'models-wanted.php';


	// Arrays
	// Navbar
	$navbarAttrs = array(
		array(
			'url'   => $indexurl,
			'icon'  => 'home',
			'name'  => 'Home',
		),
		array(
			'url'   => $joinurl,
			'icon'  => 'favorite',
			'name'  => 'Join Us <span class="d-md-none d-lg-inline">Now</span>',
		),
		array(
			'url'   => $membersurl,
			'icon'  => 'face',
			'name'  => 'Members',
		),
	);

	// carousel
	$carouselAttrs = array(
		array(
			'url' => '/#',
			'alt' => '',
			'title' => 'Titulo de la imagen 01',
			'image'	=> 'assets/images/carousel/1.jpg',
		),
		array(
			'url' => '/#',
			'alt' => '',
			'title' => 'Imagen 02',
			'image'	=> 'assets/images/carousel/2.jpg',
		),
		array(
			'url' => '/#',
			'alt' => '',
			'title' => 'Titulo 03 imagen',
			'image'	=> 'assets/images/carousel/3.jpg',
		),
		array(
			'url' => '/#',
			'alt' => '',
			'title' => 'Imagen 04',
			'image'	=> 'assets/images/carousel/4.jpg',
		),
		array(
			'url' => '/#',
			'alt' => '',
			'title' => 'Titulo de la imagen 05',
			'image'	=> 'assets/images/carousel/5.jpg',
		),
		array(
			'url' => '/#',
			'alt' => '',
			'title' => 'Titulo de la 06',
			'image'	=> 'assets/images/carousel/6.jpg',
		),
	);

	// Invited Models
	$invitedModelsAttrs = array(
		array(
			'url' => 'blonde.php',
			'col' => 'col-md-4 mt-2 mt-md-0 mb-2 mb-md-0 text-center',
			'alt' => 'Provocative slim blonde with tattoos',
			'img-sm' => 'assets/images/invited-model/blonde-sm.jpg',
			'img-md' => 'assets/images/invited-model/blonde-md.jpg',
			'img-lg' => 'assets/images/invited-model/blonde-lg.jpg',
		),
		array(
			'url' => 'hooker.php',
			'col' => 'col-6 col-md-4',
			'alt' => 'Mexican hooker',
			'img-sm' => 'assets/images/invited-model/hooker-sm.jpg',
			'img-md' => 'assets/images/invited-model/hooker-md.jpg',
			'img-lg' => 'assets/images/invited-model/hooker-lg.jpg',
		),
		array(
			'url' => 'nymphomaniac.php',
			'col' => 'col-6 col-md-4',
			'alt' => 'Wild nymphomaniac opening her vagina',
			'img-sm' => 'assets/images/invited-model/nymphomaniac-sm.jpg',
			'img-md' => 'assets/images/invited-model/nymphomaniac-md.jpg',
			'img-lg' => 'assets/images/invited-model/nymphomaniac-lg.jpg',
		),
	);

	// Hottest Sets
	$hottestSetsAttrs = array(
		array(
			'url' => 'bubble-butt.php',
			'alt' => 'bubble butt',
			'text' => 'Succulent ass <i class="em em-peach"></i> obscene mini skirt and marvelous point of views <i class="em em-camera"></i>',
			'title' => 'bubble butt',
			'image'	=> 'assets/images/hottest-sets/bubble-butt.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i>',
		),
		array(
			'url' => 'hot-sexy-girl.php',
			'alt' => 'hot sexy girl',
			'text' => 'Uncensored <i class="em em-underage"></i> lovely latinas <i class="em em-flag-co"></i> for your own personal entertainment.',
			'title' => 'hot sexy girl',
			'image'	=> 'assets/images/hottest-sets/hot-sexy-girl.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_border</i>',
		),
		array(
			'url' => 'ex-gf-nudes.php',
			'alt' => 'Ex gf nudes',
			'text' => 'All this photographs are definitely <i class="em em-hammer_and_pick"></i> Not Safe For Work <i class="em em-scream"></i> #nsfw',
			'title' => 'ex gf nudes',
			'image'	=> 'assets/images/hottest-sets/ex-gf-nudes.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i>',
		),
		array(
			'url' => 'instagram-hottie.php',
			'alt' => 'instagram hottie',
			'text' => 'Check out this thot! <i class="em em-drooling_face"></i>  She\'s a Queen <i class="em em-crown"></i>',
			'title' => 'instagram hottie',
			'image'	=> 'assets/images/hottest-sets/instagram-hottie.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_half</i>',
		),
		array(
			'url' => 'naughty.php',
			'alt' => 'naughty',
			'text' => 'She is about to sin <i class="em em-fire"></i> once again <i class="em em-sweat_smile"></i>',
			'title' => 'naughty',
			'image'	=> 'assets/images/hottest-sets/naughty.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_half</i>',
		),
		array(
			'url' => 'big-juicy-booty.php',
			'alt' => 'big juicy booty',
			'text' => 'My thong is <i class="em em-dizzy_face"></i> disappearing <i class="em em-peach"></i>',
			'title' => 'big juicy booty',
			'image'	=> 'assets/images/hottest-sets/big-juicy-booty.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_border</i>',
		),
		array(
			'url' => 'tiny-boobs.php',
			'alt' => 'tiny boobs',
			'text' => '<i class="em em-fire"></i> Let\'s do nasty things <i class="em em-sweat_drops"></i>',
			'title' => 'tiny boobs',
			'image'	=> 'assets/images/hottest-sets/tiny-boobs.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_border</i>',
		),
		array(
			'url' => 'petite-brunette.php',
			'alt' => 'petite brunette',
			'text' => '<i class="em em-smiling_imp"></i> Do you wanna fuck me? <i class="em em-tongue"></i>',
			'title' => 'petite brunette',
			'image'	=> 'assets/images/hottest-sets/petite-brunette.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_border</i>',
		),
		array(
			'url' => 'erotic-fantasy.php',
			'alt' => 'erotic fantasy',
			'text' => 'My boyfriend <i class="em em-man_in_tuxedo"></i> really loves <i class="em em-heart_decoration"></i> when I dress like a whore. Do you?',
			'title' => 'erotic fantasy',
			'image'	=> 'assets/images/hottest-sets/erotic-fantasy.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_half</i>',
		),
		array(
			'url' => 'sensual.php',
			'alt' => 'sensual',
			'text' => '<i class="em em-hot_pepper"></i> I\'m so hungry for you. I want you inside me <i class="em em-cucumber"></i>',
			'title' => 'sensual',
			'image'	=> 'assets/images/hottest-sets/sensual.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i>',
		),
		array(
			'url' => 'small-nipples.php',
			'alt' => 'small nipples',
			'text' => 'Bite me, lick me smoothly <i class="em em-tongue"></i> and play with my tight slit <i class="em em-crossed_fingers"></i>',
			'title' => 'small nipples',
			'image'	=> 'assets/images/hottest-sets/small-nipples.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_border</i>',
		),
		array(
			'url' => 'boobies.php',
			'alt' => 'boobies',
			'text' => '<i class="em em-see_no_evil"></i> Make her your bitch <i class="em em-dog2"></i>',
			'title' => 'boobies',
			'image'	=> 'assets/images/hottest-sets/boobies.jpg',
			'grades' => '<i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">grade</i><i class="material-icons md-21">star_half</i>',
		),
	);

	// Updates
	$updatesAttrs = array(
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/a.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/b.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/c.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/d.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/e.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/f.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/g.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/h.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/i.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/j.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/k.jpg',
		),
		array(
			'alt'	=> '',
			'thumb'	=> 'assets/images/updates/l.jpg',
		)
	);

	// Features
	$featuresAttrs = array(
		array(
			'col' => 'col-4 col-md-3 col-lg-2 mb-2',
			'icon' => 'videocam',
			'descr' => 'Original creations',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'photo_library',
			'descr' => 'Zipped (.zip) folders',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'panorama',
			'descr' => '3300 X 2200 pxs imgs',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2 mb-2',
			'icon' => 'hd',
			'descr' => 'Hi-definition vids',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'laptop_windows',
			'descr' => 'Fast downloads',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'call',
			'descr' => '24 / 7 / 365 support',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2 mb-2 mb-lg-0',
			'icon' => 'timer',
			'descr' => 'Simple to cancel',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'done_all',
			'descr' => '1.000+ hosted pics',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'smartphone',
			'descr' => 'Pleasant design',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'not_interested',
			'descr' => 'Zero hidden sales',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'vpn_lock',
			'descr' => 'Fraud protection',
		),
		array(
			'col' => 'col-4 col-md-3 col-lg-2',
			'icon' => 'insert_emoticon',
			'descr' => 'Inexperienced gals',
		),
	);

	// Footer : Site Map
	$footer_SiteMapAttrs = array(
		array(
			'url'   => $indexurl,
			'name'  => 'Home',
			'title' => '',
		),
		array(
			'url'   => $joinurl,
			'name'  => 'Join Us Now!',
			'title' => '',
		),
		array(
			'url'   => $membersurl,
			'name'  => 'Members Login',
			'title' => '',
		),
	);

	// Footer : We Need You
	$footer_WeNeedYou = array(
		array(
			'url'   => $modelswantedurl,
			'name'  => 'Models Wanted',
			'title' => '',
		),
	);

	// Footer : Agreement
	$footer_AgreementAttrs = array(
		array(
			'url'   => 'support.php',
			'name'  => 'Customer Care',
			'title' => '',
		),
		array(
			'url'   => 'terms.php',
			'name'  => 'Terms of Service',
			'title' => '',
		),
		array(
			'url'   => 'parental.php',
			'name'  => 'Parental Blocking',
			'title' => '',
		),
		array(
			'url'   => '2257.php',
			'name'  => '18 U.S.C. 2257',
			'title' => '',
		),
	);
?>