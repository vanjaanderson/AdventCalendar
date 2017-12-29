<?php

echo '<h1>Advent Calendar '.date('Y').'</h1>
<p class="center">A template Christmas Calendar (Advent Calendar version 1.0), modify after your needs. Download from my <a href="https://github.com/vanjaanderson/AdventCalendar" target="_blank">GitHub-page</a>.</p><p class="center">Open shutter 24 for demonstration on content! Features will be improved in future versions and a WordPress plugin will soon be developed.</p><h3 class="center">Merry Christmas and a Happy New Year!</h3>';
echo '<div id="flex-container">';
// Shutters
echo Shutter::createShutter(18);
echo Shutter::createShutter(1) ;
echo Shutter::createShutter(12);
echo Shutter::createShutter(2) ;
echo Shutter::createShutter(20);
echo Shutter::createShutter(4) ;
echo Shutter::createShutter(19);
echo Shutter::createShutter(8) ;
echo Shutter::createShutter(22);
echo Shutter::createShutter(9) ;
echo Shutter::createShutter(11);
echo Shutter::createShutter(5) ;
echo Shutter::createShutter(23);
echo Shutter::createShutter(10);
echo Shutter::createShutter(13);
echo Shutter::createShutter(0) ;
echo Shutter::createShutter(15);
echo Shutter::createShutter(6) ;
echo Shutter::createShutter(16);
echo Shutter::createShutter(3) ;
echo Shutter::createShutter(17);
echo Shutter::createShutter(7) ;
echo Shutter::createShutter(14);
echo Shutter::createShutter(21);
// Shutter contents
echo Shutter::createContent(18);
echo Shutter::createContent(1) ;
echo Shutter::createContent(12);
echo Shutter::createContent(2) ;
echo Shutter::createContent(20);
echo Shutter::createContent(4) ;
echo Shutter::createContent(19);
echo Shutter::createContent(8) ;
echo Shutter::createContent(22);
echo Shutter::createContent(9) ;
echo Shutter::createContent(11);
echo Shutter::createContent(5) ;
echo Shutter::createContent(23);
echo Shutter::createContent(10);
echo Shutter::createContent(13);
echo Shutter::createContent(0) ;
echo Shutter::createContent(15);
echo Shutter::createContent(6) ;
echo Shutter::createContent(16);
echo Shutter::createContent(3) ;
echo Shutter::createContent(17);
echo Shutter::createContent(7) ;
echo Shutter::createContent(14);
echo Shutter::createContent(21);

echo '</div>';

?>