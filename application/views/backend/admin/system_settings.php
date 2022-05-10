<div class="row">

	<div class="col-sm-6">
		<div class="panel panel-info">

			<div class="panel-heading"><i class="fa fa-gear"></i>  <?php echo get_phrase('System Settings');?></div>
			<div class="panel-body table-responsive">

			<h1>
				<?php foreach ($edit_profile as $key => $row): ?>
					<?php
						echo $this->db->get_where('exhibition', array('exhibition_id' => $row['exhibition_id']))->row()->exhibition_name.'<br>';
						echo $row['exhibition_id'];
					?>
					<?php endforeach ?>
				</h1>

				<?php echo form_open(base_url(). 'systemsetting/system_settings/do_update', array('class' => 'form-horizontal form-groups-bordered', 'enctype'=> 'multipart/form-data'));?>

				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('System ID');?></label>
					<div class="col-sm-12">
					<?php
						//echo $this->db->get_where('exhibition', array('exhibition_id' => $this->session->userdata('exhibition_id')))->row()->exhibition_name;
						//echo $this->db->get_where('department', array('department_id' => '2'))->row()->name;
						//echo $this->db->get_where('exhibition', array('exhibition_id' => $this->session->userdata('exhibition_id')))->row()->exhibition_name;
						// $this->session->userdata('exhibition_id');
					?>
					<input type="text" class="form-control" name="exhibition_id" readonly value="<?php  echo ($this->db->get_where('settings', array('type' => 'exhibition_id'))->row()->description)?$this->db->get_where('settings', array('type' => 'exhibition_id'))->row()->description:$this->session->userdata('exhibition_id');?>">
					 <!--<input type="text" class="form-control" name="system_name" value="<?php  //echo ($this->db->get_where('settings', array('type' => 'exhibition_id'))->row()->description)?$this->db->get_where('settings', array('type' => 'exhibition_id'))->row()->description:$this->session->userdata('exhibition_id');?>"> -->

					 <!-- <input type="text" class="form-control" name="system_name" value=""> -->

				</div>
				</div>


				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('System Name');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="system_title" value=" <?php echo $this->db->get_where('exhibition', array('exhibition_id' => $this->session->userdata('exhibition_id')))->row()->exhibition_name;?>">
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('System Address');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="address" value="<?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description;?>">
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('System Phone');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="phone" value="<?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description;?>">
					</div>
				</div>

				<!-- <div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('Paypal Email');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="paypal_email" value="<?php echo $this->db->get_where('settings', array('type' => 'paypal_email'))->row()->description;?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('Currency');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="currency" value="<?php echo $this->db->get_where('settings', array('type' => 'currency'))->row()->description;?>">
					</div>
				</div> -->

				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('System Email');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="system_email" value="<?php echo $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;?>">
					</div>
				</div>

				<!-- <div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('Text Alignment');?></label>
					<div class="col-sm-12">

						<select name="text_align" class="form-control">
							<?php $align =  $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;?>
								<option value="left-to-right" <?php if ($align == 'left-to-right') echo 'selected';?>> Left to right</option>
								<option value="right-to-left" <?php if ($align == 'right-to-left') echo 'selected';?>> Right to left</option>
						</select>
					</div>
				</div> -->

				<!-- <div class="form-group">
                   <label class="col-md-12" for="example-text"><?php echo get_phrase('language'); ?></label>
                    <div class="col-sm-12">
                        <select name="language" class="form-control select2">
                            <?php
                            $fields = $this->db->list_fields('language');
                            foreach ($fields as $key => $field) {
                                if ($field == 'phrase_id' || $field == 'phrase')
                                    continue;

                                $current_default_language = $this->db->get_where('settings', array('type' => 'language'))->row()->description;
                                ?>
                                <option value="<?php echo $field; ?>"
                                        <?php if ($current_default_language == $field) echo 'selected'; ?>> <?php echo $field; ?> </option>
                                        <?php
                                    }
                                    ?>
                        </select>
                    </div>
                </div> -->



				<!-- <div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('Running Session');?></label>
					<div class="col-sm-12">


					<select name="running_session" class="form-control select2" >
                          <?php $running_session = $this->db->get_where('settings', array('type' => 'session'))->row()->description; ?>
                          <option value=""><?php echo get_phrase('select_running_session');?></option>
                          <?php for($i = 0; $i < 10; $i++):?>
                              <option value="<?php echo (2019+$i);?>-<?php echo (2019+$i+1);?>"
                                <?php if($running_session == (2019+$i).'-'.(2019+$i+1)) echo 'selected';?>>
                                  <?php echo (2019+$i);?>-<?php echo (2019+$i+1);?>
                              </option>
                          <?php endfor;?>
                          </select>


					</div>
				</div>



				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('System Footer');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="footer" value="<?php echo $this->db->get_where('settings', array('type' => 'footer'))->row()->description;?>">
					</div>
				</div> -->


				<div class="form-group">
					<button type="submit" class="btn btn-success btn-rounded btn-block btn-sm"><i class="fa fa-save"></i>  <?php echo get_phrase('save');?></button>
				</div>



				<?php echo form_close();?>







			</div>

		</div>

	</div>


