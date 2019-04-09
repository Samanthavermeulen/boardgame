<?php

//if the session is not already been started - start a new session
if (session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}

//if the session variable exist and is equal to true - make a variable true else make the same variable false
//isSingedin = is to look if the user is logged in.
if (isset($_SESSION["IsSignedin"]) && $_SESSION["IsSignedin"] == true ) {
    $issignedin = true;
}
else
{
    $issignedin = false;
}
//if the session variable exist and is equal to true - make a variable true else make the same variable false
//look if the user is logged in as admin
if (isset($_SESSION["IsAdmin"]) && $_SESSION["IsAdmin"] == true ) {
    $isadmin = true;
}
else
{
    $isadmin = false;
}


$quoteArray =
    [
        "Software schrijven na specificatie is even simpel als lopen over water; zolang beide bevroren zijn.",
        "Het schrijven van programmeercode is een van de meest creatieve manieren van denken. Iedereen zal het anders doen.",
        "I will build a great, great wall on our southern border, and I will have Mexico pay for that wall. Mark my words.",
        "If Hilary can't satisfy her husband, what makes her think she can satisfy America?"
    ];


$quoteSourceArray =
    [
        "Rudy Borgstede",
        "Stephan Hoeksema",
        "Donald Trump",
        "Donald Trump"
    ];

//show random quotes
$quoteIndex = rand(0,count($quoteArray)-1);

$quote = $quoteArray[$quoteIndex];
$quoteSource = $quoteSourceArray[$quoteIndex];


?>

