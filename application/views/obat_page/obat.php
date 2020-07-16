<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> OBAT </h3>
    <div class="row mt">
      <div class="col-lg-12">
        

          	<!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <div class="showback">
                  <a href='<?php echo base_url();?>index.php/obat/tambah_obat_page'><button type="button" class="btn btn-round btn-primary fa fa-plus"> Tambah Obat</button></a>
	            </div>
                <thead>
                  <tr>
                  	<th> No. </th>
                    <th> ID Obat</th>
                    <th> Nama obat</th>
                    <th> Harga obat</th>
                    <th> Stok obat</th>
                    <th> Supplier</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                    <?php
                    $no=1;
                    foreach ($detil_obat as $data) {
                    echo '
                    <tr>
                     <td> '.$no.' </td>
                     <td> '.$data->id_obat.' </td>
                     <td> '.$data->nama_obat.' </td>
                     <td> '.$data->harga_obat.' </td>
                     <td> '.$data->stok_obat.' </td>
                     <td> '.$data->nama_supplier.' </td>
                     <td>
                        <a href="'.base_url().'index.php/obat/tampil_edit_obat/'.$data->id_obat.'"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                        
                        <a href="'.base_url().'index.php/obat/hapus_data_obat/'.$data->id_obat.'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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