
        <!-- <?php
        // echo form_open(base_url() . 'admin/add_logo/edit/'. $param2, array('class' => 'form-horizontal form-goups-bordered validate'));?>

<div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('Add_exhibition_logo');?>&nbsp;</label>
                    <div class="col-sm-12">
             	            <input type="file" name="exhibition_logo" class="form-control" required>
					</div>

					</div>


		        </div>
					</div>

                    <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm "><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('update');?></button>
			</div>
            <?php
            // echo form_close();?> -->

            <!-- <?php $select_admin_informtion_from_admin_table = $this->db->get_where('exhibition_logo', array('exhibition_id' => $param2))->result_array();
        // foreach ($select_admin_informtion_from_admin_table as $key => $selected_admin):?>
<div class="col-sm-12">
	<div class="panel panel-info">
    <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Change Theme:');?>  <?php echo $selected_admin['name'];?></div>
        <div class="panel-body table-responsive">
        <?php
        // echo form_open(base_url() . 'admin/add_logo/edit/'. $param2, array('class' => 'form-horizontal form-goups-bordered validate'));?>

        <div class="form-group">
            <label class="col-md-12" for="example-text"><?php echo get_phrase('Add_exhibition_logo');?>&nbsp;</label>
            <div class="col-sm-12">
                    <input type="file" name="exhibition_logo" class="form-control" required>
            </div>
        </div>

            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('update');?></button>
			</div>
            <?php
            // echo form_close();?>
        </div>
	</div>
</div>
        <?php
    // endforeach;?> -->

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">&nbsp;
                EDIT LOGO
            </div>

            <div class="panel-body">

			<?php foreach($toSelectFromLogoWithId as $value) : ?>
			<?php echo form_open(base_url() . 'admin/add_logo/edit/'.$value['exhibition_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					<div class="row">
                    <div class="col-sm-6">




                    <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('select_logo');?>&nbsp;</label>
                    <div class="col-sm-12">
             	            <input type="file" name="exhibition_logo" class="form-control" required>


					</div>
					</div>







			</div>


        </div>`

		<input type="submit" class="btn btn-success btn-rounded btn-block btn-sm" value="<?php echo get_phrase('save');?>">

        <?php echo form_close();?>
        <?php endforeach;?>


            </div>
        </div>
    </div>
</div>