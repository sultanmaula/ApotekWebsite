<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> TAMBAH SUPPLIER</h3>
    <div class="row mt">
      <div class="col-lg-12">
        
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">

                <?php if(!empty($notif)){
                  echo '<div class="alert alert-danger">'.$notif.' </div>';
                } ?>

                <form class="cmxform form-horizontal style-form" id="form_tambah_supplier" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/supplier/simpan_supplier">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nama Supplier</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama_supplier" name="nama_supplier" value="" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cjk" class="control-label col-lg-2">Jenis Kelamin</label>
                    <div class="col-lg-10">
                      <div class="radio">                         
                          <label>
                            <input class="form-check-input" type="radio" name="jk_supplier" id="jk_supplier" value="perempuan">Perempuan
                          </label>                         
                      </div>
                      <div class="radio">                        
                        <label>
                          <input class="form-check-input" type="radio" name="jk_supplier" id="jk_supplier" value="laki-laki">Laki - Laki
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ctelp" class="control-label col-lg-2">Telepon Supplier</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="telp_supplier" name="telp_supplier" value="" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cumur" class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="alamat_supplier" type="input" name="alamat_supplier" value=""  required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" name="simpansupplier" id="simpansupplier" value="Tambahkan" class="btn btn-theme">
                      <input type="reset" name="reset" value="Reset" class="btn btn-theme04" >
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->

      </div>
    </div>
  </section>
  <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->