<div class="col-sm-6">
<div class="panel panel-info">
<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('System Logo'); ?></div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body table-responsive">

<?php echo form_open(base_url() . 'systemsetting/system_settings/upload_logo', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));
        ?>
					<div class="form-group">
					 <label class="col-sm-12"><?php echo get_phrase('browse_image');?>*</label>
					 <div class="col-sm-12">
  		  			 <input type='file' class="form-control" name="userfile" onChange="readURL(this);" required>
       				 <img id="blah" src="<?php echo base_url(); ?>uploads/logo.png" alt="" height="120" width="120"/>
					</div>
					</div>

				<div class="form-group">
                     <button class="btn btn-block btn-info btn-rounded btn-sm"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('Update Logo');?></button>

                </div>

				<?php echo form_close(); ?>



				THEME SETTINGS
				<hr>

				<?php echo form_open(base_url() . 'systemsetting/system_settings/themeSettings', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));
        ?>

				<div class="radio radio-custom">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'default') echo 'checked';?> name="skin_colour" id="radio2" value="default">
                  <label for="radio2"> Dark Blue </label>
				</div>

				<div class="radio radio-success">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'green') echo 'checked';?> name="skin_colour" id="radio3" value="green">
                  <label for="radio3"> Green </label>
				</div>

				<div class="radio radio-gray">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'pink_dark') echo 'checked';?> name="skin_colour" id="radio4" value="pink_dark">
                  <label for="radio4"> Dark pink </label>
				</div>

				<!-- <div class="radio radio-black">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'black') echo 'checked';?> name="skin_colour" id="radio5" value="black">
                  <label for="radio5"> Black </label>
				</div> -->

				<!-- <div class="radio radio-purple">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'purple') echo 'checked';?> name="skin_colour" id="radio6" value="purple">
                  <label for="radio6"> Purple </label>
				</div> -->

				<!-- <div class="radio radio-info">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'blue') echo 'checked';?> name="skin_colour" id="radio7" value="blue">
                  <label for="radio7"> Blue </label>
				</div> -->




		<br>

                <div class="form-group">
                          <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('change_theme');?></button>
                    </div>
                    <?php echo form_close();?>


					THEME SECONDARY COLOR SETTINGS
				<hr>

				<?php echo form_open(base_url() . 'systemsetting/system_settings/themesecodarySettings', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));
        ?>

				<div class="radio radio-custom">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'secondary_color'))->row()->description == 'cream') echo 'checked';?> name="secondary_color" id="radio2" value="cream">
                  <label for="radio2"> cream </label>
				</div>

				<div class="radio radio-success">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'secondary_color'))->row()->description == 'green') echo 'checked';?> name="secondary_color" id="radio3" value="green">
                  <label for="radio3"> Green </label>
				</div>

				<div class="radio radio-gray">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'pink') echo 'checked';?> name="secondary_color" id="radio4" value="pink">
                  <label for="radio4"> Pink  </label>
				</div>

				<!-- <div class="radio radio-black">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'black') echo 'checked';?> name="skin_colour" id="radio5" value="black">
                  <label for="radio5"> Black </label>
				</div> -->

				<!-- <div class="radio radio-purple">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'purple') echo 'checked';?> name="skin_colour" id="radio6" value="purple">
                  <label for="radio6"> Purple </label>
				</div> -->

				<!-- <div class="radio radio-info">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'blue') echo 'checked';?> name="skin_colour" id="radio7" value="blue">
                  <label for="radio7"> Blue </label>
				</div> -->




		<br>

                <div class="form-group">
                          <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('change_theme');?></button>
                    </div>
                    <?php echo form_close();?>

</div>
</div>

</div>
</div>

</div>