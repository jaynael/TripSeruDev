<!DOCTYPE HTML>
<html>
	<head>
		<title>Raih SUKSES bersama TRIPSERU - Partner liburan Anda!</title>
		<meta content="Diskon 25% dalam waktu yang SANGAT TERBATAS." name="description">
				
		<meta property="og:title" content="Be Our Partner!">
		<meta property="og:description" content="Diskon 25% dalam waktu yang SANGAT TERBATAS.">
		<meta property="og:image" content="https://thegraph.co/assets/images/thegraph-nf-29.png" />
		
		
		<link rel="stylesheet" href="/asset/partner/new-shrimp.css">
		<link rel="stylesheet" href="/asset/partner/countdown.css">
        <link rel="stylesheet" href="/asset/partner/jquery.fancybox.css">
		<link rel="stylesheet" href="/asset/partner/tripseru.css?1428174653">
        <link rel="stylesheet" href="/asset/partner/demo-tripseru.css">
		<link rel="stylesheet" href="/asset/partner/font-awesome.min.css">
		
		<!--<script type="text/javascript" src="//use.typekit.net/xff1dcq.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="/asset/partner/jquery.cookie.js"></script>
		<script src="/asset/partner/jquery.plugin.min.js"></script>
		<script src="/asset/partner/jquery.countdown.min.js"></script>
        <script src="/asset/partner/jquery.fancybox.pack.js"></script>
		<script src="/asset/partner/countdown.js"></script>
		<script src="/asset/partner/custom.js?1428261592"></script>
        <script src="/asset/partner/app_categories.js"></script>
        <script src="/asset/partner/categories.js"></script>
        <script src="/asset/partner/page_topics.js"></script>
        <script src="/asset/partner/places_type.js"></script>
        <script src="/asset/partner/demo.js?1438463203"></script>
        <script type="text/javascript" src="/asset/partner/jquery.leanModal.min.js"></script>
        
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '804687616284908',
              xfbml      : true,
              version    : 'v2.1'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
</head>
<body class="navtop boxed aligncenter">
<div id="modal" class="popupContainer" style="display:none" >
		<header class="popupHeader">
			<span class="header_title">Daftar Segera!</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Username & Password Login form -->
			<div class="user_login">
				<form>
					<label>Email / Username</label>
					<input type="text" />
					<label>Password</label>
					<input type="password" />
					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn">Login</a></div>
						<div class="one_half last"><a class="btn register-btn" id="register_form">Register</a></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>
			<!-- Register Form -->
                 	<script type="text/JavaScript">
				$(document).ready(function() { 
					/// make loader hidden in start
					//		$('#loading-check').hide();    
//						 
//							$('#email').blur(function(){
//							var a = $("#email").val();
//							var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
//							   // check if email is valid
//							if(filter.test(a)){
//										// show loader 
//								$('#Loading').show();
//								$.post("<?php echo base_url()?>partner/check_email_availablity", {
//									email: $('#email').val()
//								}, function(response){
//												//#emailInfo is a span which will show you message
//									$('#Loading').hide();
//									setTimeout("finishAjax('Loading', '"+escape(response)+"')", 400);
//								});
//								return false;
//							}
//						});
//						function finishAjax(id,response){
//						  $('#'+id).html(unescape(response));
//						  $('#'+id).fadeIn();
//						} 
					$('#register-btn').click(function(e){
						// Declare the function variables:
						// Parent form, form URL, email regex and the error HTML
						var $formId = $(this).parents('form');
						var formAction = $formId.attr('action');
						var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
						var $error = $('<span class="error"></span>');
				
						// Prepare the form for validation - remove previous errors
						$('li',$formId).removeClass('error');
						$('span.error').remove();
				
						// Validate all inputs with the class "required"
						$('.required',$formId).each(function(){
							var inputVal = $(this).val();
							var $parentTag = $(this).parent();
							if(inputVal == ''){
								$parentTag.addClass('error').append($error.clone().text('Required Field'));
							}
							
							// Run the email validation using the regex for those input items also having class "email"
							if($(this).hasClass('email') == true){
								if(!emailReg.test(inputVal)){
									$parentTag.addClass('error').append($error.clone().text('Enter valid email'));
								}
							}
							
							// Check passwords match for inputs with class "password"
							if($(this).hasClass('password') == true){
								var password1 = $('#password-1').val();
								var password2 = $('#password-2').val();
								if(password1 != password2){
								$parentTag.addClass('error').append($error.clone().text('Passwords must match'));
								}
							}
						});
				
						// All validation complete - Check if any errors exist
						// If has errors
						if ($('span.error').length > 0) {
							
							$('span.error').each(function(){
								
								// Set the distance for the error animation
								var distance = 5;
								
								// Get the error dimensions
								var width = $(this).outerWidth();
								
								// Calculate starting position
								var start = width + distance;
								
								// Set the initial CSS
								$(this).show().css({
									display: 'block',
									opacity: 0,
									right: -start+'px'
								})
								// Animate the error message
								.animate({
									right: -width+'px',
									opacity: 1
								}, 'slow');
								
							});
						} else {
							//alert('clicked');
										$('#register-btn').hide();
										$('#loadreg-btn').show();
										var nama = $('#nama').val();
										var email = $('#email').val();
										var perusahaan = $('#perusahaan').val();
										var legal = $('#legal').val();
										var password = $('#password-1').val();
										$.post('/partner/new_register_to',{
											action: "insert",
											nama:nama, 
											email:email,
											perusahaan:perusahaan,
											legal:legal, 
											password:password
										},function(res){
											$('#result').html(res);
										});
										
										/*$('#show').click(function(){
											$.post('/volunteer/new_volunteer',{action: "show"},function(res){
												$('#result').html(res);
											});        
										});*/
						}
						// Prevent form submission
							e.preventDefault();
					});
					
					// Fade out error message when input field gains focus
					$('.required').focus(function(){
						var $parent = $(this).parent();
						$parent.removeClass('error');
						$('span.error',$parent).fadeOut();
					});
					//$('#left').affix({
//									offset: {
//									  top: 250
//									, bottom: function () {
//										return (this.bottom = $('.bs-footer').outerHeight(true))
//									  }
//									}
//								  })
				});
				</script>
