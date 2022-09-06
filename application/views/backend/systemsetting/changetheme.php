ssas
<?php $select_admin_informtion_from_admin_table = $this->db->get_where('exhibition_settings', array('exhibition_id' => $param2))->result_array();
        foreach ($select_admin_informtion_from_admin_table as $key => $selected_admin):?>
<div class="col-sm-12">
	<div class="panel panel-info">
    <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Change Theme:');?>  <?php echo $selected_admin['name'];?></div>
        <div class="panel-body table-responsive">
        <?php echo form_open(base_url() . 'systemsetting/changetheme/'. $param2, array('class' => 'form-horizontal form-goups-bordered validate'));?>
        <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('primary_color');?></label>
                    <div class="col-sm-12">
						<select name="primary_color" class="form-control select2" style="width:100%" required>
                            <option value=""><?php echo get_phrase('select');?></option>
                            <option value="green"><?php echo get_phrase('green');?></option>
                            <option value="blue"><?php echo get_phrase('blue');?></option>
                        </select>
					</div>
				</div>
					<div class="form-group">
						<label class="col-md-12" for="example-text"><?php echo get_phrase('secondary_color');?></label>
						<div class="col-sm-12">
							<select name="secondary_color" class="form-control select2" style="width:100%" required>
								<option value=""><?php echo get_phrase('select');?></option>
								<option value="light-green"><?php echo get_phrase('light-green');?></option>
								<option value="light-blue"><?php echo get_phrase('light-blue');?></option>
							</select>
						</div>
					</div>

            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm "><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('update');?></button>
			</div>
            <?php echo form_close();?>
        </div>
	</div>
</div>
        <?php endforeach;?>