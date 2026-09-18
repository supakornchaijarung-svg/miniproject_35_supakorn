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

        form {
            max-width: 480px;
            background: rgba(20, 23, 25, 0.75);
            border: 1px solid #3a3d3f;
            padding: 30px 35px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
        }

        label {
            display: block;
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #8a8d8f;
            margin-top: 16px;
            margin-bottom: 6px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px 12px;
            font-family: 'Oswald', sans-serif;
            font-size: 0.95rem;
            color: #e8e6e1;
            background: #16181a;
            border: 1px solid #3a3d3f;
            outline: none;
            transition: border-color 0.2s ease, background 0.2s ease;
        }

        input[type="text"]:focus,
        select:focus {
            border-color: #a11f1f;
            background: #1b1e20;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            background-image: linear-gradient(45deg, transparent 50%, #8a8d8f 50%),
                               linear-gradient(135deg, #8a8d8f 50%, transparent 50%);
            background-position: calc(100% - 18px) center, calc(100% - 13px) center;
            background-size: 5px 5px, 5px 5px;
            background-repeat: no-repeat;
        }

        select option {
            background: #16181a;
            color: #e8e6e1;
        }

        br {
            line-height: 0;
        }

        button {
            margin-top: 26px;
            padding: 12px 30px;
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #e8e6e1;
            background: linear-gradient(180deg, #202426, #16181a);
            border: 1px solid #6e1414;
            cursor: pointer;
            transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
        }

        button:hover {
            background: #6e1414;
            border-color: #a11f1f;
            color: #f0eee8;
        }
    </style>
</head>
<body>
    <?php

$id = $_GET["id"];

include "list/connect.php";

 $n = "SELECT * FROM seasons WHERE season_id = '$id' ";

  $result = mysqli_query($con, $n);

  $ss = mysqli_fetch_assoc($result);

//   var_dump($ss);

?>

 <form action="list/update_character.php" method="post">

    <label for="">season</label>
    <input type="text" name="name" value="<?= $ss["season_id"] ?>" > <br>

    <label for="">title</label>
    <input type="text" name="title" value="<?= $ss["title"] ?>" > <br>

    <label for="">release year</label>
    <input type="text" name="release_year" value="<?= $ss["release_year"] ?>" > <br>

    <label for="">character</label>
    <input type="text" name="characters_display" value="<?= $ss["Characters_id"] ?>" > <br>

    <label for="">platform</label>
    <input type="text" name="platform" value="<?= $ss["platform"] ?>" > <br>

    <label for="">game engine</label>
    <input type="text" name="game_engine" value="<?= $ss["game_engine"] ?>" > <br>

    <label for="">poster</label>
    <input type="text" name="poster_img" value="<?= $ss["poster_img"] ?>" > <br>


    <?php
        $sql2 = "SELECT * FROM characters";
        $result2 = mysqli_query($con, $sql2);
    ?>

    <label for="">chose character</label>
    <select name="character_id" id="">
    <?php
      foreach($result2 as $ch){
        ?>
        <option value="<?= $ch["characters_id"] ?>"
            <?= $ss['Characters_id'] == $ch['characters_id'] ? 'selected' : '' ?>
            >
            <?= $ss["Characters_id"] ."_". $ch["name"] . " ชื่อ" ?>
        </option>
        <?php
      }
    ?>
    </select>

    <br>    
    <button> บันทึก</button>
    </form>
</body>
</html>