<?php

function greetPerson($name = "Guest")
{
    echo "Hello, $name!";
}

greetPerson(); // Hello, Guest!
greetPerson("Skynet"); // Hello, Skynet!

?>
