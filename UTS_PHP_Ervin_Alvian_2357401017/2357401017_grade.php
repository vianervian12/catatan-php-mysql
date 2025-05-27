<?php
$data = [
    ["nama"=>"Asep", "grade"=>"A"],
    ["nama"=>"Icha", "grade"=>"A"],
    ["nama"=>"Shane", "grade"=>"C"],
    ["nama"=>"Jojo", "grade"=>"D"],
    ["nama"=>"Willy", "grade"=>"A"],
    ["nama"=>"Aby", "grade"=>"B"],
    ["nama"=>"Julie", "grade"=>"E"],
    ["nama"=>"Nate", "grade"=>"B"],
    ["nama"=>"Osi", "grade"=>"C"]
];

function getKeterangan($grade) {
    switch ($grade) {
        case "A": return "Sangat Baik";
        case "B": return "Baik";
        case "C": return "Cukup";
        case "D": return "Kurang";
        case "E": return "Buruk";
        default: return "Tidak Diketahui";
    }
}

function getGradeColor($grade) {
    switch ($grade) {
        case "A": return "#4CAF50"; // Hijau
        case "B": return "#2196F3"; // Biru
        case "C": return "#FFC107"; // Amber
        case "D": return "#FF9800"; // Oranye
        case "E": return "#F44336"; // Merah
        default: return "#999";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Grade Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #89f7fe, #66a6ff);
            padding: 40px 20px;
            animation: fadeIn 1s ease-in;
        }

        h2 {
            text-align: center;
            color: #222;
            margin-bottom: 30px;
            animation: slideDown 0.8s ease-out;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            animation: fadeInUp 0.8s ease-in-out;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        th {
            background-color: #6200ea;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: background 0.3s ease;
        }

        .grade-label {
            padding: 6px 12px;
            border-radius: 6px;
            color: #fff;
            font-weight: bold;
            display: inline-block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-20px); opacity: 0; }
            to   { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(20px); opacity: 0; }
            to   { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <h2>Tabel Grade Mahasiswa</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Grade</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($data as $index => $item): 
            $color = getGradeColor($item["grade"]);
        ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $item["nama"] ?></td>
            <td><span class="grade-label" style="background-color: <?= $color ?>"><?= $item["grade"] ?></span></td>
            <td><?= getKeterangan($item["grade"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
