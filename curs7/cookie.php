<?php

//setcookie('name', 'Marian', time() + 3600, '/', '', 0);

var_dump($_COOKIE);

setcookie('name', 'Marian', time() - 60, '/', '', 0);

var_dump($_COOKIE);










