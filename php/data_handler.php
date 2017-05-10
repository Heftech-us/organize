<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function makeInput($description, $class, $name, $id, $type){
  echo("<label class='$class' for='$id'>$description:</label>");
  echo("<input name='$name' id='$id' type='$type'><br>");
}
function makeInputRadio($description, $class, $name, $id, $type, $checked){
  
  echo("<input class='$class' name='$name' id='$id' type='$type' $checked>$description<br>");
}

?>



















<!-- 

<form action='php/DB.php' method="post">
	<fieldset id="billinfo">
		<legend>
			Bill Information
		</legend>
		<br>
		<?php 
// 		makeInput(Description Label, Class, Name, Id, Input Type);
		makeInput("Name", "billinput", "billname", "bill", "text");
		makeInput("Amount","billinput", "billamount", "amount", "text");
		makeInput("Due Date", "billinput", "duedate", "duedate", "date");
		?>

		
		<fieldset id="duefrequency">
		
		<legend>
			Payment Frequency:
		</legend>
		<br>
			<?php
			makeInputRadio("Monthly", "radio", "due_freq", "monthly", "radio","checked");
			makeInputRadio("Weekly", "radio", "due_freq", "weekly", "radio", "");
			makeInputRadio("Bi-Weekly", "radio", "due_freq", "bi-weekly", "radio", "");?>
	
		
	
		</fieldset>
	</fieldset>
	<br>
  <input type="submit" name="submit_button"><br>
</form>

			<input type="radio" name="due_freq" value="monthly" id="monthly" checked>Monthly<br>
			
			<input type="radio" name="due_freq" value="weekly" id="weekly">Weekly<br>
	
			<input type="radio" name="due_freq" value="bi-weekly" id="biweekly">Bi-Weekly<br>

				<label class="billinput" for="amount">Amount:</label>
			<input type="text" name="bill_amount" id="amount">
		<br>
		<label class="billinput" for="duedate">Due Date:</label>
			<input type="" name="due_date" id="duedate">
		<br>
		<label class="billinput" for="bill">Name:</label>
			<input type="text" name="bill_name" id="bill"><br> -->