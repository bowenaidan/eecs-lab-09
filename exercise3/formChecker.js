function check_form() {
  inputs = document.getElementById("order_form").getElementsByTagName("input");
  for(let i=0; i<7; i++) {
    if(inputs[i].value == "") {
      console.log(i);
      alert("You must enter a " + inputs[i].name + ".");
      return false;
    }
    else if((i>1 && i<5) && parseInt(inputs[i].value) < 0) {
      alert("You cannot order a negative quantity.");
      return false;
    }
    else if((i>1 && i<5) && !parseInt(inputs[i].value)) {
      alert("Must enter a positive integer for " + inputs[i].name + "!");
      return false;
    }
  }
  username = inputs[0].value;
  let email = /[a-zA-Z0-9]*@[a-zA-Z]*\.[a-z]{1,}/;
  if(!email.test(username)) {
    alert("Username must be a valid email address.");
    return false;
  }
  seven_day = inputs[5].checked;
  three_day = inputs[6].checked;
  overnight = inputs[7].checked;
  if(!(seven_day || three_day || overnight)) {
    alert("You must select shipping.");
    return false;
  }
  return true;
}