<style type="text/css">
/* Tutorial CSS */
/*Form styles*/
.styled {
}
.styled .fieldset {
position: relative;
}
.styled fieldset h3 { 
color: #555;
margin-bottom: 0.5em;
}
/* Form rows */
.styled .inp {
	position: relative;
	width: 331px;
}
.styled label {
display: block; 
font-weight: bold; 
line-height: 24px; 
padding: 4px; 
color: #555;
}
.styled label.double {
padding-top: 0; 
line-height: 20px; 
margin-top: -3px;
}
.styled fieldset li.button-row {
margin-bottom: 0; 
padding: 5px 0 0; 
text-align: right;
}
/* Text input styles */
/* Default */
.styled input.text-input {
height: 22px;
width: 254px;
padding: 5px 8px; 
background: url(images/bg_input.png) no-repeat 0 0;  
border: none;   
font: normal 15px Arial, sans-serif;
color: #333;
line-height: 1em;
}
	/* Form Validation */
.styled span.error {
	font: bold 11px Arial, sans-serif;
	color:#fff;
	text-shadow: 1px 1px 1px #000;
	display: none; 
	background: #F00 !important; 
	height: 11px;
	padding: 7px 15px 20px 20px; 
	line-height: 1em; 
	position: absolute; 
	top: 3px; 
	right: 0; 
	border-right: 1px solid #6c0202;
}
.styled fieldset li.error input.text-input {
background-position: 0 -64px;
}
</style>
       
			<div class="user_register styled">
            <div id="result"></div>

				<form id="regform">
                	<div class="fieldset">
                        <label>Nama Lengkap</label>
                        <input type="text" class="required" id="nama" />
                    </div>
                    <div class="fieldset">
                        <label>Nama Trip Organiser/TO</label>
                        <input type="email" class="required" id="perusahaan" />
                    </div>
                    <div class="fieldset">
                        <label>Legal</label>
                        <select name="legal" id="legal" style="width:100%;">
                        	<option value="perorangan">Perorangan / belum ada legal</option>
                            <option value="pt">PT.</option>
                            <option value="cv">CV.</option>
                            <option value="koperasi">Koperasi</option>
                            <option value="lainnya">lainnya</option>
                        </select>
                    </div>
                    <div class="fieldset">
                        <label>Email Address</label>
                        <input type="email" class="required" id="email" />
                        <!--<span id="loading-check"><img src="http://www.adgf.am/counter/loading.gif" style="width:80px;" alt="Ajax Indicator" /></span>-->
                    </div>
                    <div class="fieldset">
                        <label>Password</label>
                        <input type="password" class="password required" id="password-1" />
                    </div>
                    <div class="fieldset">
                        <label>Confirm Password</label>
                        <input type="password" class="password required" id="password-2" />
                    </div>
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"> Login</a></div>
						<div class="one_half last">
                        	<a class="btn btn_red" id="register-btn">Daftar!</a>
                            <a class="btn btn_red" id="loadreg-btn" style="display:none">Loading...</a>
					</div>
				</form>
			</div>
		</section>
	</div>

	<div class="sidenav" id="sidenav">
            <ul></ul>
        </div>
		
		<div id="global" class="global">
		<div class="container dark view txt-white">
	<div class="inner gutter aligncenter ">	
		<br> <br>
		<img src="/asset/partner/images/icon-dollar-idea.png" class="vam" width="64">
		<br><br>
		<br><br>
		<h1>Buat trip seru kamu di tripseru.com<br>
        Dan Dapatkan Total Hadiah <b class="txt-gold">50 JUTA</b> Rupiah<br></h1>
		<br><br>
		<h5>Dari sebuah <span class="txt-gold">TRAVEL PLATFORM TERFAVORIT</span> di Indonesia dengan lebih dari <span class="txt-gold">12.234</span> dan Ratusan trip menarik.</h5>
		<br><br>
	</div>	
  <br>
  <div style="background: url('/asset/partner/images/separator-post.png') no-repeat scroll center center / cover  transparent; height: 68px;"></div>
