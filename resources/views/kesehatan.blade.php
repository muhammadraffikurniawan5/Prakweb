<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
    <div class="col-8">
      <input id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <input id="jenis_kelamin" name="jenis_kelamin" type="text" class="form-control">
    </div>
  </div> 
</form>

<style>
table {
  border-collapse: collapse;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

table, th, td {
  border: 1px solid black;
  padding: 5px;
}
</style>

<table>
  <tr>
    <th>Jenis Tes</th>
    <th>Hasil Pemeriksaan</th>
    <th>Normal</th>
  </tr>
  <tr>
    <td>Tekanan Darah</td>
    <td></td>
    <td>120/80 mmhg</td>
  </tr>
  <tr>
    <td>Asam Urat</td>
    <td></td>
    <td>Pria:< 7 mg/dl | Wanita: < 6 mg/dl</td>
  </tr>
  <tr>
    <td>Kolesterol total</td>
    <td></td>
    <td>< 200 mg/dl</td>
  </tr>
  <tr>
    <td>Gula Darah</td>
    <td></td>
    <td>Puasa: 70-100 mg/dl</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>2 jam setelah makan: 100-150 mg/dl</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td>Sewaktu/acak: 70-125 mg/dl</td>
  </tr>
</table>
</body>
</html>