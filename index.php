<?php
// trying to write code for explode function
$str="aaa-bbb-ccc";
echo "<pre>";
// print_r(explode("-",$str));
// Array
// (
//     [0] => aaa
//     [1] => bbb
//     [2] => ccc
// )
function tryingToExplode($separator , $str){
    $arr=[];
    // create empty array 
    $indexOfLastSeparetor=0;
    //index  Of Last Separetor
    if(str_contains($str,$separator)){
        for ($i=0; $i < strlen($str) ; $i++) { 
                   // loop over the string 
            if($str[$i]==$separator){
                if(empty($arr)){
                    array_push( $arr,substr($str,0,$i) );//fist index = from 0 t0 separator
                    $indexOfLastSeparetor=$i;//update index of last separator

                }
                else{
                    array_push( $arr, 
                    substr($str,$indexOfLastSeparetor+1,
                    $i-$indexOfLastSeparetor-1));
                    //update index of last separator
                    $indexOfLastSeparetor=$i;
                }
               
            }
            else{

            }
           
          
    
        }//end of loop that over str
        // add last substring then return array
        array_push($arr,substr($str,$indexOfLastSeparetor +1));
        return $arr;
    }
    else{ // str not contains this separetor
        return "not found this separator";
                }

}
print_r( tryingToExplode("-",$str) );


?>