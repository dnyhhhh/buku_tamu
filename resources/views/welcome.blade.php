    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .landing-page {
        background-image: url('/storage/background.jpeg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        }

        .landing-page h1 {
        color: white;
        font-size: 80px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
        }
    </style>
    </head>
    <body>
    <div class="landing-page">
        <h1>Selamat Datang</h1>
        <a href="{{ route('buku_tamu.index') }}" class="btn btn-primary btn-lg" style="background-color: gold; color:black">Mulai</a>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
