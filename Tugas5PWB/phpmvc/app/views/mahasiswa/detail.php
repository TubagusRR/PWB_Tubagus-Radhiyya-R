<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6>
                <p class="card-text"><?= $data['mhs']['email']; ?></p>
                <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>