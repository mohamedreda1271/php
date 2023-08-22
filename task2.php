<?php
echo rand(10,20) . "<br>";
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[array_rand($friends)] . "<br>";
echo round(11.5,0,PHP_ROUND_HALF_ODD) . "<br>";// 11
$num2 = 9.4898; // 9.5
echo round($num2,1,PHP_ROUND_HALF_UP) . "<br>";
$num3 = -7.5; // -7
echo round($num3,0,PHP_ROUND_HALF_ODD) . "<br>";
echo "<pre>";
print_r(filter_list());
echo "</pre>";
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";
echo(filter_var($url1,FILTER_VALIDATE_URL))? "A Valid URL" : "Not A Valid URL"  .  "<br>";
echo(filter_var($url2,FILTER_VALIDATE_URL))? "A Valid URL" : "Not A Valid URL"  .  "<br>";
echo(filter_var($url3,FILTER_VALIDATE_URL))? "A Valid URL" : "Not A Valid URL"  .  "<br>";
echo "<br>";
echo(filter_var($url4,FILTER_VALIDATE_URL))? "A Valid URL" : "Not A Valid URL"  .  "<br>";
echo round(disk_total_space("C:")/1024/1024/1024/1024,2) . "terabyte" . "<br>";
echo round(disk_free_space("C:")/1024/1024/1024/1024,2). "terabyte" . "<br>";
echo "<br>";
echo round(filesize("c:\Users\star\Videos\lec8\lec8.mkv"))/1024/1024;
echo round(filesize("c:\Users\star\Videos\lec8\lec8.mkv"))/1024;
echo "<br>";
echo mkdir("programming/php",0777,true);
if(file_exists("programming")){
    rmdir("programming/php");
if(! file_exists("programming/php")){
    echo "Directory Programming/PHP Removed" . "<br>";
}
 echo rmdir("programming");
 if(! file_exists("programming/php")){
    echo "Directory Programming Removed";
 }} 
echo "<br>";
//$f="old/course.txt";
function change_permissions($f){
    $f="old/";
    if(is_dir($f)){
        echo "this not a file this is a directory" . "<br>";
    }else{
        if(pathinfo($f,PATHINFO_EXTENSION) != "txt"){
            echo "file extension is not txt" ."<br>";
        }else{
            chmod($f,0700);
            if(fileperms($f)== 33216){
                echo "permission changed <Br>";
            }
        }
    }
}
echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed

echo(pathinfo("index.php",PATHINFO_BASENAME)) . "<br>";
echo basename("index.php") . "<br>";
echo(pathinfo("index.php")["basename"]) . "<br>";
print_r(explode('\\',"index.php")[count(explode('\\',"index.php")) -1]) ."<br>";
echo "<br>";
/*$handl=fopen("lec.txt","r");
echo fread($handl,24) . "<br>";
rewind($handl);
echo "<br>";
echo fgets($handl);
echo fgets($handl);
rewind($handl);
echo "<br>";
echo fread($handl,24) . "<br>";
$array=file("lec.txt");
array_pop($array);
echo join($array);
fclose($handl);
echo "<br>";*/
$old="reda";
$new="mohamed";
$str=implode("",file("lec.txt"));
$hand=fopen("lec.txt","w");
$str=str_replace($old,$new,$str);
fwrite($hand,$str,strlen($str));
fclose($hand);





























?>