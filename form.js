var movieTable = [["CH","MON-13","TUE-13","WED-18","THU-18","FRI-18","SAT-12","SUN-12"],
["AF","MON-18","TUE-18","SAT-15","SUN-15"],
["RC","MON-21","TUE-21","WED-13","THU-13","FRI-13","SAT-18","SUN-18"],
["AC","WED-21","THU-21","FRI-21","SAT-21","SUN-21"]
];
// var movie = ["CH","AF","RC","AC"];
// var session = [];
var monStdAd = 0.0;
var monStdCo = 0.0;
var monStdCh = 0.0;
var monFcAd = 0.0;
var monFcCh = 0.0;
var monBeAd = 0.0;
var monBeFa = 0.0;
var monBeCh = 0.0;
function callTotal(){
  var total = +(monStdAd) + +(monStdCo) + +(monStdCh) + +(monFcAd) + +(monFcCh) + +(monBeAd) + +(monBeFa) + +(monBeCh);
  var p = getId('pTotal');
  p.innerHTML = "$ " + total.toFixed(2);
}
function getId(sP)
{
  return document.getElementById(sP);
}

function getSelectedOption(sel) {
    var opt;
    for ( var i = 1, len = sel.options.length; i < len; i++ ) {
        opt = sel.options[i];
        if ( opt.selected === true ) {
            break;
        }
    }
    return opt;
}
function getIndexOfSelectedOption(sel) {
    for ( var i = 1, len = sel.options.length; i < len; i++ ) {
        if ( sel.options[i].selected === true ) {
            return i;
        }
    }
    return 0;
}

function selectedPriceCalculation(sel){
  var opt = getIndexOfSelectedOption(sel);
  var selectedSession = getSelectedOption(getId('session'));
    if (sel.id == "stdFSeat") {
        if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
          return (opt*12.50).toFixed(2);
        }
        else{
          return (opt*18.50).toFixed(2);
        }
    }
    else if(sel.id == "stdCoSeat"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*10.50).toFixed(2);
      }
      else{
        return (opt*15.50).toFixed(2);
      }
    }
    else if(sel.id == "stdChSeat"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*8.50).toFixed(2);
      }
      else{
        return (opt*12.50).toFixed(2);
      }
    }
    else if(sel.id == "preAd"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*25.00).toFixed(2);
      }
      else{
        return (opt*30.00).toFixed(2);
      }
    }
    else if(sel.id == "preCh"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*20.00).toFixed(2);
      }
      else{
        return (opt*25.00).toFixed(2);
      }
    }
    else if(sel.id == "beanAd"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*22.00).toFixed(2);
      }
      else{
        return (opt*33.00).toFixed(2);
      }
    }
    else if(sel.id == "beanFa"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*20.00).toFixed(2);
      }
      else{
        return (opt*30.00).toFixed(2);
      }
    }
    else if(sel.id == "beanCh"){
      if(selectedSession.value == "MON-13" || selectedSession.value == "MON-18" || selectedSession.value == "MON-21" || selectedSession.value == "TUE-13" || selectedSession.value == "WED-13" || selectedSession.value == "THU-13" || selectedSession.value == "FRI-13"){
        return (opt*25.00).toFixed(2);
      }
      else{
        return (opt*30.00).toFixed(2);
      }
    }
  }

