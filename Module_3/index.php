<?php
// if statement, if...else statement, if...elseif...else statement, switch statement

// if statement
$num = -1;

if($num<0){
    echo "$num is less than 0 <br>";
}

// if...else
$age = 13;
if($age>18){
    echo "You are an adult";
}                    
else{
    echo "You are under 18 <br>";
}

if(($age>12) && ($age<20)){
    echo "Discount for you !!!";
}

//if...elseif...else
if($num<0){
    echo "the value of $num is negative number.<br>";
}elseif($num==0){
    echo "The value of $num is 0.";
}else{
    echo "The value of $num is a positive number.<br>";
}

//Write a program that has a variable named score and assign a value. After uou will check and as a result should be displayed the grade: A: 90-100, B: 80-90, C: 70-79, D: 60-69, F: other results

$score = 85;  

if ($score >= 90 && $score <= 100) {
    echo "Grade: A";
} elseif ($score >= 80 && $score < 90) {
    echo "Grade: B";
} elseif ($score >= 70 && $score < 80) {
    echo "Grade: C";
} elseif ($score >= 60 && $score < 70) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

$grade = 'B';
switch($grade){
    case 'A':
        echo "Excellent! You got an A <br>";
        break;
    case 'B':
        echo "Good Job! You got a B <br>";
        break;
    case 'C':
        echo "Well Done! You got a C <br>";
        break;
    case 'D':
        echo "You Passed, but you need to study more! <br>";
        break;
    case 'f':
        echo "You failed the test! You got a F <br>";
        break;
    default:
    echo 'Invalid Grade!! <br>';
    break;
}

for ($x = 0; $x <= 10; $x++){
    echo "The number is $x <br>";
}

$x = 1;
do{
    echo "The number is $x <br>";
    $x++;
} while ($x <= 5);

$x = 1;
while ($x <=5){
    echo "The number is $x<br>";
    $x++;
};
$car = array("BMW", "VW", "Audi", "Tesla");
    foreach($car as $value){
        echo "$value <br>";
    }
$age = array("John"=>"18", "Michael"=>"23", "Joe"=>"10");
    foreach($age as $x => $val) {
        echo "$x=$val <br>";
    }
?>