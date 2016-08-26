<?php
	function getMoney($amount){
		if ($amount<0) {
			$amount = str_replace("-", "", $amount);
			$amount = number_format($amount, 2);
			$amount = '<div style="color:red">-$'.$amount.'</div>';
		}else{
			$amount = number_format($amount, 2);
			$amount = '<div style="color:#00FF00">&nbsp;$'.$amount.'</div>';
		}
		return $amount;
	}

	function getBalance($transactions){
		$num = count($transactions);
		asort($transactions);
		for ($i=0; $i < $num ; $i++) { 
			$j = 0;
			$sum = 0;
			foreach ($transactions as $transaction) {
				if ($j < $num-$i){
					$sum += $transaction[5];
				}
				$j++;
			}
			$balance[$i] = $sum;
		}
		return $balance; 
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
		$balance = getBalance($transactions); 
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


