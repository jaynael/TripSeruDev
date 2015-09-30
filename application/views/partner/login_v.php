<div id="loginadmin">
	<div class="wrapper">
    	<div class="category">
        	<div class="content-category" style="width:350px; float:none; margin:15px auto 10px; text-align:center;">
            	
                <div class="title">
                	<h2>Login Admin </h2>
                </div>
                <div class="clearfix"></div>
            </div><!-- end.content-category-->
            <div class="item-aksi" style="width: 375px;float: none;margin: 0px auto 100px;padding: 20px;height: auto;">           
                <div id="#result"></div>
                <div class="register">
                	<?php echo validation_errors(); ?>
   					<?php echo form_open('atur/verifylogin'); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Email :</label>
                        <input type="email" name="email" class="input form-control" id="email" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password :</label>
                        <input type="password" name="password" class="input form-control" id="password" placeholder="Password">
                        <input type="hidden" name="submitted" id="submitted" value="true">
                      </div>                     
                      <button type="submit" name="submit" id="submit" class="input btn btn-primary">SUMPAH, saya admin tripseru.com</button>
                      
                   </form>                   
                </div>
            </div><!--end .item-aksi-->            
        </div>        
    </div><!--end .wrapper-->
</div>