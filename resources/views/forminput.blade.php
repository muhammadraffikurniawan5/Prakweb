<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
    <h1 style="text-align: center">Form HTML Pada PHP</h1>
    <form  method="POST" action="{{ url('form') }}">
    {{ csrf_field() }}
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="lokasi" class="col-4 col-form-label">Lokasi</label> 
    <div class="col-8">
      <select id="lokasi" name="lokasi" class="custom-select">
        <option value="surakarta">Surakarta</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki_Laki"> 
          <label for="jenis_kelamin_0" class="custom-control-label">L</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan"> 
          <label for="jenis_kelamin_1" class="custom-control-label">P</label>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Skill</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="PHP" checked="checked"> 
          <label for="skill[]_0" class="custom-control-label">PHP</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="MySQL" checked="checked"> 
          <label for="skill[]_1" class="custom-control-label">MySQL</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript"> 
          <label for="skill[]_2" class="custom-control-label">Javascript</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="HTML" checked="checked"> 
          <label for="skill[]_3" class="custom-control-label">HTML</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="CSS"> 
          <label for="skill[]_4" class="custom-control-label">CSS</label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  <br>
   @if(isset($data))
  <ul>
    <li>Nama: {{ $data['nama'] }}</li>
    <li>Email: {{ $data['email'] }}</li>
    <li>Lokasi: {{ $data['lokasi'] }}</li>
    <li>Jenis Kelamin: {{ $data['jk'] }}</li>
    <li>Skill:
                  @foreach($data['skill'] as $selectedSkill)
                  {{$selectedSkill}},
                  @endforeach
            </li>
  </ul>
  @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>