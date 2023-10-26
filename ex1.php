<?php

// Quetion 1
$moyenne = 15;

// Quetion 2
$recu = null;
$recu = $moyenne >= 10 ? true : false;

// Quetion 3
$message = null;
$message = $recu ? 
    "<p>Avec une moyenne de <b>$moyenne</b>, vous etes recu</p>" : 
    "<p>Avec une moyenne de <b>$moyenne</b>, vous n'etes pas recu</p>";
// echo $message;

// Quetion 4
// ...

// ##################### Suite #####################

// Quetion 1
$repechage = 8;

// Quetion 2
// ...

// Question 3
if ( $moyenne >= $repechage )
{
    $message = "<p>Avec une moyenne de <b>$moyenne</b>, vous avez acces au repechage</p>";
}
if ( $moyenne == 12 )
{
    $message = "<p>Avec une moyenne de <b>$moyenne</b>, vous obtenez la mention assez bien</p>";
}
if ( $moyenne == 14 )
{
    $message = "<p>Avec une moyenne de <b>$moyenne</b>, vous obtenez la mention bien</p>";
}
if ( $moyenne == 16 )
{
    $message = "<p>Avec une moyenne de <b>$moyenne</b>, vous obtenez la mention très bien</p>";
}
if( $moyenne < 8 )
{
    $message = "<p>Avec une moyenne de <b>$moyenne</b>, vous n'etes pas recu</p>";
}

echo $message;

// Quetion 4
// ...

?>