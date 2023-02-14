<?php
    $sentance1="The cat can climb on the tree";
    $sentance2="cow can't climb on the tree";
    echo "----------->addslashes()<--------------<br><br>";
    $temp = addslashes('The cat can "climb on "the tree"');// add / before " 
    echo($temp);
    echo "<br><br>----------->bin2hex()<--------------<br><br>";
    $temp = bin2hex("hi google !");// convert string to hexadecimal value
    echo($temp);
    echo "<br><br>----------->chop()<--------------<br><br>";
    echo chop($sentance1,"tree!"); // remove characters from right side of string
    echo "<br><br>----------->chunk_split()<--------------<br><br>";
    echo chunk_split($sentance1,1,"."); // spliting character with .
    echo "<br><br>----------->convert_uudecode()<--------------<br><br>";
    $str = ",2&5L;&\@=V]R;&0A `"; // convert uudecode code
    echo convert_uudecode($str);
    echo "<br><br>----------->convert_uuencode()<--------------<br><br>";
    echo convert_uuencode($sentance1);// convert into uuencode.
    echo "<br><br>----------->count_chars()<--------------<br><br>";
    echo count_chars($sentance2,3);//return sting with diffrent character from given string mode 3
    echo "<br><br>----------->crypt()<--------------<br><br>";
    echo crypt($sentance2,'se')."<br>";// encrypt the string
    echo crypt($sentance2,'hellodws');// encrypt the string
    echo "<br><br>----------->explode()<--------------<br><br>";
    print_r(explode(" ",$sentance1));//convert array words into string
    echo "<br><br>----------->hex2bin()<--------------<br><br>";
    echo hex2bin("686920676f6f676c652021");// convert hex code into bin
    echo "<br><br>----------->implode()<--------------<br><br>";
    $str = array('Hello','Ronak','Beautiful','Day!');
    echo implode("",$str);//adding array into string
    echo "<br><br>----------->join()<--------------<br><br>";
    $str = array('Hello','Ronak','Beautiful','Day!');
    echo implode("",$str);//join array into string
    echo "<br><br>----------->lcfirst()<--------------<br><br>";
    echo lcfirst($sentance2);//convert string word's first character into lowercase
    echo "<br><br>----------->levenshtein()<--------------<br><br>";
    echo levenshtein($sentance1,$sentance2); //gives the levenshtein distance
    echo "<br><br>----------->ltrinm()<--------------<br><br>";
    echo ltrim($sentance2,"The");//remove character from the left side of string
    echo "<br><br>----------->printf()<--------------<br><br>";
    $name="ronak";
    printf("hi %s.",$name);
    echo "<br><br>----------->rtrim()<--------------<br><br>";
    echo ltrim($sentance2,"cow");//remove character from the right side of string
    echo "<br><br>----------->str_repete()<--------------<br><br>";
    echo(str_repeat($sentance1,2));//repeating string 2 times
    echo "<br><br>----------->str_repeat()<--------------<br><br>";
    echo str_replace("climb","CLIMB","cow cant climb on tree");
    echo "<br><br>----------->str_shuffle()<--------------<br><br>";
    echo str_shuffle($sentance1);//randomly suffle character of strings
    echo "<br><br>----------->str_split()<--------------<br><br>";
    print_r(str_split("$sentance2"));
    echo "<br><br>----------->strcascmp()<--------------<br><br>";
    echo strcasecmp("Hello world!","HELLO WORLD!"); // The two strings are equal
    echo strcasecmp("Hello world!","HELLO"); // String1 is greater than string2
    echo strcasecmp("Hello world!","HELLO WORLD! HELLO!"); // String1 is less than string2
    echo "<br><br>----------->strch()<--------------<br><br>";
    echo strchr($sentance2,"tree");//Find the first occurrence of string and return the rest of the string:
    echo "<br><br>----------->strcmp()<--------------<br><br>";
    $sentance1="The cat can climb on the tree";
    $sentance2="cow can't climb on the tree";
    echo strcmp($sentance1,$sentance2);//comparing two strings
    echo "<br><br>----------->strcspn()<--------------<br><br>";
    echo strcspn($sentance1,"c");//Print the number of characters found in string before the character "c":
    echo "<br><br>----------->stristr()<--------------<br><br>";
    echo stristr($sentance1,"on");//Find the first occurrence of "on" inside string, and return the rest of the string:
    echo "<br><br>----------->strlen()<--------------<br><br>";
    echo strlen($sentance1);//find the length of the string
    echo "<br><br>----------->strtolower()<--------------<br><br>";
    echo strtolower($sentance1);//convert string into lowercase
    echo "<br><br>----------->strtoupper()<--------------<br><br>";
    echo strtoupper($sentance1);//convert string int uppercase
    echo "<br><br>----------->substr_replace()<--------------<br><br>";
    echo substr_replace("Ronak","vishvash",0);//repace ronak to vishvash


    






?>