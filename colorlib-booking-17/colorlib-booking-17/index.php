<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
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
		.form-group label {
    font-weight: normal; /* Menetapkan gaya huruf biasa (non-bold) pada label */
}

.form-control {
    /* Mungkin perlu ditambahkan gaya CSS tambahan sesuai kebutuhan desain */
}
    </style>
	
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Buat Reservasi</h2>
								<p>Selamat Datang di Camp Area Umbul Bengkok Baturraden. Pesan tenda dengan mengisikan data anda.</p>
							</div>
						</div>
						<form method="post" action="tambah_aksi.php"> 
						<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="checkin" class="form-label">Check In</label>
            <input name="checkin" id="checkin" class="form-control" type="date" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="checkout" class="form-label">Check Out</label>
            <input name="checkout" id="checkout" class="form-control" type="date" required>
        </div>
    </div>
</div>

							<div class="form-group">
								<span class="form-label"></span>
								<div class="form-check">
								<div class="form-group">
								<div class="form-group">
								<label for="jenis">Room Type:</label>
    <select name="jenis" id="jenis" onchange="calculateTotal()" required>
        <option value="Tempat">Tempat</option>
        <option value="Tenda">Tenda</option>
    </select>

    <label for="bayar">Total Pembayaran:</label>
    <input type="text" name="bayar" id="total_amount" readonly>

    
								<span class="select-arrow"></span>
							</div>
							<label for="metode">Metode Pembayaran:</label>
    <select name="metode" id="metode" required>
        <option value="credit_card">Kartu Kredit</option>
        <option value="bank_transfer">Transfer Bank</option>
        <option value="cash">Tunai</option>
    </select>
							<div class="form-btn">
								<button class="submit-btn">Reservasi</button>
							</div>
						</form>
						<script>
    function calculateTotal() {
        var jenisSelect = document.getElementById("jenis");
        var totalAmountInput = document.getElementById("total_amount");

        var hargaTempat = 100000;
        var hargaTenda = 150000;

        var selectedJenis = jenisSelect.value;
        var totalAmount = (selectedJenis === "Tempat") ? hargaTempat : hargaTenda;

        totalAmountInput.value = totalAmount.toLocaleString(); // Menambah pemisah ribuan
    }
</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>