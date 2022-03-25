

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form method="post">
  <table width="200" border="1">
    <tbody> 
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" id="nama"></td>
      </tr>
      <tr>
<td>Umur</td>
<td> : </td>
<td><input type="text" name="umur"></td>
      </tr>

 <tr>
<td>Warga</td>
<td> : </td>
<td><input type="text" name="warga"></td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td><input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>
    </tbody>
  </table>
    
     <?php 

if (isset($_POST['submit'])) {
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$warga = $_POST['warga'];

}
?>

</form>
