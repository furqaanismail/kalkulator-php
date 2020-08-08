<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>kalkulator Sederhana!</title>
</head>

<body>
    <?php 
        if(isset($_POST['hitung'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];

            switch ($operasi) {
                case 'tambah':
                    $hasil = $angka1 + $angka2;
                    break;
                case 'kurang':
                    $hasil = $angka1 - $angka2;    
                    break;
            }
        }
    ?>
    <div class="card text-white bg-primary mb-3 mx-auto w-50 mt-5">
        <div class="card-header">Kalkulator Sederhana</div>
        <div class="card-body">
            <form action="index.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="nilai1" name="angka1" placeholder="Enter Angka 1">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="nilai2" name="angka2" placeholder="Enter Angka 2">
                </div>
                <div class="form-group">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="operasi">
                        <option selected>Choose...</option>
                        <option value="tambah">Tambah</option>
                        <option value="kurang">Kurang</option>
                    </select>
                </div>  
                <div class="form-group">
                    <button type="submit" name="hitung" class="btn btn-success">Hitung</button>
                </div>
                <?php if(isset($_POST['hitung'])) {?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nilai2" name="hasil" value="<?= $hasil;  ?>">
                    </div>
                <?php }else{ ?>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nilai2" name="hasil" value="0">
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>