<link href="/asset/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<div id="page-wrapper">
		<div class="row creattrip">
        	<nav>
            	<ol class="cd-breadcrumb triangle">
               		<li class="current"><a href="/partner/create-trip">General Info</a></li>
                    <li class="current"><a href="/partner/create-trip/itinery">Ittinery</a></li>
                    <li class="current"><a href="#0">Harga</a></li>
                    <li><a href="#0">Syarat dan Ketentuan Khusus</a></li>
                    <li><a href="#0">Publish</a></li>
          		</ol>
      		</nav>
            <div class="col-lg-12">
           		<div class="panel panel-default">
                	<div class="panel-body">
                    	<form class="form-horizontal">
                        	<div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Quota Minimum</label>
                            	<div class="col-sm-6">
                              		<div class="input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">Pax</span>
                                    </div>
                            	</div>
                          	</div><!-- end .Quota-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                            	<div class="col-sm-6">
                              		<div class="input-group">
                                    	<span class="input-group-addon">Rp.</span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon">/Pax</span>
                                    </div>
                            	</div>
                          	</div><!-- end .Quota-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Harga Tripseru.com</label>
                            	<div class="col-sm-6">
                              		<div class="input-group">
                                    	<span class="input-group-addon">Rp.</span>
                                        <input type="text" disabled="disabled" value="200.000" class="form-control">
                                        <span class="input-group-addon">/Pax</span>
                                    </div>
                                    Harga + Marketing Fee
                            	</div>
                          	</div><!-- end-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Harga sudah Termasuk</label>
                            	<div class="col-sm-6">
                              		<textarea rows="10" class="form-control"></textarea>
                            	</div>
                          	</div><!-- end-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Harga belum Termasuk</label>
                            	<div class="col-sm-6">
                              		<textarea rows="10" class="form-control"></textarea>
                            	</div>
                          	</div><!-- end-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Informasi Rekening</label>
                            	<div class="col-sm-6">
                              		<select class="form-control">
                                        <option>BCA</option>
                                        <option>MANDIRI</option>
                                        <option>CIMB</option>
                                        <option>BRI</option>
                                        <option>MUAMALAT</option>
                                    </select>
                                    <div class="input-group" style="margin:8px 0px 0px 0px;">
                                    	<span class="input-group-addon">cabang</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group" style="margin:8px 0px 0px 0px;">
                                    	<span class="input-group-addon">Acc.No</span>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="input-group" style="margin:8px 0px 0px 0px;">
                                    	<span class="input-group-addon">Atas Nama</span>
                                        <input type="text" class="form-control">
                                    </div>
                            	</div>
                          	</div><!-- end-->
                            
                          	                          	
                          	<div class="form-group">
                            	<div class="col-sm-offset-2 col-sm-10">
                                	<a href="/partner/create-trip/harga" class="btn btn-info">< Back</a>
                             		<a href="/partner/create-trip/syarat-ketentuan/" class="btn btn-primary">Next ></a>
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

    
