<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form class="container row g-12" method = "POST" action= "db.php">
  
<div class="col-md-4">
    <label for="validationDefault01" class="form-label">Prenom</label>
    <input type="text" class="form-control" name ="validationDefault01" id="validationDefault01" value="" placeholder="prenom" required>
  </div>

  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Nom</label>
    <input type="text" class="form-control" name ="validationDefault02" id="validationDefault02" value="" placeholder="nom" required>
  </div>

  <div class="col-md-6">
  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
  <div class="col-sm-7">
    <input type="email" class="form-control form-control-sm" name ="colFormLabelSm" id="colFormLabelSm" placeholder="Email">
  </div>
</div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">ENVOYER</button>
  </div>
</form>
</body>
</html>