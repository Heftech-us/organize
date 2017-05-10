var newBill = new Object();

var Bills = [];
var billCount = 0;	
var billFrequency;
var billName;
var billAmount;
var billDueDate;

function update(){

		
    billName = document.getElementById('bill').value;
    billAmount = document.getElementById('amount').value;
    billDueDate = document.getElementById('duedate').value;
    
    
    if(document.getElementById('weekly').checked){
      billFrequency = 'weekly';
      
    }else if (document.getElementById('biweekly').checked){
      billFrequency = 'biweekly';
      
    }else if (document.getElementById('monthly').checked){
      billFrequency = 'monthly';
    }
    
		newBill.name = billname;
		newBill.amount = billAmount;
		newBill.due = billDueDate;
		newBill.frequency = billFrequency;
		
		Bills.push(newBill);
		
		console.log(Bills);
	}

function writeData(){
update();
	
}
