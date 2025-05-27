<?php
$nim = "2357401017";
$nama = "Ervin Alvian";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Loop 1000x</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            margin: 0;
            padding: 40px 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .table-container {
            max-height: 500px;
            overflow-y: scroll;
            border-radius: 10px;
            margin: auto;
            width: 80%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: #fff;
            animation: slideIn 0.8s ease-out;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: background 0.3s ease;
        }

        th {
            background-color: #6200ea;
            color: white;
            position: sticky;
            top: 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to   { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <h2>Menampilkan <?= $nim ?> - <?= $nama ?> sebanyak 1000x</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 1000; $i++): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $nama ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
