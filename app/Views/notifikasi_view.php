<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f5f5f5; /* Light gray background */
        }
        .card {
            margin-top: 50px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff; /* Primary blue */
            color: white;
            border-bottom: none;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .card-body {
            background-color: #ffffff; /* White background */
        }
        .alert-info {
            background-color: #e7f0fa; /* Light blue */
            color: #007bff; /* Primary blue text */
            border-color: #d0e3f0; /* Lighter blue border */
        }
        .btn-primary {
            background-color: #007bff; /* Primary blue */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3><i class="fas fa-bell"></i> Notifikasi</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Notifikasi Terkirim!</h4>
                    <p><?= $message; ?></p>
                </div>
                <a href="/dosen" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali ke Data Dosen</a>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
