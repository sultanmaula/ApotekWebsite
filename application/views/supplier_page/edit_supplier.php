<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> EDIT SUPPLIER</h3>
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

                <form class="cmxform form-horizontal style-form" id="form_tambah_supplier" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>index.php/supplier/edit_supplier/<?php echo $detil[0]->id_supplier;?>">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nama Supplier</label>
                    <div class="col-lg-10">
                      <input class=" form-control" type="text" id="nama_supplier" name="nama_supplier"  value="<?php echo $detil[0]->nama_supplier;?>" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cjk" class="control-label col-lg-2">Jenis Kelamin</label>
                    <div class="col-lg-10">
                      <input class=" form-control" type="text" id="jk_supplier" name="jk_supplier"  value="<?php echo $detil[0]->jk_supplier;?>" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ctelepon" class="control-label col-lg-2">Telepon Supplier</label>
                    <div class="col-lg-10">
                      <input class="form-control" type="text" id="telp_supplier" type="input" name="telp_supplier" value="<?php echo $detil[0]->telp_supplier;?>"  required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="calamat" class="control-label col-lg-2">Alamat Supplier</label>
                    <div class="col-lg-10">
                      <input class="form-control" type="text" id="alamat_supplier" type="input" name="alamat_supplier" value="<?php echo $detil[0]->alamat_supplier;?>"  required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" name="simpansupplier" id="simpansupplier"  value="Simpan" class="btn btn-theme">
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