function mvFunc(){
  // alert(opt.value == movieTable[0][0]);
  var myNode = getId('movieTitle');
  if(getIndexOfSelectedOption(myNode)==0){
    return;
  }  
  var opt = getSelectedOption(myNode);
  for(var i = 0; i<movieTable.length; i++){
    if(opt.value == movieTable[i][0]){
      var selectSession = getId('session');
      while (selectSession.firstChild) {
          selectSession.removeChild(selectSession.firstChild);
      }
      if(opt.value == "CH"){
        selectSession.innerHTML="<option selected disabled >Select Session</option>"
        selectSession.innerHTML+="<option value=\"MON-13\">Monday 1pm</option>"
        selectSession.innerHTML+="<option value=\"TUE-13\">Tuesday 1pm</option>"
        selectSession.innerHTML+="<option value=\"WED-18\">Wednesday 6pm</option>"
        selectSession.innerHTML+="<option value=\"THU-18\">Thursday 6pm</option>"
        selectSession.innerHTML+="<option value=\"FRI-18\">Friday 6pm</option>"
        selectSession.innerHTML+="<option value=\"SAT-12\">Saturday 12pm</option>"
        selectSession.innerHTML+="<option value=\"SUN-12\">Sunday 12pm</option>"
      }
      else if(opt.value == "AF"){
        selectSession.innerHTML="<option selected disabled >Select Session</option>"
        selectSession.innerHTML+="<option value=\"MON-18\">Monday 6pm</option>"
        selectSession.innerHTML+="<option value=\"TUE-18\">Tuesday 6pm</option>"
        selectSession.innerHTML+="<option value=\"SAT-15\">Saturday 3pm</option>"
        selectSession.innerHTML+="<option value=\"SUN-15\">Sunday 3pm</option>"
      }
      else if(opt.value == "RC"){
        selectSession.innerHTML="<option selected disabled >Select Session</option>"
        selectSession.innerHTML+="<option value=\"MON-21\">Monday 9pm</option>"
        selectSession.innerHTML+="<option value=\"TUE-21\">Tuesday 9pm</option>"
        selectSession.innerHTML+="<option value=\"WED-13\">Wednesday 1pm</option>"
        selectSession.innerHTML+="<option value=\"THU-13\">Thursday 1pm</option>"
        selectSession.innerHTML+="<option value=\"FRI-13\">Friday 1pm</option>"
        selectSession.innerHTML+="<option value=\"SAT-18\">Saturday 6pm</option>"
        selectSession.innerHTML+="<option value=\"SUN-18\">Sunday 6pm</option>"
      }
      else if(opt.value == "AC"){
        selectSession.innerHTML="<option selected disabled >Select Session</option>"
        selectSession.innerHTML+="<option value=\"WED-21\">Wednesday 9pm</option>"
        selectSession.innerHTML+="<option value=\"THU-21\">Thursday 9pm</option>"
        selectSession.innerHTML+="<option value=\"FRI-21\">Friday 9pm</option>"
        selectSession.innerHTML+="<option value=\"SAT-21\">Saturday 9pm</option>"
        selectSession.innerHTML+="<option value=\"SUN-21\">Sunday 9pm</option>"
      }
      break;
    }
  }
}
function stdFuncAd(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monStdAd = 0.0;
    callTotal();
    var p = getId('pStdAd');
    p.innerHTML = "$ " + monStdAd.toFixed(2);
  }
  else{
    monStdAd = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monStdAd = opt;
    callTotal();
    var p = getId('pStdAd');
    p.innerHTML = "$ " + opt;
  }
}
function stdFuncCo(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monStdCo = 0.0;
    callTotal();
    var p = getId('pStdCo');
    p.innerHTML = "$ " + monStdCo.toFixed(2);
  }
  else{
    monStdCo = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monStdCo = opt;
    callTotal();
    var p = getId('pStdCo');
    p.innerHTML = "$ " + opt;
  }
  // monStdCo = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monStdCo = opt;
  // callTotal();
  // var p = getId('pStdCo');
  // p.innerHTML = "$ " + opt;
}
function stdFuncCh(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monStdCh = 0.0;
    callTotal();
    var p = getId('pStdCh');
    p.innerHTML = "$ " + monStdCh.toFixed(2);
  }
  else{
    monStdCh = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monStdCh = opt;
    callTotal();
    var p = getId('pStdCh');
    p.innerHTML = "$ " + opt;
  }
  // monStdCh = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monStdCh = opt;
  // callTotal();
  // var p = getId('pStdCh');
  // p.innerHTML = "$ " + opt;
}
function fcFuncAd(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monFcAd = 0.0;
    callTotal();
    var p = getId('pPreAd');
    p.innerHTML = "$ " + monFcAd.toFixed(2);
  }
  else{
    monFcAd = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monFcAd = opt;
    callTotal();
    var p = getId('pPreAd');
    p.innerHTML = "$ " + opt;
  }
  // monFcAd = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monFcAd = opt;
  // callTotal();
  // var p = getId('pPreAd');
  // p.innerHTML = "$ " + opt;
}
function fcFuncCh(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monFcCh = 0.0;
    callTotal();
    var p = getId('pPreCh');
    p.innerHTML = "$ " + monFcCh.toFixed(2);
  }
  else{
    monFcCh = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monFcCh = opt;
    callTotal();
    var p = getId('pPreCh');
    p.innerHTML = "$ " + opt;
  }
  // monFcCh = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monFcCh = opt;
  // callTotal();
  // var p = getId('pPreCh');
  // p.innerHTML = "$ " + opt;
}
function beanFuncAd(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monBeAd = 0.0;
    callTotal();
    var p = getId('pBeanAd');
    p.innerHTML = "$ " + monBeAd.toFixed(2);
  }
  else{
    monBeAd = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monBeAd = opt;
    callTotal();
    var p = getId('pBeanAd');
    p.innerHTML = "$ " + opt;
  }
  // monBeAd = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monBeAd = opt;
  // callTotal();
  // var p = getId('pBeanAd');
  // p.innerHTML = "$ " + opt;
}
function beanFuncFa(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monBeFa = 0.0;
    callTotal();
    var p = getId('pBeanFa');
    p.innerHTML = "$ " + monBeFa.toFixed(2);
  }
  else{
    monBeFa = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monBeFa = opt;
    callTotal();
    var p = getId('pBeanFa');
    p.innerHTML = "$ " + opt;
  }
  // monBeFa = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monBeFa = opt;
  // callTotal();
  // var p = getId('pBeanFa');
  // p.innerHTML = "$ " + opt;
}
function beanFuncCh(myId){
  if(getIndexOfSelectedOption(getId('session')) == 0){
    getId(myId).selectedIndex = 0;
    monBeCh = 0.0;
    callTotal();
    var p = getId('pBeanCh');
    p.innerHTML = "$ " + monBeCh.toFixed(2);
  }
  else{
    monBeCh = 0.0;
    var opt = selectedPriceCalculation(getId(myId));
    monBeCh = opt;
    callTotal();
    var p = getId('pBeanCh');
    p.innerHTML = "$ " + opt;
  }
  // monBeCh = 0.0;
  // var opt = selectedPriceCalculation(getId(myId));
  // monBeCh =opt;
  // callTotal();
  // var p = getId('pBeanCh');
  // p.innerHTML = "$ " + opt;
}
function sessionFunction(){
  stdFuncAd('stdFSeat');
  stdFuncCo('stdCoSeat');
  stdFuncCh('stdChSeat');
  fcFuncAd('preAd');
  fcFuncCh('preCh');
  beanFuncAd('beanAd');
  beanFuncFa('beanFa');
  beanFuncCh('beanCh');
  callTotal();
}
function clearForm()
{
  alert("about to clear errors");
  // var allPrice = document.getElementsByClassName('price');
  // for (var i = 0; i < allPrice.length; i++) {
  // allPrice[i].innerHTML = "0.00";
  // }
  // var allSelects = document.getElementsByTagName('select');
  // for (var j = 0; j < allSelects.length; j++) {
  // allSelects[j].options[0]setAttribute("selected");
  // }



  // var allInputs = document.getElementsByTagName('input');
  // for (i = 0; i < allInputs.length; i++) {
  //   allInputs[i].style.removeProperty("background-color");
  // }
  // var form = getid('adForm');
  // form.reset();
}


function formValidate(){
  clearForm();
  return true;
  // var countForm=0;
  // if(!nameCheck()){
  //   countErrors++;
  // }
  // if(!passwordCheck()){
  //   countErrors++;
  // }
  // console.log(countErrors);
  // return(countErrors==0);
}