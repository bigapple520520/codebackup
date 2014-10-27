//全选和全不选
function checkOrUncheckAll(){
  var ones = document.getElementsByName("checkboxOne[]");
  var all = document.getElementById("checkboxAll");
  
  for(i=0; i<ones.length; i++) {
    ones[i].checked = all.checked;
  }
}

//删除选中的记录
function checkSubmit(){
  var ones = document.getElementsByName("checkboxOne[]");
  var isCheck = false;
  
  for(i=0; i<ones.length; i++) {
    if(ones[i].checked == true){
	  isCheck = true;
	}
  }
  
  if(!isCheck){
    alert("请选择要删除的用户!");
	return;
  }
  
  document.getElementById("form").submit();
}