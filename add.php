<?php
//foreach
$arr = $_POST;


function addNumbers($a, $b ) {
	return $a + $b;
}

function print_td( $key, $value ) {
	$td = "<td>" . ucfirst( $key). "</td>";
	$td .= "<td>";
   		if ( $key ==  "remember_me" ) {
   			$td .= "Remember";
   		} else {
			$td .= $value; 			
   		}
   $td .= "</td>";
   return $td;
}

?>


<table>
<?php foreach ( $arr as $key => $value ){ ?>
<tr>
		<?php echo print_td( $key, $value ); ?>    

</tr>
    <?php } ?>

</table>



