<?php

require "SkautisAuth/auth.php";
SkautisAuth::start();
//Po tomto vol�n� u� projde pouze �lov�k, kter� m� z�znam v lok�ln�m seznamu u�ivatel�.


if($_GET['logout']) SkautisAuth::logout();

echo "<pre><a href='?logout=1'>logout</a>";
echo "<p>SkautisAuth::getData('ltoi'): " . SkautisAuth::getData('ltoi');
echo "<p>SkautisAuth::getUserInfo('jmeno'): " . SkautisAuth::getUserInfo('jmeno');

echo "<p>SkautisAuth::getUserInfo()<br>";
print_r( SkautisAuth::getUserInfo() );

