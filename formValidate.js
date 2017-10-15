  function getid(sP){
      return document.getElementById(sP);
    }

  function clearErrors(){
      var allErrors = document.getElementsByClassName('error');
      for (var i = 0; i < allErrors.length; i++) {
        allErrors[i].innerHTML = "";
      }
      var allInputs = document.getElementsByTagName('input');
      for (i = 0; i < allInputs.length; i++) {
        allInputs[i].style.removeProperty("background-color");
      }
    }
    
    function nameCheck(){
       var nameRex=/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*[^0-9±!@£$%^&*_+§¡€#¢§¶•ªº«\\<>?:;|=.,]{1,20}$/;
       var getName=getid('name').value;
      if(nameRex.test(getName)){
        return true;
      }
      else{ 
        getid('getNameError').innerHTML="The name must contain only alphabetic characters.";
        getid('name').style.backgroundColor='#fee';
        return false; 
      }

    }
    function emailCheck(){
      var emailRex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var getEmail=getid('email').value;
      if(emailRex.test(getEmail)){
        return true;
      }
      else{ 
        getid('getEmailError').innerHTML="You must enter a valid e-mail ";
        getid('email').style.backgroundColor='#fee';
        return false;
      }
    }

    function phoneCheck(){
      var patphNo=/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/;
      var phNo = getid('phNo').value;
      if(patphNo.test(phNo)){
        return true;
      }
      else{ 
        getid('phNoError').innerHTML="The Phone Number must be a valid Australian phone number";
        getid('phNo').style.backgroundColor='#fee';
        return false;       
      }
    }

    function formValidation(){
      //alert("formVAL");
      clearErrors();
      var countErrors = 0;
      if(phoneCheck() === false){
        //alert("yes");
        countErrors++;
      }
      else if(emailCheck() === false){
        countErrors++;
      }   
      else if(nameCheck() === false){
        countErrors++;
      }
      if(countErrors != 0){
        return false;
      }  
      else {
        return true;
      }
    }  	  
    
