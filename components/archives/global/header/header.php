<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="Cache-control" content="public">
    <meta name="author" content="Rafael Peralta Jr.">
    <meta name="description" content="<?php if(isset($page->meta) && !empty($page->meta['desc'])): echo $page->meta['desc']; else: echo ""; endif; ?>">

    <title><?php if(isset($page->meta) && !empty($page->meta['title'])): echo "{$page->meta['title']} - "; endif; ?>Oink Ink, Radio Commercial Creative and Production, New York and Philadelphia</title>
    <link rel="shortcut icon" href="https://www.oinkcreative.com/wp-content/themes/jupiter/assets/images/favicon.png"  />
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/build/css/<?php echo $page->type; ?>.min.css?ver=<?php echo $version; ?>">
    
    <!--[if lte IE 8]>
      <meta http-equiv="refresh" content="0" url="https://browsehappy.com/?locale=en" />
      <script type="text/javascript">
      /* <![CDATA[ */
      window.top.location = 'https://browsehappy.com/?locale=en';
      /* ]]> */
      </script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="top">
