
<div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <!-- <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_exhibitors');?></div> -->
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body table-responsive">
                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="80"><div><?php echo get_phrase('photo');?></div></th>
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <!-- <th><div><?php echo get_phrase('role');?></div></th> -->
                            <th><div><?php echo get_phrase('email');?></div></th>
                            <th><div><?php echo get_phrase('sex');?></div></th>
                            <th><div><?php echo get_phrase('address');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
        <?php foreach($select_exhibitor as $key => $exhibitor){ ?>
                        <tr>
                            <td><img src="<?php echo $this->crud_model->get_image_url('exhibitor', $exhibitor['exhibitor_id']);?>" class="img-circle" width="30px"></td>
                            <td><?php echo $exhibitor['name'];?></td>
                            <!-- <td> -->

                           <?php
                        //    if($exhibitor['role']== 1) echo 'exhibitor';?>
                           <?php
                        //    if($exhibitor['role']== 2) echo 'exhibitor 2';?>

                            <!-- </td> -->
                            <td><?php echo $exhibitor['email'];?></td>
                            <td><?php echo $exhibitor['sex'];?></td>
                            <td><?php echo $exhibitor['address'];?></td>

                            <td>

                            <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_exhibitor/<?php echo $exhibitor['exhibitor_id'];?>')" class="btn btn-success btn-circle btn-xs"><i class="fa fa-edit"></i></a>

<a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/exhibitor/delete/<?php echo $exhibitor['exhibitor_id'];?>');"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>

<a href="<?php echo base_url().'uploads/exhibitor_image/'.  $exhibitor['file_name'];?>"><button type="button" class="btn btn-warning btn-circle btn-xs"><i class="fa fa-download"></i></button></a>

                            </td>
                        </tr>

        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
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
