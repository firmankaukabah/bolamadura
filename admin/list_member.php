
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Member</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No. Identitas</th>
                            <th>Alamat</th>
							<th>L/P</th>
							<th>User Name</th>
							<th>Pemesanan</th>
							<th>Aksi</th>
                         
                        </tr>
						<tr>
                                    <td>Firman Wahyudi Ahmad</td>
                                    <td>2014520012</td>
									<td>Proppo</td>
                                    <td>L</td>
									<td>wah_u@gmail.com</td>
									<td>2</td>
                                    <td style='text-align:center'>
                        <a href='index.php?page=tiket'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_berita&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                                    </td>
                                </tr>
						<tr>
                                      <td>Aidil Firianto</td>
                                    <td>2014520012</td>
									  <td>Bujur</td>
                                    <td>P</td>
									<td>ajdha@yahoo.com</td>
									<td>1</td>
                                    <td style='text-align:center'>
                        <a href='index.php?page=tiket'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_berita&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                                    </td>
									</tr>
							<tr>
                                      <td>SYAIFUL HASAN</td>
                                    <td>2014520043</td>
									  <td>Bangkalan</td>
                                    <td>L</td>
									<td>ipunk@yahoo.com</td>
									<td>3</td>
                                    <td style='text-align:center'>
                        <a href='index.php?page=tiket'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_berita&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                                    </td>
									</tr>
									
                    </thead>

                  <!----/*  <tbody>
                      <?php
                            $qu=mysqli_query($con,"select * from berita order by id desc");
                            while($has=mysqli_fetch_row($qu))
                            {
                                echo "
                                <tr>
                                    <td>$has[1]</td>
                                    <td>$has[3]</td>
                                    <td>".substr(strip_tags($has[4]),0,30)."....</td>
                                    <td style='text-align:center'>
                        <a href='index.php?page=berita&id=$has[0]'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='datadel($has[0],&#39;list_berita&#39;)' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                                    </td>
                                </tr>
                                ";
                            }
                       ?> 
					   */------->
					   
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.row -->