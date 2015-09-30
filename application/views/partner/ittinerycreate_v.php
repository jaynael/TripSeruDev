<link href="/asset/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<div id="page-wrapper">
		<div class="row creattrip">
        	<nav>
            	<ol class="cd-breadcrumb triangle">
               		<li class="current"><a href="/partner/create-trip">General Info</a></li>
                    <li class="current"><a href="#0">Ittinery</a></li>
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
                            	<label for="inputEmail3" class="col-sm-2 control-label">Hari ke-1</label>
                            	<div class="col-sm-6">
                              		<input type="email" class="form-control" value="Hari 1" id="judul">
                            	</div>
                          	</div><!-- end .judul-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Activity</label>
                            	<div class="col-sm-6">
                                	<textarea name="ittinery" rows="10" class="form-control"></textarea>
                            	</div>
                          	</div><!-- end .activity hari 1-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Hari ke-2</label>
                            	<div class="col-sm-6">
                              		<input type="email" class="form-control" value="Hari 2" id="judul">
                            	</div>
                          	</div><!-- end .judul-->
                            <div class="form-group">
                            	<label for="inputEmail3" class="col-sm-2 control-label">Activity</label>
                            	<div class="col-sm-6">
                                	<textarea name="ittinery" rows="10" class="form-control"></textarea>
                            	</div>
                          	</div><!-- end .activity hari 1-->
                             <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label"></label>
                            	<div class="col-sm-6">
                                	<a href="#" style="float:right;" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Hari</a>
                            	</div>
                          	</div><!-- end .activity hari 1-->
                          	                          	
                          	<div class="form-group">
                            	<div class="col-sm-offset-2 col-sm-10">
                                	<a href="/partner/create-trip/" class="btn btn-info">< Back</a>
                             		<a href="/partner/create-trip/harga" class="btn btn-primary">Next ></a>
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

    
