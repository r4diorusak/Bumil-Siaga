<?php 
session_start();
$res = mysql_query("SELECT * from halaman where no=$_GET[id]");
$row=mysql_fetch_array($res);

?>


<br>
<section class="content">
	<form method="POST" action="controller/admin/aksi_halaman.php">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
		<h1 class="txt txt_h1 u-vr6x"><i class="fas fa-tools" style="font-size: 40px;"></i> Atur Halaman <?php echo $row['judul'];?></h1>
			
			<input type="text" value="<?php echo $_GET['id']; ?>" name="no_halamantxt" hidden >
              <div class="mb-3">
                 <textarea id="editor1" name="isitxt" rows="10" cols="80"><?php echo $row['isi'];?></textarea>
              </div>
              
        </div>
		<div class="card-footer clearfix">
				<button type="submit" class="btn btn-primary pull-right">Rubah</button>
		</div><form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
