<!--<script type="text/javascript" charset="utf-8" src="//s3.amazonaws.com/manycontacts-bars/5285a1491761401b63cf860c.js"></script>
<!--<script type="text/javascript" src="<?php //echo base_url(); ?>/asset/js/jquery-1.7.1.min.js"></script>-->
<!--<script type="text/javascript" src="<?php //echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="/asset/js/bootstrap-tour.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    	// Instance the tour
		var tour = new Tour({
		  
		  });
		
		// Add your steps. Not too many, you don't really want to get your users sleepy
		tour.addSteps([
		  {
			element: "#logo", // string (jQuery selector) - html element next to which the step popover should be shown
			title: "Selamat datang di tripseru.com", // string - title of the popover
			content: "Traveller Playgrounds untuk pecinta wisata", // string - content of the popover
		  	placement:"bottom",
		  },
		  {
			element: "#traveller",
			title: "Meets Traveller",
			content: "Temukan teman dan saling berbagi pengalaman bersama mereka",
			placement:"top",
		  },
		  {
			element: "#cerita",
			title: "Berbagi Cerita",
			content: "Bagikan pengalaman seru kamu di setiap perjalanan wisata yg kamu tempuh",
			placement:"bottom",
		  },
		  {
			element: "#liburan",
			title: "Liburan bareng",
			content: "Bagikan rencana liburan seru kamu dan ajak teman kamu liburan bareng",
			placement:"top",
		  },
		  {
			element: "#baca",
			title: "Baca cerita seru",
			content: "Baca pengalaman seru mereka dalam menjelajah dunia dan destinasi-destinasi seru",
			placement:"top",
		  },
		  {
			element: "#ikut",
			title: "Ikuti trip seru",
			content: "Dan rasakan serunya perjalanan wisata dengan penawaran-penawaran yang menarik",
			placement:"top",
		  },
		  {
			element: "#daftar",
			title: "Daftar",
			content: "Tunggu apalagi, yuk daftar dan gabung bersama ribuan traveller lainya untuk saling berbagi cerita",
			placement:"bottom",
		  },
		    
		]);
		
		
		// Initialize the tour
		tour.init();
		
		// Start the tour
		tour.start();		
	});
</script>-->
<!--Promo Form-->
	<section id="promoform">
		<form id="theForm" class="simform" autocomplete="off">
			<div class="simform-inner">
				<ol class="questions">
					<li>
						<span><label class="comp" for="q1">Terima kasih atas kunjungannya, Tuliskan nama panggilan anda!</label></span>
						<input id="q1" name="q1" type="text"/>
					</li>
					<li>
						<span><label class="comp" for="q2">Alamat email yang bisa dihubungi?</label></span>
						<input id="q2" name="q2" type="text"/>
					</li>
					<li>
						<span><label class="comp" for="q3">Kapan terakhir anda liburan?</label></span>
						<input id="q3" name="q3" type="text"/>
					</li>
					<li>
						<span><label class="comp" for="q4">Kemana destinasi terakhir anda berlibur?</label></span>
                        	<input id="q4" name="q4" type="text"/>
							</li>
							<li>
								<span><label class="comp" for="q5">Dengan siapa biasa ada liburan? Keluarga/teman</label></span>
								<input id="q5" name="q5" type="text"/>
							</li>
							<li>
								<span><label class="comp" for="q6">Jenis liburan paling disukai?ex. pantai,gunung,belanja</label></span>
								<input id="q6" name="q6" type="text"/>
							</li>
						</ol><!-- /questions -->
						<button class="submit" type="submit">Send answers</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<span class="number">
								<span class="number-current"></span>
								<span class="number-total"></span>
							</span>
                            <span class="tex">*Dapatkan diskon Rp.50.000 jika anda mengisi form ini</span>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
                    <span class="closenow">Jika anda tidak berminat dengan promo ini silahkan <a id="skip">Skip</a></span>
				</form><!-- /simform -->			
			</section>
            <script src="/asset/js/MinimalForm/js/classie.js"></script>
		<script src="/asset/js/MinimalForm/js/stepsForm.js"></script>
		<script>
			var theForm = document.getElementById( 'theForm' );

			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					form.submit()
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					var messageEl = theForm.querySelector( '.final-message' );
					messageEl.innerHTML = 'Terima Kasih! Gunakan kode promo "FORM50K" untuk dapatkan potongan Rp.50rb';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>

