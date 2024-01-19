<div class="content-wrapper">
	<section class="content">
		<div class="box box-info">
			<div class="box-header">

				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<h4 style="text-align:center"><b>TAMBAH SURAT buktinikah</b></h4>
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

								<form action="<?php echo base_url('surat/surat_buktinikah/tambah'); ?>" method="post">

									<div class="card-body">
										<div class="form-group">
											<label>Nama Pertama</label><a
												href="<?php echo base_url(); ?>penduduk/tambah/"
												class="btn btn-sm btn-primary pull-right">Tambah
												Penduduk</a><br /><br />
											<select name="namapertama" class="form-control" id="nama1" required>
												<?php
                                                foreach ($penduduk1 as $penduduk1) :
                                                    ?>
												<option value="<?php echo $penduduk1->nik; ?>">
													<?php echo $penduduk1->nik; ?> - <?php echo $penduduk1->nama; ?>
												</option>
												<?php
                                                endforeach;
                                                ?>
											</select>
										</div>
										<div class="form-group">
											<label>Nama Kedua</label>
											<select name="namakedua" class="form-control" id="nama2" required>
												<?php
                                                foreach ($penduduk2 as $penduduk2) :
                                                    ?>
												<option value="<?php echo $penduduk2->nik; ?>">
													<?php echo $penduduk2->nik; ?> - <?php echo $penduduk2->nama; ?>
												</option>
												<?php
                                                endforeach;
                                                ?>
											</select>
										</div>

										<div class="form-group">
											<label>Nama Ketiga</label>
											<select name="namaketiga" class="form-control" id="nama3" required>
												<?php
                                                foreach ($penduduk3 as $penduduk3) :
                                                    ?>
												<option value="<?php echo $penduduk3->nik; ?>">
													<?php echo $penduduk3->nik; ?> - <?php echo $penduduk3->nama; ?>
												</option>
												<?php
                                                endforeach;
                                                ?>
											</select>
										</div>

										<div class="form-group">
											<label>Nama Keempat</label>
											<select name="namakeempat" class="form-control" id="nama4" required>
												<?php
                                                foreach ($penduduk4 as $penduduk4) :
                                                    ?>
												<option value="<?php echo $penduduk4->nik; ?>">
													<?php echo $penduduk4->nik; ?> - <?php echo $penduduk4->nama; ?>
												</option>
												<?php
                                                endforeach;
                                                ?>
											</select>
										</div>

										<div class="form-group">
											<label>Nomor Kartu Keluarga</label>
											<input type="number" name="nokkk" class="form-control"
												placeholder="Nomor Kartu Keluarga" required />
										</div>

										<div class="form-group">
											<label>Tanda Tangan</label>
											<select name="pejabat" class="form-control" required>
												<?php
                                                    foreach ($pejabat as $data_pejabat) :
                                                        ?>
												<option value="<?php echo $data_pejabat->id_pejabat; ?>">
													<?php echo $data_pejabat->nama_pejabat; ?></option>
												<?php
                                                    endforeach;
                                                    ?>
											</select>
										</div>
										<div class="form-group">
											<input type="submit" name="tambah_surat_buktinikah" class="btn btn-success"
												value="Simpan">
											<a href="<?php echo base_url('surat/surat_buktinikah/'); ?>"
												class="btn btn-danger">Batal</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
</div>