</div>


<div data-textmenu="Kontes & Hadiah" class="container largepadding lightgrey-gradient">
	<div class="aligncenter">
		
		<p style="color: #000; font-size: 18px; padding:20px; margin: 0 auto">Dear Travel Preneur, <br> Dengan kerendahan hati, kami ingin mengajak anda berkolaborasi dengan tripseru.com dalam menawarkan pelayanan trip yang anda lakukan untuk kami bantu hubungkan dengan market yang lebih luas dan tertarget melalui:</p>
		
		<h1 class="aligncenter logo" style="font-size: 6rem; margin-top: 15px;">
			<!--<span class="">TRIP</span> <b>SERU</b>-->
            <img src="/asset/images/logo.png">
		</h1>
		<br>
		<h4 class="gold-shadow">Partnership TO Contest</h4>
		<h5>1 November 2015 - 1 April 2016</h5>
	</div>
</div>

<div  class="container">
	<div class="inner gutter aligncenter">
    	<h3 style="margin:0px 0px 30px;">Kumpulkan Rating Point hingga <br>1.500 atau lebih dan menangkan :</h3>
	    <h1>JUARA 1</h1>
		<br>
		<h3>Macbook Pro Retina Display</h3>
		<p>atau uang tunai sebesar <b>Rp. 20.000.000</b></p>
		<!--<p style="font-size:14px; color: #aaa;">(untuk 1 Trip Organiser/TO dengan rating point 1.500 atau lebih banyak)</p>-->
		<br>
		<br><br>
		<img src="/asset/partner/images/mbp.jpg" style="max-width: 800px; margin: 0px -30px;">
		
	</div>
</div>


<!--<div class="container smallpadding">
	<div class="inner gutter aligncenter">
		<p style="font-size:14px; color: #555">bila di tambah komisi affiliate <b class="">Rp. 26.250.000</b>, <br> minimal yang anda dapatkan sebesar <b class="gold-shadow">Rp. 46.250.000</b> atau lebih banyak</p>
		<br><br>
	</div>
</div>-->


<div style="max-height: 800px; overflow: hidden" class="container lightgrey-gradient largepadding">
	<div class="inner gutter aligncenter">
	    <h1>JUARA 2</h1>
		<br>
		<h3>iPhone 6</h3>
		<p>atau uang tunai sebesar <b>Rp. 12.500.000</b></p>
		<!--<p style="font-size:14px; color: #aaa;">(untuk 1 Trip Organiser/TO dengan rating poin mendekati 1.500 ke-2)</p>-->
		<img src="/asset/partner/images/iphone6.png">
		
	</div>
</div>

<!--<div class="container smallpadding">
	<div class="inner gutter aligncenter">
		<p style="font-size:14px; color: #555">bila di tambah komisi affiliate <b class="">Rp. 18.750.000</b>, <br> minimal yang anda dapatkan sebesar <b class="gold-shadow">Rp. 31.250.000</b> atau lebih banyak</p>
		<br><br>
	</div>
</div>-->

