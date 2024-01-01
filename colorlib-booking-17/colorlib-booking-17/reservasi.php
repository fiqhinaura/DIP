<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Form HTML Template</title>
    <!-- Google font -->
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .nota {
            display: flex;
            flex-direction: column;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
        }

        .nota-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .nota-label {
            font-weight: bold;
        }

        .nota-value {
            flex-grow: 1;
            text-align: right;
        }
    </style>
</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
            <h6>Reservasi
            </h6>
          

    <div class="table-responsive">
  <?php
  include 'koneksi.php';
  $data = mysqli_query($koneksi, "select * from ");
  while ($x = mysqli_fetch_array($data)) {
  ?>
    <div class="nota">
      <div class="nota-item">
        <span class="nota-label">Nama</span>
        <span class="nota-value">Aleena Hana</span>
      </div>
      <div class="nota-item">
        <span class="nota-label">No. HP</span>
        <span class="nota-value">0892527352738</span>
      </div>
      <div class="nota-item">
        <span class="nota-label">Email</span>
        <span class="nota-value">aleenahana@gmail.com</span>
      </div>
      <div class="nota-item">
        <span class="nota-label">Tanggal Check-In</span>
        <span class="nota-value"><?php echo $x['checkin']; ?></span>
      </div>
      <div class="nota-item">
        <span class="nota-label">Tanggal Check-Out</span>
        <span class="nota-value"><?php echo $x['checkout']; ?></span>
      </div>
      <div class="nota-item">
        <span class="nota-label">Jenis</span>
        <span class="nota-value"><?php echo $x['jenis']; ?></span>
      </div>
      <div class="nota-item">
        <span class="nota-label">Total Bayar</span>
        <span class="nota-value"><?php echo $x['bayar']; ?></span>
      </div>
      <div class="nota-item">
        <span class="nota-label">Metode Pembayaran</span>
        <span class="nota-value"><?php echo $x['metode']; ?></span>
      </div>
      <div class="nota-item">
        <!-- Jika Anda memiliki tombol atau elemen lain, Anda bisa menambahkannya di sini -->
      </div>
    </div>
  <?php
  }
  ?>
  
</div>

</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>