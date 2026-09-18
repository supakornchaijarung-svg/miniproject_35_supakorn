<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Cinzel', serif;
            color: #d9c9a3;
            background:
                radial-gradient(ellipse at 50% 30%, rgba(90,60,30,0.35), transparent 60%),
                linear-gradient(180deg, #1a1410 0%, #100c09 60%, #0a0705 100%);
        }

        form {
            width: 340px;
            padding: 45px 40px;
            background:
                linear-gradient(180deg, rgba(43,33,22,0.9), rgba(20,15,10,0.95)),
                repeating-linear-gradient(45deg, rgba(0,0,0,0.05) 0 2px, transparent 2px 4px);
            border: 1px solid #6b4e2e;
            outline: 1px solid #2a1f14;
            outline-offset: 6px;
            box-shadow:
                0 0 0 1px rgba(139,101,53,0.2),
                0 25px 60px rgba(0,0,0,0.75),
                inset 0 0 40px rgba(0,0,0,0.5);
            position: relative;
        }

        form::before {
            content: "RESIDENT EVIL miniproject";
            display: block;
            text-align: center;
            font-family: 'Cinzel', serif;
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 0.3em;
            color: #b3272c;
            margin-bottom: 8px;
            text-shadow: 0 0 12px rgba(179,39,44,0.5);
        }

        form::after {
            content: "";
            display: block;
            width: 60px;
            height: 2px;
            margin: 0 auto 30px auto;
            background: linear-gradient(90deg, transparent, #8b6535, transparent);
        }

        label {
            display: block;
            font-family: 'Special Elite', monospace;
            font-size: 0.75rem;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: #8b6535;
            margin-top: 18px;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            font-family: 'Special Elite', monospace;
            font-size: 0.95rem;
            color: #d9c9a3;
            background: rgba(10, 7, 5, 0.7);
            border: 1px solid #4a3a24;
            outline: none;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        input[type="text"]:focus {
            border-color: #b3272c;
            box-shadow: 0 0 10px rgba(179,39,44,0.35);
        }

        br { line-height: 0; }

        button {
            width: 100%;
            margin-top: 32px;
            padding: 13px;
            font-family: 'Cinzel', serif;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #d9c9a3;
            background: linear-gradient(180deg, #2a1f14, #16110b);
            border: 1px solid #8b6535;
            cursor: pointer;
            transition: background 0.25s ease, color 0.25s ease, border-color 0.25s ease;
        }

        button:hover {
            background: #6e1010;
            border-color: #b3272c;
            color: #f0e6d0;
        }
    </style>
    
<form action="check_login.php" method="post">
        <label for="">username</label>
        <input type="text" name="username" > <br>

        <label for="">password</label>
        <input type="text" name="password" > <br>

        <button>login</button>

</form>

</body>
</html>