

            <div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">

                                <div class="panel-body table-responsive">
								  <?php
                                //   echo get_phrase('list_live_online_consultancy');?>
								  <!-- <hr class="sep-2"> -->

                                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
							<th><?=get_phrase('created_by')?></th>
                            <th><?=get_phrase('title')?></th>
							<!-- <th><?=get_phrase('class')?></th>
							<th><?=get_phrase('section')?></th> -->
							<th><?=get_phrase('visitor')?></th>
							<th><?=get_phrase('meeting_date')?></th>
							<th><?=get_phrase('meeting_time')?></th>
							<th><?=get_phrase('description')?></th>
							<th><?=get_phrase('status')?></th>

							<th><?=get_phrase('action')?></th>
                        </tr>
                    </thead>
                    <tbody>

					 <?php $select = $this->live_class_model->selectJitsiStaffInsert();
					 		foreach ($select as $key => $row) : ?>
                        <tr>
							<td>
							<?php

							$user = explode('-', $row['user_id']);
							$user_type = $user[0];
							$user_id = $user[1];
							echo $this->db->get_where($user_type, array($user_type.'_id' => $user_id))->row()->name;
							?>

							</td>

							<td><?=$row['title'];?></td>
							<td><?=$this->crud_model->get_type_name_by_id('visitor', $row['visitor_id']);?></td>
							<td><?=date('d M, Y', $row['meeting-date'])?></td>
                            <td><?=$row['start_time'] .' - '.$row['end_time']?></td>
							<!-- <td><span class="label label-<?php if($row['status'] == 'pending') echo 'warning';elseif($row['status'] == 'live') echo 'success'; else echo 'danger';?>"><?=$row['status']?></span></td> -->

							<td><?=$row['description']?></td>
                            <!-- <td><span class="#"><?=$row['status']?></span>
				                            </td> -->
                                            <td>
												<?php
                                            if(($row['meeting-date']>= strtotime("today")) &&($row['meeting-date']<= strtotime("tomorrow"))){?>
				                                <?php
												date_default_timezone_set("Asia/Calcutta");
												// date_default_timezone_set("Asia/Kolkata");
												// DateTimeZone( "Europe/Bucharest" );
                                                // $datetime = new DateTime( "now", new DateTimeZone( "Europe/Bucharest" ) );
												if(($row['status'] == 'live') && ($row['start_time'] <= date('h:i', time())) && ($row['end_time'] >= date('h:i', time()))) {?>

											   <a href="<?php echo base_url();?>admin/stream_jitsi/<?php echo $row['jitsi_id'];?>"><button
				                                        type="button" class="btn btn-success btn-rounded btn-sm"><i
				                                        class="fa fa-youtube-play"></i>start meeting</button></a>
				                                <?php }
												else if(($row['end_time']<=date('h:i',time())))
												echo "expired";
												else if(($row['start_time']>=date('h:i',time())))
												echo "pendings";

												?>
				                                <?php }
												else if($row['meeting-date']<= strtotime("today"))
												echo "expired";
												else if($row['meeting-date']>= strtotime("today"))
						     					echo "pending";
												?>



                                                <!-- <a href="<?php echo base_url();?>exhibitor/edit_jitsi/<?php echo $row['jitsi_id'];?>"><button
				                                        type="button" class="btn btn-info btn-rounded btn-sm"><i
				                                            class="fa fa-edit"></i> edit</button></a> -->
				                                <!-- <a href="#"
				                                    onclick="confirm_modal('<?php echo base_url();?>exhibitor/jitsi/delete/<?php echo $row['jitsi_id'];?>');"><button
				                                        type="button" class="btn btn-danger btn-rounded btn-sm"><i
				                                            class="fa fa-times"></i> delete</button></a> -->
															<?php
															//  echo date('h:i', time())?>

				                            </td>
							<!-- <td> -->

							<!-- <a href="<?php echo base_url();?>admin/edit_jitsi/<?php echo $row['jitsi_id'];?>"><button type="button" class="btn btn-info btn-rounded btn-sm"><i class="fa fa-edit"></i> edit</button></a> -->

							<?php
												// date_default_timezone_set("Asia/Calcutta");
												// date_default_timezone_set("Asia/Kolkata");
												// if(($row['status'] == 'live') && ($row['start_time'] <= date('h:i', time())) && ($row['end_time'] >= date('h:i', time()))) :?>

											   <!-- <a href="<?php echo base_url();?>exhibitor/stream_jitsi/<?php echo $row['jitsi_id'];?>"><button type="button" class="btn btn-success btn-rounded btn-sm"><i class="fa fa-youtube-play"></i> start meeting</button></a> -->
				                                <?php
                                            // endif;?>

                            <!-- <a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/jitsi/delete/<?php echo $row['jitsi_id'];?>');"><button type="button" class="btn btn-danger btn-rounded btn-sm"><i class="fa fa-times"></i> delete</button></a> -->
                            <!-- </td> -->
                            <td>
                            <?php if(($row['meeting-date']>= strtotime("today"))){?>
											<a href="<?php echo base_url();?>admin/edit_jitsi/<?php echo $row['jitsi_id'];?>"><button
				                                        type="button" class="btn btn-info btn-rounded btn-sm"><i
				                                            class="fa fa-edit"></i> edit</button></a>
															<a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/jitsi/delete/<?php echo $row['jitsi_id'];?>');"><button
				                                    type="button" class="btn btn-danger btn-rounded btn-sm"><i
				                                    class="fa fa-times"></i> delete</button></a>
                                                     <?php }
													 else echo"expired";
													 ?>
                            </td>
                        </tr>
							 <?php endforeach;?>
                    </tbody>
                </table>
				</div>
			</div>
		</div>
	</div>


	<script>
    $('form').submit(function (e) {
        $('#install_progress').show();
        $('#modal_1').show();
        $('.btn').val('saving, please wait...');
        $('form').submit();
        e.preventDefault();
    });

    </script>

<!--
<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }


    $('#check').click(function(){
        if($('#check').is(':checked') == true){
            $("#send_sms").show(500);
            $("#initial").hide(500);
        }else{
            $("#send_sms").hide(500);
            $("#initial").show(500);
        }
    });
    $("#send_sms").hide();
</script> -->


<script type="text/javascript">

	function get_group_sub_groups(group_id) {

    	$.ajax({
            url: '<?php echo base_url();?>admin/get_group_sub_group/' + group_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }


    $('#check').click(function(){
        if($('#check').is(':checked') == true){
            $("#send_sms").show(500);
            $("#initial").hide(500);
        }else{
            $("#send_sms").hide(500);
            $("#initial").show(500);
        }

    });

    $("#send_sms").hide();


</script>

