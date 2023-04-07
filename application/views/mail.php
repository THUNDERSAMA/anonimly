<?php
$email='sumitelegant@gmail.com';
$ar= array(
    'to_email' => $email
);
$post_data=json_encode($ar);
$crl=curl_init('https://api.reacher.email/v0/check_email');
curl_setopt($crl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($crl,CURLINFO_HEADER_OUT,true);

curl_setopt($crl,CURLOPT_POST,true);

curl_setopt($crl,CURLOPT_POSTFIELDS,$post_data);

curl_setopt($crl,CURLOPT_HTTPHEADER,array(
    'content-type: application/json' ,
    'authorization: 1d8affd0-9170-11ed-bedf-f73f2d8f00b6'
));
$result=curl_exec($crl);
$decode=json_decode($result,true);
if($decode['is_reachable']==='safe')
{
    echo"valid";
}
else{
    echo"invalid";
}

?>