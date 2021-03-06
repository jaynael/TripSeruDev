<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
										<script>
                                                tinymce.init({
                                                    selector:'#ittinery',
                                                    plugins: [
                                                        "autolink lists link image print preview anchor",
                                                        "searchreplace visualblocks",
                                                        "insertdatetime media table paste"
                                                    ],
                                                
                                                });
                                        </script>
        <div id="page-wrapper">            
                <div class="col-lg-12">
                <div class="row">
            		<h1 class="page-header">Destinasi</h1>
                    <?php if (!isset($thanks)){
					echo "";
					}else{?>
						<div class="alert alert-success"><?php echo $thanks?></div>
					<?php } ?>
					<?php if (!isset($error)){
						echo "";
					}else{?>
						<div class="alert alert-danger"><?php echo $error?></div>
					<?php }			
					?>
					<?php if (!isset($success)){
						echo "";
					}else{?>
						<div class="alert alert-success"><?php echo $success?></div>
					<?php }			
					?>
                </div>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
                <script type="text/javascript">
						$(function(){
							$('#loading').hide();																						
							$('#submitdestinasi').click(function(e){
									$('#loading').show();
									//alert('clicked');
									var namadestinasi = $('#namadestinasi').val();
									var harga = $('#harga').val();
									var lama = $('#lama').val();
									var tgl = $('#tgl').val();
									var bulan = $('#bulan').val();
									var kota = $('#kota').val();
									var pic = $('#pic').val();
									var ittinery = tinyMCE.activeEditor.getContent({format : 'raw'});
									$.post('/destinasi/insert',{
										action: "insert", 
										namadestinasi:namadestinasi, 
										harga:harga,
										lama:lama, 
										tgl:tgl,
										bulan:bulan,
										kota:kota,
										pic:pic,
										ittinery:ittinery
									},function(res){
									$('#result').html(res);});
									
						 	//show records
								$('#show').click(function(){
									$.post('/postin/new',{action: "show"},function(res){
									$('#result').html(res);
								});        
							});
						});
					});
					</script>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambahkan destinasi baru
                        </div>
                        <div class="panel-body">
                            <div class="row fileupload-buttonbar">
                                <div class="col-lg-6">
                                <?php  echo validation_errors(); ?>
   								<?php  echo form_open_multipart('/destinasi/insert'); ?>
                                <!--<form >-->
                                        <div class="form-group">
                                            <label>Nama Destinasi</label>
                                            <input class="form-control" placeholder="Nama Destinasi" value="Dieng" name="namadestinasi" id="namadestinasi">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>
                                        <label>Harga</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="text" class="form-control" name="harga" value="700000" id="harga">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Lama Trip</label>
                                            <input class="form-control" placeholder="Ex. 3D2N" name="lama" id="lama">
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <select class="form-control" name="tgl" id="tgl">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9" >9</option>
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
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <select class="form-control" name="bulan" id="bulan">
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
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun" id="tahun">
                                            	<option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" name="picdestinasi" id="pic">
                                            <!--<input type="file">-->
                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                           <!-- <span class="btn btn-success fileinput-button">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>Add files...</span>
                                                <!--<input type="file" name="files[]" multiple>
                                                <input type="file" name="pic" id="pic">
                                            </span>-->
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kota / Provinsi</label>
                                            <input class="form-control" type="text" name="kota" id="kota">
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Ittinery</label>
                                            <textarea class="form-control" id="ittinery" name="ittinery" rows="3"></textarea>
                                        </div>     
                                        <div id="loading" class="btn btn-info btn-lg btn-block">Loading...</div>
                    					<div id="result"></div>
                                        <button type="submit" class="btn btn-primary btn-block" name="submitted" id="submitdestinasi">Posting Destinasi</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Tambahkan Photo Gallery</h1>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- The template to display files available for upload -->