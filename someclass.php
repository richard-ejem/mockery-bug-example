<?php

class SomeClass
{
    public function getSomething()
    {
        trigger_error('This is deprecated', E_USER_DEPRECATED);
    }
}
