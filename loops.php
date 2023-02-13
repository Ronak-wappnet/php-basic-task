<?php

echo"------------------> loops in php <------------------<br>";
echo"1.for loop <br><br><br>";

//printing * pattern using for loop

for($colum=1; $colum<=5; $colum++)
{
    for($raw=1; $raw<=$colum; $raw++)
    {
        echo ' * ';
    }
    echo '<br>';  
}  
for($colum=5; $colum>=1; $colum--)
{
    for($raw=1; $raw<=$colum; $raw++)
    {
        echo ' * ';
    }
    echo '<br>';  
}  

echo "<br>2. while loop <br><br><br>"; // star pattern using while loop

$colum=1;
while($colum<=5)
{
    $raw=1;
    while($raw<=$colum)
    {
      echo"*  ";
      $raw++;      
    }
    echo"<br>";
    $colum++;
}

echo "<br>3. do while loop <br><br><br>";
// loop using do while 
$colum=5;
do{
	$raw=4;
	do{
		
		$raw--;
	}while($raw>5-$colum);
	$raw=5;
	do{
		echo "*";
		$raw--;
	}while($raw>=$colum); 
	$colum--;
	echo "</br> ";
}while ($colum >= 1);
 
echo "<br>4. foreach loop <br><br>";
//printing associative array using foreach

$useid_password=array("Ronak.wappnet"=>"Ronak@0222","mihir.wappnet"=>"Mihir@2000","rakesh.wappnet"=>
"rakesh@wappnet12");
//print_r($useid_password);
foreach($useid_password as $id => $pass)
{
    echo "User id => ".$id." password => ".$pass."<br>";
}

?>