<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="featured">
    	<div class="trip">
        <?php for ($i=0;$i<count($nextdest);$i++){ ?>
        	<div class="itemstrip">
            	<div class="top">
                	<div class="date">
                    	<div class="tgl"><p><?php echo $nextdest[$i]['tgl'] ?></p></div>
                        <div class="month"><p><?php echo $nextdest[$i]['bulan'] ?></p></div>
                        <div class="lama"><p><?php echo $nextdest[$i]['tahun'] ?> | <?php echo $nextdest[$i]['lama'] ?></p></div>
                    </div>
                	<div class="label nexti">
                    	NEXT TRIP
                    </div>
                    <div class="info">
                    	<h2 class="title"><?php echo $nextdest[$i]['destinasi'] ?></h2>
                        <div class="kota"><img src="/asset/images/place.png" /> <?php echo $nextdest[$i]['kota'] ?></div>
                        <div class="harga">
                        	<span class="rp">Rp.</span>                            
                            <?php
							//$harga = $hot[$i]['harga']; 
							if($nextdest[$i]['harga'] >= 1000000){ 
							$harga = $nextdest[$i]['harga'];
							$harga1 = $harga/1000000;
							 ?>
                                <span class="jum"><?php echo $harga1 ?></span>
                                <span class="rb">Jt<br />/Pax</span>
                            <?php }else{ 
							$harga = $nextdest[$i]['harga'];
							$harga1 = $harga/1000;
							?>                            
                            	<span class="jum"><?php echo $harga1 ?></span>
                            	<span class="rb">Rb<br />/Pax</span>
                            <?php } ?>
                        </div>
                    </div>
                	<div class="imag">
                    	<a href="/destinasi/view/<?php echo $nextdest[$i]['tripid'] ?>/<?php echo $nextdest[$i]['slug'] ?>"><img src="/upload/<?php echo $nextdest[$i]['pic'] ?>" /></a>
                    </div>
                    <div class="tombol">
                    	<a class="btn btn-info wish" href="#">
                        	<span>32</span><br />
                            Wish It
                        </a>
                        <a class="btn btn-warning reseru" href="#">
                        	<span>320</span><br />
                            Reseru
                        </a>
                        <a class="btn btn-primary join" href="/destinasi/view/<?php echo $nextdest[$i]['tripid'] ?>/<?php echo $nextdest[$i]['slug'] ?>">
                        	<span>JOIN</span><br />
                            With <?php echo $nextdest[$i]['quota'] ?> Traveler
                        </a>
                    </div>
                	<!---->
                </div>
                <div class="bottom">
                	<div class="hexagon hexagon2">
                            <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/924726690890484/picture?type=large&amp;height=400&amp;width=400');">               
                                </div>
                             </div>
                   	</div>
                    <p>Syaeful akan mengikuti trip seruu_ ini bersama <?php echo $nextdest[$i]['quota'] ?> Traveler</p>
                </div>
            </div>
            <?php } ?>
             <?php for ($i=0;$i<count($hot);$i++){ ?>
            <div class="itemstrip">
            	<div class="top">
                	<div class="date">
                    	<div class="tgl"><p><?php echo $hot[$i]['tgl'] ?></p></div>
                        <div class="month"><p><?php echo $hot[$i]['bulan'] ?></p></div>
                        <div class="lama"><p><?php echo $hot[$i]['tahun'] ?> | <?php echo $hot[$i]['lama'] ?></p></div>
                    </div>
                	<div class="label offer">
                    	HOT OFFER
                    </div>
                    <div class="info">
                    	<h2 class="title"><?php echo $hot[$i]['destinasi'] ?></h2>
                        <div class="kota"><img src="/asset/images/place.png" /> <?php echo $hot[$i]['kota'] ?></div>
                        <div class="harga">
                        	<span class="rp">Rp.</span>                            
                            <?php
							//$harga = $hot[$i]['harga']; 
							if($hot[$i]['harga'] >= 1000000){ 
							$harga = $hot[$i]['harga'];
							$harga1 = $harga/1000000;
							 ?>
                                <span class="jum"><?php echo $harga1 ?></span>
                                <span class="rb">Jt<br />/Pax</span>
                            <?php }else{ 
							$harga = $hot[$i]['harga'];
							$harga1 = $harga/1000;
							?>                            
                            	<span class="jum"><?php echo $harga1 ?></span>
                            	<span class="rb">Rb<br />/Pax</span>
                            <?php } ?>
                        </div>
                    </div>
                	<div class="imag">
                    	<a href="/destinasi/view/<?php echo $hot[$i]['tripid'] ?>/<?php echo $hot[$i]['slug'] ?>"><img src="/upload/<?php echo $hot[$i]['pic'] ?>" /></a>
                    </div>
                    <div class="tombol">
                    	<a class="btn btn-info wish" href="#">
                        	<span>32</span><br />
                            Wish It
                        </a>
                        <a class="btn btn-warning reseru" href="#">
                        	<span>320</span><br />
                            Reseru
                        </a>
                        <a class="btn btn-primary join" href="/destinasi/view/<?php echo $hot[$i]['tripid'] ?>/<?php echo $hot[$i]['slug'] ?>">
                        	<span>JOIN</span><br />
                            With <?php echo $hot[$i]['quota'] ?> Traveler
                        </a>
                    </div>
                	<!---->
                </div>
                <div class="bottom">
                	<div class="hexagon hexagon2">
                            <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/10204578569845334/picture?type=large&amp;height=400&amp;width=400');">               
                                </div>
                             </div>
                   	</div>
                    <p>Ari akan mengikuti trip seruu_ ini bersama <?php echo $hot[$i]['quota'] ?> Traveler</p>
                </div>
            </div>
            <?php } ?>
            <div class="clearfix"></div>
            <div class="favorite">
            	<p>Kota Popular : Flores / Lombok / Lampung / Bali / Jawa Timur / Jawa Barat / Manado / Papua</p>
            </div>
            <div class="cari">
            	<form class="search">
                	
                </form>
            </div>
        </div>          
    </div>
    <div class="container" id="top-best">
    	<section id="lab"> 
        	<p class="traveller">Temukan teman baru di liburan seru kamu!</p>          	
                <article>            
                <?php				
				for ($i=0;$i<count($user_front);$i++){ 	
				?>
							<div class="lab_item">		
								<div class="hexagon hexagon2">
									<div class="hexagon-in1">
										<div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/<?php echo $user_front[$i]['fbid'] ?>/picture?type=large&height=400&width=400');">
										<span class="name"><?php echo $user_front[$i]['panggilan'] ?></span>                
                                </div>
                             </div>
                         </div>
                         </div>
                         <?php } ?>
                 
                </article>
                <div class="buttonlib">
                <a class="btn btn-primary" id="cerita" href="#">Ceritakan Liburanmu</a>
            	<a class="btn btn-primary" id="liburan" href="#">Rencanakan Liburanmu</a>
                </div>
            </section>
    
    </div>
    <hr class="garis" />
    <div class="container" id="index">
		<div class="plantrip trip">
        	<h1 id="ikut">Liburan Seru</h1>
            <?php
			//var_dump($nextdest);
			for ($i=0;$i<count($destinasi);$i++){ ?> 
            <div class="itemstrip">
            	<div class="top">
                	<div class="date">
                    	<div class="tgl"><p><?php echo $destinasi[$i]['tgl'] ?></p></div>
                        <div class="month"><p><?php echo $destinasi[$i]['bulan'] ?></p></div>
                        <div class="lama"><p><?php echo $destinasi[$i]['tahun'] ?> | <?php echo $destinasi[$i]['lama'] ?></p></div>
                    </div>
                	
                    <div class="info">
                    	<h2 class="title"><?php echo $destinasi[$i]['destinasi'] ?></h2>
                        <div class="kota"><img src="/asset/images/place.png" /> <?php echo $destinasi[$i]['kota'] ?></div>
                        <div class="harga">
                        	<span class="rp">Rp.</span>                            
                            <?php
							//$harga = $hot[$i]['harga']; 
							if($destinasi[$i]['harga'] >= 1000000){ 
							$harga = $destinasi[$i]['harga'];
							$harga1 = $harga/1000000;
							 ?>
                                <span class="jum"><?php echo $harga1 ?></span>
                                <span class="rb">Jt<br />/Pax</span>
                            <?php }else{ 
							$harga = $destinasi[$i]['harga'];
							$harga1 = $harga/1000;
							?>                            
                            	<span class="jum"><?php echo $harga1 ?></span>
                            	<span class="rb">Rb<br />/Pax</span>
                            <?php } ?>
                        </div>
                    </div>
                	<div class="imag">
                    	<a href="/destinasi/view/<?php echo $destinasi[$i]['tripid'] ?>/<?php echo $destinasi[$i]['slug'] ?>"><img src="/upload/<?php echo $destinasi[$i]['pic'] ?>" /></a>
                    </div>
                    <div class="tombol">
                    	<a class="btn btn-info wish" href="#">
                        	<span>32</span><br />
                            Wish It
                        </a>
                        <a class="btn btn-warning reseru" href="#">
                        	<span>320</span><br />
                            Reseru
                        </a>
                        <a class="btn btn-primary join" href="/destinasi/view/<?php echo $destinasi[$i]['tripid'] ?>/<?php echo $destinasi[$i]['slug'] ?>">
                        	<span>JOIN</span><br />
                            With <?php echo $destinasi[$i]['quota'] ?> Traveler
                        </a>
                    </div>
                	<!---->
                </div>
                <div class="bottom">
                	<div class="hexagon hexagon2">
                            <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/924726690890484/picture?type=large&amp;height=400&amp;width=400');">               
                                </div>
                             </div>
                   	</div>
                    <p>Syaeful dan 88 traveler mengikuti trip seruu_ ini</p>
                </div>
            </div>
            <?php } ?>  
            <div class="clearfix"></div>
            <div class="ne">
            	<a href="/destinasi" class="btn btn-primary"> Ikuti liburan Seruu_ yang lainnya!</a>
            </div>
        </div><!-- end plan trip-->
        
        <div class="cerita" >        	
            <div class="sto">
                <div class="demo demof">
                    <ul>
                    <?php for ($i=0;$i<count($story);$i++){ ?>
                        <li>
                        	<div class="itemstat"> 
                            	 <div class="titlehead">
                                        <div class="image">
                                            <div class="hexagon hexagon3">
                                                <div class="hexagon-in1">
                                                    <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/<?php echo $story[$i]['fbid'] ?>/picture?type=large&amp;height=400&amp;width=400');">               
                                                    </div>
                                                 </div>
                                             </div>
                                        </div>
                                    	<h2><?php echo $story[$i]['judul'] ?></h2>
                                        <span>By <a href="#"><?php echo $story[$i]['fullname'] ?> </a></span>
                                        <div class="arrow-left"></div>
                                </div>                               
                                <div class="content">
                                    <div class="textcont">                                        
                                        <?php 
										//$text = $story[$i]['deskripsi'];
//										$display = substr($text, 0, 185) ;										
//										echo $display;
//										echo '...';
										?>   
                                         <?php 
										$input = str_replace('&lt;','<',$story[$i]['deskripsi']);
										$input = str_replace('&gt;','>',$input);
										$input = str_replace('&amp;','&',$input);
										$input = str_replace('&quot;','"',$input);
														
										echo substr($input,0,185);	
										echo '...';			
										?>                                                                		
                                    </div>
                                    <div class="triptools">
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>"><img src="/asset/images/refresh.png"> 20 traveller reseru this story</a>
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>"><img src="/asset/images/tick.png">I Wish</a>
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>" id="comment"><img src="/asset/images/comment.jpg"><fb:comments-count href=http://tripseru.com/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>/></fb:comments-count> comment</a>
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>" class="btn btn-primary">Read More ></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>                    
                            </div>	
                        </li>
                        <?php } ?> 
                    </ul>                    
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="ne">
            	<a href="/story" class="btn btn-primary"> Lihat Semua Cerita Seruu_</a>
            </div>        
        </div><!--end .cerita-->
      	<div class="clearfix"></div>
            <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script type="text/javascript" src="/asset/js/jquery.min.js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>	
<script type="text/javascript" src="http://vaakash.github.io/jquery/easy-ticker.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!--end ticker query-->
		<script type="text/javascript" src="/asset/js/FullscreenSlitSlider/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="/asset/js/FullscreenSlitSlider/js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
				$("#skip").click(function(){
					$("#promoform").hide();
				})
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			$('.demo5').easyTicker({
					direction: 'up',
					visible: 3,
					interval: 4500,
					controls: {
						up: '.btnUp',
						down: '.btnDown',
						toggle: '.btnToggle'
					}
				});
				
				
				var tickObj = ticker.data('easyTicker');
				var tickOpts = tickObj.options;
				
				$('.svisible3').click(function(){
					tickOpts.visible = 3;
				});
				
				$('.cdirection').click(function(){
					tickOpts.direction = 'down';
				});
				
				$('.stop').click(function(){
					tickObj.stop();
				});
				
				$('.start').click(function(){
					tickObj.start();
				});
			
			});
		</script>
      