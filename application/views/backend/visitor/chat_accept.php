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
                                <!-- <th>Status</th> -->
                                <th>chat</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                             <?php $no = 1 ;  $get_exhibitor_from_model = $this->chat_model->list_all_exhibitor_who_accepted_chat_request($visitor_id);
                                    foreach ($get_exhibitor_from_model as $key => $exhibitor):
        ?>
                                <td><?php echo $no++ ; ?></td>
                                <td><?php echo $exhibitor['exhibitor_name'];?></td>
                                <td>
                                    <?php
               if($exhibitor['status'] == 'accepted') :?>
               <div class="chat-acceptance">
                                    <a href="<?php echo base_url();?>visitor/chat/<?php echo $exhibitor['exhibitor_id'];?>"
                                   ><i class="fa fa-comments-o" aria-hidden="true"></i> Request Accepted</a>
               </div>

                                    <?php endif?>

                                    <?php
               if($exhibitor['status'] == 'pending') :?>
                     <div   class="chat-pending">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> Request pending</a>
                     </div>

                                    <?php endif?>
                                </td>




                             </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

</script>






