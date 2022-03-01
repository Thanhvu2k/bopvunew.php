<? php
$ url = array (
"https://i.postimg.cc/X7v187tb/0e4455b481ddb8706d0787212ddaa859.gif" ,
"https://i.postimg.cc/XJQcG9jy/24.gif" ,
"https://i.postimg.cc/XJVkYsbb/GiC86RK.gif" ,
"https://i.postimg.cc/QMgqDRvm/tumblr-ml9mp4-Tw-P21qcp4aro1-500.gif" , 
);      
$ tuandz = array_rand ( $ url );
$ tuandeeptry = $ url [ $ tuandz ];
$ bopvu = array (
"url" => $ tuandeeptry ,
"author" => "TuanDeepTry" ,
"thành công" => "đúng" ,
);
$ rdimg = json_encode ( $ bopvu );

$ i = [ '\ / v \ /' , '\ /' , 'TuanDeepTry' ];
$ t = [ '/ v /' , '/' , 'TuanDeepTry' ];
$ j = str_replace ( $ i , $ t , $ rdimg );
echo  $ j ;
