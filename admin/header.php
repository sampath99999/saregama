<?php
function getHeader($menuItem)
{
    echo '
    <div class="header">
    <div class="left">
        <div class="brand">
            Sarigama
        </div>
    </div>
    <div class="right">
        <ul>
            <li ' . (($menuItem == "dashboard") ? 'class="active"' : 'class=""') . '>Dashboard</li>
            <li ' . (($menuItem == "singers") ? 'class="active"' : 'class=""') . '>Singers</li>
            <li ' . (($menuItem == "movies") ? 'class="active"' : 'class=""') . '>Movies</li>
            <li class="logout">Logout</li>
        </ul>
    </div>
    </div>';
}
