<?

// if (!rename("user.txt", "data/user.txt"))
// echo "Ошибка перемещения файла";
// else
// echo "Файл был перемещен";


// if(unlink("hello.txt")){
//     echo "File was deleted";
// }
// else
// echo "Error when deleting file!";


// if(mkdir("images")){
//     echo "Directory was added";
// }
// else
// echo "Error when creating dir!";


$path=getcwd();
echo $path."<br/>";
if(is_dir($path)){
    if($dh=opendir($path)){
        while(($file=readdir($dh))!==false)
        {
            if($file=="."||$file=="..") continue;
            else
            if(is_file($file))
            echo "File: $file<br/>";
            else
            echo "Directory: $file<br/>";
        }
    }
    closedir($dh);
}