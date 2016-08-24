<?php 
	function getMoney($Amount){
		if ($Amount<0) {
			$Amount = str_replace("-", "", $Amount);
			$Amount =  number_format($Amount,2);
			$Amount = '<div style="color:red;">-$'.$Amount.'</div>';
		}
		else
		{
			$Amount =  number_format($Amount,2);
			$Amount = '<div style="color:green">&nbsp;$'.$Amount.'</div>';
		}
		return $Amount;
	}

	function getBalan($transactions){
        $num = count($transactions);
        asort($transactions);
        for ($i=0; $i < $num; $i++) {
        	$j = 0; 
        	$num = 0;
        	foreach ($transactions as $transaction) {
        		if($j<$num+$i){
        			$sum += $transactions[5];
        		}
        		$j++;
        	}
        	$Balance[$i]=$num;
        }
        return $Balance;
	}

	 ?>

<div class="row">
	<div class="col-md-11">
		<h2><br>Transactions</h2>
	</div>
</div>

<table class="table">
	<tr>
		<th>ID</th>
		<th>Description</th>
		<th>Date</th>
		<th>Amount</th>
		<th>Balance</th>
		<th>Category</th>
		<th>Actions</th>
	</tr>
	<?php
		$balance = getBalan($transactions); 
		$i=0;
		foreach ($transactions as $transaction): 

		if ($date = date_create($transaction["4"])) {
			$date = date_format($date, "d/m/Y");
		}
	?>
	<tr>
			<td><?php echo $transaction["0"]; ?> </td>
			<td><?php echo $transaction["3"]; ?> </td>
			<td><?php echo $date; ?> </td>
			<td><?php echo getMoney($transaction["5"]); ?> </td>
			<td><?php echo getMoney($balance[$i]); ?> </td>
			<td><?php echo $transaction["7"]; ?> </td>
			<td>  <a href="<?php echo APP_URL; ?>transactions/edit/<?php echo $transaction["0"]; ?>">Editar</a>
		        <a href="<?php echo APP_URL; ?>transactions/delete/?id=<?php echo $transaction["0"]; ?>">Eliminar</a>
 		 </td>
	</tr>
	<?php 
	$i++;
	endforeach ?>

		
	</tr>
</table>
<hr>
	<a href="<?php echo APP_URL; ?>transactions/add"><button class="btn btn-default" style="padding:5px 100px 5px 100px; float:right;">Agregar</button></a>


