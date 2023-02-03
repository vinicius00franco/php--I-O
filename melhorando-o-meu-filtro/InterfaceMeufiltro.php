<?php

interface InterfaceMeuFiltro 
{
    public function onCreate():bool;
    
    public function filter($in, $out, &$consumed, bool $closing): int;
}