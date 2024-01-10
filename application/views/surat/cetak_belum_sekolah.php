<style type="text/css">
@media print and (width: 21cm) and (height: 33cm) {
    @page {
        margin: 1cm;
    }
}

.tabelku {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
}
</style>
<style type="text/css" media="print">
@page {
    size: portrait;
}
</style>
<img src="<?php echo base_url('assets/images/KopBoyo.png'); ?>" width="100%">
<table width="100%">
<tr>
        <td width="15%">Kode Desa</td>
        <td width="1%">:</td>
        <td width="84%">3309182005</td>
    </tr>
</table>
<br /><br />
<center>
    <font size="5"><u><b>SURAT KETERANGAN DESA</b></u></font><br />Nomor:
    145/<?php echo $belum_sekolah->id_belum_sekolah; ?>/DS/<?php echo substr($belum_sekolah->tanggal_belum_sekolah, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini , Kepala Desa Banyusri Kecamatan Wonosegoro Kabupaten Boyolali Provinsi Jawa
    Barat
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $belum_sekolah->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $belum_sekolah->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $belum_sekolah->tempat_lahir; ?> /
            <?= date('d F Y', strtotime($belum_sekolah->tanggal_lahir)); ?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $belum_sekolah->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $belum_sekolah->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $belum_sekolah->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $belum_sekolah->alamat; ?></td>
    </tr>
</table>
<br /><br />
<font align="justify">
    Nama / Orang tersebut benar Warga Desa Banyusri Kecamatan Wonosegoro Kabupaten Boyolali , Menerangkan dengan
    benar Nama tersebut <b><i>belum pernah sekolah.</i></b><br /><br />
    Demikian Surat Keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta agar yang
    berkepentingan menjadi maklum.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Banyusri, <?= date('d F Y', strtotime($belum_sekolah->tanggal_belum_sekolah)); ?></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kepala Desa Banyusri</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kecamatan Wonosegoro</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center><b><u><?php echo $belum_sekolah->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $belum_sekolah->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>