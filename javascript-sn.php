<?php 
require_once("header.php");
require_once("menu.php");
require_once("funcoes.php");

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<main class="content">
    
        <div class="content text-content content-wrap">

            <?php renderTitle('Scripting in ServiceNow', 'A step in our learning journey'); ?>

            
             
                
                <p>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<cite>"No man ever steps in the same river twice, for it's not the same river and he's not the same man."</cite> – Heraclitus
                <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To enhance the ServiceNow capabilities we need to use Scripting, and the programming language adopted by the platform is JavaScript.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One great resource while studying how JavaScript is used in ServiceNow is <a href="https://www.youtube.com/watch?v=62Nabpb94Jw&list=PL3rNcyAiDYK2_87aRvXEmAyD8M9DARVGK&pp=iAQB" target="_blank">a video series</a> produced by the Senior Developer Advocate Chuck Tomasi.
                   
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I cited Heraclitus in this article because everytime I revisit this video series I get better. 

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The entire playlist is not that long, but the concepts shared by Chuck are dense and it takes time to understand them. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm planning to revisit this video series from time to time. During the process I'll take notes and update this article so that I can get back here and reflect about how I can apply it. 
                    
                </p>

                <br>
                <p>
                    <h5>Personal notes</h5>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab02 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We execute a query to retrieve all records from the Task table. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One thing to improve is the variable named as <b>gr</b>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There is no problem here since we're just running a exercise for educational purposes. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the future, when you're going to use a corporate development instance, it's good to name variables in a way so that the developer have a better understanding about its content. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For example, if it holds records from the Task table, it could be named as something like 'grTask'. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of the reasons to give meaninful names to variables originated <a href="https://www.youtube.com/watch?v=UNTYP-D94c0" target="_blank">this video</a> made by the Developer Advocate Earl Duque.
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When Earl says to wrap your script in a function, he means to do something like this:
                    <br>
                    <br>
<pre>
//Let's execute the function myLaboratory in the next line
myLaboratory();

//The variable name does not exist here 
gs.info('Variable name in the Global scope: ' + name);

function myLaboratory() {

    var name = 'Carlos Camacho';
    //The variable name exists inside this function and can be used
    gs.info('Variable name inside my function scope: ' + name);

}
</pre>
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab03 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We have a brillant explanation about naming convention. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At some point Chuck explains the use of the reserved word 'var' to define variables. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we don't use 'var' to create a variable, the command <b>varName = value</b> will replace the content of an existing variable as we can see below:
                    <br>
                    <br>
<pre>
myLaboratory3();

function myLaboratory3() {

    //Use var to create a variable
    var name = 'Carlos Camacho';
    gs.info('Name is ' + name);

    //Replace the content of an existing variable
    name = 'Chuck Tomasi';
    gs.info('Name is ' + name);

}
</pre>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is not a problem in the example above because we know the variable is declared inside our function. Now imagine a scenario where that variable was created elsewhere... 
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Lab16 he also reminds us about how important it is to use 'var' inside a for loop. 
<br>
<br>


                
                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab11
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here we got an interesting review about boolean conditions and it is important to know this logic. When does an if statement will return <b>true</b> (be executed)?
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we use the method <b>gs.getProperty()</b> it returns a string, so we need to take care if the stored value is a boolean and we're going to use it in an if statement. 
                    <br><br>
<pre>
// Special characters
//
// \n = new line
// \t = tab
// \\ = backslash
// \' = single quote
// \" = double quote
//
// AND (&&) - both must be true
//      +---------+---------+---------+
//      |   AND   |  true   |  false  |
//      +---------+---------+---------+
//      |  true   |  true   |  false  |
//      +---------+---------+---------+
//      |  false  |  false  |  false  |
//      +---------+---------+---------+
//
// OR (||) - Either must be true
//      +---------+---------+---------+
//      |   OR    |  true   |  false  |
//      +---------+---------+---------+
//      |  true   |  true   |  true   |
//      +---------+---------+---------+
//      |  false  |  true   |  false  |
//      +---------+---------+---------+

