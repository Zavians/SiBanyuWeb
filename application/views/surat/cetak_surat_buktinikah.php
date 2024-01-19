<style type="text/css">
@media print and (width: 21cm) and (height: 33cm) {
    @page {
        margin-top: 3cm;
        margin-right: 3cm;
        margin-left: 4cm;
        margin-bottom: 4cm;
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
<br /><br />
<center><b>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM)</b> <br />
    <font size="5"><u><b>KEBENARAN SEBAGAI PASANGAN SUAMI ISTRI</b></u></font><br />Nomor:
    474.1/<?php echo $surat_buktinikah->id_surat_buktinikah; ?>/Desa/<?php echo substr($surat_buktinikah->tanggal_surat_buktinikah, 0, 4); ?>
</center>
<br /><br />
<font align="justify">
     Saya yang bertanda tangan dibawah ini :
</font>

<!-- //Keterangan Saksi 1 -->
<?php
$namapertama = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_buktinikah->nama_pertama'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $namapertama->nama; ?></td>
    </tr>

    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $namapertama->nik; ?></td>
    </tr>

    <tr>
        <td>Tempat / Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $namapertama->tempat_lahir; ?>/<?= date('d F Y', strtotime($namapertama->tanggal_lahir)); ?></td>
    </tr>

    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $namapertama->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $namapertama->alamat; ?></td>
    </tr>
</table>

<br>

<!-- //Keterangan Saksi 2 -->
<?php
$namakedua = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_buktinikah->nama_kedua'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $namakedua->nama; ?></td>
    </tr>

    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $namakedua->nik; ?></td>
    </tr>

    <tr>
        <td>Tempat / Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $namakedua->tempat_lahir; ?>/<?= date('d F Y', strtotime($namakedua->tanggal_lahir)); ?></td>
    </tr>

    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $namakedua->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $namakedua->alamat; ?></td>
    </tr>
</table>



<br />
Menyatakan Bahwa    :

<!-- //Keterangan Pria -->
<?php
$namaketiga = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_buktinikah->nama_ketiga'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $namaketiga->nama; ?></td>
    </tr>

    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $namaketiga->nik; ?></td>
    </tr>

    <tr>
        <td>Tempat / Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $namaketiga->tempat_lahir; ?>/<?= date('d F Y', strtotime($namaketiga->tanggal_lahir)); ?></td>
    </tr>

    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $namaketiga->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $namapertama->alamat; ?></td>
    </tr>
</table>

<br>
adalah suami/istri dari : 

<!-- //Keterangan Wanita -->
<?php
$namakeempat = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_buktinikah->nama_keempat'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $namakeempat->nama; ?></td>
    </tr>

    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $namakeempat->nik; ?></td>
    </tr>

    <tr>
        <td>Tempat / Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $namakeempat->tempat_lahir; ?>/<?= date('d F Y', strtotime($namakeempat->tanggal_lahir)); ?></td>
    </tr>

    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $namakeempat->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $namakeempat->alamat; ?></td>
    </tr>
</table>

    <p>Sebagaimana tercantum dalam Kartu Keluarga (KK) Nomor  : <b><?php echo $surat_buktinikah->no_kkk ?> </b></p>

</table>
 <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 


<font style="text-align: center; margin-left: 50px;">
Demikian Surat Penyataan ini saya buat dengan sebenar-benarnya dan apabila 
dikemudian hari pernyataan saya ini tidak benar, maka saya bersedia 
diproses secara hukum sesuai dengan peraturan perundang-undangan dan 
dokumen yang diterbitkan akibat pernyataan ini menjadi tidak sah  <br /><br /><br /> 
</font>
<table width="100%">
<tr>
    <td width="25%" style="text-align:center;">Saksi 1</td>
    <td width="25%"></td>
    <td width="20%"></td>
    <td width="30%" style="text-align:center;"><?= date('d F Y', strtotime($surat_buktinikah->tanggal_surat_buktinikah)); ?></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">Yang menyetujui pernyataan</td>
</tr>

<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;">Materai</td>
</tr>

<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>

<tr>
    <td style="text-align:center;">"(.........................)"</td>
    <td></td>
    <td></td>
    <td style="text-align:center;"><b><u> <?php echo $surat_buktinikah->nama_pejabat; ?></u></b></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align:center;"><b>NIP. <?php echo $surat_buktinikah->nip_pejabat; ?></b></td>
</tr>

<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>

<tr>
    <td width="25%" style="text-align:center;">Saksi 2</td>
    <td width="25%"></td>
    <td width="20%"></td>
    <td width="30%" style="text-align:center;"></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
</tr>
<tr>
    <td style="text-align:center;">"(.........................)"</td>
    <td></td>
    <td></td>
    <td ></td>
</tr>
</table>
<br>
<br>
<span>Keterangan :</span>
<p style="font-size: small; margin: 0;"><i>
Lampiran ini digunakan dalam hal tidak dapat 
menunjukkan bukti persyaratan berupa Buku Nikah/Akta Perkawinan, 
dimana status perkawinan di Kartu Keluarga (KK) dan KTP el adalah kawin.  
*) Ditulis nama saksi 1 dan saksi 2;; **) Ditulis nama suami/istri 
sebagaimana tercantum dalam Kartu Keluarga (KK).

</i></p>
<script>
window.print();
</script>