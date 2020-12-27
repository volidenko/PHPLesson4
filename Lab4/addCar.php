<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?
    if(!isset($_POST["accept"]))
    {
        ?>
    <form action="addCar.php" method="POST">
        <div class="form-group"><label for='manufacturer'>Manufacturer:</label>
            <input type='text' name='manufacturer' class="form-control" required placeholder="Enter Manufacturer" /></div>
        <div class="form-group"><label for='model'>Model:</label>
            <input type='text' name='model' class="form-control" required placeholder="Enter Model" /></div>
        <div class="form-group"><label for='price'>Password:</label>
            <input type='number' name='price' class="form-control" required placeholder="Enter price" /></div>
        <input type='submit' name='accept' value='Add' class="btn btn-primary" />
    </form>
    <?
    }
    else    
    {
        $fd=fopen("cars.txt", "a+");
        while(!feof($fd)){
            $line=fgets($fd);
            $readname=substr($line,0,strpos($line, ":"));
        }
        $line=$_POST["manufacturer"].":".$_POST["model"].":".$_POST["price"]."\r\n";
        fputs($fd,$line);
        fclose($fd);
        echo "<h3><span style='color:green'>Авто добавлено!</span></h3>";
    }
?>
</body>

</html>