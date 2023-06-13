<?php

function isLogin()
{
    return isset($_SESSION['username']) && isset($_SESSION['level']);
}

function isAdmin()
{
    return $_SESSION['level'] == 1;
}

function isDosen()
{
    return $_SESSION['level'] == 2;
}

function isOrmawa()
{
    return $_SESSION['level'] == 3;
}

function isMahasiswa()
{
    return $_SESSION['level'] == 4;
}