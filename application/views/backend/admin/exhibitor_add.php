<div class="information">
  <div class="row">
                    <div class="col-sm-12">
                        <!-- <div class="panel panel-info">
                            <div class="panel-heading"><?php echo get_phrase('new_exhibitor');?>
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;ADD NEW exhibitor HERE<i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body"> -->


								 <?php echo form_open(base_url() . 'admin/exhibitor/insert/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					<div class="row">
                    <div class="col-sm-6">

					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('name');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="name" required>
							<!-- <input type="text" class="form-control" value="<?php echo substr(md5(uniqid(rand(), true)), 0, 7); ?>" name="exhibitor_number" readonly="true"> -->

						</div>
					</div>


					<!-- <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('role');?></label>
                    <div class="col-sm-12">
							<select name="role" class="form-control select2" style="width:100%" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="1"><?php echo get_phrase('eye specialist');?></option>
                              <option value="2"><?php echo get_phrase('dental');?></option>
                          </select>
						</div>
					</div> -->

					<!-- <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('date-of-birth');?></label>
                    <div class="col-sm-12">
		                <input class="form-control m-r-10" name="birthday" type="date" value="2018-08-19" id="example-date-input" required>
					</div>
					</div> -->

					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('gender');?></label>
                    <div class="col-sm-12">
							<select name="sex" class="form-control select2" style="width:100%" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="male"><?php echo get_phrase('male');?></option>
                              <option value="female"><?php echo get_phrase('female');?></option>
                          </select>
						</div>
					</div>

						<!-- <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('religion');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="religion" value="" >
						</div>
					</div> -->

					<!-- <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('blood_group');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="blood_group" value="" >
						</div>
					</div> -->

						<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('address');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="address" value="" required>
						</div>
					</div>
				<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('phone');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="phone" value="" required >
						</div>
					</div>

					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('email');?></label>
                    <div class="col-sm-12">
							<input type="email" class="form-control" name="email" value="">
						</div>
					</div>


					<!-- <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('qualification');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="qualification" value="">
						</div>
					</div> -->

					            <!-- <div class="form-group">
                                    <label class="col-sm-12"><?php echo get_phrase('marital_status');?>*</label>
                                    <div class="col-sm-12">
                                       <select class=" form-control select2" name="marital_status" style="width:100%" required>
                                        <option data-tokens=""><?php echo get_phrase('select_marital_status');?></option>
										<option data-tokens="Married"><?php echo get_phrase('married');?></option>
                                        <option data-tokens="Single"><?php echo get_phrase('single');?></option>
                                        <option data-tokens="Divorced"><?php echo get_phrase('divorced');?></option>
                                        <option data-tokens="Engaged"><?php echo get_phrase('engaged');?></option>
                                    </select>
                                    </div>
                                </div>

				<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('facebook');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="facebook" value="">
						</div>
					</div>

					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('twitter');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="twitter" value="">
						</div>
					</div>

						<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('googleplus');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="googleplus" value="">
						</div>
					</div>

						<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('linkedin');?></label>
                    <div class="col-sm-12">
							<input type="text" class="form-control" name="linkedin" value="">
						</div>
					</div>

					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('documents');?>&nbsp;(exhibitor CV and others)</label>
                    <div class="col-sm-12">
             	<input type="file" name="file_name" class="dropify" required>

			  <p style="color:red">Accept zip, pdf, word, excel, rar and others</p>

					</div>
					</div> -->


					</div>

					 <div class="col-sm-6">



						<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('password');?></label>
                    <div class="col-sm-12">
						<input type="password" class="form-control" name="password" value="" onkeyup="CheckPasswordStrength(this.value)" required>
					<strong id="password_strength"></strong>
						</div>
						</div>

					<div class="form-group">
					 <label class="col-sm-12"><?php echo get_phrase('browse_image');?>*</label>
					 <div class="col-sm-12">
  		  			  <input type='file' name="userfile" class="dropify" onChange="readURL(this);" / required>

					</div>
					</div>


		<!-- <hr>
<div class="alert alert-primary">HUMAN RESOURCES INFORMATION</div>
<hr> -->

<div class="form-group">
    <label class="col-sm-12"><?php echo get_phrase('Exhibitor_Type'); ?></label>

    <div class="col-sm-12">
        <select name="exhibitortype_id" class="form-control select2" required>
            <option value=""><?php echo get_phrase('select_a_exhibitor_type'); ?></option>
            <?php
            $exhibitortype = $this->db->get('exhibitortype')->result_array();
            foreach ($exhibitortype as $row): ?>
                <option value="<?php echo $row['exhibitortype_id'];?>">
                    <?php echo $row['name'];?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<!-- <div class="form-group">
    <label class="col-sm-12"><?php echo get_phrase('designation'); ?></label>
    <div class="col-sm-12">
        <select name="designation_id" class="form-control select2" id="designation_holder">
            <option value=""><?php echo get_phrase('select_a_department_first'); ?></option>
        </select>
    </div>
</div> -->

<!-- <div class="form-group">
    <label class="col-sm-12"><?php echo get_phrase('date_of_joining'); ?></label>
    <div class="col-sm-12">
        <input type="date" class="form-control datepicker" name="date_of_joining" value="<?php echo date('Y-d-m');?>" required>
    </div>
</div>
<div class="form-group">
   <label class="col-sm-12"><?php echo get_phrase('joining_salary'); ?></label>
    <div class="col-sm-12">
        <input type="number" class="form-control" name="joining_salary" value="" required>
    </div>
</div> -->
<div class="form-group">
    <label class="col-sm-12"><?php echo get_phrase('status'); ?></label>
    <div class="col-sm-12">
        <select name="status" class="form-control select2">
            <option value="1"><?php echo get_phrase('active'); ?></option>
            <option value="2"><?php echo get_phrase('inactive'); ?></option>
        </select>
    </div>
</div>
<!-- <div class="form-group">
    <label class="col-sm-12"><?php echo get_phrase('date_of_joining'); ?></label>

    <div class="col-sm-12">
        <input type="date" class="form-control datepicker" name="date_of_leaving" value="" required>
    </div>
</div> -->

<!-- <hr>
<div class="alert alert-primary">BANK ACCOUNT DETAILS</div>
<hr> -->
<!--
<div class="form-group">
     <label class="col-sm-12"><?php echo get_phrase('account_holder_name'); ?></label>

    <div class="col-sm-12">
        <input type="text" class="form-control" name="account_holder_name" value="" required />
    </div>
</div>
<div class="form-group">
     <label class="col-sm-12"><?php echo get_phrase('account_number'); ?></label>

    <div class="col-sm-12">
        <input type="text" class="form-control" name="account_number" value="" required />
    </div>
</div>
<div class="form-group">
     <label class="col-sm-12"><?php echo get_phrase('bank_name'); ?></label>

    <div class="col-sm-12">
        <input type="text" class="form-control" name="bank_name" value="" required>
    </div>
</div>
<div class="form-group">
     <label class="col-sm-12"><?php echo get_phrase('branch'); ?></label>

    <div class="col-sm-12">
        <input type="text" class="form-control" name="branch" value="" >
    </div>
</div> -->

</div>
</div>



<div class="form-group">
<button type="submit" class="btn save-button"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_exhibitor');?></button>
<img id="install_progress" src="<?php echo base_url() ?>assets/images/loader-2.gif" style="margin-left: 20px; display: none"/>
</div>


                <?php echo form_close();?>


                                <!-- </div>
                            </div>
                        </div> -->
                    </div>
				</div>
</div>

<script type="text/javascript">
    function get_designation_val(department_id) {
        if(department_id != '')
            $.ajax({
                url: '<?php echo base_url();?>admin/get_designation/' + department_id,
                success: function(response)
                {
                    console.log(response);
                    jQuery('#designation_holder').html(response);
                }
            });
        else
        jQuery('#designation_holder').html('<option value=""><?php echo get_phrase("select_a_department_first"); ?></option>');
    }
</script>
