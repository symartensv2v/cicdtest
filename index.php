<?php
//TEST
function test()
{
    echo 'test';
}
function test23()
{
    echo 'test23';
}
test();
test23();
$test = mysqli_connect('', '', '');
test23();
$test = mysqli_close('', '', '');