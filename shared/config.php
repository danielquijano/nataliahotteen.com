<?php 
	// ipstack.com: detecting ips
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


	// get canonical url
	$canonical_url_building = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
	// Identify URL and set values
	switch($_SERVER['PHP_SELF']){
		case '/webapps/nataliahotteen.com/index.php':
			$title = 'Natalia Hot Teen';
			$keywords = '';
			$body_class = 'view-index';
			$identifier = 'index';
			$description = '';
			$canonical_url = $canonical_url_building;
			break;

		case '/webapps/nataliahotteen.com/join.php':
			$title = 'Join Natalia Hot Teen';
			$keywords = '';
			$body_class = 'view-join';
			$identifier = 'join';
			$description = '';
			$canonical_url = $canonical_url_building;
			break;

		case '/webapps/nataliahotteen.com/members.php':
			$title = 'Members Login';
			$keywords = '';
			$body_class = 'view-members';
			$identifier = 'members';
			$description = '';
			$canonical_url = $canonical_url_building;
			break;

		case '/webapps/nataliahotteen.com/models-wanted.php':
			$title = 'Models Wanted';
			$keywords = '';
			$body_class = 'view-models-wanted';
			$identifier = 'modelswanted';
			$description = '';
			$canonical_url = $canonical_url_building;
			break;

		default:
			$title = '';
			$keywords = '';
			$body_class = 'view-index';
			$identifier = 'index';
			$description = '';
			$canonical_url = $canonical_url_building;
	}


	// Urls
	$url_join = 'join.php';
	$url_index = 'index.php';
	$url_members = 'members.php';
	$url_modelswanted = 'models-wanted.php';


	// navbar config
	require_once 'navbar_config.php';

	// index config
	require_once 'index_config.php';

	// updates config
	require_once 'updates_config.php';

	// features config
	require_once 'features_config.php';

	// footer config
	require_once 'footer_config.php';
?>