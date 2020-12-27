<?
// $fd=fopen("test1.php","r") or die("Невозможно открыть файл");
// while(!feof($fd)){
// //$str=htmlentities(fgets($fd));
// $str=htmlentities(fread($fd,400));
// echo $str."<br/>";
// }
// fclose($fd);

// $fd=fopen("hello.txt","w+") or die("Невозможно открыть файл");
// $str="Привет мир!";
// fputs($fd, $str);
// echo "Файл был успешно записан";
// fseek($fd,0);
// fputs($fd,"Хрю");
// fseek($fd, 0, SEEK_END);
// fputs($fd,"Новый год!");
// fclose($fd);

// if(file_exists("test1.php")){
//     $str=file_get_contents("test1.php");
//     echo $str;
// }
// else echo "File is not found!";

// $user=array("name"=>"Ivan", "age"=>35, "email"=>"ivan.k@i.ua");
// $str=json_encode($user);
// $fd=fopen("user.txt","w") or die("Невозможно открыть файл для записи");
// echo "File was written";
// echo $str;
// fwrite($fd,$str);
// fclose($fd);


$str="Привет мир PHP";
$arr=mb_split("\s",$str);
foreach($arr as $item)
echo "$item<br/>";