<div style="max-height: 750px; overflow: hidden" class="container lightgrey-gradient largepadding">
	<div class="inner gutter aligncenter">
	    <h1>JUARA 3</h1>
	    <br>
		<h3></i> iPad Mini 3</h3>
		<p>atau uang tunai sebesar <b>Rp. 7.500.000</b></p>
		<!--<p style="font-size:14px; color: #aaa;">(untuk 1 Trip Organiser/TO dengan rating poin mendekati 1.500 ke-3)</p>-->
		<br><br>
		<img src="/asset/partner/images/ipad-mini.png">
	</div>
</div>
<!--<div class="container smallpadding">
	<div class="inner gutter aligncenter">
		<p style="font-size:14px; color: #555">bila di tambah komisi affiliate <b class="">Rp. 13.125.0000</b>, <br> minimal yang anda dapatkan sebesar <b class="gold-shadow">Rp. 20.625.000</b> atau lebih banyak</p>
		<br><br>
	</div>
</div>-->


<div style="max-height: 600px; overflow: hidden" class="container lightgrey-gradient largepadding">
	<div class="inner gutter aligncenter">
	    <h1>Hadiah Hiburan</h1>
	    <br>
		<h3>Uang tunai sebesar 10 JUTA rupiah</h3>
		<p>untuk 5 Trip Organiser/TO masing-masing sebesar 2 juta rupiah</p>
		<br><br>
		
		<img src="/asset/partner/images/uang-tunai.jpg">
		
	</div>
</div>


<div data-textmenu="Tentang Produk" class="separated lightgrey-gradient container hugepadding">
	<div class="inner gutter aligncenter">
		<h1 class="gold-shadow">Produk</h1>
	</div>
	
	
	<br><br><br>
	
	<div class="inner gutter aligncenter sales-copy">
		<p><b>TRIPSERU.COM</b> adalah <b class="underline">Travel Platform </b>, Dimana kami membantu mempertemukan anda (Trip Organiser) dengan pasar yang lebih luas dan tertarget dengan feature-feature yang sangat membantu anda dalam mengembangkan bisnis Anda.</p>
        <p>
  			<b class="underline">Feature-feature unggulan tripseru.com adalah :</b><br>
            <ul style="text-align:left">
            	<li style="text-align:left;">Online Payments : Pembayaran melalui system online</li>
                <li style="text-align:left;">Rating Point : System rating untuk menentukan kualitas Trip</li>
                <li style="text-align:left;">Partnership Agent : Anda akan dibantu dengan ribuan jaringan penjualan tripseru.com</li>
                <li style="text-align:left;">Realtime Report : Tak perlu lagi repot untuk mengurus laporan panjualan trip.</li>
            </ul>
        </p>
		
		<br><br><br>
		
<!-- 		<p>Ada 3 kategori pencarian di The Graph</p>  -->
	</div>
	
	<br><br><br>
	
<!--
	<div class="inner gutter aligncenter">
		<div class="row three column ">
			<div class="column feature">
				<img src="https://thegraph.co/assets/images/search-stories.png">
				<h4>Stories Finder</h4>
			
				<a href="https://www.youtube.com/embed/o1ZvJwyQCeg?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1&vq=hd720" class="demo fancybox fancybox.iframe">
					<i class="fa fa-play"></i> 
					<span>Watch Demo</span>
				</a>
			</div>
		
			<div class="column feature">
				<img src="https://thegraph.co/assets/images/search-people.png">
				<h4>People Finder</h4>
				<a href="https://www.youtube.com/embed/3kkZxgISuC0?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1&vq=hd720" class="demo fancybox fancybox.iframe">
					<i class="fa fa-play"></i> 
					<span>Watch Demo</span>
				</a>
			</div>	
		
		
			<div class="column feature">
				<img src="https://thegraph.co/assets/images/search-group.png">
				<h4>Group Finder</h4>
  
				<a href="https://www.youtube.com/embed/ckBaUIQbADw?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1&vq=hd720" class="demo fancybox fancybox.iframe">
					<i class="fa fa-play"></i> 
					<span>Watch Demo</span>
				</a>
			</div>
		
			<div class="clear"></div>
	
		</div>
	</div>
-->
	
</div>

