      // I am a lazy typer ...
    function getid(sP)
    {
      return document.getElementById(sP);
    }

    function clearErrors()
    {
      var allErrors = document.getElementsByClassName('error');
      for (var i = 0; i < allErrors.length; i++) {
        allErrors[i].innerHTML = "";
      }
      var allInputs = document.getElementsByTagName('input');
      for (i = 0; i < allInputs.length; i++) {
        allInputs[i].style.removeProperty("background-color");
      }
      // var form = getid('adForm');
      // form.reset();
    }

    function nameCheck()
    {
      var name = getid('usname').value;
      var pattrn = /^[a-zA-Z0-9\-_.]{6,12}$/;
      if(pattrn.test(name)){
        return true;
      }
      else
      {
  
        getid('nameError').innerHTML="Your username must be 6-12 characters long. <br>Special characters allowed: _-.";
        getid('usname').style.backgroundColor='#fee';
        return false;
      }
    }

    function passwordCheck(){
      var pass = getid('password').value;
      var pat = /^[a-zA-Z0-9\-_.]{6,12}$/;
      if(pat.test(pass)){
 
        return true;
      }
      else
      {
        getid('passwordError').innerHTML="The password must be 8 or more characters long.<br>The password must include at least one uppercase, one lowercase and one number";
        getid('pass').style.backgroundColor='#fee';
        return false;
      }
    }

    function formValidate(){
    	alert("hi");
      clearErrors();
      var countErrors=0;
      
      var nameVal=/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/
     	 var fName=getid('regname').value;
       if(nameVal.test(fName)){
           }
           else
           {
         	  countErrors++;	
             getid('fnameError').innerHTML="The First Name should contain only characters ";
             getid('regname').style.backgroundColor='#fee';
             return false;
            
           
           }
       var lName=getid('reglast').value;
       if(nameVal.test(lName)){
       }
       else
       {
     	  countErrors++;	
         getid('lnameError').innerHTML="The Last Name should contain only characters ";
         getid('reglast').style.backgroundColor='#fee';
         return false;
         
       }
       
      var name = getid('usname').value;
      var pattrn = /^[a-zA-Z0-9\-_.]{6,12}$/;
      if(pattrn.test(name)){

      }
      else
      {
    	  	countErrors++;	
        getid('nameError').innerHTML="Your username must be 6-12 characters long. <br>Special characters allowed: _-.";
        getid('usname').style.backgroundColor='#fee';
        return false;
      }
      var pass = getid('password').value;
      var pat = /^[a-zA-Z0-9\-_.]{6,12}$/;
      //var pat1=/^[a-zA-Z]\w{3,14}$/;
      var pat1=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,12}$/;
      if(pat1.test(pass)){
      }
      else
      {
    	  countErrors++;	
        getid('passwordError').innerHTML="The password must be 8 or more characters long.<br>The password must include at least one uppercase, one lowercase and one number";
        return false;
        getid('password').style.backgroundColor='#fee';
      
      }
      console.log(countErrors);
      
      var patAge=/^[0-9]*$/
      var age=getid('age').value;
    	  if(patAge.test(age)){
          }
          else
          {
        	  countErrors++;	
            getid('ageError').innerHTML="The Age can contain only numbers"
            	getid('age').style.backgroundColor='#fee';
            return false;
          
          }
    	  var patphNo=/(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)/
    	var  phNo=getid('phNo').value;
    	  if(patphNo.test(phNo)){
          }
          else
          {
        	  countErrors++;	
            getid('phNoError').innerHTML="The Phone Number can contain only numbers"
            	getid('phNo').style.backgroundColor='#fee';
            return false;
          
          }
    	  
    	if(countErrors==0)
	  {
	  return true;
	  }
  else if(countErrors>0)
	  {
	  return false;
	  }
    }
    