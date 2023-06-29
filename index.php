<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Conversor de Temperatura</title>
    <style>
        body {
            background-color: #f2f7ff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #336699;
        }

        form {
            display: inline-block;
            background-color: #eaf3ff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #336699;
        }

        select, input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 15px;
            background-color: #336699;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #265580;
        }
    </style>
</head>
<body>
    <h1>Conversor de Temperatura</h1>
    <form action="conversor.php" method="post">
        <label>Tipo de conversão:</label>
        <select name="tipoTemp">
            <option value="1">ºC para ºF</option>
            <option value="2">ºF para ºC</option>
        </select>
        <br><br>
        <label>Temperatura:</label>
        <input type="number" name="temp">
        <input type="submit" value="Converter">
    </form>
</body>
</html>