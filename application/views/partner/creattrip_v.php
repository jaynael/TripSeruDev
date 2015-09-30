<link href="/asset/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<div id="page-wrapper">
		<div class="row creattrip">
        	<nav>
            	<ol class="cd-breadcrumb triangle">
               		<li class="current"><a href="/partner/create-trip">General Info</a></li>
                    <li><a href="#0">Ittinery</a></li>
                    <li><a href="#0">Harga</a></li>
                    <li><a href="#0">Syarat dan Ketentuan Khusus</a></li>
                    <li><a href="#0">Publish</a></li>
          		</ol>
      		</nav>
            <div class="col-lg-12">
           		<div class="panel panel-default">
                	<div class="panel-body">
                    	<form class="form-horizontal">
                        	<div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                            	<div class="col-sm-6">
                              		<input type="email" class="form-control" id="judul" placeholder="Ex. Seru-seruan di Raja Ampat">
                              		<span>20 Karakter tersisa</span>
                            	</div>
                          	</div><!-- end .judul-->
                          	<div class="form-group">
                            	<label for="inputTujuan" class="col-sm-2 control-label">Tujuan</label>
                            	<div class="col-sm-6">
                              		<input type="text" class="form-control" id="tujuan" placeholder="Ex. Raja Ampat">
                            	</div>
                          	</div><!-- end .Tujuan-->
                            <div class="form-group">
                            	<label for="inputTujuan" class="col-sm-2 control-label">Tentang Destinasi</label>
                            	<div class="col-sm-6">
                                	<textarea id="deskripsi" rows="6" class="form-control"></textarea>
                                    <span>Jelaskan secara singkat tentang destinasi ini</span>
                            	</div>
                          	</div><!-- end .Tujuan-->
                          	<div class="form-group">
                            	<label for="inputTujuan" class="col-sm-2 control-label">Gambar</label>
                            	<div class="col-sm-6 upload">
                              		<input type="file" class="imag" id="image1">
                              		<input type="file" class="imag" id="image2">
                              		<input type="file" class="imag" id="image3">
                              		<span>Uk. harus 1200x628 px</span>
                            	</div>
                            </div><!-- end .Gambar-->
                            <div class="form-group">
                            	<label for="inputTujuan" class="col-sm-2 control-label">Tanggal Keberangkatan</label>
                            	<div class="col-sm-6 date">
                              		<div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" id="tglkeberangkatan" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                            	</div>
                            </div><!-- end .Tgl keberangkatan-->
                          	<div class="form-group">
                            	<label for="inpuMepo" class="col-sm-2 control-label">Meeting Point</label>
                            	<div class="col-sm-6">
                              		<input type="text" class="form-control" id="mepo" placeholder="Ex.Pelabuhan Merak">
                            	</div>
                          	</div><!-- end .Mepo-->
                            <div class="form-group">
                            	<label for="inputTujuan" class="col-sm-2 control-label">Tanggal Selesai</label>
                            	<div class="col-sm-6 date">
                              		<div class='input-group date' id='datetimepicker2'>
                                        <input type='text' class="form-control" id="tglselesai" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                            	</div>
                            </div><!-- end .Tgl keberangkatan-->
                            <div class="form-group">
                            	<label for="inputTujuan" class="col-sm-2 control-label">Jenis Kegiatan</label>
                            	<div class="col-sm-6">
                                	<div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="backpacing">Backpacking
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Beach Exploring">Beach Exploring
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Cave Exploring">Cave Exploring
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="City Walk">City Walk
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Culinary">Culinary
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Cultural Trip">Cultural Trip
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Diving">Diving
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Family Vacation">Family Vacation
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Hiking">Hiking
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Historical Places">Historical Places
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Island Hopping">Island Hopping
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Mountain Climbing">Mountain Climbing
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Photography">Photography
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Rafting">Rafting
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="kegiatan" value="Snorkeling">Snorkeling
                                        </label>
                                    </div>
                            	</div>
                          	</div><!-- end .Tujuan-->
                          	
                          	<div class="form-group">
                            	<div class="col-sm-offset-2 col-sm-10">
                             		<a href="/partner/create-trip/itinery" class="btn btn-primary">Next Step </a>
                            	</div>
                          	</div>
                        </form>
                    </div><!--panel body-->
                </div><!--panel-default-->
            </div><!--col-lg-12-->    
		</div><!--end .row hottrip-->
	</div><!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="/asset/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
	$(function () {
		$('#datetimepicker1').datetimepicker({
			locale: 'id'
		});
		$('#datetimepicker2').datetimepicker({
			locale: 'id'
		});
	});
</script>    
    

</body>

</html>

    
