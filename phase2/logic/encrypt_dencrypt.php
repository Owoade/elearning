<?php 
$encrypted_values=array('bx25', 'uc65', 'x2ea', 'icp4', 'qw3a', '11x2', '001x', 'ccx6', 'lmxd', 'uyb6', '00okl', '90zb', 'ubry', 'li76', 'yu3x', 'a709', '0124', '550v', 'o09b', '90bn', 'ounv', 'ioc5', 'iunb', 'mi45', 'ikrt', 'mi90', 'p023', 'd4az', 'yk32', 'tk07', 'lk3p', '8ok2', 'd4ix', 'h2ys', 'fi1r', 't3ca');
$real_values=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

function encrypt($string,$encrypted_values,$real_values){
$encrypted_string="";
$string= strtolower($string);
for($i=0;$i<strlen($string);$i++){
    for($j=0;$j<count($real_values);$j++){
        if($string[$i]==$real_values[$j]){
           $encrypted_string.=$encrypted_values[$j];
        }
    }
}
return $encrypted_string;
}
function de_encrypt($string,$encrypted_values,$real_values){
    $de_encrypted_values="";
    $encrypt_word='';
    for($i=0;$i<strlen($string);$i+=4){
        $encrypt_word='';
        $encrypt_word=$string[$i];
        $encrypt_word.=$string[$i + 1];
        $encrypt_word.=$string[$i + 2];
        $encrypt_word.=$string[$i + 3];
       
        for($j=0;$j<count($real_values);$j++){
            if($encrypt_word==$encrypted_values[$j]){
                $de_encrypted_values.=$real_values[$j];
            }
        }
    }
    return $de_encrypted_values;
    }
//  echo de_encrypt(encrypt('helloword',$encrypted_values,$real_values),$encrypted_values,$real_values);
?>