<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <form action="showCars.php" method="POST">
        <input type='submit' name='listCar' value='Список авто' class="btn btn-primary" />
    </form>
<?  
    if(isset($_POST["listCar"])){
        $fd = fopen("cars.txt", "r") or die("Невозможно открыть файл");
        while(!feof($fd))
        {
            $line=fgets($fd);
            $readname=substr($line,0,strpos($line, ":"));
            echo $readname."</br>";
        }
        fclose($fd);
    }
?>
</body>

</html>