<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tripseru.com adalah traveller playground dimana kamu bisa saling berbagi cerita tentang pengalaman liburan kamu dan saling reseru aktivitas liburan yang lebih seruu_">
    <meta name="keywords" content="Liburan seru, Trip, Trip seru, destinasi, wisata, Indonesia, gunung, pantai, belanja, Perjalanan Seru, Tempat seru, cari liburan">
    <meta name="author" content="Jaenal Gufron ">
    <meta property="fb:695256057190973" content="{695256057190973}"/>
    <meta name="google-translate-customization" content="e5185351d3b683cb-5b21900383884535-gf5bd12fc68ffcb04-c"></meta>
    <link rel="icon" href="../../favicon.ico">
   	<title><?php if (!isset($headtitle)){
					echo "Karena Indonesia Lebih Seruu_ | Tripseru.com ";
			}else{
			echo $headtitle;
			 } ?></title>
    <script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "5b803ab4-6723-416b-bc86-afeecfe64176", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <!-- Facebook Conversion Code for Jaenal Gufron -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6017875624339', {'value':'1.00','currency':'IDR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017875624339&amp;cd[value]=1.00&amp;cd[currency]=IDR&amp;noscript=1" /></noscript>
<script type="text/javascript" src="/asset/js/FullscreenSlitSlider/js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="/asset/js/jquery-1.7.1.min.js"></script>
	<noscript><link rel="stylesheet" type="text/css" href="/asset/js/FullscreenSlitSlider/css/styleNoJS.css" /></noscript>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("#mmenu").hide();
		$(".mtoggle").click(function() {
			$("#mmenu").slideToggle(500);
		});
	});
</script>
<link href="/asset/css/style.css" rel="stylesheet">
<link href="/asset/css/style-responsive.css" rel="stylesheet">
<!-- Bootstrap core CSS -->
<link href="/asset/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/asset/js/FullscreenSlitSlider/css/demo.css" />
<link rel="stylesheet" type="text/css" href="/asset/js/FullscreenSlitSlider/css/style.css" />
<link rel="stylesheet" type="text/css" href="/asset/js/FullscreenSlitSlider/css/custom.css" />
<!-- Promo Form CSS-->
<link rel="stylesheet" type="text/css" href="/asset/js/MinimalForm/css/demo.css" />
<link rel="stylesheet" type="text/css" href="/asset/js/MinimalForm/css/component.css" />
<!-- Custom styles for this template -->
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=695256057190973&version=v2.0";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
    <!--<nav id="mobile">
 
        <div id="toggle-bar">
            <strong><a class="mtoggle" href="#">MAIN MENU</a></strong>
            <a class="navicon mtoggle" href="#">MAIN MENU</a>
        </div>
     
        <ul id="mmenu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Products</a>
                <ul>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">Javascript</a>
                        <ul>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">MooTools</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>           
        </ul>
     
    </nav>-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">                 
          <ul class="nav navbar-nav">
            	<li>            
                <a class="logo" id="logo" href="/"><img src="/asset/images/logo.png"></a>
                </li>
                <?php 
				if($this->session->userdata('logged_in')){
				//if (@$user_profile) {?>
                <li>
                  <a href="/dashboard">My Dashboard</a>
                </li>
                <?php } ?>
                
                <li>
                  <a href="/destinasi">Domestik</a>
                </li>
                <li>
                  <a href="/destinasi">Internasional</a>
                </li>                
                <li>
                  <a href="/contact">Corporate Pax</a>
                </li>
                <li>
                  <a href="#">Call : 0812 8189 2859</a>
                </li>
                <!--<li>
                  <a href="../css">Request Trip</a>
                </li>
                <li>
                  <a href="../css">Belanja</a>
                </li> -->
          </ul>
        </div>
        <div class="navbar-collapse navbar-right">
          <div class="navbar-form search">
           <div class="form-group trans">         
            
            <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'ar,en,ja', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div>
            <div class="form-group translog" id="daftar">
            <?php	
			$sessionboo = $this->session->userdata('logged_in');
			//var_dump($sessionboo);		
			if (@$user_profile):  // call var_dump($user_profile) to view all data
			//var_dump($user_profile); ?>
            <ul class="nav nav-pills">
              <li class="dropdown">
              	Hi <?=$user_profile['first_name']?>,
                <a class="dropdown-toggle" href="/dashboard">
                  <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 40px; height: 40px; padding:0px;"> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <a href="/welcome/logout">Logout</a>
                </ul>
              </li>
            </ul>
                <!--<div class="row">
                    <div class="col-lg-12 text-center">
                        Selamat Datang <a href="<?=$user_profile['link']?>" class=""><?=$user_profile['first_name']?></a>, <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 40px; height: 40px; padding:0px;">
                        
                       <!-- <a href="<?= $logout_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Logout</a>
                    </div>
                </div>-->
            <?php else: ?>
                <a href="<?= $login_url ?>"><img src="/asset/images/loginfb.png"></a>
            <?php endif; ?>         
            
            </div>
          </div><!-- form-->
        </div><!--/.navbar-collapse -->
      </div>
    </div>