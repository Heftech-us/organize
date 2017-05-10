<?php include 'inc/header.php';
include 'php/data_handler.php';?>
		<form action="php/DB.php?task=add" method="post">
			
			<fieldset id="addBillField">
                
				<legend class="heading">
					Add Bill
				</legend>
                
				<table style="width:100%">
                    <tr>
                        <th>Due Date</th>
                        <th>Bill Name</th>
                        <th>Bill Amount</th>
                        <th>Comments</th>
                    </tr>
					<tr>
                        <td><input class="inputbox" type="date" name="duedate" placeholder=""></td>
                        <td><input class="inputbox" type="text" name="billname" placeholder="Name your bill"></td>
						<td><input class="inputbox" type="number" name="billamount" placeholder="How much is your bill?"></td>
                        <td><input class="inputbox" placeholder="Enter comments here" type="text"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit_button"></td>
					</tr>
					
				</table>
			</fieldset>
		</form>


<?php 

include 'inc/footer.php';?>