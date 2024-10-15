<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Singkat</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url(stream-binary-code-design-vector_53876-164420.jpg);
            color: #333;
        }
        .profile-container {
            background: #222327;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 350px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .profile-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 20x0%;
            height: 200%;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
        }
        .profile-container:hover::before {
            opacity: 1;
        }
        .profile-container:hover {
            transform: scale(1.05);
        }
        .profile-container h1 {
            margin: 0;
            color: #29fd53;
            font-size: 24px;
        }
        .profile-container p {
            font-size: 16px;
            margin: 10px 0;
            color: white;
        }
        .profile-container p span {
            font-weight: bold;
            color: #29fd53;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h1>Profil</h1>
        <?php
        $name = "Fathir Al farisi";
        $age = 16;
        $school = "SMKN 2 BANDUNG";
        $dream = "Pengusaha Sukses";

        echo "<p><span>Nama:</span> $name</p>";
        echo "<p><span>Umur:</span> $age tahun</p>";
        echo "<p><span>Sekolah:</span> $school</p>";
        echo "<p><span>Cita-cita:</span> $dream</p>";
        ?>
    </div>
</body>
</html>