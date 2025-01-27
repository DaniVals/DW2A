<?php
$pal=$_REQUEST['palabra'];

$vec=['acacia','algo','amor','arbol','arco','argumento','banco','barco','caminar','cantar','cargo','castor'];

$vec2=[];
foreach($vec as $v){
	if(strpos($v,$pal)===0) {
		$vec2[]=$v;
	}
}
echo json_encode($vec2);
?>