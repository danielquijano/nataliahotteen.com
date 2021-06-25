<title><?php echo $title; ?></title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width,minimum-scale=1">
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="rating" content="adult">
<meta name="rating" content="RTA-5042-1996-1400-1577-RTA">
<meta name="robots" content="all">

<?php
	if($identifier == 'view-index'){
		foreach ($preload_carousel_imgs as $value) {
			echo '<link rel="preload" href="' . $value['img-lg'] . '" as="image">';
		}
	}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
<link rel="stylesheet" media="screen" href="assets/styles/css/bootstrap.min.css">

<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

<link rel="canonical" href="<?php echo $canonical_url ?>">
