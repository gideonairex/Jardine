<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H14';

$current_user_parent_role_seq='H1::H7::H13::H14';

$current_user_profiles=array(13,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>1,'2'=>1,'4'=>1,'6'=>1,'7'=>1,'8'=>0,'9'=>0,'10'=>0,'13'=>1,'14'=>1,'15'=>1,'16'=>0,'18'=>1,'19'=>1,'20'=>1,'21'=>1,'22'=>1,'23'=>1,'24'=>1,'25'=>1,'26'=>1,'27'=>1,'30'=>1,'31'=>1,'32'=>1,'33'=>1,'34'=>1,'35'=>0,'36'=>1,'37'=>1,'38'=>1,'39'=>1,'40'=>1,'41'=>1,'42'=>1,'43'=>0,'45'=>0,'46'=>1,'47'=>1,'48'=>1,'49'=>0,'50'=>1,'51'=>1,'52'=>1,'53'=>1,'54'=>0,'55'=>0,'56'=>0,'57'=>0,'58'=>0,'59'=>0,'60'=>0,'61'=>1,'62'=>0,'63'=>0,'64'=>0,'65'=>0,'66'=>0,'67'=>0,'68'=>0,'69'=>0,'70'=>0,'72'=>1,'73'=>0,'74'=>0,''=>0,'3'=>0,);

$profileActionPermission=array(2=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),4=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,8=>1,10=>1,),6=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,8=>1,10=>1,),7=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,8=>1,9=>1,10=>1,),8=>array(0=>0,1=>0,2=>0,3=>0,4=>0,6=>0,),9=>array(0=>1,1=>1,2=>1,3=>0,4=>0,),13=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,8=>1,10=>1,),14=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),15=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),16=>array(0=>1,1=>1,2=>1,3=>0,4=>0,),18=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),19=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),20=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),21=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),22=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),23=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),26=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),36=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,8=>1,),37=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),38=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),41=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),45=>array(0=>0,1=>0,2=>0,3=>0,4=>0,),46=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),47=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),48=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>1,6=>1,10=>1,),50=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),53=>array(0=>1,1=>1,2=>1,3=>1,4=>1,),54=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),55=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),56=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),57=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),58=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),59=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),60=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),61=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>0,6=>0,8=>0,),62=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>0,),63=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>0,),64=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),65=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),66=>array(0=>0,1=>0,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),67=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),68=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),69=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>0,),70=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>0,),72=>array(0=>1,1=>1,2=>1,3=>1,4=>1,5=>0,6=>0,8=>0,),73=>array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0,6=>0,8=>0,),74=>array(0=>1,1=>1,2=>1,3=>0,4=>0,5=>0,6=>0,8=>0,),);

$current_user_groups=array();

$subordinate_roles=array('H15',);

$parent_roles=array('H1','H7','H13',);

$subordinate_roles_users=array('H15'=>array(12,),);

$user_info=array('user_name'=>'test_prodman','is_admin'=>'off','user_password'=>'$1$te000000$3Y./zPJjrGzrbaux/gmsI0','confirm_password'=>'$1$te000000$3Y./zPJjrGzrbaux/gmsI0','first_name'=>'','last_name'=>'test_prodman','roleid'=>'H14','email1'=>'eee@yahoo.com','status'=>'Active','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'','end_hour'=>'','start_hour'=>'','title'=>'','phone_work'=>'','department'=>'','phone_mobile'=>'','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'yyyy-mm-dd','signature'=>'','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'X90YuG1xk10Z2Nu','time_zone'=>'Asia/Kuala_Lumpur','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'','currency_grouping_separator'=>'','currency_symbol_placement'=>'$1.0','imagename'=>'','internal_mailer'=>'1','theme'=>'softed','language'=>'en_us','reminder_interval'=>'None','asterisk_extension'=>'','use_asterisk'=>'1','z_area'=>'','ccurrency_name'=>'','currency_code'=>'PHP','currency_symbol'=>'Php','conv_rate'=>'1.000','record_id'=>'','record_module'=>'','currency_name'=>'Philippines, Pesos','id'=>'11');
?>