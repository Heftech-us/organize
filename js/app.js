
//const table = document.getElementsByTagName('table')[0];

for (i=0;i < Entries.length; i++){
  let container = document.getElementById('container');
    
  let div = document.createElement('div');
    div.setAttribute('class','bill_display mouseover');
    container.appendChild(div);

  let spanHeading = document.createElement('span');
    spanHeading.setAttribute('class','heading');
    div.appendChild(spanHeading);

  let h2BillName = document.createElement('H2');
    var tn = document.createTextNode(Entries[i].billname);
    h2BillName.appendChild(tn);
    h2BillName.setAttribute('class','bill_name');
    spanHeading.appendChild(h2BillName);

  let h3DueDate = document.createElement('H3');
    var tn = document.createTextNode(Entries[i].duedate);
    h3DueDate.appendChild(tn);
    h3DueDate.setAttribute('class','due_date');
    spanHeading.appendChild(h3DueDate);

  let spanDescription = document.createElement('span');  
    spanDescription.setAttribute('class','description');
    div.appendChild(spanDescription);

  let h4Description = document.createElement('h4');
    var tn = document.createTextNode(Entries[i].comments);
    h4Description.appendChild(tn);
    spanDescription.appendChild(h4Description);

  let spanDetails = document.createElement('span');
    spanDetails.setAttribute('class','details');
    div.appendChild(spanDetails);

  let h4BillAmount = document.createElement('h4');
    var tn = document.createTextNode(Entries[i].billamount);
    h4BillAmount.appendChild(tn);
    spanDetails.appendChild(h4BillAmount);

  let h4IsPaid = document.createElement('h4');
    var tn = document.createTextNode('Entries[i].comments');
    h4IsPaid.appendChild(tn);
    spanDetails.appendChild(h4IsPaid);
    
     let btnMoveUp = document.createElement('button');
    var tn = document.createTextNode('Up');
    btnMoveUp.setAttribute('class','up');
    btnMoveUp.appendChild(tn);
    spanDetails.appendChild(btnMoveUp);

  let btnDeleteBill = document.createElement('button');
    var tn = document.createTextNode('Delete');
    btnDeleteBill.setAttribute('class', 'delete');
    btnDeleteBill.appendChild(tn);
    spanDetails.appendChild(btnDeleteBill);


}
const button = document.querySelector('#container');
button.addEventListener('click', (event)=>{
  
  if(event.target.tagName == 'BUTTON'){
      if(event.target.className == 'delete'){
        let divItem = event.target.parentNode.parentNode;
        let divBody = divItem.parentNode;
        divBody.removeChild(divItem);
      }
      if(event.target.className =='up'){
                  let divItem = event.target.parentNode.parentNode;
        let divItemPrev = divItem.previousElementSibling;
          let div = divItem.parentNode;
          if(divItemPrev){
           
              div.insertBefore(divItem, divItemPrev);
          }
      }
  }
});


//
//
//
//    let tr = document.createElement('tr');
//    let td = document.createElement('td');
//
//    let tdBillName = document.createElement('td');
//    let inBillName = document.createElement('input');
//
//    let tdBillAmount = document.createElement('td');
//    let inBillAmount = document.createElement('input');
//
//    let tdDueDate = document.createElement('td');
//    let inDueDate = document.createElement('input');
//
//    let tdComments = document.createElement('td');
//    let inComments = document.createElement('input');
//
//    let tdDelete = document.createElement('td');
//    let inDelete = document.createElement('BUTTON');
//    let caption = document.createTextNode('x');
//
//
//    tr.setAttribute("class","mouseover"); 
//
//    inDueDate.setAttribute('value',Entries[i].duedate);
//    inDueDate.setAttribute('type','date');
//    inDueDate.setAttribute('class','inputbox');
//    tdDueDate.appendChild(inDueDate);
//    tr.appendChild(tdDueDate);
//
//
//
//    inBillName.setAttribute('value',Entries[i].billname);
//    inBillName.setAttribute('type','text');
//    inBillName.setAttribute('class','inputbox');
//    tdBillName.appendChild(inBillName);
//    tr.appendChild(tdBillName);
//
//    var toCurrency = '$' + (Entries[i].billamount);
//    inBillAmount.setAttribute('value',toCurrency);
//    inBillAmount.setAttribute('type','text');
//    inBillAmount.setAttribute('class','inputbox');
//    tdBillAmount.appendChild(inBillAmount);
//    tr.appendChild(tdBillAmount);
//
//    inComments.setAttribute('value',Entries[i].comments);
//    inComments.setAttribute('type','text');
//    inComments.setAttribute('class','inputbox');
//    tdComments.appendChild(inComments);
//    tr.appendChild(tdComments);
//
//    inDelete.appendChild(caption);
//    tdDelete.appendChild(inDelete);
//    tr.appendChild(tdDelete);
//
//    console.log(Entries[i].billname);
//    console.log(Entries[i].duedate);
//    console.log(Entries[i].billamount);
//    console.log(Entries[i].comments);
//
//    table.appendChild(tr);
