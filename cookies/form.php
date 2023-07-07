<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="xuly_form.php" method="GET">
            <h2>Đăng nhập</h2>
            <div class="input-group">
                <label for="username">Tên The loai:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="ThuTu">ThuTu:</label>
                <input type="ThuTu" id="ThuTu" name="ThuTu" required>
            </div>
            <div class="input-group">
                <label for="anhien">An Hien:</label>
                <input type="anhien" id="anhien" name="anhien" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Add">
            </div>
        </form>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 350px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 94%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .input-group input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        .input-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</body>
</html>