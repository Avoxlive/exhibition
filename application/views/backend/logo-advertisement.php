<div class="add-sec">
    <div class="add-sec1">
        <div class="add-img">
        <img src="<?php echo base_url(); ?>optimum/plugins/logo/logo-avox.png" alt="image1" class="img-fluid">
        </div>

    <div class="add-left">
        <div class="gallery-scroll-bg">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12 p-0">
                        <div class="owl-carousel owl-theme owl-loaded gallery-scroll-in">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                <?php  $select = $this->advertisment_model->selectAdvertismentAdminInsert();
                                        foreach ($select as $key => $row) {
                                    ?>
                                        <div class="owl-item">
                                            <div class="service-text">
                                                <a href="#"><img src="<?php echo base_url() . "uploads/advertisment_image/" . $row['file_name'];?>" class="hvrbox-layer_bottom img-rounded"></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>

        <!-- <div class="grid-gap">
        </div> -->

    </div>
</div>