<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f3ebf6;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h2 {
            text-align: center;
            color: #0a0091;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 50px;
            background-color: #f2f2f2;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 100px;
            padding: 10px 30px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="" method="POST">
            <h2>Forget Password</h2>
            <?php if (isset($error)) { ?>
                <div class="error"><?php echo $error ?></div>
            <?php } ?>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
