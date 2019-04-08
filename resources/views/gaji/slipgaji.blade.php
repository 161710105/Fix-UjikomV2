<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title></title>
</head>
@foreach($gaji as $data)
<body>

	<p style="text-align: center;"><strong>SLIP GAJI</strong></p>
<hr />
<table style="width: 217px;">
<tbody>
<tr>
<td style="width: 105px;">Nama</td>
<td style="width: 21px;">:</td>
<td style="width: 216px;">{{ $data->nama }}</td>
</tr>
<tr>
<td style="width: 105px;">Jabatan</td>
<td style="width: 21px;">:</td>
<td style="width: 216px;">{{ $data->nama_jabatan}}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 600px; height: 80px;">
<tbody>
<tr>
<td style="width: 23px;">NO</td>
<td style="width: 403px;">KETERANGAN</td>
<td style="width: 164px;">JUMLAH</td>
</tr>
<tr>
<td style="width: 23px;">1</td>
<td style="width: 403px;">Gaji Pokok</td>
<td style="width: 164px;">{{ $data->gaji_pokok }}</td>
</tr>
<tr>
<td style="width: 23px;">2</td>
<td style="width: 403px;">Tunjangan Jabatan</td>
<td style="width: 164px;">{{ $data->tunjangan_jabatan }}</td>
</tr>
<tr>
<td style="width: 23px;">3</td>
<td style="width: 403px;">Tunjangan Keluarga</td>
<td style="width: 164px;">{{ $data->tunjangan_keluarga }}</td>
</tr>
<tr>
<td style="width: 23px;">4</td>
<td style="width: 403px;">Uang Lembur</td>
<td style="width: 164px;">{{ $data->uang_lembur }}</td>
</tr>
<tr>
<td style="width: 23px;">&nbsp;</td>
<td style="width: 403px;">&nbsp;</td>
<td style="width: 164px;">______________( + )</td>
</tr>
<tr>
<td style="width: 23px;">&nbsp;</td>
<td style="width: 403px;">&nbsp;</td>
<td style="width: 164px;">

	<?php $a = $data->gaji_pokok;
		  $b = $data->tunjangan_keluarga;
		  $c = $data->tunjangan_jabatan;
		  $e = $data->uang_lembur;

		  $total1 = $a + $b + $c + $e;

		  echo $total1; ?>
		  	
</td>
</tr>
<tr>
<td style="width: 23px;">5</td>
<td style="width: 403px;">Potongan PPh 5%</td>
<td style="width: 164px;">

	<?php $a = $data->gaji_pokok;
		  $b = $data->tunjangan_keluarga;
		  $c = $data->tunjangan_jabatan;
		  $e = $data->uang_lembur;

		  $total1 = $a + $b + $c + $e;
		  $total2 = ($total1 * 5)/100;

		  echo $total2; ?>
</td>
</tr>
<tr>
<td style="width: 23px;">&nbsp;</td>
<td style="width: 403px;">&nbsp;</td>
<td style="width: 164px;">_______________( - )</td>
</tr>
<tr>
<td style="width: 23px;">&nbsp;</td>
<td style="width: 403px;">&nbsp;</td>
<td style="width: 164px;">

	<?php $a = $data->gaji_pokok;
		  $b = $data->tunjangan_keluarga;
		  $c = $data->tunjangan_jabatan;
		  $e = $data->uang_lembur;

		  $total1 = $a + $b + $c + $e;
		  $total2 = ($total1 * 5)/100;
		  $total3 = ($total1 - $total2);

		  echo $total3; ?>
</td>
</tr>
<tr>
<td style="width: 23px;">6</td>
<td style="width: 403px;">Potongan BPJS 2%</td>
<td style="width: 164px;">
	
	<?php $a = $data->gaji_pokok;
		  $b = $data->tunjangan_keluarga;
		  $c = $data->tunjangan_jabatan;
		  $e = $data->uang_lembur;

		  $total1 = $a + $b + $c + $e;
		  $total2 = ($total1 * 5)/100;
		  $total3 = ($total1 - $total2);
		  $total4 = ($total3 * 2)/100;

		  echo $total4; ?>
</td>
</tr>
<tr>
<td style="width: 23px;">&nbsp;</td>
<td style="width: 403px;">&nbsp;</td>
<td style="width: 164px;">_______________( - )</td>
</tr>
</tbody>
</table>
<hr />
<p style="text-align: left;"><strong>Total</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>RP. <?php $a = $data->gaji_pokok;
		  $b = $data->tunjangan_keluarga;
		  $c = $data->tunjangan_jabatan;
		  $e = $data->uang_lembur;

		  $total1 = $a + $b + $c + $e;
		  $total2 = ($total1 * 5)/100;
		  $total3 = ($total1 - $total2);
		  $total4 = ($total3 * 2)/100;
		  $total5 = $total3 - $total4;

		  echo $total5; ?></strong></p>

</body>
@endforeach
</html>