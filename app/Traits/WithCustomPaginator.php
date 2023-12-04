<?php

namespace App\Traits;

trait WithCustomPaginator
{
    public $paginationSize = 10;

    protected $paginationTheme = 'bs5pagination';
}