//The difference between =, ==, and === 

var i = 10;
var myString = "10";

if (i == myString) {
    gs.info("1) They are equal.");
}

if (i === myString) {
    gs.info("2) They are equal.");
}

//What will be printed: 1 or 2?
</pre>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab14
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Truthy and Falsy
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Integers: A variable with the value 0 will return false, otherwise it will return true. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strings: If it is null, undefined or "" it will return false. A valid content will return true. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can use this to test if a List of objects (IE: List of Users) is empty or valid. 
                    <br>
                    <br>
<pre>    
var num = 0; // <== try with different numbers
gs.info(num + ' is ' + ((num) ? 'true' : 'false'));

//var string1; //string1 is undefined
var string2 = null;
var string3 = 'Hello, world!';
var string4 = "";
var string5 = " ";

try {
    if (string1) {
        gs.info('string1=' + ((string1) ? 'true' : 'false'));
    }
} catch (e) {
    gs.info(e.message);
}

gs.info('string2=' + ((string2) ? 'true' : 'false'));
gs.info('string3=' + ((string3) ? 'true' : 'false'));
gs.info('string4=' + ((string4) ? 'true' : 'false'));
gs.info('string5=' + ((string5) ? 'true' : 'false'));
</pre>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lab15 to Lab17: Loops
                    <br>
                    <br>
<pre>    
var i = 0;
while (true) {
  if (i == 5)
    break;
  gs.info('while: ' + i);
  i++;
}

for (var i = 0; i < 5; i++) {
  gs.info('for: ' + i);
}

var i = 0;
do {
  gs.info('do while = ' + i);
  i++;
} while (i < 5);
gs.info('done i = ' + i);
</pre>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Lesson 19 Chuck starts talking about functions then in Lesson 21 we'll see an introduction to Arrays. <font color="red">&#9829;</font>
                    
                    <br>
                    <br>
<pre>    
var list = [];
list[0] = 1;
list[1] = 3;
list[2] = 5;
gs.info('length of list is: ' + list.length);
gs.info('value of first element: ' + list[0]);
</pre>


                    
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we start learning about arrays it is good to do exercises. 
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It seems to be simple but they are not. It is like studying Math: the more we study, the more we get from it.  
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Talking about exercises, have you heard about the <a href="aoc2023.php" target="_self">Advent of Code</a>? 
                    <br>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for reading.
                    
                    <br>
                    
                </p>
                <br>
                <p>
                __________
                
                <br>The <a href="https://www.youtube.com/@ServiceNowDevProgram" target="_blank">ServiceNow Dev Program</a> YouTube channel.
                </br>Chuck's <a href="https://github.com/chucktomasi/sn-learn-javascript/tree/master" target="_blank">Github repository</a> with exercises. 
                <br>Book <a href="https://eloquentjavascript.net/" target="_blank">Eloquent Javascript</a> by Marijn Haverbeke. Licensed under a Creative Commons license. 
                <br><a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_23/L23S03.js" target="_blank">ForEach</a>, <a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_24/L24S02.js" target="_blank">pop()</a> , <a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_24/L24S03.js" target="_blank">shift()</a>, <a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_24/L24S04.js" target="_blank">unshift()</a>, <a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_24/L24S05.js" target="_blank">splice()</a>, <a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_24/L24S06.js" target="_blank">slice()</a>, <a href="https://github.com/chucktomasi/sn-learn-javascript/blob/master/Lesson_24/L24S07.js" target="_blank">Reverse</a>
                <br><i class="fa fa-exclamation-circle" style="font-size:24px"></i>
                <a href="https://www.youtube.com/watch?v=6WTHrE7lrhk&list=PL3rNcyAiDYK2_87aRvXEmAyD8M9DARVGK&index=31" target="_blank">Use Getters and Setters instead of dot walking</a>

                </br>
                <br>
                <br>
                <a href="index.php?p=3" target="_self">Back</a>
                </p>


            
        </div>
        
</main>

<?php
require_once("footer.php");