function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var type=document.getElementById("type_row"+no);
 var quantity=document.getElementById("quantity_row"+no);
 var cost=document.getElementById("cost_row"+no);
	
 var type_data=type.innerHTML;
 var quantity_data=quantity.innerHTML;
 var cost_data=cost.innerHTML;
	
 type.innerHTML="<input type='text' id='type_text"+no+"' value='"+type_data+"'>";
 quantity.innerHTML="<input type='text' id='quantity_text"+no+"' value='"+quantity_data+"'>";
 cost.innerHTML="<input type='text' id='cost_text"+no+"' value='"+cost_data+"'>";
}

function save_row(no)
{
 var type_val=document.getElementById("type_text"+no).value;
 var quantity_val=document.getElementById("quantity_text"+no).value;
 var cost_val=document.getElementById("cost_text"+no).value;

 document.getElementById("type_row"+no).innerHTML=type_val;
 document.getElementById("quantity_row"+no).innerHTML=quantity_val;
 document.getElementById("cost_row"+no).innerHTML=cost_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}
