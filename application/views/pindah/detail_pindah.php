<div class="content-wrapper">
	<section class="content">
		<div class="box box-info">
			<div class="box-header">
				<h4 style="text-align:center">
					<b style="line-height:25px">
						DETAIL PINDAH DATANG <br>
					</b>
				</h4>
				<hr>
			</div>

			<div class="box-body">
				<div class="box-body table-responsive">

					<?php if ($this->session->flashdata('sukses')) { ?>
					<div class="callout callout-success">
						<p style="font-size:14px">
							<i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
						</p>
					</div>
					<?php } ?>

					<div>
						<h4><b>Data Daerah Asal</b></h4>
						<div>


							<table class="table table-bordered">
								<tr>
									<th>Nama Pemohon :</th>
									<td><?= isset($detail->nama) ? $detail->nama : ''; ?></td>
								</tr>
								<tr>
									<th>Alamat :</th>
									<td><?= isset($detail->alamat) ? $detail->alamat : ''; ?></td>
								</tr>
								<tr>
									<th>RT :</th>
									<td><?= isset($detail->rt) ? $detail->rt : ''; ?></td>
								</tr>
								<tr>
									<th>RW :</th>
									<td><?= isset($detail->rw) ? $detail->rw : ''; ?></td>
								</tr>
								<tr>
									<th>NIK :</th>
									<td><?= isset($detail->nik) ? $detail->nik : ''; ?></td>
								</tr>

								<tr>
									<th style="border: none;">
										<h4>
											<b>Data Alasan Pindah</b>
										</h4>
									</th>
								</tr>
								<tr>
									<th>Alasan Pindah :</th>
									<td><?= isset($detail->alasan_pindah) ? $detail->alasan_pindah : ''; ?></td>
								</tr>
								<tr>
									<th>Alamat Tujuan :</th>
									<td><?= isset($detail->alamat_tujuan) ? $detail->alamat_tujuan : ''; ?></td>
								</tr>
								<tr>
									<th>Jenis Pindah :</th>
									<td><?= isset($detail->jenis_pindah) ? $detail->jenis_pindah : ''; ?></td>
								</tr>
								<tr>
									<th>Klasifikasi Pindah :</th>
									<td><?= isset($detail->klasifikasi_pindah) ? $detail->klasifikasi_pindah : ''; ?>
									</td>
								</tr>
						</div>

						</table>
					</div>


					<button onClick="goBack()" class="btn btn-danger">Kembali</button>
					<script>
						function goBack() {
							window.history.back();
						}

					</script>
				</div>
			</div>

		</div>
	</section>
</div>
