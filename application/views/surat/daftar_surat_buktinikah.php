<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA SURAT BUKTI NIKAH</b></h4>
                <hr>
            </div>

            <div class="box-body table-responsive">

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
                <p>
                    <a href="<?php echo base_url('surat/surat_buktinikah/tambah'); ?>" class="btn btn-success">Tambah
                        Surat Bukti Nikah</a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama Saksi Pertama</th>
                            <th style="text-align:center">Nama Saksi Kedua</th>
                            <th style="text-align:center">Nama Pasangan Pria</th>
                            <th style="text-align:center">Nama Pasangan Wanita</th>
                            <th style="text-align:center">Nomor Kartu Keluarga</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($surat as $surat) {
                            $namapertama = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat->nama_pertama'")->row();
                            $namakedua = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat->nama_kedua'")->row();
                            $namaketiga = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat->nama_ketiga'")->row();
                            $namakeempat = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat->nama_keempat'")->row();
                            ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no; ?></td>
                            <td><?php echo $namapertama->nama; ?></td>
                            <td><?php echo $namakedua->nama; ?></td>
                            <td><?php echo $namaketiga->nama; ?></td>
                            <td><?php echo $namakeempat->nama; ?></td>
                            <td><?php echo $surat->no_kkk; ?></td>
                            <td style="text-align:center">
                                <a href="<?php echo base_url('surat/surat_buktinikah/edit/' . $surat->id_surat_buktinikah); ?>"
                                    class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?php echo base_url('surat/surat_buktinikah/hapus/' . $surat->id_surat_buktinikah); ?>"
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                        class="fa fa-trash-o"></i> Hapus</a>
                                <a target="blank"
                                    href="<?php echo base_url('surat/surat_buktinikah/cetak/' . $surat->id_surat_buktinikah); ?>"
                                    class="btn btn-info btn-xs"><i class="fa fa-print"></i> Cetak</a>
                        </tr>
                        </td>


                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>