<!--<div data-textmenu="Harga & Komisi" class="dark container hugepadding">
	<div class="inner gutter aligncenter txt-white">
		<img src="/asset/partner/images/icon-dollar-idea.png" class="vam" width="64">
		<br><br><br>
		<div class="row two column">
			
			<h1>1-7 November 2015</h1>
			
			<br>
			
			<div class="column">
				<h4>Harga</h4><br>
				<h2 class="txt-gold" >Rp 250.000</h2>
			</div>
			<div class="column">
				<h4>Komisi 30%</h4><br>
				<h2 class="txt-gold">Rp 75.000</h2>
			</div>
		</div>
		<div class="clear"></div>
		
		<br><br><br><br>
		
		<div class="row two column">
			<h1>8-14 November 2015</h1>
			
			<br>
			
			<div class="column">
				<h4>Harga</h4><br>
				<h2 class="txt-gold" > Rp 350.000</h2>
			</div>
			<div class="column">
				<h4>Komisi 30%</h4><br>
				<h2  class="txt-gold"> Rp 105.000</h2>
			</div>
		</div>
		<div class="clear"></div>
		<br><br><br><br>
		
		<div class="row two column">
			<h1>15-30 November 2015</h1>
			
			<br>
			
			<div class="column">
				<h4>Harga</h4><br>
				<h2 class="txt-gold" >Rp 450.000</h2>
			</div>
			<div class="column">
				<h4>Komisi 30%</h4><br>
				<h2  class="txt-gold">Rp 135.000</h2>
			</div>
		</div>
		<div class="clear"></div>
		<br><br>
		
		
		<p>Semua harga di atas adalah harga diskon <br> dari harga normal Rp.1.500.000 dengan menggunakan kupon</p>
		<h2 class="txt-gold" >GUEINDONESIA70</h2>
		
		<br>
	</div>
</div>


<div data-textmenu="Kenapa harus join?" class="separated lightgrey-gradient container hugepadding">
	<div class="inner gutter aligncenter">
		<h1>Kenapa Anda harus <span>join?</span></h1>
	</div>
	
	<br><br><br>
	
	<div class="inner gutter aligncenter sales-copy">
		<h4>1. Laris Manis</h4>
		<p>Industri travel di Indonesia terus meningkat setiap tahunnya dan terjadi kisaran Rp.123 Trilyun perputaran uang di Industri travel, Kini saatnya anda mendapatkan keuntungan lebih besar.</p>
		
		<br><br>
		<h4>2. Target Market Sangat Besar</h4>
		<p>Hampir seluruh Masyarakat kita membutuhkan liburan<br></p>
		
		<br><br>
		<h4>3. Prospek Bisnis Cerah</h4>
		<p>Pariwisata di Indonesia terus digenjot oleh pemerintah kita saat ini dengan dibangunnya infrastuktur di ratusan destinasi wisata baru di Indonesia</p>
		
		<br><br>
		<h4>4. Teknologi Platform Canggih</h4>
		<p>Dengan manfaat tripseru.com anda dapat dengan mudah mendapatkan pasar melalui platform teknologi yg bisa dipantau kapanpun dimanapun.</p>
		
		<br><br><br>
    
	</div>
</div>

<!--
<div id="daftar-jv" class="separated container largepadding">

	<div class="inner gutter">
		<h2 class="aligncenter">Partner yang Sudah Bergabung</h2>
	</div>
	<br><br>
	<div class="inner gutter">
		<div class="row twelve column">
			<div class="column"><img src="/"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
-->

<div data-textmenu="Join Now!" id="join" class="dark container sales-copy">
	<div class="inner gutter aligncenter">
		
		<br><br><br>
		
		<h1 class="txt-white">Lets Launch This Together !</h1>
		
		<br><br><br>
		
		<div class="row two column aligncenter">
			<div class="column">
				<a target="_blank" id="modal_trigger" class="list-fitur" href="#modal">
					<i class="fa fa-link" style="background: #2ecc71"></i>
					<h4>Daftar Partner Sekarang!</h4>
				</a>
			</div>
<!--
			<div class="column">
				<a target="_blank" class="list-fitur" href="http://goo.gl/forms/4PKNIXrpw7">
					<i class="fa fa-cut" style="background: #d35400"></i>
					<h4>Request Kupon</h4>
				</a>
			</div>
			<div class="column">
				<a target="_blank" class="list-fitur" href="https://thegraph.co/preview">
					<i class="fa fa-dollar" style="background: #f39c12"></i>
					<h4>Lihat Sales Page</h4>
				</a>
			</div>
					
-->
			<div class="column">
				<a target="_blank" class="list-fitur" href="https://www.facebook.com/groups/944975352229968/">
					<i class="fa fa-facebook" style="background: #45619D"></i>
					<h4>Join Partner Group</h4>
				</a>
			</div>
			
			<div class="clear"></div>
		</div>
		<br><br><br>
		
	</div>
	 <div style="background: url('/asset/partner/images/separator-post.png') no-repeat scroll center center / cover  transparent; height: 68px;"></div>
