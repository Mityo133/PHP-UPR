<?php 
class Validator{
    public static function string($strin){
        return strlen($strin) ===0;
    }
    public static function len($body,$min =0,$max = 300)
{
    return strlen(trim($body)) >= $min && strlen($body);

}
    public static function email($value){
    filter_var($value,FILTER_VALIDATE_EMAIL);
}

}

?>