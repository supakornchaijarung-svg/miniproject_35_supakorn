<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <style>
        body {
            margin: 0;
            padding: 50px 40px 40px 70px;
            min-height: 100vh;
            font-family: 'Oswald', sans-serif;
            color: #e8e6e1;
            background:
                radial-gradient(ellipse at 20% 0%, rgba(60,65,68,0.35), transparent 55%),
                radial-gradient(ellipse at 100% 100%, rgba(20,10,10,0.6), transparent 60%),
                linear-gradient(180deg, #060708 0%, #101315 40%, #0a0c0d 100%);
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 40px;
            bottom: 40px;
            left: 30px;
            width: 2px;
            background: linear-gradient(180deg, transparent, #8a8d8f 15%, #8a8d8f 85%, transparent);
            opacity: 0.6;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #3a3d3f !important;
            background: rgba(20, 23, 25, 0.75);
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
            width: 100%;
        }

        thead th {
            font-weight: 500;
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #e8e6e1;
            text-align: left;
            padding: 16px 14px;
            background: linear-gradient(180deg, #202426, #16181a);
            border: 1px solid #3a3d3f !important;
            border-bottom: 2px solid #6e1414 !important;
        }

        tbody tr {
            border-bottom: 1px solid #3a3d3f;
            transition: background 0.2s ease;
        }

        tbody tr:nth-child(even) {
            background: rgba(255,255,255,0.02);
        }

        tbody tr:hover {
            background: rgba(110, 20, 20, 0.18);
        }

        td {
            padding: 14px;
            font-size: 0.95rem;
            border: 1px solid #3a3d3f !important;
            vertical-align: middle;
        }

        img {
            width: 200px;
            display: block;
            border: 1px solid #3a3d3f;
            filter: grayscale(35%) contrast(1.05) brightness(0.9);
            transition: filter 0.25s ease;
        }

        img:hover {
            filter: grayscale(0%) contrast(1.1) brightness(1);
        }

        a {
            color: #8a8d8f;
            text-decoration: none;
            font-size: 0.9rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            margin-right: 25px;
            display: inline-block;
            padding: 8px 4px;
            border-bottom: 1px solid transparent;
            transition: color 0.2s ease, border-color 0.2s ease;
        }

        a:hover {
            color: #a11f1f;
            border-color: #a11f1f;
        }

        a::before {
            content: "▸ ";
            color: #a11f1f;
        }
    </style>
</head>
<body>
    <?php
include "list/connect.php";
$n = "SELECT * FROM seasons";
$result = mysqli_query($con, $n);
?>
<a href="add_character.php">เพิ่มตัวละคร</a>

<table border=1>
<thead>
 <th>season</th>
            <th>title</th>
            <th>release year</th>
            <th>character</th>
            <th>platform</th>
            <th>game engine</th>
            <th>poster</th>
<th>จัดการ</th>
</thead>

<?php
foreach($result as $n){
?>
<tr>
 <td><?= $n["season_id"] ?></td>
                    <td><?= $n["title"] ?></td>
                    <td><?= $n["release_year"] ?></td>
                    <td><?= $n["Characters_id"] ?></td>
                    <td><?= $n["platform"] ?></td>
                    <td><?= $n["game_engine"] ?></td>
<td>
<img
src="<?= $n["poster_img"] ?>"
                            style="width:200px"
>
</td>
<td>
    <a href="edit_character.php?id=<?= $n["season_id"] ?>">เปลี่ยนตัวละคร</a>

    <a href="list/delete_character.php?id=<?= $n["season_id"] ?>">ลบตัวละคร</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>