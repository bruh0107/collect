<?php

namespace Collect;

function collection(array $array = [])
{
    return new Collect($array);
}