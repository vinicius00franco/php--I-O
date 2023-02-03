<?php

abstract class MeuFiltro extends php_user_filter
{
    public function onCreate():bool
    {
        $this->stream = fopen('php://temp','w+');
        return $this->stream !==false;
    }
    
    public function filter($in, $out, &$consumed, bool $closing): int
    {
        $saida = new filterRule($in);
        $bucketSaida = stream_bucket_new(
            $this->stream,
            $saida->getSaida());

        stream_bucket_append($out,$bucketSaida);

        return PSFS_PASS_ON;
    }

    
    
}