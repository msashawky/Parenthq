<?php
// Providers Path

//ProviderX Path
if (!function_exists('providerXPath')) {
    function providerXPath()
    {
        return storage_path() . "\json\DataProviderX.json"; //ProviderX JSON File
    }
}

//ProviderY Path
if (!function_exists('providerYPath')) {
    function providerYPath()
    {
        return storage_path() . "\json\DataProviderY.json"; //ProviderY JSON File
    }

    //get provider code by code number
    if (!function_exists('code')) {
        function code($codeString){
            $arr = array(['authorised'=>'100', 'decline'=>'200', 'refunded' =>'300']);
//            dd($arr[0]['authorised']);
            for ($i=0;$i<2;$i++){
                return $arr[0][$codeString];
            }
        }
        }
}
