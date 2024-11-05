<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .card-img-top {
      height: 300px;
      object-fit: cover;
    }
  </style>
</head>
</head>

<body>
  <div class="container">
    <div class="row" style="margin-top:   50px;">
      <h1 style="text-align: center; margin-bottom: 30px;">Choose your registration</h1>
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1611689102192-1f6e0e52df0a?q=80&w=2133&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="vaccination-image">
          <div class="card-body">
            <h5 class="card-title">Vaccination</h5>
            <p class="card-text">Protect yourself and your loved ones by getting vaccinated. Vaccines are a safe and effective way to prevent serious illnesses and keep our community healthy.</p>
            <a href="registration?appointment=<?= $_SESSION['vaccination'] = 'vaccination' ?>" class="btn btn-dark">
              Register for Vaccination
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1683899473434-3f9012bc804b?q=80&w=2133&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="family planning image">
          <div class="card-body">
            <h5 class="card-title">Family Planning</h5>
            <p class="card-text">Empower yourself with knowledge about family planning options. Learn how to manage your reproductive health and make informed decisions about your future.</p>
            <a href="registration?appointment=<?= $_SESSION['vaccination'] = 'family_planning' ?>" class="btn btn-dark">
              Register for Family Planning
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>