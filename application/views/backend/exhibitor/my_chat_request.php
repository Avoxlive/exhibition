<?php
$visitor_name = $this->session->userdata('name');
$visitor_id = $this->session->userdata('visitor_id');
// $visitor_name = $this->db->get_where('visitor',array('name' => $this->session->userdata('name')));

$visitors = $this->db->get_where('visitor', array('visitor_id' => $visitor_id))->result_array();
        foreach($visitors as $key => $visitor):
            // $visitor_id = $this->session->userdata('visitor_id');
            $exhibitor_id = $this->session->userdata('exhibitor_id');
            endforeach;
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
                             <?php
                            //  $no = 1 ;  $get_visitor_from_model =( $this->chat_model->list_all_visitor_and_order_with_chat_request($exhibitor_id)) and ($this->crud_model->list_all_visitor_and_order_with_visitor_id());
                                    // foreach ($get_visitor_from_model as $key => $visitor):

                                        $no =1; $get_status= ($this->chat_model->chat_status_from_exhibitor($exhibitor_id)) and ($this->crud_model->list_all_visitor_and_order_with_visitor_id());
                                        foreach($get_status as $key => $visitor):
                            ?>

                                <td><?php echo $no++ ; ?></td>
                                <!-- <td><?php echo $visitor['visitor_id'];?></td> -->
                                <td><?php echo $visitor['name'];?></td>


                                <!-- <td>
oo

                                </td> -->

                                <td>
                            <?php if($visitor['status'] == 'pending'):?>
                                <a href="<?php echo base_url();?>exhibitor/edit_chat_request/<?php echo $visitor['chat_request_id'];?>"
                                class="message-icon" ><i class="fa fa-commenting" aria-hidden="true"></i></a>
                                </td>
                                <?php endif?>
                                </tr>
                            <?php  endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




