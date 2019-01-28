<?php
/*
Official URL: https://github.com/hikarine3/common_web_function
Author: Hajime Kurita
*/
namespace Hikarine3;

class CommonWebFunction
{
	public function __construct($op = null) 
	{
    }

	public function normalize_str($str) {
        return $this->remove_successive_spaces(strtolower(trim(mb_convert_kana($str, "KVas"))));
    }
    
    public function remove_successive_spaces($str) {
        return preg_replace('/ +/', ' ', $str);
    }
}

if (empty(debug_backtrace())) {
    $cwf = new CommonWebFunction();
    print("This is not stand alone program.\n");
    print($cwf->normalize_str("A")."\n");
}
