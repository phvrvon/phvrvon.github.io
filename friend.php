<body>
<?php
include("header.html");
?>
<br>
<form action="friend.php" method="post">
Name: <input type="text" name="name">
<input  type="submit" value="Add new friend"> 
</form>




<?php
$friend =array();
echo "<h1>My best friends : </h1>";

if (isset($_POST['name'])) {
 $name = $_POST['name'];
}
if (isset($_POST['filter'])) {
    $filter = $_POST['filter'];

   }


$filename = 'text2.txt';
$fiole = fopen( $filename, "a+" );
   if (isset($_POST['delete'])) {

    echo $_POST['delete'];
    $indexToBeRemoved = $_POST['delete'];
    unset($friends[$indexToBeRemoved]);
    $friends= array_values($friends);
    print_r($friend);

}
if (isset($_POST['startingWith'])) {
    $filter = $_POST['filter'];
    while(!feof($fiole)) {
        $f =fgets($fiole);
        $a= strpos($f,$filter);
   
        if ($a!== false && $a== 0) {
        echo " <ul><li> $f <br> </li> </ul>";

             }
       }


   }
else if (isset($_POST['filter'])) {

    $filter = $_POST['filter'];
    while(!feof($fiole)) {
        $f =fgets($fiole);
        $f1= strstr($f,$filter);
        if  ($f1!= "") {
        echo " <ul><li> $f <br> </li> </ul>";}
       }

   }
   else{
while(!feof($fiole)) {
    $n =fgets($fiole);
    array_push($friend, "$n");

    if  ($n!= "") {

    echo " <ul><li> $n   
      <form action='friend.php' method='post'>    
 <button type='submit'
    name='delete' value='$i'>Delete</button> </li> </ul>
    </form>";
   

        $i=$i+1;
}
   }

  
if ( $fiole != false && $name!= "") {
    array_push($friend, "$name");

 echo "<b>$name  <button type='submit' name='delete' value='$i'>Delete</button></b><br>";
 $i=$i+1;

 fwrite( $fiole, "$name\n" );
 fclose( $fiole );
}
}


?>



<form action="friend.php" method="post">
<input type="text" name="filter">
<input type="checkbox" name="startingWith" value="TRUE">Only names starting with</input>

<input  type="submit" value="Filter list"> 
</form>
<?php


include("footer.html");

?>
</body>