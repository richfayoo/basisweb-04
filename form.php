<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5 mx-auto" style="width: 500px;">
    
    
    <?php if (isset($_POST["submit"])):?>
        <h2 class="mb-4">Konfirmasi Data</h2>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <h3><?= $_POST["name"]?></h3>
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <h3><?= $_POST["email"]?></h3>
      </div>
      
      <div class="mb-3">
        <label for="gender" class="form-label">Gender</label><br>
        <h3><?= $_POST["gender"]?></h3>
        </div>
        
        <div class="mb-3">
          <label for="dob" class="form-label">Tanggal Lahir</label>
          <h3><?= $_POST["date"]?></h3>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
  </div>
  <?php endif;?>
  

    <form method="post">
    <?php if( !isset($_POST["submit"])): ?>
        <h2 class="mb-4">Form Pendaftaran</h2>
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Masukkan nama anda" name="name" required>
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Masukkan email anda" name="email" required>
      </div>
      
      <div class="mb-3">
        <label for="gender class="form-label">Gender</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
          <label class="form-check-label" for="male">Male</label>
        </div>

      </div>
      
      <div class="mb-3">
        <label for="dob" class="form-label">Tanggal Lahir</label>
        <input type="date" name="date" class="form-control" id="dob" required>
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <?php endif;?>
    </form>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
