<?php
    //array functions 

    $contact=array("RONAK"=>9723880403,"VISHVASH"=>9902712765,"MINESH"=>8758707269,"FATHER"=>9723880403,array("Ronak"=>9723880401));
    $contact2=array("Ronak"=>1723880403,"vishvash"=>9902712765,"minesh"=>8758707262,array("Ronak"=>9723880404)); 
    $key=array("milan","vipul");
    $value=array("972398892","9937627432");    
    $contact2=array("meet"=>8436763262,"mihir"=>9487638584);
    $a=array("a"=>"red","b"=>"green","c"=>"pink");
    $b=array("c"=>"blue","b"=>"yellow");
    $names=array("ronak","minesh","vishvash","rahul");
    $number=array(20,12,38,94,20,20,12);
   


    
    echo"---------------->printing array<-------------------<br><br>";
    print_r($contact);//printing array
    
    echo"<br><br>---------------->change key into lower<-------------------<br><br>";
    print_r(array_change_key_case($contact,CASE_LOWER));//change key into lower

    echo"<br><br>---------------->split array into chunks<-------------------<br><br>";
    print_r(array_chunk($contact,3,true));//split array into chunks

    echo"<br><br>---------------->get last column<-------------------<br><br>";
    $Ronak_number=array_column($contact,"Ronak");//get last column
    print_r($Ronak_number);

    echo"<br><br>---------------->mergin two array like first is array key and secound is array value<-------------------<br><br>";
    $combine=array_combine($key,$value);//mergin two array like first is array key and secound is array value
    print_r($combine);
    print_r($contact);

    echo"<br><br>---------------->array shows repated value count<-------------------<br><br>";
    print_r(array_count_values($contact));//function counts all the values of an array shows repated value count.

    echo"<br><br>---------------->compare two arrays and give output which is diffrent value<-------------------<br><br>";
    $result=array_diff_assoc($contact,$contact2);//compare two arrays and give difference or change value as output in array from.
    print_r($result);

    function condition($a,$b)
    {
        if($a==$b)
        {return 0;}
        else{
           return ($a>$b)?1:-1;       
        }
    }   
    // $result=array_diff_uassoc($contact,$contact2,"condition");//compare two array
    // print_r($result);
    echo"<br><br>---------------->array difference using user define function<-------------------<br><br>";

    $result=array_diff_ukey($contact,$contact2,"condition");
    print_r($result); // array difference using user define function

    echo"<br><br>---------------->fill the key value in array<-------------------<br><br>";
    $keys=array("a","b","c","d");
    $a1=array_fill_keys($keys,"blue"); // fill the key value in array
    print_r($a1);  
    
    echo"<br><br>---------------->array_key_exists() <-------------------<br><br>";

    if(array_key_exists("minesh",$contact))//return true false 
    {
            echo "key exists";
    }else
    {
        echo "key does not exist";
    }

    echo"<br><br>---------------->array_keys() <-------------------<br><br>";

    print_r(array_keys($contact));// retun keys 

    echo"<br><br>---------------->array_merge() <-------------------<br><br>";

    print_r(array_merge($contact,$contact2));//merging two array
    
    echo"<br><br>---------------->array_keys_recursive() <-------------------<br><br>";
   print_r(array_merge_recursive($a,$b));//merge recursively insted of overlapping perform two merge

   echo"<br><br>---------------->array_rand() <-------------------<br><br>";
   
   $random_keys=array_rand($names,3);
   print_r($random_keys); // return random keys

   echo"<br><br>---------------->array_replace() <-------------------<br><br>";
   echo "before replace  =>";
   print_r($a);
   echo "<br>After replace =>";
   print_r(array_replace($a,$b));

   echo"<br><br>---------------->array_serach() <-------------------<br><br>";
   echo array_search(9723880403,$contact,true); // search a key by value

   echo"<br><br>---------------->array_shift() <-------------------<br><br>";
   print_r($names);
   echo "<br>";
   echo array_shift($names);//remove and return first element of array
   echo "<br>";
   print_r($names);

   echo"<br><br>---------------->array_slice() <-------------------<br><br>";
   print_r(array_slice($names,1));// use for slicing

   echo"<br><br>---------------->array_sum() <-------------------<br><br>";
   echo array_sum($number);// adding array

   echo"<br><br>---------------->array_unique() <-------------------<br><br>";
   print_r(array_unique($number));// remove dublicate values

   echo"<br><br>---------------->array_unshift() <-------------------<br><br>";
   print_r($names);
   echo "<br>";
   echo array_unshift($names,"Ronak");//insert element into first positoin of array
   echo "<br>";
   print_r($names);


   echo"<br><br>---------------->array_walk() <-------------------<br><br>";

   function myfunction($value,$key)
    {
        echo "The key $key has the value $value<br>";   
    }
    $demo=array("a"=>"red","b"=>"green","c"=>"blue");
    array_walk($demo,"myfunction");
    
    
    echo"<br><br>---------------->compact() <-------------------<br><br>";
    $user1="tommy";
    $user2="jimmy";
    $user3="sandy";
    $users=compact("user1","user2","user3"); // making array using variables
    print_r($users);

    echo"<br><br>---------------->count() <-------------------<br><br>";
    print_r($contact);
    echo "<br> you have ". count($contact)." numbers";

    echo"<br><br>---------------->current() & key()<-------------------<br><br>";
    print_r($number);
    echo"<br>current pointer at ".current($number); //return element where current pointer is
    next($number);
    echo"<br>current pointer at ".current($number);
    next($number);
    echo"<br>current pointer at ".current($number);
    prev($number);
    echo"<br>current pointer at ".current($number);
    reset($number);
    echo"<br>current pointer at ".current($number);
    end($number);
    echo"<br>last element is ".current($number);
    echo "<br>key of current element => ".key($number);



    echo"<br><br>---------------->in_array() <-------------------<br><br>";

    if(in_array(12,$number)) // found an element from array
    {
        echo " 12 found ";
    }
    else
    {
        echo " not found 12";
    }
    //Todo ---> understand and use krsort() 
    // echo"<br><br>--------------->krsort() <-------------------<br><br>";
    // print_r(krsort($contact));
?>