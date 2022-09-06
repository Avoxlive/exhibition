<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo get_phrase('New exhibition');?>
                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i
                            class="fa fa-plus"></i>&nbsp;&nbsp;Add <?php echo get_phrase('New exhibition');?> here<i
                            class="btn btn-primary btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
            </div>
            <div class="panel-wrapper collapse out" aria-expanded="true">
            <div class="panel-body">

            <?php echo form_open(base_url() . 'superadmin/exhibition_setting/insert/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
			<div class="form-group">
                <label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition ID');?></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="exhibition_id" value="<?php echo $this->db->get('exhibition', array('type' => 'exhibition_id'))->row()->description;?>">
                </div>
            </div>
			<div class="form-group">
                <label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition Name');?></label>
                <div class="col-sm-12">
                <input type="text" class="form-control" name="exhibition_name" value="<?php echo $this->db->get('exhibition')->row()->description;?>">
                </div>
            </div>
		    <div class="form-group">
                <label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition Admin Email Address');?></label>
                <div class="col-sm-12">
                <input type="text" class="form-control" name="email" value="<?php echo $this->db->get('exhibition')->row()->description;?>">
                </div>
			</div>
            <div class="form-group">
                <label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition Admin Password');?></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="password" value="<?php echo $this->db->get('exhibition')->row()->description;?>">
                </div>
            </div>
		    <div class="form-group">
                <label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition Location');?></label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="location" value="<?php echo $this->db->get('exhibition')->row()->description;?>">
                </div>
            </div>
            <div class="form-group">
            <label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition Phone');?></label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="phone" value="<?php echo $this->db->get('exhibition')->row()->description;?>">
            </div>
        </div>
                <div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('exhibition Email');?></label>
					<div class="col-sm-12">
						<input type="text" class="form-control" name="exhibition_email" value="<?php echo $this->db->get('exhibition')->row()->description;?>">
					</div>
				</div>
	            <div class="form-group">
                   <label class="col-md-12" for="example-text"><?php echo get_phrase('language'); ?></label>
                    <div class="col-sm-12">
                        <select name="language" class="form-control select2">
                            <?php
                            $fields = $this->db->list_fields('language');
                            foreach ($fields as $key => $field) {
                                if ($field == 'phrase_id' || $field == 'phrase')
                                    continue;

                                $current_default_language = $this->db->get('exhibition', array('type' => 'language'))->row()->description;
                                ?>
                                <option value="<?php echo $field; ?>"
                                        <?php if ($current_default_language == $field) echo 'selected'; ?>> <?php echo $field; ?> </option>
                                        <?php
                                    }
                                    ?>
                        </select>
                    </div>
                </div>



	        <div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('Text Alignment');?></label>
					<div class="col-sm-12">
						<select name="text_align" class="form-control">
							<?php $align =  $this->db->get('exhibition', array('type' => 'text_align'))->row()->description;?>
								<option value="left-to-right" <?php if ($align == 'left-to-right') echo 'selected';?>> Left to right</option>
								<option value="right-to-left" <?php if ($align == 'right-to-left') echo 'selected';?>> Right to left</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-12" for="example-text"><?php echo get_phrase('Running Session');?></label>
					<div class="col-sm-12">


					<select name="session" class="form-control select2" >
                          <?php $running_session = $this->db->get('exhibition', array('type' => 'session'))->row()->description; ?>
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
                        <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i
                        class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
                    </div>

                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>


<br>

 <div class="row">
     <div class="col-sm-6">
         <div class="panel panel-info">

             <div class="panel-body table-responsive">
             <?php echo get_phrase('Recently Added Exhibitions');?>
                 <hr class="sep-2">
                 <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                     <thead>
                         <tr>

                             <th>code</th>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
                         </tr>
                     </thead>
                     <tbody>

                         <tr>
                             <?php $get_exhibitor_from_model = $this->crud_model->list_all_exhibition_and_order_with_exhibition_id();
                                    foreach ($get_exhibitor_from_model as $key => $exhibitor):?>
                             <!-- <td><img src="<?php echo $exhibitor['face_file'];?>" class="img-circle" width="40px"
                                     height="40px"></td> -->
                             <td><?php echo $exhibitor['exhibition_id'];?></td>
                             <td><?php echo $exhibitor['exhibition_name'];?></td>
                             <td><?php echo $exhibitor['email'];?></td>
                             <td><?php echo $exhibitor['phone'];?></td>

                         </tr>
                         <?php endforeach;?>

                     </tbody>
                 </table>
             </div>
         </div>
     </div>


     <?php

$selecting_id_from_admin_table = array('admin_id' => $this->session->userdata('login_user_id'),
'dashboard' => '1',
'manage_academics' => '1', 'manage_employee' => '1',
'manage_student' => '1', 'manage_attendance' => '1',
'download_page' => '1', 'manage_parent' => '1',
'manage_alumni' => '1');
$query_admin_role_table = $this->db->get_where('admin_role', $selecting_id_from_admin_table);

if($query_admin_role_table->num_rows() < 1)

    $this->db->insert('admin_role', $selecting_id_from_admin_table);
?>

<?php
$exhibition_id = $this->session->userdata('exhibition_id');

?>

    <div class="col-sm-6">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_admin'); ?></div>

                <?php echo form_open(base_url() . 'admin/newAdministrator/create', array('class' => 'form-horizontal form-goups-bordered validate'));?>
					<div class="panel-body table-responsive">

					    <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Exhibition_Id');?></label>
                                <div class="col-sm-12">
				                    <input name="exhibition_id" type="text" class="form-control"/ required>
                                </div>
                        </div>
                        <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Name');?></label>
                                <div class="col-sm-12">
				                    <input name="name" type="text" class="form-control"/ required>
                                </div>
                        </div>

                        <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Email');?></label>
                                <div class="col-sm-12">
				                    <input name="email" type="text" class="form-control"/ required>
                                </div>
                        </div>

                        <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Phone');?></label>
                                <div class="col-sm-12">
				                    <input name="phone" type="text" class="form-control"/ required>
                                </div>
                        </div>

                    <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Select Role');?></label>
                        <div class="col-sm-12">
                            <select name="level" class="form-control">
                                <option value="1"><?php echo get_phrase('Super Admin');?>
                                <option value="2"><?php echo get_phrase('Normal Admin');?>
                             </select>
                        </div>
                    </div>

                        <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Password');?></label>
                                <div class="col-sm-12">
				                    <input name="password" type="password" class="form-control"/ required>
                                </div>
                        </div>

                        <div class="form-group">
                 	        <label class="col-md-12" for="example-text"><?php echo get_phrase('Select Image');?></label>
                                <div class="col-sm-12">
                                <input type='file' class="form-control" name="admin_image" onChange="readURL(this);">
                                </div>
                        </div>

                           <div class="form-group">
                                  <button type="submit" class="btn save-button"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_admin');?></button>
							</div>
                <?php echo form_close();?>
                </div>
			</div>
		</div>

     <!-- <div class="col-sm-6">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List'); ?></div>
                <div class="panel-body table-responsive">
 					<table id="example23" class="display nowrap" cellspacing="0" width="100%">
				        <thead>
                		<tr>
                    		<th><div>#</div></th>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<th><div><?php echo get_phrase('Email');?></div></th>
                    		<th><div><?php echo get_phrase('Phone');?></div></th>
                            <th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>

                <?php $counter = 1;  $get_all_admin_from_model = $this->superadmin_model->select_all_the_administrator_from_exhibition_table();
                        foreach ($get_all_admin_from_model as $key => $all_selected_administrator):?>
                        <tr>
                            <td><?php echo $counter++;?></td>
                            <td><?php echo $all_selected_administrator['name'];?></td>
							<td><?php echo $all_selected_administrator['email'];?></td>
							<td><?php echo $all_selected_administrator['phone'];?></td>
							<td>

                            <?php if($all_selected_administrator['level'] == '2'):?>
                            <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/assign_role_for_admin/<?php echo $all_selected_administrator['exhibition_id'];?>')" class="btn btn-info btn-rounded btn-xs">Assign Role <i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url();?>admin/newAdministrator/delete/<?php echo $all_selected_administrator['exhibition_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                            <?php endif;?>
                            </td>
                        </tr>
                <?php endforeach;?>

                    </tbody>
                </table>
			</div>
		</div>
	</div> -->
 </div>



<!--
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_exhibitions');?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="80">
                                    <div><?php echo get_phrase('photo');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('name');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('email');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('sex');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('address');?></div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('options');?></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach($select_librarian as $key => $librarian):	?>

                            <tr>
                                <td><img src="<?php echo  $this->crud_model->get_image_url('exhibitor', $librarian['exhibitor_id']) ;?>"
                                        class="img-circle" width="30" height="30"></td>
                                <td><?php echo $librarian['name'];?></td>
                                <td><?php echo $librarian['email'];?></td>
                                <td><?php echo $librarian['sex'];?></td>
                                <td><?php echo $librarian['address'];?></td>
                                <td>

                                    <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_librarian/<?php echo $librarian['librarian_id'];?>')"
                                        class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                    <a onclick="confirm_modal('<?php echo base_url();?>admin/librarian/delete/<?php echo $librarian['librarian_id'];?>')"
                                        class="btn btn-danger btn-circle btn-xs" style="color:white"><i
                                            class="fa fa-times"></i></a>
                                    <a
                                        href="<?php echo base_url() . 'uploads/librarian_image/' . $librarian['file_name'];?>"><button
                                            class="btn btn-success btn-circle btn-xs"><i
                                                class="fa fa-download"></i></button>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>




                </div>


            </div>
        </div>
    </div>
</div> -->
</div>