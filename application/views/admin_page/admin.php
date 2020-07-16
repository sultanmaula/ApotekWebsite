<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> KASIR</h3>
    <div class="row mt">
      <div class="col-lg-12">
        
      	<!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <div class="showback">
                  <a href='<?php echo base_url();?>index.php/admin/tambah_admin_page'><button type="button" class="btn btn-round btn-primary fa fa-plus"> Tambah Kasir</button></a>
	            </div>
                <thead>
                  <tr>
                  	<th> No. </th>
                    <th> ID Kasir</th>
                    <th> Nama kasir</th>
                    <th>Jenis Kelamin</th>
                    <th> Umur</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    $no=1;
                    foreach ($detil as $data) {
                    echo '
                    <tr>
                     <td> '.$no.' </td>
                     <td> '.$data->id_kasir.' </td>
                     <td> '.$data->nama_kasir.' </td>
                     <td> '.$data->jk_kasir.' </td>
                     <td> '.$data->umur_kasir.' </td>
                     <td>
                        <a href="'.base_url().'index.php/admin/tampil_edit_kasir/'.$data->id_kasir.'"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                        
                        <a href="'.base_url().'index.php/admin/hapus_data_kasir/'.$data->id_kasir.'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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

