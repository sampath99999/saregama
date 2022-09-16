<?php
function getHeader($menuItem)
{
    echo '
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <div class="header">
    <div class="left">
        <div class="brand">
            <i class="fas fa-music"></i>
            Sarigama
        </div>
    </div>
    <div class="right">
        <ul>
            <li onclick=\'window.location.href=`dashboard.php`\' ' . (($menuItem == "dashboard") ? 'class="active"' : 'class=""') . '>Dashboard</li>
            <li onclick=\'window.location.href=`singers.php`\' ' . (($menuItem == "singers") ? 'class="active"' : 'class=""') . '>Singers</li>
            <li onclick=\'window.location.href=`movies.php`\' ' . (($menuItem == "movies") ? 'class="active"' : 'class=""') . '>Movies</li>
            <li class="logout"><i class="fas fa-sign-out-alt"></i>Logout</li>
        </ul>
    </div>
    </div>';
}
