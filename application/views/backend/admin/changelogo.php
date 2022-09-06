
        <?php echo form_open(base_url() . 'admin/add_logo/changelogo/'. $param2, array('class' => 'form-horizontal form-goups-bordered validate'));?>

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
            <?php echo form_close();?>