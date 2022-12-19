<?php 
$kelasiswa = DB::table('kelas')->join('siswas', 'kelas.kode_kelas', '=', 'siswas.kode_kelas')->get();
$no = 1 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12 my-4">
            <div class="table-responsive">
                <table class="table table-striped
                table-hover	
                table-borderless
                table-primary
                align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($kelasiswa as $kelas): ?>
                            <tr class="table-primary" >
                                <td scope="row"><?= $no++; ?></td>
                                <td><?= $kelas->nama; ?></td>
                                <td><?= $kelas->alamat; ?></td>
                                <td><?= $kelas->kelas; ?></td>
                                <td><a href="" class="btn-danger btn">Delete</a><a href="" class="mx-3 btn-success btn">Update</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                </table>
            </div>
            
        </div>
    </div>
</body>
</html>