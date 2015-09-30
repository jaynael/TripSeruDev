<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="featured single">
 		<div id="sliderpage" class="sl-slider-wrapper">
			<img src="/asset/images/bromos.jpg">
		</div><!-- /slider-wrapper -->            
    </div>
    <div class="container" id="index"> 
    
    	 <div class="plantrip trip">
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
               	
        <!--<div class="plantrip">
        	<?php // for ($i=0;$i<count($destinasi);$i++){ ?>      	
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
                            </div><!--end .desc-middle                   
                        </div><!-- .desc
                    </div>
            <?php // } ?>-->
            
            <div class="clearfix"></div>
        </div>
      	<div class="clearfix"></div>
