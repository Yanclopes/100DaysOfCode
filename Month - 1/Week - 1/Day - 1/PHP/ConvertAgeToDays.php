<?php

    function ConvertAge($age):int
    {
        return $age * 365;
    }

    echo 'Qual a sua idade?';

    $age = intval(readline());

    echo "Sua idade em dias é " . ConvertAge($age);