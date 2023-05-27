<?php

if (!function_exists('gender')) {
    function gender(int $gender): string
    {
        return $gender == 1 ? 'Мужской' : 'Женский';
    }
}
