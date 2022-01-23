<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title></title> -->
</head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <h3>Daftar Mahasiswa</h3>
                    <ul class="list-group">
                        <?php foreach ($data['mhs'] as $mhs) : ?>
                            <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                                <?= $mhs['nama']; ?>
                                <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary" style="color: blue;">detail</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>