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

                    <h4><b>Data Daerah Asal</b></h4>
                    <table class="table table-striped">
                        <tr>
                            <th>No Kartu Keluarga</th>
                            <td><?php echo isset($detail->no_kk) ? $detail->no_kk : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Nama Kepala Keluarga</th>
                            <td><?php echo isset($detail->nama_kepala_keluarga) ? $detail->nama_kepala_keluarga : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><?php echo isset($detail->alamat) ? $detail->alamat : ''; ?></td>
                        </tr>
                        <tr>
                            <th>RT</th>
                            <td><?php echo isset($detail->rt) ? $detail->rt : ''; ?></td>
                        </tr>
                        <tr>
                            <th>RW</th>
                            <td><?php echo isset($detail->rw) ? $detail->rw : ''; ?></td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td><?php echo isset($detail->nik) ? $detail->nik : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Nama Pemohon</th>
                            <td><?php echo isset($detail->nama) ? $detail->nama : ''; ?></td>
                        </tr>

                        <h4><b>Data Kepindahan</b></h4>
                        <tr>
                            <th>Alasan Pindah</th>
                            <td><?php echo isset($detail->alasan_pindah) ? $detail->alasan_pindah : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Alamat Tujuan</th>
                            <td><?php echo isset($detail->alamat_tujuan) ? $detail->alamat_tujuan : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Pindah</th>
                            <td><?php echo isset($detail->jenis_pindah) ? $detail->jenis_pindah : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Klasifikasi Pindah</th>
                            <td><?php echo isset($detail->klasifikasi_pindah) ? $detail->klasifikasi_pindah : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Status KK yang Tidak Pindah</th>
                            <td><?php echo isset($detail->status_kk_tdk_pindah) ? $detail->status_kk_tdk_pindah : ''; ?></td>
                        </tr>
                        <tr>
                            <th>Status KK yang Pindah</th>
                            <td><?php echo isset($detail->status_kk_pindah) ? $detail->status_kk_pindah : ''; ?></td>
                        </tr>
                    </table>

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
