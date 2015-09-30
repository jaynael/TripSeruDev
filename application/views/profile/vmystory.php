<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script>
            tinymce.init({
				selector:'#deskripsi',
				plugins: [
					"autolink lists link image print preview anchor",
					"searchreplace visualblocks",
					"insertdatetime media table paste"
				],
			
			});
    </script>
    <link rel="stylesheet" type="text/css" href="/asset/js/tags/jquery.tagsinput.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="/asset/js/tags/jquery.tagsinput.js"></script>
	<!-- To test using the original jQuery.autocomplete, uncomment the following -->
	<!--
	<script type='text/javascript' src='http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.css" />
	-->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />
	<script type="text/javascript">		
		function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}		
		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}		
		$(function() {
			$('#tags_1').tagsInput({width:'auto'});
			//$('#tags_2').tagsInput({
//				width: 'auto',
//				onChange: function(elem, elem_tags)
//				{
//					var languages = ['php','ruby','javascript'];
//					$('.tag', elem_tags).each(function()
//					{
//						if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
//							$(this).css('background-color', 'yellow');
//					});
//				}
//			});
//			$('#tags_3').tagsInput({
//				width: 'auto',
//
//				//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
//				autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
//			});
			

// Uncomment this line to see the callback functions in action
//			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});		

// Uncomment this line to see an input with no interface for adding new tags.
//			$('input.tags').tagsInput({interactive:false});
		});
	
	</script>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="featured">
 		<div id="sliderpage" class="sl-slider-wrapper">
			<img src="/asset/images/komodo.jpg">
		</div><!-- /slider-wrapper -->            
    </div>    
    <div class="container" id="dashboard">    	
        <section id="lab">          	
                <article>            
                    <div class="lab_item">		
                    <div class="hexagon hexagon2">
                        <div class="hexagon-in1">
                            <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large&height=400&width=400');">               
                            </div>
                         </div>
                     </div>
                     </div>                      
                </article>
                <div class="descname">                
                	<h1><?php
					//var_dump($user_profile);
					 echo $user_profile['name']; ?></h1>
                    <div class="menudash">
                    	<a href="/dashboard/mystory" class="btn btn-primary">My Story</a>
                        <a href="#" class="btn btn-primary">My Trip</a>
                        <a href="#" class="btn btn-primary">My Wish list</a>
                        <a href="#" class="btn btn-primary">Setting</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <div class="dashboard">
            	<div class="leftdash">
                	<div class="community">
						<?php	
                        for ($i=0;$i<count($newuser);$i++){ ?>
                            <div class="list">
                                <div class="hexagon hexagon3">
                                    <div class="hexagon-in1">
                                        <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/<?php echo  $newuser[$i]['fbid'];?>/picture?type=large&height=400&width=400');">
                                        <span class="name"><?php echo  $newuser[$i]['panggilan'];?></span>               
                                        </div>
                                     </div>
                                 </div>
                            </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="centerdash">
                <div><h1 class="title">My Story</h1>  </div>
                    <?php
					//var_dump(count($story));
					$storyjumlah = 	count($story);
					if ($storyjumlah == 0){?>						
                        <div class="stat">
                            
                            <div class="content">
                                <div id="loading" class="btn btn-info btn-lg btn-block">Loading...</div>
                                
                                <div id="result"></div>
                                <div class="btn btn-info" style="margin:0px 0px 10px;">Anda belum memiliki story, ceritakan pengalaman liburan anda disini</div>                                <input type="text" name="judul" id="judul" class="judul" placeholder="Tuliskan Judul" />
                                <input type="hidden" name="authid" id="uid" value="<?php $data['useritem'] = $this->session->userdata('logged_in'); echo $data['useritem']['uid']; ?>"/>
                                <textarea name="stat" id="deskripsi"></textarea>
                                <input type="text" name="tag" class="judul tags" id="tags_1" placeholder="tag" />
                                <button type="submit" name="submit" id="submitstory" class="btn share btn-primary">Share story</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
					<?php }else{
					for ($i=0;$i<count($story);$i++){ ?>
                    
                    <div class="itemstat">
                    	<div class="image">
                        	<div class="hexagon hexagon3">
                                <div class="hexagon-in1">
                                    <div class="hexagon-in2" style="background-image: url('https://graph.facebook.com/<?php echo $story[$i]['fbid'] ?>/picture?type=large&height=400&width=400');">               
                                    </div>
                                 </div>
                             </div>
                        </div>
                        <div class="content">
                        	<div class="arrow-left"></div>
                        	<h2><?php echo $story[$i]['judul'] ?></h2>
                        	<div class="textcont">
                            	<p>By <a href="#"><?php echo $story[$i]['fullname'] ?> posted on <?php echo $story[$i]['tgl'] ?></a></p>
                            	<?php // echo $story[$i]['deskripsi'] ?>
                                <?php 
								$input = str_replace('&lt;','<',$story[$i]['deskripsi']);
								$input = str_replace('&gt;','>',$input);
								$input = str_replace('&amp;','&',$input);
								$input = str_replace('&quot;','"',$input);												
								echo substr($input,0,500);				
								?>
                                 <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>" class="btn">Read More</a>
                            </div>
                            <div class="triptools">
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>"><img src="/asset/images/refresh.png"> 20 traveller reseru this story</a>
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>"><img src="/asset/images/tick.png">I Wish</a>
                                        <a href="/story/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>" id="comment"><img src="/asset/images/comment.jpg"><fb:comments-count href=http://tripseru.com/read/<?php echo $story[$i]['stoid'] ?>/<?php echo $story[$i]['slug'] ?>/></fb:comments-count> comment</a>
                                        
                                    </div>
                        </div>
                        <div class="clearfix"></div>                    
                    </div><!--end .itemstat-->
                    <?php }
					}?>                                       
                </div><!--end .centerdash-->
                <div class="rightdash">
                	<h5>Hi <?php echo $user_profile['first_name']?>, ini penawaran seru buat kamu!</h5>
                    
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
                    <div class="clearfix"></div>
                    <div class="all">
                    <a href="destinasi" class="btn btn-lg btn-primary btn-block " role="button"> Temukan banyak trip seru lainya</a>
                    </div>                                       
                </div> 
                <div class="clearfix"></div>           
            </div><!--end .dashboard-->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>-->
                    <h4 class="modal-title" id="myModalLabel">Verifikasi akun anda dengan mengisi email anda segera</h4>
                  </div>
                  <div class="modal-body">
                  <div id="loadingver" class="btn btn-info btn-lg btn-block">Loading...</div>
                  <div id="resultver"></div>
                  	<div class="order" id="orderform">
                    	<div class="itemform">
                        	<label>Masukan email anda</label>
                            <div class="ket">
                            	: <input type="text" name="email" class="input" id="email" value="" />
                                <?php 
									$data['useritem'] = $this->session->userdata('logged_in');
								?>
                                <input type="hidden" name="uid" class="input" id="email" value="<?php echo $data['useritem']['uid']; ?>" />
                            </div>  
                            <div class="clearfix"></div>                          
                        </div>                        
                    </div>
                  </div>
                  <div class="modal-footer">                    
                    <button type="button" id="verifikasi" class="btn btn-primary">verifikasi akun saya segera</button>
                  </div>
                </div>
              </div>
            </div><!--modal-->
            
             <script type="text/javascript" src="/asset/js/bootstrap.js"></script>
             <script type="text/javascript">
                $(function(){
					$('#loading').hide();																													
							$('#submitstory').click(function(e){
									$('#loading').show();
									//alert('clicked');
									var judul = $('#judul').val();
									var uid = $('#uid').val();
									var tag = $('#tags_1').val();
									//var deskripsi = $('#deskripsi').val();
									var deskripsi = tinyMCE.activeEditor.getContent({format : 'raw'});
									$.post('/story/insert',{
										action: "insert", 
										judul:judul, 
										tag:tag,
										deskripsi:deskripsi, 
										uid:uid,
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
						
					$('#loadingver').hide();
							<?php
							$verified = $user['verified'];
							//var_dump($verified);
							if($verified == '0'){?>
							$('#myModal').modal('show');
						<?php }?>
						$('#verifikasi').click(function(e){
								$('#loadingver').show();
								//alert('clicked');
								var uid = $('#uid').val();
								var email = $('#email').val();							
								$.post('/dashboard/verifikasi',{
									action: "update", 
									uid:uid, 
									email:email,
								},function(res){
								$('#resultver').html(res);
								});
								//$('#loading').hide();
								//});
								//show records							        
						});			
                });
             </script>