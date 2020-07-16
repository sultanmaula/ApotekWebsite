<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> DASHBOARD ! </h3>
    <div class="row mt">
      <div class="col-lg-12">
        
    	<div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <!--<i class="fa fa-comments fa-5x"></i>-->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><h1><?php echo $total_admin; ?></h1></div>
                                <div>JUMLAH KASIR</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>index.php/admin/tampil_admin">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <!-- <i class="fa fa-comments fa-5x"></i> -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><h1><?php echo $total_supplier; ?></h1></div>
                                <div>JUMLAH SUPPLIER</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>index.php/supplier/data_supplier">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <!-- <i class="fa fa-comments fa-5x"></i> -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><h1><?php echo $total_obat; ?></h1></div>
                                <div>JUMLAH OBAT</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>index.php/obat/data_obat">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <!-- <i class="fa fa-comments fa-5x"></i> -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><h1><?php echo $total_transaksi; ?></h1></div>
                                <div>JUMLAH TRANSAKSI OBAT</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url();?>index.php/transaksi/transaksi_page">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>


        </div>

      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->