</div>

<div class="container normalpadding">

	<div class="inner gutter">
		<h2 class="aligncenter">See You on Board !</h2>
	</div>
	
	<br>

	<div class="inner gutter row aligncenter">
		<div class="column half">
			<div class="testi" style="border:none!important;">
				<div class="testi-meta">
					<div class="">
						<img style="border-radius: 50%!important; margin: 0; width: 90px;" class="author" src="https://scontent-sin1-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/10340008_10202976681690428_3881419491721288463_n.jpg?oh=2ff0d8787b012c197d2c0d9d9e67fe94&oe=5664541C">
					</div>
					<div class="">
						<h3 class="name">Jaenal Gufron</h3>
						
						<a class="authorurl" target="_blank" href="#">CEO Tripseru.com</a>
					</div>
					
					<div class="clear"></div>
				</div>
			</div><!-- testi -->
		</div>
		
		<div class="column half">
			<div class="testi" style="border:none!important;">
				<div class="testi-meta">
        
					<div class="">
						<img style="border-radius: 50%!important; margin: 0; width: 90px;" class="author" src="https://scontent-sin1-1.xx.fbcdn.net/hphotos-xfa1/v/t1.0-9/525404_10200666065475170_734198219_n.jpg?oh=31fb91a18a6bff67864ccc8b7b780185&oe=565F4B8D">
					</div>
          
					<div class="">
						<h3 class="name">Ari Setio</h3>
						<a class="authorurl" target="_blank" href="#">GM Marketing Tripseru.com</a>
					</div>
					
					<div class="clear"></div>
				</div>
			</div><!-- testi -->
		</div>
		
		<div class="clear"></div>
	
	</div>
</div>



<div data-textmenu="FAQ" class="containter largepadding lightgrey" style="border-top:1px solid #e8e8e8; border-bottom:1px solid #e8e8e8;">
	<div class="inner gutter aligncenter">
		<h2>FAQ</h2>
	</div>
</div>

<div id="faq" class="containter largepadding sales-copy">
	<div class="inner gutter">
		<div class="row two column">
			<div class="column">
				
				<h4>Kapan periode kontes ini berlangsung?</h4>
				<p>Periode kontes akan berlangsung selama 6 bulan dimuali dari <b>1 November 2015 - 1 April 2016</b></p>
				
				
				<br>
				
				<h4>Apakah kontes ini dipungut biaya?</h4>
				<p>GRATIS, kami tidak memungut biaya dalam kontes ini, apabila ada pihak yang meminta biaya mohon untuk diabaikan.</p>
                			
				<br>
				
				<h4>Apakah ada persyaratan khusus untuk mengikuti kontes ini?</h4>
				<p>Pada dasarnya tidak ada persyaratan khusus namun kami harapkan TO yang bergabung dalam kontes ini setidaknya telah berpengalaman dalam mengorganisir trip sebanyak 1 kali</p>
				
				<br>
				
			</div>
			<div class="column">
				<h4>Apa itu Rating Point?</h4>
				<p>Rating point adalah system feedback yang dilakukan oleh pelanggan yang menggunakan jasa anda di tripseru.com</p>
				<br>
                
                <h4>Bagaimana cara mendapatkan rating point?</h4>
				<p>System rating point akan mengirimkan feedback link melalui email kepada pelanggan anda di tripseru.com setelah 2 hari trip selesai dilakukan, dan pelanggan akan memberikan feedback tentang pelayanan anda selama trip berlangsung</p>
				<br>
                
                <h4>Berapa nilai dalam rating point?</h4>
				<p>Nilai feedback point berkisar 1-5 point semakin banyak poin maka pelanggan semakin menyukai pelayanan anda di platform tripseru.com</p>
				<br>
                
                <h4>Mengapa yang dinilai hanya rating point?</h4>
				<p>Rating point bersifat relative stabil dan dapat dijadikan sebagai bahan penilaian terhadap kualitas palayanan TO kepada pelanggan. karena harga dan destinasi tidak dapat dikompare 1 sama lainnya. </p>
				<br>
				
			</div>
			
		</div>
		<div class="clear"></div>
	</div>
</div>
<script src="/asset/js/jquery.validate.min.js"></script>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 25, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			//$(".social_login").hide();
			$(".user_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").show();
			$(".user_register").hide();
			//$(".social_login").show();
			//$(".header_title").text('Login');
			return false;
		});

	})
</script>

