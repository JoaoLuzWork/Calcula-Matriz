<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa" method="$_GET">
        <div>
            <label for="">Num1</label>
            <input type="number" name="v1">
        </div>
        <div>
            <label for="">Operação</label>
            <select name="op" id="">
                <option value="+">Soma</option>
                <option value="-">Menos</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
        </div>
        <div>
            <label for="">Num2</label>
            <input type="number" name="v2">
        </div>
        <input type="submit" value="calcular">
    </form>
</body>
</html>