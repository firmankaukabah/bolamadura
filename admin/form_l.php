<?php
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['save']))
{    
    
    $getId=mysqli_fetch_row(mysqli_query($con,"select max(id) from berita"));
    
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='gif')
            $ext=".gif";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($getId[0]+1).$ext));
    }
    
    mysqli_query($con,"insert into berita values('','".date('Y-m-d')."','".($getId[0]+1).$ext."','$judul','$konten')");
    
      echo "
    <script>
    location.assign('index.php?page=tiket&ps=true1');
    </script>
    ";
}
elseif(isset($_POST['update']))
{
    if(!empty($_FILES['foto']['tmp_name']))
    { 
        unlink("../img/$gambar");
        $ext=strtolower(substr($_FILES['foto']['name'],-3));
        if($ext=='gif')
            $ext=".gif";
        else
            $ext=".png";
        move_uploaded_file($_FILES['foto']['tmp_name'], "../img/" . basename(($_GET['id']).$ext));
        
        mysqli_query($con,"update berita set judul='$judul',gambar='".$_GET['id'].$ext."',konten='$konten' where id='".$_GET['id']."'");
    }
    else
        mysqli_query($con,"update berita set judul='$judul',konten='$konten' where id='".$_GET['id']."'");
    
    echo "
    <script>
    location.assign('index.php?page=berita&ps=true2');
    </script>
    ";
}

/*pesan berhasil update*/
if(isset($_GET['ps'])=='true2')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terupdate</div>";
elseif(isset($_GET['ps'])=='true1')
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Terimpan</div>";

if(isset($_GET['id']))
$data=mysqli_fetch_row(mysqli_query($con,"select * from berita where id='".$_GET['id']."'"));

?>
    <style>
        #image-holder {
            margin-top: 8px;
        }
        
        #image-holder img {
            border: 8px solid #DDD;
            max-width:100%;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Input Berita</h3>
                </div>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="id" value="<?php echo isset($_GET['id'])?$_GET['id']:''; ?>">
                   <input type="hidden" name="gambar" value="<?php echo isset($data[2])?$data[2]:''; ?>">
                    <div class="box-body">

                  
		
                        <div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Kategori Tiket</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Nama Ketegori Tiket" name="judul" id="tiga" value="<?php echo isset($data[3])?$data[3]:''; ?>">
                            </div>
                        </div>
						
						
				<div class="form-group">
					<label for="select" class="col-lg-2 control-label">Harga</label>
						<div class="col-lg-10">
						<div class="input-group">
						<span class="input-group-addon">Rp</span>
						<input class="form-control" id="disabledInput" type="text" placeholder=""">
						<span class="input-group-btn">
						</span>
						</div>
						</div>
				</div>	
                       
               
                        <!--input image awal-->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Save" name="<?php echo isset($_GET['id'])?'update':'save'; ?>">
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->