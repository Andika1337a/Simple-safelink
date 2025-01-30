<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safelink</title>
</head>
<body>
    <h1>Safe Link</h1>
    <p>Anda akan diarahkan ke tautan yang aman. Klik tombol di bawah ini untuk melanjutkan.</p>
    <button onclick="redirectToLink()">Lanjutkan</button>

    <script>
        function redirectToLink() {
            // Ganti dengan URL tujuan akhir
            const targetUrl = "https://www.example.com";
            
            // Redirect ke halaman verifikasi atau peringatan
            window.location.href = "verify.php?url=" + encodeURIComponent(targetUrl);
        }
    </script>
</body>
</html>
