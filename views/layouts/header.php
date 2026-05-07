<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog Pribadi</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f7fb;
        }

        .navbar{
            background:white;
            padding:18px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        .logo{
            font-size:24px;
            font-weight:700;
            color:#4f46e5;
        }

        .menu a{
            margin-left:20px;
            text-decoration:none;
            color:#374151;
            font-weight:500;
        }

        .menu a:hover{
            color:#4f46e5;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:40px auto;
        }

        .btn{
            display:inline-block;
            padding:10px 18px;
            background:#4f46e5;
            color:white;
            text-decoration:none;
            border-radius:8px;
        }

        .btn:hover{
            background:#4338ca;
        }

    </style>

</head>
<body>

<div class="navbar">

    <div class="logo">Blog MVC</div>

    <div class="menu">
        <a href="?page=post">Post</a>
        <a href="?page=category">Kategori</a>
    </div>

</div>