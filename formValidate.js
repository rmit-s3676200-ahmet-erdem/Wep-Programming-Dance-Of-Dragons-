
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
    }


    function formValidate(){
   
      clearErrors();
      var countErrors=0;
      
      var nameRex=/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*[^±!@£$%^&*_+§¡€#¢§¶•ªº«\\<>?:;|=.,]{1,20}$/
     	 var getName=getid('name').value;
       if(nameRex.test(getName)){
           }
           else
           {
         	  countErrors++;	
             getid('getNameError').innerHTML="The name must contain only characters ";
             getid('name').style.backgroundColor='#fee';
             return false;
           
           }
       
       var emailRex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/
        var getEmail=getid('email').value;
       if(emailRex.test(getEmail)){
           }
           else
           {
            countErrors++;  
             getid('getEmailError').innerHTML="You must enter a valid e-mail ";
             getid('email').style.backgroundColor='#fee';
             return false;
           
           }
         
       }
       
     
      
    	  var patphNo=/^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$/
    	var  phNo=getid('phNo').value;
    	  if(patphNo.test(phNo)){
          }
          else
          {
        	  countErrors++;	
            getid('phNoError').innerHTML="The Phone Number must be a valid Australian phone number"
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
    