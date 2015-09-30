      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard Report Tripseru.com</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">                
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $destinasi_jumlah; ?></div>
                                    <div>Destinasi</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>                
            </div>
            <div class="row">
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Destinasi di tripseru.com
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">                          			</div>
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    	<thead>
                                        	<tr role="row">
                                        		<th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Destinasi: activate to sort column ascending" >Destinasi ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >Destinasi</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" >Lama</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Berangkat</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Harga</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Quota</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Terbeli</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Tersedia</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Action</th>
                                    </thead>
                                    <tbody>
                                    <?php for ($i=0;$i<count($list_destinasi);$i++){ ?>  
                                    <tr class="gradeA odd">
                                            <td class="sorting_1"><?php echo  $list_destinasi[$i]['tripid'];?></td>
                                            <td class=""><a href="#"><?php echo  $list_destinasi[$i]['destinasi'];?></a></td>
                                            <td class="center"><?php echo  $list_destinasi[$i]['lama'];?></td>
                                            <td class="center "><?php echo  $list_destinasi[$i]['tgl'];?> <?php echo  $list_destinasi[$i]['bulan'];?> <?php echo  $list_destinasi[$i]['tahun'];?></td>
                                            <td class="center ">Rp.<?php echo number_format($list_destinasi[$i]['harga']);?></td>
                                            <td class="center "><?php echo  $list_destinasi[$i]['quota'];?></td>
                                            <td class="center "><?php 
												$quota =  $list_destinasi[$i]['quota'];
												$tersisa =  $list_destinasi[$i]['tersisa'];
												echo $quota - $tersisa;
											?></td>
                                            <td class="center "><?php echo  $list_destinasi[$i]['tersisa'];?></td>
                                            <td class="center ">
                                            <a href="/atur/editdestinasi/<?php echo  $list_destinasi[$i]['tripid'];?>" class="btn btn-primary">Edit</a> 
                                            <a target="_new" href="/destinasi/view/<?php echo  $list_destinasi[$i]['tripid'];?>/<?php echo  $list_destinasi[$i]['slug'];?>" class="btn btn-info">View</a>
                                            <a href="#" class="btn btn-danger">Tutup</a></td>
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

    
