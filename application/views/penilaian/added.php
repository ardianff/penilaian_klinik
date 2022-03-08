<span class="badge bg-primary text-light" style="display: table; margin: 0 auto"><h4><b>Input Data</b></h4></span>
<div class="col-md-12 top-20 padding-0">
	<div class="col-md-12">
		<?php echo form_open('pendaftaran/add'); ?>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<div col-sm-3 control-label" for="form-field-1">
							<label for="nama_anggota_penilaian_1">Nama Anggota Penilaian 1 </label>
							</div>
							<div class="col-sm-5">
                            <?php
                            echo cmb_dinamis('anggota_penilaian', 'tbl_anggota', 'nama_anggota', 'id_anggota');
                            ?>
                        </div>						
							<div col-sm-3 control-label" for="form-field-1">
							<label for="nama_anggota_penilaian_1">Nama Anggota Penilaian 2 </label>
							</div>
							<div class="col-sm-5">
                            <?php
                            echo cmb_dinamis('anggota_penilaian', 'tbl_anggota', 'nama_anggota', 'id_anggota');
                            ?>
                        </div>
						<!-- </div>
						<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<?php echo form_dropdown('jenis_kelamin', array('0' =>'- Jenis Kelamin -','LAKI - LAKI' => 'LAKI - LAKI', 'PEREMPUAN' => 'PEREMPUAN'),null, "class='form-control'", 'required="required"');?>
						</div>

						<div class="form-group">
							<label for="tanggal_lahir_pasien">Tanggal Lahir Pasien</label>
							<input type="date" class="form-control" name="tgl_lahir_pasien" required autofocus/>
						</div>
						<div class="form-group">
							<label for="golongan_darah">Golongan Darah Pasien</label>
							<?php
							echo form_dropdown('gol_dar', array('- Golongan Darah -','A' => 'A', 'B' => 'B', 'AB' => 'AB', 'O' => 'O'), null,"class='form-control', 'required'");?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="status pernikahan">Status Pernikahan</label>
							<?php
								echo form_dropdown('status_pernikahan', array('- Status Pernikahan -','KAWIN' => 'KAWIN', 'BELUM KAWIN' => 'BELUM KAWIN', 'CERAI HIDUP' => 'CERAI HIDUP', 'CERAI MATI' => 'CERAI MATI'), null, "class='form-control', 'required'");
								?>
						</div>
						<div class="form-group">
							<label for="agama_pasien">Agama Pasien</label>
							<?php
								echo form_dropdown('agama_pasien', array('- Agama -','ISLAM' => 'ISLAM', 'KRISTEN' => 'KRISTEN', 'KATOLIK' => 'KATOLIK', 'HINDU' => 'HINDU', 'BUDDHA' => 'BUDDHA', 'KHONGHUCU' => 'KONGHUCU'), null, "class='form-control', 'required'");
							?>
						</div>
						<div class="form-group">
							<label for="tanggal_kedatangan_pasien">Tanggal Kedatangan</label>
							<input type="date" name="tgl_kedatangan_pasien" class="form-control" required autofocus/>
						</div>
						<div class="form-group">
							<label for="alamat_pasien">Alamat Pasien</label>
							<textarea type="text" class="form-control"name="alamat_pasien"placeholder="Alamat Pasien"></textarea>
						</div>						
						<div class="form-group">
							<label for="keluhan_pasien">Keluhan Pasien</label>
							<textarea type="text"class="form-control"name="keluhan_pasien" placeholder="keluhan Pasien"></textarea>
						</div>
					</div> -->
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
