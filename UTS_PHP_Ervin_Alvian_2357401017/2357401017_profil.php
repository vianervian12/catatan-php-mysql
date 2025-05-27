<?php
$profil = [
    "NIS" => "2357401017",
    "Nama" => "Ervin Alvian",
    "Kelas" => "MI23",
    "Jenis Kelamin" => "Laki-laki",
    "Email" => "ervinalvian31@gmail.com",
    "Nomor Handphone" => "083193857434"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Ervin Alvian</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e0c3fc, #8ec5fc);
            margin: 0;
            padding: 40px 20px;
            animation: fadeIn 1s ease-in;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
            overflow: hidden;
            animation: slideIn 0.8s ease-out;
        }

        th, td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        th {
            background-color: #6200ea;
            color: white;
            width: 30%;
        }

        tr:hover {
            background-color: #f2f2f2;
            transform: scale(1.01);
            transition: 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to   { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <h2>Profil Diri - Ervin Alvian</h2>
    <table>
        <?php foreach ($profil as $key => $value): ?>
        <tr>
            <th><?= $key ?></th>
            <td><?= $value ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
