<?php

class TestClass 
{
    public function run(FileInterface $saver)
    {
$saver->save([7,8,9,10]);
print_r($saver->load());
    }
}