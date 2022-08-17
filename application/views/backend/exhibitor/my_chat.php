<?php
$visitor_id = $this->session->userdata('visitor_id');
$exhibitor_id = $this->session->userdata('exhibitor_id');
?>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <!-- <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list');?>
            </div> -->
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>chat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php

                     $no =1; $get_status= $this->chat_model->chat_status_from_exhibitor($exhibitor_id);
                     foreach($get_status as $key => $visitor):
                     ?>

<td><?php echo $no++ ; ?></td>
<td><?php echo $visitor['name'];?></td>
<td>
    <?php
    // echo $visitor['status'];

if($visitor['status'] == 'pending'){?>

                                <a href="<?php echo base_url();?>exhibitor/edit_chat_request/<?php echo $visitor['chat_request_id'];?>"
                                class="message-icon" ><i class="fa fa-commenting" aria-hidden="true"></i></a>

 <?php }

 elseif($visitor['status'] == 'accepted')
echo "chat accepted";
else echo"chat request not sent";
 ?>

</td>

<td>
                                    <div class="chat-acceptance">
                                <a href="<?php echo base_url();?>exhibitor/chat/<?php echo $visitor['visitor_id'];?>"
                                 ><i class="fa fa-comments-o">
                                    </i></a>
                                    </div></td>

                            </tr>
                            <?php endforeach?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




