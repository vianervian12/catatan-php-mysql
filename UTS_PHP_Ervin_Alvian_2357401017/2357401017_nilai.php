<?php
$data = [
    ["nama"=>"Asep", "nilai"=>78],
    ["nama"=>"Icha", "nilai"=>89],
    ["nama"=>"Shane", "nilai"=>45],
    ["nama"=>"Jojo", "nilai"=>67],
    ["nama"=>"Willy", "nilai"=>85],
    ["nama"=>"Aby", "nilai"=>70],
    ["nama"=>"Julie", "nilai"=>100],
    ["nama"=>"Nate", "nilai"=>66],
    ["nama"=>"Osi", "nilai"=>83]
];

function getGrade($nilai) {
    if ($nilai >= 85) return "A";
    elseif ($nilai >= 75) return "B";
    elseif ($nilai >= 65) return "C";
    elseif ($nilai >= 55) return "D";
    else return "E";
}

function getGradeColor($grade) {
    switch ($grade) {
        case 'A': return '#4CAF50'; // green
        case 'B': return '#2196F3'; // blue
        case 'C': return '#FFC107'; // amber
        case 'D': return '#FF9800'; // orange
        case 'E': return '#F44336'; // red
        default: return '#999';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nilai Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #d4fc79, #96e6a1);
            padding: 40px 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            animation: fadeIn 1s ease;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
            animation: slideIn 0.8s ease-out;
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

        .grade {
            font-weight: bold;
            color: white;
            padding: 5px 12px;
            border-radius: 8px;
            display: inline-block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <h2>Tabel Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($data as $index => $item): 
            $grade = getGrade($item["nilai"]);
            $color = getGradeColor($grade);
        ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $item["nama"] ?></td>
            <td><?= $item["nilai"] ?></td>
            <td><span class="grade" style="background-color: <?= $color ?>"><?= $grade ?></span></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
