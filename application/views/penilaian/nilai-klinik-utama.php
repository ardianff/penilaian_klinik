<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penilaian Klinik Utama</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Rincian Penilaian</th>
                    <th class="text-center" colspan="2">Hasil</th>
                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Keterangan</th>
                    <th class="text-center" colspan="2">Hasil Verifikasi Persyaratan Minimal **</th>
                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Catatan</th>
                  </tr>
				  <tr>
					  <th>Ya/Ada</th>
					  <th>Tidak</th>
					  <th>Memenuhi Syarat</th>
					  <th>Tidak Memenuhi Syarat</th>
					</tr>				  
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Profil Klinik</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>
                  <tr>
				  	<td>2</td>
                    <td>Kemampuan Pelayanan Klinik <br>- Pelayanan medik dasar</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td>Wajib untuk Klinik Pratama</td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>                  
				  <tr>
				  	<td>3</td>
                    <td>Kemampuan Pelayanan Penunjang Medik</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>				  
				  <tr>
				  	<td>4</td>
                    <td>Sarana : Bangunan dan Ruang Klinik</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
                  </tr>
				  <tr>
					<td></td>
                    <td>a. Bangunan Klinik bersifat permanen dan tidak bergabung fisik bangunanya dengan tempat tinggal perorangan</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya" class="text-center"><label> Ya</label></input></td></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>				  
				  <tr>
				  	<td></td>
                    <td>b. Bangunan klinik memperhatikan fungsi keamanan, kenyamananan,dan kemudahan pelayanan termasuk penyandang disabilitas,anak-anak,dan lanjut usia</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></textarea></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>					  
				  <tr>
				  	<td></td>
                    <td>c. Kawasan di dalam bangunan klinik harus bebas asap rokok</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>	
									<tr>				  	
				  <td></td>
                    <td>d. Terpasang papan nama dengan ukuran minimal 1 m2 dengan dasar putih huruf hitam yang memuat informasi :</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
                  </tr>
									<tr>					  
				  <td></td>
                    <td>1) Jenis Klinik Utama</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>										
									<tr>					  
				  <td></td>
                    <td>2) Nama Klinik</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>										
									<tr>					  
				  <td></td>
                    <td>3) Jam Buka Klinik</td>
                    <td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
                    <td></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Ya"> <label> Ya</label></input></td>
					<td><input type="radio" name="profil_klinik_hasil" value="Tidak"> <label> Tidak</label></input></td>
					<td><textarea name="profil_klinik_catatan"></textarea></td>
                  </tr>										
									<tr>					  
				  <td></td>
                    <td>e. Ruang Penerimaan</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
                  </tr>	
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
