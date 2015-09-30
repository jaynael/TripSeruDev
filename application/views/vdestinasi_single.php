<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54d57512511b0d3d" async="async"></script>
<link rel="stylesheet" type="text/css" href="/asset/css/slicebox.css" />
<!-- Main jumbotron for a primary marketing message or call to action -->
    <!--<div class="featured destinasipage">
 		<div id="sliderpage" class="sl-slider-wrapper">
			<img alt="" src="/asset/images/destination-marketing.jpg">
		</div><!-- /slider-wrapper            
    </div>-->
    <div class="container" id="destinasipage">    	
        <div class="left">
        	<?php //var_dump($destinasi_item); 
			$data['useritem'] = $this->session->userdata('logged_in');?>
            <div class="title">
        		<h2><?php echo $destinasi_item['destinasi'];?></h2>
            </div>
        	<div class="slidesr">
            	<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="#" target="_blank"><img src="/upload/<?php echo $destinasi_item['pic']; ?>" alt="image1"/></a>
						<div class="sb-description">
						</div>
					</li>
                    <li>
						<a href="#" target="_blank"><img src="/upload/<?php echo $destinasi_item['pic']; ?>" alt="image1"/></a>
						<div class="sb-description">
						</div>
					</li>
                    <li>
						<a href="#" target="_blank"><img src="/upload/<?php echo $destinasi_item['pic']; ?>" alt="image1"/></a>
						<div class="sb-description">
						</div>
					</li>
					
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>
            </div> 
            <div class="ittinery">
            	<!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                  <li class="active"><a href="#home" role="tab" data-toggle="tab">Ittinery</a></li>
                  <li><a href="#profile" role="tab" data-toggle="tab">Maps</a></li>
                </ul>                
                <div class="tab-content">
                  <div class="tab-pane active" id="home">
                  <?php 
					$input = str_replace('&lt;','<',$destinasi_item['ittineri']);
					$input = str_replace('&gt;','>',$input);
					$input = str_replace('&amp;','&',$input);
					$input = str_replace('&quot;','"',$input);
					function br2nl($input) {
						return preg_replace('/<br\\s*?\/??>/i""', '', $input);
					}				
					echo $input;				
					?>
                  </div>
                  <div class="tab-pane" id="profile">...</div>
                  <div class="tab-pane" id="messages">...</div>
                  <div class="tab-pane" id="settings">...</div>
                </div>
            </div>       
        </div>
        <div class="right">
        	<div class="custom">
                <div class="title">
                    <h2><?php echo $destinasi_item['lama']; ?> Trip</h2>
                    
                </div>  
                <div class="gabung">
                    <?php // if($this->session->userdata('logged_in')) {?>
                    	<a class="btn btn-primary btn-gabung btn-lg btn-block" id="btn-join" data-toggle="modal" data-target="#myModal">Join di trip ini</a>
                    <?php // }else{ ?>
                    	<!--<a class="btn btn-primary btn-gabung btn-block">Join di trip ini Please Login</a>-->
                    <?php // } ?>
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
								<input type="hidden" value="<?php echo $destinasi_item['tripid']; ?>" id="tripidser"/>
							<a id="iwish"><img src="/asset/images/tick.png">I Wish trip ini</a>
					   <?php }else{?>
						<a id="reserunonlog" href="#reseru"><img src="/asset/images/refresh.png">
								<span id="resultser"></span> 
								<span id="reser">30 Traveller reseru story ini</span></a>
						<a id="iwish"><img src="/asset/images/tick.png">I Wish trip ini</a>
					   <?php } ?>
                   	</div>
                    <div class="join btn btn-success btn-block">
                    	<div class="it">Berangkat : <?php echo $destinasi_item['tgl']; ?> <?php echo $destinasi_item['bulan']; ?> <?php echo $destinasi_item['tahun']; ?></div>
                        <div class="it">Harga Mulai : Rp.<?php echo number_format($destinasi_item['harga']);?></div>
                        <div class="it"><?php
						 $terbeli = $destinasi_item['quota'] - $destinasi_item['tersisa'];
						 if ($terbeli > '5'){?>
                         <?php echo $terbeli ?> Traveller telah join di tripseru ini                          
                         <?php } else {?>
						 Tersedia <?php echo $destinasi_item['quota'] ?> Pax untuk traveller
                         <?php } ?> 
                        </div>                   
                    </div>
                </div>          	
            </div>
            
            <div class="relatedtrip trip">
            	<h4>Cobain juga trip ini!</h4>
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
                        <a class="btn btn-primary joint" href="/destinasi/view/<?php echo $destinasi[$i]['tripid'] ?>/<?php echo $destinasi[$i]['slug'] ?>">
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
            </div>
        </div><!--end .right-->
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                    <h4 class="modal-title" id="myModalLabel">Gabung di tripseru ini</h4>
                  </div>
                  <div class="modal-body">
                  <div id="loading" class="btn btn-info btn-lg btn-block">Loading...</div>
                  <div id="result"></div>  
                  <?php
				//if($this->session->userdata('logged_in')){
					//var_dump($data['useritem']['uid']);
				//}?>
                  	<div class="order" id="orderform">
                    	<div class="itemform">
                         <?php 
						if($this->session->userdata('logged_in')){ ?>
                        <div class="itemform">
                            <label>Nama</label>
                            <div class="ket">
                            : <input type="text" name="nama" class="input required" value="" id="nama" />	
                            </div>
                            <div class="clearfix"></div>	
                        </div>
                        <div class="itemform">
                            <label>Email</label>
                            <div class="ket">
                            : <input type="text" name="email" class="input  required" value="" id="email" />	
                            </div>
                            <div class="clearfix"></div>
                        </div>					
						<?php }else{ ?>	
                        <div class="itemform">
                            <label>Nama</label>
                            <div class="ket">
                            : <input type="text" name="nama" class="input required" value="" id="nama" />	
                            </div>
                            <div class="clearfix"></div>	
                        </div>
                        <div class="itemform">
                            <label>Email</label>
                            <div class="ket">
                            : <input type="text" name="email" class="input  required" value="" id="email" />	
                            </div>
                            <div class="clearfix"></div>
                        </div>				
						<?php } ?>
                        	<label>Destinasi</label>
                            <div class="ket">
                            	: <?php echo $destinasi_item['destinasi']; ?>
                                <input type=hidden name="tripid" value="<?php echo $destinasi_item['tripid']; ?>" id="triporder" />
                                <input type=hidden name="uidorder" value="<?php echo $data['useritem']['uid']; ?>" id="uidorder" />
                                <input type=hidden name="namadestinasi" value="<?php echo $destinasi_item['destinasi'];?>" id="namadestinasi" />
                            </div>  
                            <div class="clearfix"></div>                          
                        </div>
                        <div class="itemform">
                        	<label>Berangkat</label>
                            <div class="ket">
                            	: <?php echo $destinasi_item['tgl']; ?> <?php echo $destinasi_item['bulan']; ?> <?php echo $destinasi_item['tahun']; ?>
                                <input type=hidden name="tripid" value="<?php echo $destinasi_item['tgl']; ?> <?php echo $destinasi_item['bulan']; ?> <?php echo $destinasi_item['tahun']; ?>" id="berangkat" />
                            </div>  
                            <div class="clearfix"></div>                          
                        </div>
                        <div class="itemform">
                        	<label>Harga/Pax</label>
                            <div class="ket">
                            : Rp.<?php echo number_format($destinasi_item['harga']); ?>
                                <input type="hidden" name="harga" class="input hargades" value="<?php echo $destinasi_item['harga']; ?>" id="hargades" />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="itemform">
                        	<label>Jumlah order</label>
                            <div class="ket">
                                : <select name="jumlah" id="pax" class="input pax">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                </select>
                           	</div>
                            <div class="clearfix"></div>                            
                        </div>
                        <div class="itemform">
                        	<label>Total Bayar</label>
                            <div class="ket">
                                : <input name="total" disabled="disabled" id="total" class="input total" value="<?php echo number_format($destinasi_item['harga']); ?>"  />
                                <input type=hidden name="totalis" value="<?php echo $destinasi_item['harga']; ?>" class="total" id="totalbayar" />
                                
                           	</div>
                            <div class="clearfix"></div>                            
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close, Saya ingin baca dahulu!</button>
                    <button type="button" id="ordertrip" class="btn btn-primary">Gabung di tripseru ini</button>
                  </div>
                </div>
              </div>
            </div><!--modal-->
        <div class="clearfix"></div>
        <style type="text/css">
/* Tutorial CSS */
/*Form styles*/
.styled {
}
.styled fieldset { 
padding: 0 25px 20px 25px; 
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
padding-top: 4px; 
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
	background: url(/asset/images/arrow_error.png) no-repeat 0 center; 
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
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	 <script type="text/javascript" src="/asset/js/jquery.slicebox.js"></script>
     <script type="text/javascript" src="/asset/js/bootstrap.js"></script>
     <script src="/asset/js/jquery.validate.min.js"></script>
     <script type="text/javascript">
						$(function(){
							$('#loading').hide();																						
							$('#ordertrip').click(function(e){
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
								//$formId.submit();
								$('#loading').show();
									//alert('clicked');
									var triporder = $('#triporder').val();
									var uidorder = $('#uidorder').val();
									var berangkat = $('#berangkat').val();
									var hargades = $('#hargades').val();
									var pax = $('#pax').val();
									var email = $('#email').val();
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
										email:email, 
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
							// Declare the function variables:
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
  
      