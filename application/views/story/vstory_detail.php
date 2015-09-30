<link rel="stylesheet" type="text/css" href="/asset/css/slicebox.css" />
<!-- Main jumbotron for a primary marketing message or call to action -->
    <!--<div class="featured destinasipage">
 		<div id="sliderpage" class="sl-slider-wrapper">
			<img alt="" src="/asset/images/destination-marketing.jpg">
		</div><!-- /slider-wrapper            
    </div>-->
    <div class="container story" id="destinasipage">    	
        <div class="left">
            <div class="profile">
            	<div class="hexagon hexagon3">
                	<div class="hexagon-in1">
                    	<div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/<?php echo $story_item['fbid']; ?>/picture?type=large&amp;height=400&amp;width=400');">
                        <span class="name"><?php echo $story_item['panggilan']; ?></span>               
                        </div>
                    </div>
                </div>
            </div>            
        	<div class="ittinery">
            	<div class="title"><h2><?php echo $story_item['judul']?></h2></div>
                <p>By <a href="#"><?php echo $story_item['fullname']; ?> posted on <?php echo $story_item['tgl']; ?></a></p>
                <?php 
					$input = str_replace('&lt;','<',$story_item['deskripsi']);
					$input = str_replace('&gt;','>',$input);
					$input = str_replace('&amp;','&',$input);
					$input = str_replace('&quot;','"',$input);
					function br2nl($input) {
						return preg_replace('/<br\\s*?\/??>/i""', '', $input);
					}				
					echo $input;				
					?>     
                <div class="share">
                	<span class='st_facebook_hcount' displayText='Facebook'></span>
                    <span class='st_twitter_hcount' displayText='Tweet'></span>
                    <span class='st_email_hcount' displayText='Email'></span>
                </div>        
                <div class="fb-comments" data-href="http://tripseru.com/story/read/<?php echo $story_item['stoid']?>/<?php echo $story_item['slug']?>" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
        	</div>     
        	<div class="clearfix"></div>  
        </div>
    	<div class="right">
        	<div class="custom">
                <div class="title">
                    <h2>Rate Me Please ;-)</h2>
                </div>  
                <div class="info">
                	<div class="triptools">
                    <?php 
					if($this->session->userdata('logged_in')){
						$data['useritem'] = $this->session->userdata('logged_in');?>
                        <a id="reseru"><img src="/asset/images/refresh.png">
                        	<span id="resultser"></span> 
                            <span id="reser">Reseru story seru ini</span></a>
                            <input type="hidden" value="<?php echo $data['useritem']['uid']; ?>" id="uidser"/>
                            <input type="hidden" value="<?php echo $story_item['stoid']; ?>" id="tripidser"/>
                    	<a id="iwish"><img src="/asset/images/tick.png">I Wish trip ini</a>
                   <?php }else{?>
                   	<a id="reserunonlog" href="#reseru"><img src="/asset/images/refresh.png">
                        	<span id="resultser"></span> 
                            <span id="reser">30 Traveller reseru story ini</span></a>
                    <a id="iwish"><img src="/asset/images/tick.png">I Wish trip ini</a>
                   <?php } ?>
                   	</div>                    
                </div>          	
            </div>            
            <div class="relatedtrip">
            	<h4>Cobain juga trip ini!</h4>
            	<?php for ($i=0;$i<count($destinasi);$i++){ ?>      	
                    <div class="item-aksi">
                        <div class="image">
                            <a href="/destinasi/view/<?php echo $destinasi[$i]['tripid'] ?>/<?php echo $destinasi[$i]['slug'] ?>"><img src="/upload/<?php echo $destinasi[$i]['pic'] ?>"></a>
                            <div class="berangkat">
                                <p>Berangkat</p>
                                <p class="tgl"><?php echo $destinasi[$i]['tgl'] ?></p>
                                <p class="bulan"><?php echo $destinasi[$i]['bulan'] ?></p>
                                <p class="lama"><?php echo $destinasi[$i]['lama'] ?></p>
                           </div>
                        </div>
                        <div class="title">
                            <a href="/destinasi/view/<?php echo $destinasi[$i]['tripid'] ?>/<?php echo $destinasi[$i]['slug'] ?>"><h2><?php echo $destinasi[$i]['destinasi'] ?></h2></a>         		
                            </div>
                        <div class="desc">
                            <div class="sisa">
                                <span>Tersisa <?php echo $destinasi[$i]['tersisa'] ?> pax</span>
                                <a href="http://tripseru.com/destinasi/one-day-trip-3-pulau-kepulauan-seribu/" class="ca-more">Ikut Sekarang</a>
                                <p>Harga Mulai Rp.<span class="start"><?php echo number_format($destinasi[$i]['harga']) ?></span></p>
                            </div>
                            <div class="desc-middle">
                                <div class="fasilitator" style="position:relative;">
                                    <div class="buttontra">
                                        <a href="/destinasi/view/<?php echo $destinasi[$i]['tripid'] ?>/<?php echo $destinasi[$i]['slug'] ?>" class="btn btn-primary btn-block"> Saya Mau!</a>
                                    </div>                         
                                </div>
                            </div><!--end .desc-middle-->                    
                        </div><!-- .desc--> 
                    </div>
                    <?php } ?>
            </div>
        </div><!--end .right-->
        
     <div class="clearfix"></div>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	 <script type="text/javascript" src="/asset/js/jquery.slicebox.js"></script>
     <script type="text/javascript" src="/asset/js/bootstrap.js"></script>
     <script type="text/javascript">
						$(function(){
							$('#loading').hide();																						
							$('#ordertrip').click(function(e){
									$('#loading').show();
									//alert('clicked');
									var triporder = $('#triporder').val();
									var uidorder = $('#uidorder').val();
									var berangkat = $('#berangkat').val();
									var hargades = $('#hargades').val();
									var pax = $('#pax').val();
									var namadestinasi = $('#namadestinasi').val();
									var totalbayar = $('#totalbayar').val();
									//var deskripsi = $('#deskripsi').val();
									$.post('/order/insert',{
										action: "insert", 
										triporder:triporder, 
										uidorder:uidorder,
										berangkat:berangkat, 
										hargades:hargades,
										pax:pax, 
										namadestinasi:namadestinasi,
										totalbayar:totalbayar,
									},function(res){
									$('#result').html(res);});
									//$('#loading').hide();
							//});
						 	//show records
									$('#show').click(function(){
										$.post('/postin/new',{action: "show"},function(res){
										$('#result').html(res);
									});        
								});
							});
							$('#reserunonlog').click(function(e){
								alert('login dulu dong');
							});
							$('#reseru').click(function(e){
									//$('#loading').show();
									alert('clicked');
									var tripidser = $('#tripidser').val();
									var uidser = $('#uidser').val();									
									//var deskripsi = $('#deskripsi').val();
									$.post('/reseru/inserttrip',{
										action: "insert", 
										tripidser:tripidser, 
										uidser:uidser,										
									},function(res){
									$('#resultser').html(res);});
									//$('#loading').hide();
							//});
						 	//show records
									
							});
						});
					</script>
	 <script type="text/javascript">
			$(function() {
				$('#myTab a:first').tab('show');
				<?php
				//if($this->session->userdata('logged_in')){?>
					$('#myModal').modal('show');
				<?php // }?>				
				function addCurrency(str) {
					var amount = new String(str);
					amount = amount.split("").reverse();
		
					var output = "";
					for ( var i = 0; i <= amount.length-1; i++ ){
						output = amount[i] + output;
						if ((i+1) % 3 == 0 && (amount.length-1) !== i)output = '.' + output;
					}
					return output;
				};
				$('select.pax').change(function(){				
					var v 		= $(this).val();
					var total 	= Math.ceil(v * $('input.hargades').val());
					console.log(v);
					console.log(total);
					$('input.total').val(addCurrency(total));
					$('input#totalbayar').val(total);
				});
				
				var Page = (function() {
					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
      