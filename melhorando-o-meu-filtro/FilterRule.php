<?php

class filterRule
{
    protected string $saida;

    public function __construct(protected $in)
    {
        $this->saida = $this->filterRule($in);
    }

    public function filterRule($in)
    {
        //loop de verificação da entrada da função como bucket
        $saida = '';

        while ($bucket = stream_bucket_make_writeable($in)){
            $linhas = explode("\n",$bucket->data);

            foreach ($linhas as $linha){
                if (stripos($linha,'parte') !== false){
                    $saida .= "$linha\n";
                }
            }
        }
        return $saida;
    }
    
    public function getSaida()
    {
        return $this->saida;
    }
    public function __toString()
    {
        $this->saida;
    }
}