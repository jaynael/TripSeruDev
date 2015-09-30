<script type="text/javascript">
    $(document).ready(function() {
		$('.tengah').slick({
		  centerMode: true,
		  centerPadding: '60px',
		  slidesToShow: 3,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  responsive: [
			{
			  breakpoint: 768,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			  }
			}
		  ]
		});
				
		//Morris Data
		$(function() {
			Morris.Area({
				element: 'morris-area-chart',
				data: [{
					period: '2010 Q1',
					iphone: 2666,
					ipad: null,
					itouch: 2647
				}, {
					period: '2010 Q2',
					iphone: 2778,
					ipad: 2294,
					itouch: 2441
				}, {
					period: '2010 Q3',
					iphone: 4912,
					ipad: 1969,
					itouch: 2501
				}, {
					period: '2010 Q4',
					iphone: 3767,
					ipad: 3597,
					itouch: 5689
				}, {
					period: '2011 Q1',
					iphone: 6810,
					ipad: 1914,
					itouch: 2293
				}, {
					period: '2011 Q2',
					iphone: 5670,
					ipad: 4293,
					itouch: 1881
				}, {
					period: '2011 Q3',
					iphone: 4820,
					ipad: 3795,
					itouch: 1588
				}, {
					period: '2011 Q4',
					iphone: 15073,
					ipad: 5967,
					itouch: 5175
				}, {
					period: '2012 Q1',
					iphone: 10687,
					ipad: 4460,
					itouch: 2028
				}, {
					period: '2012 Q2',
					iphone: 8432,
					ipad: 5713,
					itouch: 1791
				}],
				xkey: 'period',
				ykeys: ['iphone', 'ipad', 'itouch'],
				labels: ['View', 'Order', 'Commision'],
				pointSize: 2,
				hideHover: 'auto',
				resize: true
			});
		
			Morris.Donut({
				element: 'morris-donut-chart',
				data: [{
					label: "Download Sales",
					value: 12
				}, {
					label: "In-Store Sales",
					value: 30
				}, {
					label: "Mail-Order Sales",
					value: 20
				}],
				resize: true
			});
		
			Morris.Bar({
				element: 'morris-bar-chart',
				data: [{
					y: '2006',
					a: 100,
					b: 90
				}, {
					y: '2007',
					a: 75,
					b: 65
				}, {
					y: '2008',
					a: 50,
					b: 40
				}, {
					y: '2009',
					a: 75,
					b: 65
				}, {
					y: '2010',
					a: 50,
					b: 40
				}, {
					y: '2011',
					a: 75,
					b: 65
				}, {
					y: '2012',
					a: 100,
					b: 90
				}],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Series A', 'Series B'],
				hideHover: 'auto',
				resize: true
			});
		
		});


        $('#dataTables-example').dataTable();
		$( "#datepicker" ).datepicker();
    });
    </script>
