<style type="text/css">
	<blade media|%20print%20and%20(width%3A%2021cm)%20and%20(height%3A%2033cm)%20%7B><blade page|%20%7B>margin-top: 3cm;
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
	<blade page|%20%7B>size: portrait;
	}

</style>
<img src="<?php echo base_url('assets/images/KopBoyo.png'); ?>" width="100%">
<br /><br />
<center><b>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM)</b> <br />
	<font size="5"><u><b>KEBENARAN DATA KELAHIRAN</b></u></font><br />Nomor:
	474.1/<?php echo $surat_kelahiran->id_surat_kelahiran; ?>/Desa/<?php echo substr($surat_kelahiran->tanggal_surat_kelahiran, 0, 4); ?>
</center>
<br /><br />
<font align="justify">
	Saya yang bertanda tangan dibawah ini :
</font>

<!-- //Keterangan Pelapor -->
<?php
$pelapor = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_pelapor'")->row();
?>
<table width="100%">
	<tr>
		<td width="20%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td width="77%"><?php echo $pelapor->nama; ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $pelapor->pekerjaan; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $pelapor->alamat; ?></td>
	</tr>
</table>

<br>

<!-- //Keterangan Anak -->
<table width="100%">
	<tr>
		<td width="20%">Nama Anak</td>
		<td width="3%">:</td>
		<td width="77%"><b><?php echo $surat_kelahiran->nama_anak; ?></b></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $surat_kelahiran->kelamin_anak; ?></td>
	</tr>
	<tr>
		<td>Hari</td>
		<td>:</td>
		<td><?php echo $surat_kelahiran->hari_lahir_anak; ?></td>
	</tr>
	<tr>
		<td>Tempat/Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $surat_kelahiran->tempat_lahir_anak; ?> /
			<?= date('d F Y', strtotime($surat_kelahiran->tanggal_lahir_anak)); ?></td>
	</tr>
	<tr>
		<td>Pukul</td>
		<td>:</td>
		<td><?php echo $surat_kelahiran->jam_lahir_anak; ?></td>
	</tr>
</table>
<br />

<!-- //Keterangan Ibu -->
Adalah Anak Kandung Dari seorang Ibu :
<?php
                    $ibu = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_ibu'")->row();
                    $ayah = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_ayah'")->row();
                    ?>
<table width="100%">
	<tr>
		<td width="20%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td width="77%"><?php echo $ibu->nama; ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $ibu->nik; ?></td>
	</tr>
	<tr>
		<td>Tempat / Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $ibu->tempat_lahir; ?>/<?= date('d F Y', strtotime($ibu->tanggal_lahir)); ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $ibu->pekerjaan; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $ibu->alamat; ?></td>
	</tr>
</table> <br>

<!-- //Keterangan Ayah -->
Juga Merupakan Anak Kandung Dari seorang Ayah
<br />
<table width="100%">
	<tr>
		<td width="20%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td width="77%"><?php echo $ayah->nama; ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $ayah->nik; ?></td>
	</tr>
	<tr>
		<td>Tempat / Tanggal lahir </td>
		<td>:</td>
		<td><?php echo $ayah->tempat_lahir; ?>/<?= date('d F Y', strtotime($ayah->tanggal_lahir)); ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $ayah->pekerjaan; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $ayah->alamat; ?></td>
	</tr>
</table>
<br />

<!-- //Keterangan Pelapor -->
Yang Lahir Dengan Pertolongan:
<?php
 $penolong = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kelahiran->nik_penolong'")->row();
?>
<table width="100%">
	<tr>
		<td width="20%">Nama Lengkap</td>
		<td width="3%">:</td>
		<td width="77%"><?php echo $penolong->nama; ?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $penolong->nik; ?></td>
	</tr>
	<tr>
		<td>Tempat / Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $penolong->tempat_lahir; ?>/<?= date('d F Y', strtotime($penolong->tanggal_lahir)); ?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $penolong->pekerjaan; ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $penolong->alamat; ?></td>
	</tr>
</table>

<br /> <br /> <br /> <br />


<font style="text-align: center; margin-left: 50px;">
	Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan
	apabila dikemudian hari ternyata pernyataan saya ini tidak benar,
	maka saya bersedia diproses secara hukum sesuai
	dengan peraturan perundang-undangan dan dokumen yang diterbitkan
	akibat dari pernyataan ini menjadi tidak sah. <br /><br />
</font>
<table width="100%">
	<tr>
		<td width="25%" style="text-align:center;">Saksi 1</td>
		<td width="25%"></td>
		<td width="20%"></td>
		<td width="30%" style="text-align:center;">
			<?= date('d F Y', strtotime($surat_kelahiran->tanggal_surat_kelahiran)); ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;">Yang mengetahui pernyataan</td>
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
		<td style="text-align:center;"><b><u> <?php echo $surat_kelahiran->nama_pejabat; ?></u></b></td>
	</tr>

	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td style="text-align:center;"><b>NIP. <?php echo $surat_kelahiran->nip_pejabat; ?></b></td>
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
		<td width="30%" style="text-align:center;">Yang membuat Pernyataan</td>
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
        <td></td>
        <td></td>
        <td style="text-align:center;"> Materai </td>
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
		<td style="text-align:center;"><b><u> <?php echo $pelapor->nama; ?></u></b></td>
	</tr>



</table>
<br>
<br>
<span>Keterangan :</span>
<p style="font-size: small; margin: 0;"><i>
		Lampiran ini digunakan dalam hal persyaratan berupa Surat Keterangan
		Kelahiran dari RS/Puskesmas/Klinik/Polindes/Bidan
		Praktik Mandiri tidak terpenuhi dan atau lahir di rumah.
		*) Ditulis nama ayah/ibu yang menerangkan; **)
		Ditulis urutan kelahiran yang mengacu pada status perkawinan
		orang tua; ***)
		Rumah Sakit/Rumah Bersalin/Puskesmas/Polindes/Bidan
		Praktik Mandiri ****) Ditulis nama ayah kandung dan ibu kandung; *****)
		Ditulis nama penolong kelahiran (Dukun Bayi/Bidan).
	</i></p>
<script>
	window.print();

</script>
