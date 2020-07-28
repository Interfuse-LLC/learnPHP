<?php
// Step 1
// Hello World of course.

//Comments
// Whenever you want to put in a comment that does not run anything put two forward slashes //
/*Unless you want a comment block then use a slash then an asterisk. Reverse it at the end of the block.*/


/* 
php has a bunch of functions built into the language that you can use. 
One of the most classic is echo.

The syntax goes echo(string)
*/

//Here is an example:
echo('This is a string.');

//in php when a statement is done it MUST have a semicolon at the end.

/* Now you try it. 
create an echo statement below this comment that outputs Hello World,
Then go to the box icon on the right and click it.
Click start apache web server from the sidebar,
Then click on the link in the same sidebar that says something like 8080-tcp.
This will open up your web app.
It should display the text from our echo statements.
This is how to run your code.
*/




//Try echoing an html h1 element with some text in it.


//Step 2 - Variables
/*
In PHP all variables must begin with a dollar sign $.
There are several types, but they are implicit, so you don't have to write out what type you want every time. 
Types: string, integer, double (decimal), boolean (true/false), array, object etc....
I just listed the one I most commonly use.
*/

//In php there is variable declaration:
$newVariable;

//And there is assignment:
$newVairable = 'this is the string assigned';

//They can both be done with just an assignment
$otherVar = 54;

//Just make sure you declare it before you use it.

/*Now you try it.
Create a variable and assign a string to it. 
Then echo that string. This string should be different than what you echoed above.
*/





/*The great thing about php is 
you can assign big chunks of html to 
variables and echo them when you need them.
Example:
*/

$header = '<h1>Here is the title.</h1>';
$middle = '<p>Here is some content that talks about stuff</p>';
$footer = 'OOOOHHHHH YYEEEEEAAHHHH';

$decider = 20;

echo($header);
echo($header);
echo($footer);