<div id="page-wrapper">
        	<!-- The HOT TRIP -->
            <div class="row hottrip">
            	<div class="col-lg-12">
                	<div class="panel panel-default">
                    	<div class="panel-heading">
                        	<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> The HOTTEST TRIP Minggu ini</h3>
                       	</div>
                        <div class="panel-body">
                            <div class="tengah trip">
                                <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
                                  	<div class="itemstrip">
                                        <div class="top">
                                            <div class="date">
                                                <div class="tgl"><p>25</p></div>
                                                <div class="month"><p>September</p></div>
                                                <div class="lama"><p>2015 | 3D2N</p></div>
                                            </div>
                                            
                                            <div class="info">
                                                <h2 class="title">Ora Beach Trip</h2>
                                                <div class="kota"><img src="/asset/images/place.png"> Pulau Seram Ambon Maluku</div>
                                                <div class="harga">
                                                    <span class="rp">Rp.</span>                            
                                                                                    <span class="jum">3.75</span>
                                                        <span class="rb">Jt<br>/Pax</span>
                                                                            </div>
                                            </div>
                                            <div class="imag">
                                                <a href="/destinasi/view/dest00010/ora-beach-trip"><img src="/upload/ecbe7c9dbd5e7a481844ecd833f649e6.jpg"></a>
                                            </div>
                                            <div class="tombol">
                                                <a class="btn btn-primary join" href="/destinasi/view/dest00010/ora-beach-trip">
                                                    <span>JUAL</span><br>
                                                    Sekarang!
                                                </a>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    
                                    <div class="itemstrip">
                                        <div class="top">
                                            <div class="date">
                                                <div class="tgl"><p>25</p></div>
                                                <div class="month"><p>September</p></div>
                                                <div class="lama"><p>2015 | 3D2N</p></div>
                                            </div>
                                            
                                            <div class="info">
                                                <h2 class="title">Ora Beach Trip</h2>
                                                <div class="kota"><img src="/asset/images/place.png"> Pulau Seram Ambon Maluku</div>
                                                <div class="harga">
                                                    <span class="rp">Rp.</span>                            
                                                                                    <span class="jum">3.75</span>
                                                        <span class="rb">Jt<br>/Pax</span>
                                                                            </div>
                                            </div>
                                            <div class="imag">
                                                <a href="/destinasi/view/dest00010/ora-beach-trip"><img src="/upload/ecbe7c9dbd5e7a481844ecd833f649e6.jpg"></a>
                                            </div>
                                            <div class="tombol">
                                                <a class="btn btn-primary join" href="/destinasi/view/dest00010/ora-beach-trip">
                                                    <span>JUAL</span><br>
                                                    Sekarang!
                                                </a>
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                    
                                    <div class="itemstrip">
                                        <div class="top">
                                            <div class="date">
                                                <div class="tgl"><p>25</p></div>
                                                <div class="month"><p>September</p></div>
                                                <div class="lama"><p>2015 | 3D2N</p></div>
                                            </div>
                                            
                                            <div class="info">
                                                <h2 class="title">Ora Beach Trip</h2>
                                                <div class="kota"><img src="/asset/images/place.png"> Pulau Seram Ambon Maluku</div>
                                                <div class="harga">
                                                    <span class="rp">Rp.</span>                            
                                                                                    <span class="jum">3.75</span>
                                                        <span class="rb">Jt<br>/Pax</span>
                                                                            </div>
                                            </div>
                                            <div class="imag">
                                                <a href="/destinasi/view/dest00010/ora-beach-trip"><img src="/upload/ecbe7c9dbd5e7a481844ecd833f649e6.jpg"></a>
                                            </div>
                                            <div class="tombol">
                                                <a class="btn btn-primary join" href="/destinasi/view/dest00010/ora-beach-trip">
                                                    <span>JUAL</span><br>
                                                    Sekarang!
                                                </a>
                                            </div>
                                            <!---->
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="itemstrip">
                                        <div class="top">
                                            <div class="date">
                                                <div class="tgl"><p>25</p></div>
                                                <div class="month"><p>September</p></div>
                                                <div class="lama"><p>2015 | 3D2N</p></div>
                                            </div>
                                            
                                            <div class="info">
                                                <h2 class="title">Ora Beach Trip</h2>
                                                <div class="kota"><img src="/asset/images/place.png"> Pulau Seram Ambon Maluku</div>
                                                <div class="harga">
                                                    <span class="rp">Rp.</span>                            
                                                                                    <span class="jum">3.75</span>
                                                        <span class="rb">Jt<br>/Pax</span>
                                                                            </div>
                                            </div>
                                            <div class="imag">
                                                <a href="/destinasi/view/dest00010/ora-beach-trip"><img src="/upload/ecbe7c9dbd5e7a481844ecd833f649e6.jpg"></a>
                                            </div>
                                            <div class="tombol">
                                                <a class="btn btn-primary join" href="/destinasi/view/dest00010/ora-beach-trip">
                                                    <span>JUAL</span><br>
                                                    Sekarang!
                                                </a>
                                            </div>
                                            <!---->
                                        </div>
                                        
                                    </div>
            						
                                  <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                  	</div>
            	</div>
         	</div>
            <!-- end HOT TRIP -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header tit">Partner Perfomance Report</h1>
                    <div class="periode"><span></span>
                    	<div class="bulan">
                        	<select class="form-control">
                            	<option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        <div class="tahun">
                        	<select class="form-control">
                            	<option value="2015">2015</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading info">
                            <div class="row">
                            	<div class="huge">Rp.1.350.000</div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Revenue Bulan ini</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading info">
                            <div class="row">
                            	<div class="huge">120</div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Penjualan Trip</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading info">
                            <div class="row">
                            	<div class="huge">15</div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Destinasi</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading info">
                            <div class="row">
                            	<div class="huge">13</div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Positive Feedback</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Performa penjualan Anda bulan ini</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Order di tripseru.com
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                	<!--<div class="row">
                                    	<div class="col-sm-6">
                                        	<div class="dataTables_length" id="dataTables-example_length">
                                            	<label>
                                                	<select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                    	<option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                 	</select> records per page</label>
                                             </div>
                                      	</div>
                                        <div class="col-sm-6">
                                        	<div id="dataTables-example_filter" class="dataTables_filter">
                                            	<label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example"></label>
                                            </div>
                                       	</div>-->
                          			</div>
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    	<thead>
                                        	<tr role="row">
                                        		<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending" style="width: 173px;">Judul</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 249px;">Penulis</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 232px;">Tanggal</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 147px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 114px;">CSS grade</th></tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i=0;$i<count($list_story);$i++){ ?>  
                                    <tr class="gradeA odd">
                                            <td class="sorting_1"><a href="#"><?php echo  $list_story[$i]['judul'];?></a></td>
                                            <td class=" "><a href="#"><?php echo  $list_story[$i]['panggilan'];?></a></td>
                                            <td class=" "><?php echo  $list_story[$i]['tgl'];?></td>
                                            <td class="center ">1.7</td>
                                            <td class="center ">A</td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    

</body>

</html>

    
