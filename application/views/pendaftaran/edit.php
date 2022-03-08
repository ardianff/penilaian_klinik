<span class="badge bg-primary text-light" style="display: table; margin: 0 auto"><h4><b>Edit Data Pasien</b></h4></span>
<div class="col-md-12 top-20 padding-0">
	<div class="col-md-12">
	<?php echo form_open('pendaftaran/edit'); 
		echo form_hidden('no_cm', $pasien['no_cm']);?>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="no_cm">No CM</label>
							<input type="text"class="form-control"name="no_cm"	placeholder="No CM" value="<?php echo $pasien['no_cm'] ?>" disabled />
						</div>					
						<div class="form-group">
							<label for="no_ktp">No KTP</label>
							<input type="text"class="form-control"name="no_ktp"	placeholder="No KTP" value="<?php echo $pasien['no_ktp'] ?>" required/>
						</div>
						<div class="form-group">
							<label for="nama_pasien">Nama Pasien</label>
							<input type="text" class="form-control"	name="nama_pasien"placeholder="Nama Pasien"	value="<?php echo $pasien['nama_pasien'] ?>" required/>
						</div>
						<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<?php echo form_dropdown('jenis_kelamin', array('- Jenis Kelamin - ','Laki - Laki' => 'Laki - Laki', 'Perempuan' => 'PEREMPUAN'), $pasien['jenis_kelamin'],"class='form-control', required");?>
						</div>

						<div class="form-group">
							<label for="tanggal_lahir_pasien">Tanggal Lahir Pasien</label>
							<input type="date" class="form-control"	name="tgl_lahir_pasien" value="<?php echo $pasien['tgl_lahir_pasien'] ?>"required/>
						</div>
						<div class="form-group">
							<label for="golongan_darah">Golongan Darah Pasien</label>
							<?php
							echo form_dropdown('gol_dar', array('- Golongan Darah -','A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'), $pasien['gol_dar'], "class='form-control' required");?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="status pernikahan">Status Pernikahan</label>
							<?php
								echo form_dropdown('status_pernikahan', array('- Status Pernikahan -','KAWIN' => 'KAWIN', 'BELUM KAWIN' => 'BELUM KAWIN', 'CERAI HIDUP' => 'CERAI HIDUP', 'CERAI MATI' => 'CERAI MATI'), $pasien['status_pernikahan'], "class='form-control'required");
								?>
						</div>
						<div class="form-group">
							<label for="agama_pasien">Agama Pasien</label>
							<?php
								echo form_dropdown('agama_pasien', array('- Agama -','ISLAM' => 'ISLAM', 'KRISTEN' => 'KRISTEN', 'KATOLIK' => 'KATOLIK', 'HINDU' => 'HINDU', 'BUDDHA' => 'BUDDHA', 'KHONGHUCU' => 'KONGHUCU'), $pasien['agama'], "class='form-control'");
							?>
						</div>
						<div class="form-group">
							<label for="tanggal_kedatangan_pasien">Tanggal Kedatangan</label>
							<input type="date" name="tgl_kedatangan_pasien" class="form-control" value="<?php echo $pasien['tgl_kedatangan_pasien'] ?>" required autofocus/>
						</div>
						<div class="form-group">
							<label for="alamat_pasien">Alamat Pasien</label>
							<textarea type="text" class="form-control"name="alamat_pasien"placeholder="Alamat Pasien"><?php echo htmlspecialchars($pasien['alamat_pasien']); ?></textarea>
						</div>						
						<div class="form-group">
							<label for="keluhan_pasien">Keluhan Pasien</label>
							<textarea type="text"class="form-control"name="keluhan_pasien" placeholder="keluhan Pasien"><?php echo htmlspecialchars($pasien['keluhan_pasien']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<button type="submit" name="submit" class="btn btn-success float-left">
					Simpan
				</button>				
				<?php echo anchor('pendaftaran', 'Kembali', array('class' => 'btn btn-danger float-right')); ?>
			</div>
		<?php echo form_close(); ?>

	</div>
</div>
