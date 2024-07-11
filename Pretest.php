<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>YUSUF DANDA</title>
  <style>
    .content-box {
      border: 1px solid #ddd;
      padding: 10px;
      margin-bottom: 10px;
    }
    body{
      background-color:#eee;

    }
    .radiuss{
      border-radius: 30px;
      border: 0px;
      background-color: white;
    }
    .padd{
      padding: 5px;
    }
    .imgg img{
      max-width: 300px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Barcelona FC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#nav1">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nav2">Swuad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nav3">Stadium</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#nav4">More</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid mt-4">
    <div class="row mt-4 px-4">
      <div class="col-12 text-center imgg radiuss py-2 ">
        <img src="picture/icon.png" class="img-fluid" alt="Responsive image">
      </div>
    </div>
    <div class="row mt-3 ms-1 me-2">
      <div class="col-md-8 border radiuss">
        <div class="padd mt-2 radiuss " id="nav1">
          <h5>Home</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, ab? Et, rem voluptatum repudiandae odio minima harum, dolorem magni saepe unde officiis recusandae eveniet doloremque facere est? Quo, accusamus deleniti!</p>
        </div>
        <div class="padd " id="nav2">
          <h5>Squad</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ratione omnis ut praesentium porro dolore rem earum officia eaque, in tempore dolor distinctio cumque dolores vel, excepturi culpa sapiente! Quidem laudantium sed nostrum, deleniti illo impedit a explicabo quibusdam libero velit? Rem debitis, aliquam ut pariatur odio maxime non vitae.</p>
        </div>
        <div class="padd " id="nav3">
          <h5>Stadium</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque minima repellendus eos adipisci, officiis sit distinctio impedit delectus eveniet. Quia incidunt asperiores quisquam, qui, quae sint at sed sequi, rerum ipsum adipisci aut aliquid accusantium.</p>
        </div>
        <div class="padd " id="nav4">
          <h5>More</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium repellat quaerat esse quas assumenda itaque sed distinctio illo commodi vitae, fugiat dolorem! Quo mollitia iusto, maxime nulla nisi illo dolore consequatur ullam cumque, ab amet nesciunt, omnis id harum?</p>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="padd radiuss text-center ms-auto mt-0">
          <h5>More</h5>
          <img src="picture\profile.jpg" class="img-fluid radiuss" style="height: 250px;" alt="Profile Image">
          <p class="text-justify fs-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti nobis, enim dignissimos asperiores praesentium temporibus quibusdam quae dolor et magnam.</p>
        </div>
      </div>
    </div>

    <?php
    $nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
    $komentar = isset($_POST['komentar']) ? $_POST['komentar'] : '';
    ?>

    <div class="row mt-4 ms-2 me-2 padd radiuss">
      <div class="col-12">
        <h5>FORM</h5>
        <form method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="Nama" value="<?php echo htmlspecialchars($nama); ?>">
          </div>
          <div class="mb-3">
            <label for="komentar" class="form-label">Komentar</label>
            <textarea class="form-control" id="komentar" rows="3" placeholder="Komentar" name="komentar"><?php echo htmlspecialchars($komentar); ?></textarea>
          </div>
          <button type="button" class="btn btn-success ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="populateModal()">
            Simpan
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="modal_nama" class="form-label"><b>Nama</b></label>
            <p id="modal_nama"></p>
          </div>
          <div class="mb-3">
            <label for="modal_komentar" class="form-label"><b>Komentar</b></label>
            <p id="modal_komentar"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script>
    function populateModal() {
      document.getElementById('modal_nama').innerText = document.getElementById('nama').value;
      document.getElementById('modal_komentar').innerText = document.getElementById('komentar').value;
    }
  </script>
</body>
</html>
