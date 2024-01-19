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
<br /><br /><br />
<center><b>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM)</b> <br />
    <font size="5"><u><b>KEBENARAN DATA KEMATIAN</b></u></font><br />Nomor:
    474.1/<?php echo $surat_kematian->id_surat_kematian; ?>/Banyusri/<?php echo substr($surat_kematian->tanggal_surat_kematian, 0, 4); ?>
</center>
<br /><br />
<font align="justify">
    Yang bertandatangan di bawah ini , <?php echo $surat_kematian->jabatan_pejabat; ?> Desa Banyusri Kecamatan
    Wonosegoro Kabupaten Boyolali, menerangkan bahwa pada:
</font>
<br />
<br>
<font>
Saya yang bertanda tangan dibawah ini :  
</font>
<?php
 $pelapor = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kematian->nik_pelapor'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $pelapor->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $pelapor->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $pelapor->tempat_lahir; ?> /
            <?= date('d F Y', strtotime($pelapor->tanggal_lahir)); ?>
        </td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pelapor->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pelapor->alamat; ?> <?php echo $pelapor->rt; ?> / <?php echo $pelapor->rw; ?>, Desa Banyusri</td>
    </tr>
</table>
<br />
 Dengan ini menyatakan dan melaporkan dengan sebenarnya, bahwa   :
 <?php
 $korban = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kematian->nik_korban'")->row();
?>
<table width="100%">
<tr>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $korban->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $korban->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $korban->tempat_lahir; ?> /
            <?= date('d F Y', strtotime($korban->tanggal_lahir)); ?>
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $korban->alamat; ?></td>
    </tr>
</table>

<br /> Telah meninggal dunia pada  :
<table width="100%">
    <tr>
        <td width="20%">Hari/Tanggal</td>
        <td width="3%">:</td>
        <td width="77%">
            <?php echo $surat_kematian->hari_kematian; ?> /
            <?= date('d F Y', strtotime($surat_kematian->tanggal_kematian)); ?>
        </td>
    </tr>
    <tr>
        <td>Jam</td>
        <td>:</td>
        <td><?php echo $surat_kematian->jam_kematian; ?></td>
    </tr>
    <tr>
        <td>Hubungan Sebagai</td>
        <td>:</td>
        <td><?php echo $surat_kematian->hubungan_sebagai; ?></td>
    </tr>
    <tr>
        <td>Tempat Meninggal</td>
        <td>:</td>
        <td><?php echo $surat_kematian->tempat_meninggal; ?></td>
    </tr>
    <tr>
        <td>Alasan Meninggak</td>
        <td>:</td>
        <td><?php echo $surat_kematian->alasan_meninggal ?></td>
    </tr>
</table>
<br>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<font style="text-align: center; margin-left: 50px;">
Demikian Surat Penyataan ini saya buat dengan sebenar-benarnya dan apabila 
dikemudian hari pernyataan saya ini tidak benar, maka saya bersedia 
diproses secara hukum sesuai dengan peraturan perundang-undangan dan 
dokumen yang diterbitkan akibat pernyataan ini menjadi tidak sah.
</font>

<br />
<br>
<br />
<br />



<table width="100%">
<tr >
        <td width="25%" style="text-align: center;;">Saksi 1</td>
        <td width="25%"></td>
        <td width="20%"></td>
        <td width="30%" style="text-align: center;">Banyusri, <?= date('d F Y', strtotime($surat_kematian->tanggal_surat_kematian)); ?></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center;" >Yang membuat pernyataan</td>
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
    <td ></td>
    <td ></td>
    <td ></td>
    <td style="text-align: center;">Materai</td>
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
    <td style="text-align: center;" ><b>(.........................)</td>
    <td></td>
    <td></td>
    <td style="text-align: center;" ><b><u><?php echo $surat_kematian->nama; ?></u></b></td>
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
  <td style="text-align: center;">Saksi 2</td>
  <td></td>
  <td></td>
  <td style="text-align: center;"><b>Mengetahui,</b></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td></td>
    <td style="text-align: center;" ><b><?php echo $surat_kematian->jabatan_pejabat ?>Banyusri</td>
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
    <td style="text-align: center;" ><b>(.........................)</td>
    <td></td>
    <td> </td>
    <td style="text-align: center;" ><b><u><?php echo $surat_kematian->nama_pejabat; ?></td>
</tr>





</table>
<script>
window.print();
</script>