<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card - {{ $nama }}</title>
    <!-- Google Fonts & Font Awesome Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            /* Background Gradasi Biru Muda Soft */
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card-container {
            background: #ffffff;
            width: 100%;
            max-width: 360px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(56, 189, 248, 0.15);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 25px;
            transition: transform 0.3s ease;
        }

        .card-container:hover {
            transform: translateY(-5px);
        }

        .profile-img-container {
            width: 150px;
            height: 150px;
            position: relative;
            margin-bottom: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    object-position: top; /* Menyesuaikan posisi foto agar bagian atas/hijab tidak kepotong */
    border: 5px solid #f0f9ff; 
    box-shadow: 0 8px 16px rgba(14, 165, 233, 0.15);
}

        .profile-name {
            font-size: 22px;
            font-weight: 600;
            color: #0369a1; /* Biru Tua Soft */
            margin-bottom: 5px;
            text-align: center;
        }

        .profile-role {
            font-size: 14px;
            color: #0284c7; /* Biru Sedang */
            font-weight: 400;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            text-align: center;
        }

        .info-list {
            width: 100%;
        }

        .info-item {
            display: flex;
            align-items: center;
            background: #f0f9ff; /* Background Item Biru Sangat Muda */
            border: 1px solid #e0f2fe;
            padding: 14px 18px;
            border-radius: 12px;
            margin-bottom: 12px;
            transition: all 0.2s ease;
        }

        .info-item:hover {
            background: #e0f2fe;
            border-color: #bae6fd;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: #bae6fd; /* Icon Box Biru Muda */
            color: #0284c7;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            margin-right: 15px;
        }

        .info-text {
            text-align: left;
        }

        .info-label {
            font-size: 11px;
            color: #38bdf8;
            text-transform: uppercase;
            font-weight: 600;
        }

        .info-value {
            font-size: 15px;
            color: #0c4a6e;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="card-container">
        
        <!-- Container Foto Profile di Tengah -->
        <div class="profile-img-container">
            <img src="{{ asset('img/profile.png') }}" alt="Profile Photo" class="profile-img" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($nama) }}&background=38bdf8&color=fff&size=128'">
        </div>

        <!-- Identity -->
<!-- Identity -->
<div class="profile-name">{{ preg_replace('/(?<!^)([A-Z])/', ' $1', $nama) }}</div>        <div class="profile-role">Mahasiswa</div>

        <!-- Details -->
        <div class="info-list">
            <div class="info-item">
                <div class="info-icon">
                    <i class="fa-solid fa-id-card"></i>
                </div>
                <div class="info-text">
                    <div class="info-label">NPM</div>
                    <div class="info-value">{{ $npm }}</div>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="info-text">
                    <div class="info-label">Kelas</div>
                    <div class="info-value">Kelas {{ $kelas }}</div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>