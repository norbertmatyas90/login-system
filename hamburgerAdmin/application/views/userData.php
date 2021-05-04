<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
            <?php
          if(isset($users)) {
            foreach($users as $key => $user){

           ?>
				<div class="profile-usertitle-name"><?php print($user['felhasznalonev']); ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			<?php                      
                }
             
             }

            ?>
            
            
            </div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>