<div class="content-wrapper">
	<section class="content">
		<div class="box box-info">
			<div class="box-header">
				<h4 style="text-align:center"><b>EDIT DATA PENDUDUK</b></h4>
				<hr>
			</div>

			<div class="box-body">

				<?php
                if ($this->session->flashdata('sukses')) {
                    ?>
				<div class="callout callout-success">
					<p style="font-size:14px">
						<i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
					</p>
				</div>
				<?php
                }
                ?>
				<form action="<?php echo base_url('penduduk/proses_edit'); ?>" method="post">
					<div class="form-group">
						<label>NIK</label>
						<input type="text" name="nik" value="<?php echo $penduduk->nik; ?>" class="form-control"
							required />
					</div>

					<div class="form-group">
						<label>No Kartu Keluarga</label>
						<input type="text" name="no_kk" value="<?php echo $penduduk->no_kk; ?>" class="form-control"
							required />
					</div>

					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" value="<?php echo $penduduk->nama; ?>" class="form-control"
							required />
					</div>
					<div class="form-group">
						<label>Tempat Tanggal Lahir</label>
						<div class="row">
							<div class="col-xs-3">
								<input type="text" name="tempat_lahir" value="<?php echo $penduduk->tempat_lahir; ?>"
									class="form-control" placeholder="Tempat">
							</div>
							<div class="col-xs-3">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="date" name="tanggal_lahir"
										value="<?php echo $penduduk->tanggal_lahir; ?>" class="form-control pull-right"
										autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select class="select2 form-control custom-select" name="jenis_kelamin" required>
							<option value="Laki Laki" <?php if ($penduduk->jenis_kelamin == "L") echo "selected"; ?>>
								Laki Laki
							</option>
							<option value="Perempuan" <?php if ($penduduk->jenis_kelamin == "P") echo "selected"; ?>>
								Perempuan
							</option>
						</select>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" class="form-control"
							rows="2"><?php echo $penduduk->alamat; ?> </textarea>
					</div>
					<div class="form-group">
						<label>RT</label>
						<input type="text" name="rt" value="<?php echo $penduduk->rt; ?>" class="form-control"
							required />
					</div>
					<div class="form-group">
						<label>RW</label>
						<select class="form-control selectlive" name="rw" required>
							<option value="<?php echo $penduduk->rw; ?>" selected><?php echo $penduduk->rw; ?></option>
							<option value=""disabled>--Ubah--</option>
							<option value="001">001</option>
							<option value="002">002</option>
							<option value="003">003</option>
							<option value="004">004</option>
							<option value="005">005</option>
							<option value="006">006</option>
						</select>
					</div>
					<div class="form-group">
						<label>Agama</label>
						<select class="form-control selectlive" name="agama" required>
							<option value="<?php echo $penduduk->agama; ?>" selected><?php echo $penduduk->agama; ?>
							</option>
							<option value=""disabled>--Ubah--</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katholik">Katholik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</div>

					<div class="form-group">
						<label>Pekerjaan</label>
						<input type="text" name="pekerjaan" value="<?php echo $penduduk->pekerjaan; ?>"
							class="form-control" required />
					</div>
					<div class="form-group">
						<label>Pendidikan Terakhir</label>
						<input type="text" name="pendidikan" value="<?php echo $penduduk->pendidikan;?>"
							class="form-control" required />
					</div>
					<div class="form-group">
						<label>Status Perkawinan</label>
						<select class="form-control selectlive" name="status_perkawinan" required>
							<option value="<?php echo $penduduk->status_perkawinan; ?>" selected>
								<?php echo $penduduk->status_perkawinan; ?></option>
								<option value=""disabled>--Ubah--</option>
							<option value="Menikah">KAWIN</option>
							<option value="Belum Menikah">BELUM KAWIN</option>
							<option value="Cerai Mati ">CERAI MATI</option>
							<option value="Cerai Hidup">CERAI HIDUP</option>
						</select>
					</div>

					<div class="form-group">
						<label>SHDK</label>
						<input type="text" name="status" value="<?php echo $penduduk->status; ?>" class="form-control"
							required />
					</div>

					<div class="form-group">
						<label>Golongan Darah</label>
						<input type="text" name="golongan_darah" value="<?php echo $penduduk->golongan_darah; ?>"
							class="form-control" />
					</div>
					<div class="form-group">
						<label>Kewarganegaraan</label>
						<select class="form-control selectlive" name="kewarganegaraan" required>
							<option value="<?php echo $penduduk->kewarganegaraan; ?>" selected>
								<?php echo $penduduk->kewarganegaraan; ?></option>
							<option value=""disabled>--Ubah--</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Warga Negara Asing">Warga Negara Asing</option>
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-success">Simpan</button>
						<a href="<?php echo base_url('penduduk/tampil'); ?>" class="btn btn-danger">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
