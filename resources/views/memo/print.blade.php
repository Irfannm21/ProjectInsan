<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<table>
<tr>
<td><b>PT.INSANSANDANG INTERNUSA </b></td>
</tr>
<tr>
<td><b>JL. RAYA RANCAEKEK KM 22,5 </b></td>
</tr>
<tr>
<td><b>SUMEDANG </b></td>
</tr>
</table>



<table align="right">
<tr>
    <td><b>F.UMP.01-R0</b></td>
</tr>
</table>


</div>

<br>
<h2 align="center">MEMO</h2>
<hr>
<br>

<div class="container">
<table align="left">
<tr>
  <td>
    Dari / From
  </td>
  <td>:</td>
  <td>{{$memo->dari}}</td>
</tr>
<tr>
  <td>
    Kepada / To
  </td>
  <td>:</td>
  <td>{{$memo->kepada}}</td>
</tr>
<tr>
  <td>
    Perihal / Re
  </td>
  <td>:</td>
  <td>{{$memo->perihal}}</td>
</tr>
</table>
<table align="right">
<tr>
  <td>
    No
  </td>
  <td>:</td>
  <td>{{$memo->nomor}}</td>
</tr>
<tr>
  <td>
    Tanggal
  </td>
  <td>:</td>
  <td>{{$memo->tanggal}}</td>
</tr>

</table>

<br><br><br>
<br><br> 

{!! $memo->content !!}

</div>
</div>

</body>
</html>