<?php

//      register this helper file into composer.json (see readme.md)
//      run composer dump-autoload

use App\Models\User;

function hello()
{
    $helper = User::where('id', 100)->first();
    return $helper;
}
// When we receive the value into the blade file
// from this function
// user function name not variable helper
// see welcome file
