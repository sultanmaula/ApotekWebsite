  <!--main content start-->
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> SUPPLIER</h3>
      <div class="row mt">
        <div class="col-lg-12">
          
          <!-- row -->
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                  <div class="showback">
                    <a href='<?php echo base_url();?>index.php/supplier/tambah_supplier_page'><button type="button" class="btn btn-round btn-primary fa fa-plus"> Tambah Supplier</button></a>
                  </div>
                    
                </div>
                  <thead>
                    <tr>
                      <th>No. </th>
                      <th>ID Supplier</th>
                      <th>Nama supplier</th>
                      <th>Jenis Kelamin</th>
                      <th>Telepon supplier</th>
                      <th>Alamat supplier</th>
                    </tr>
                  </thead>
                  <tbody>
   
                    <?php
                      $no=1;
                      foreach ($detil_supplier as $data) {
                      echo '
                      <tr>
                      <td> '.$no.' </td>
                      <td> '.$data->id_supplier.' </td>
                      <td> '.$data->nama_supplier.' </td>
                      <td> '.$data->jk_supplier.' </td>
                      <td> '.$data->telp_supplier.' </td>
                      <td> '.$data->alamat_supplier.' </td>
                      <td>
                          <a href="'.base_url().'index.php/supplier/tampil_edit_supplier/'.$data->id_supplier.'"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                          
                          <a href="'.base_url().'index.php/supplier/hapus_data_supplier/'.$data->id_supplier.'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                      </td>
                      </tr>'
                      ;
                      $no++;
                        }
                    ?>       

                  </tbody>
                </table>
              </div>
              <!-- /content-panel
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
              -->
            </div>
            <!-- /col-md-12 -->
          </div>
          <!-- /row -->

        </div>
      </div>
    </section>
    <!-- /wrapper -->
  </section>
  <!-- /MAIN CONTENT -->

