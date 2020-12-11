/*$(document).ready(function()
{
	$('#MainForm').validate(
	{
			rules : 
			{
					password : 
				{
					required: true,
					minlength : 5
				},
					password_confirm : 
				{

					minlength : 5,
					equalTo : "#password"
				}
			}
		});

$("button").click(function()
{
	alert($("#MainForm").valid());
    //console.log($("#MainForm").valid());
});
});*/

/*$document.redy(function()
{
		$("#MainForm").Validate
		({*/
			 /*message: 'This value is not valid', fields:  
            {  
                username: {  
                    message: 'The username is not valid',  
                    validators: {  
                        notEmpty: {  
                            message: 'The username is required and can\'t be empty'  
                        },  
                        stringLength: {  
                            min: 6,  
                            max: 30,  
                            message: 'The username must be more than 6 and less than 30 characters long'  
                        },  
                        regexp: {  
                            regexp: /^[a-zA-Z0-9_\.]+$/,  
                            message: 'The username can only consist of alphabetical, number, dot and underscore'  
                        },  
                        different: {  
                            field: 'password',  
                            message: 'The username and password can\'t be the same as each other'  
                        }  
                    }  
                },  
                email: {  
                    validators: {  
                        notEmpty: {  
                            message: 'The email address is required and can\'t be empty'  
                        },  
                        emailAddress: {  
                            message: 'The input is not a valid email address'  
                        }  
                    }  
                },  */
                /*rules:
                {
                password: 
                {  
                    validators: 
                    {  
                        notEmpty: 
                        {  
                            message: 'The password is required and can\'t be empty'  
                        },  
                        identical: 
                        {  
                            field: 'password_confirm',  
                            message: 'The password and its confirm are not the same'  
                        },  
                        different: 
                        {  
                            field: 'username',  
                            message: 'The password can\'t be the same as username'  
                        }  
                    }  
                },

                password_confirm: 
                {  
                    validators: 
                    {  
                        notEmpty: 
                        {  
                            message: 'The confirm password is required and can\'t be empty'  
                        },  
                        identical: 
                        {  
                            field: 'password',  
                            message: 'The password and its confirm are not the same'  
                        },  
                        different: 
                        {  
                            field: 'username',  
                            message: 'The password can\'t be the same as username'  
                        }  
                    }  
                },
                }  
		});
});*/














	/*$("#button1").click(function()
	{
		 $.validator.setDefaults(
		  {
               debug: true,
               success: "valid" 
           });*/

		 /*$("#MainForm").validate(
		 {*/
		 /*message: 'This value is not valid', fields:  
            {  
                username: 
                {  
                    message: 'The username is not valid',  
                    validators:
                     {  
                        notEmpty: 
                        {  
                            message: 'The username is required and can\'t be empty'  
                        },  
                        stringLength: 
                        {  
                            min: 6,  
                            max: 30,  
                            message: 'The username must be more than 6 and less than 30 characters long'  
                        },  
                        regexp: 
                        {  
                            regexp: /^[a-zA-Z0-9_\.]+$/,  
                            message: 'The username can only consist of alphabetical, number, dot and underscore'  
                        },  
                        different: 
                        {  
                            field: 'password',  
                            message: 'The username and password can\'t be the same as each other'  
                        }  
                    }  
                },  
                email: 
                {  
                    validators: 
                    {  
                        notEmpty: 
                        {  
                            message: 'The email address is required and can\'t be empty'  
                        },  
                        emailAddress: 
                        {  
                            message: 'The input is not a valid email address'  
                        }  
                    }  
                },*/

                /*rules:
                {
                password: 
                {  
                    validators: 
                    {  
                        notEmpty: 
                        {  
                            message: 'The password is required and can\'t be empty'  
                        },  
                        identical: 
                        {  
                            field: 'password_confirm',  
                            message: 'The password and its confirm are not the same'  
                        },  
                        different: 
                        {  
                            field: 'username',  
                            message: 'The password can\'t be the same as username'  
                        }  
                    }  
                },

                password_confirm: 
                {  
                    validators: 
                    {  
                        notEmpty: 
                        {  
                            message: 'The confirm password is required and can\'t be empty'  
                        },  
                        identical: 
                        {  
                            field: 'password',  
                            message: 'The password and its confirm are not the same'  
                        },  
                        different: 
                        {  
                            field: 'username',  
                            message: 'The password can\'t be the same as username'  
                        }  
                    }  
                }
            },  
		});
	});
});*/		 


$(document).ready(function()
{
    $("#MainForm").validate({
        errorElement: 'div',    
           rules: 
           {
                /*FirstName:
            {
              regexp: /^[a-zA-Z0-9_\.]+$/,  
          },*/

                FirstName:
                {
                    required:true,
                    minlength:3,
                    maxlength:20,   
                },

                LastName:
                {
                    required:true,
                    minlength:3,
                    maxlength:20,   
                },

                UserName:
                {
                    required:true,
                    minlength:3,
                    maxlength:20,
                   /* required:function(){
                        checkname()
                    }*/
                    submitHandler:function(){
                        checkname();
                    },

                },

               password: 
               { 
                    required: true,
                    minlength: 6,
                    maxlength: 30,
                    pwcheck:true,
                    //different:"#UserName",
                    //regexp: /^[a-zA-Z0-9_\.]+$/,

               }, 

                   password_confirm: 
               { 
                     equalTo: "#password",
                     
                     //regexp: /^[a-zA-Z0-9_\.]+$/,
               },

               month:
               {
                required:true,
               },

               day:
               {
                required:true,
               },

               year:
               {
                required:true,
               },

               Gender:
               {
                required:true,
               },

               txtInput:
               {
                required:true,
               }

           },
     messages:
     {
        FirstName:
        {
            required:"Enter your FirstName",
            minlength:"Atleast 3 characters",
            maxlength:"max 20 characters"

        },

        LastName:
        {
            required:"Enter your LastName",
            minlength:"Atleast 3 characters",
            maxlength:"max 20 characters"
        },

        UserName:
        {
            required:"Enter your UserName",
            minlength:"Atleast 3 characters",
            maxlength:"max 20 characters"
        },

         password: 
         { 
            required:"the password is required",
            pwcheck:"Enter The password which conssist upper,lower case and numeric"
            //different:"The password can not be the same as username" 

         },

         month: 
         { 
            required:"the month is required",
         },

         day: 
         { 
            required:"the day is required",
         },

         year: 
         { 
            required:"the year is required",
         },

         Gender:
         {
            required:"Gender is required field",
         },

         txtInput:
        {
                required:"captcha is required",
        }
     }

 }); 

    $.validator.addMethod("pwcheck", function(value) {
   return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
       && /[a-z]/.test(value) // has a lowercase letter
       && /[A-Z]/.test(value) // has a Uppercase letter
       && /\d/.test(value) // has a digit
});

$("select").change(function()
{
    var month = parseInt($("#month").val());
    var day = parseInt($("#day").val());
    var year = parseInt($("#year").val());

     /*var date = new Date(month+ "/"+day+ "/" +year);*/

    if(( month==2 || month==4 || month==6 || month==9 || month==11) && day==31)
    {
        document.getElementById("day").style.border="2px solid red";
        document.getElementById("DateError").style.color="red";
        document.getElementById("DateError").innerHTML="This kind of date doesn't exists";
    }


    else if(month==2 && day==30)
    {  
        document.getElementById("day").style.border="2px solid red";
        document.getElementById("DateError").style.color="red";
        document.getElementById("DateError").innerHTML="This kind of date doesn't exists";
    }

    else if(day=="29" && month=="2")
    {
        if(year % 4 == 0 && ( year % 100 != 0 || year % 400 == 0))
        {
            document.getElementById("day").style.border="2px solid lightgreen";
            document.getElementById("DateError").style.color="lightgreen";
            document.getElementById("DateError").innerHTML="It's leap year";
        }

        else
        {
           document.getElementById("day").style.border="2px solid red";
            document.getElementById("DateError").style.color="red";
            document.getElementById("DateError").innerHTML="This kind of date doesn't exists";
            return false;
        }
    } 

    else
    {
         document.getElementById("day").style.border="2px solid lightgreen";
        document.getElementById("DateError").innerHTML="";
    }

});


   
    /*else if(month == (date.getMonth()+1) && day == date.getDate() && year == date.getFullYear())
    {
        return true;
    }
    else
    {
        return false;
    }*/

    

//ValidCaptcha();

});    



  /*var n1 = Math.round(Math.random() * 10 + 1);
    var n2 = Math.round(Math.random() * 10 + 1);
    $("#a").val(n1 + " + " + n2);
    //$("#button1").click(function() 
    {
        if (eval($("#a").val()) == $("#b").val())
         {
            alert("Ok! You are human!");
        } else 
        {
            alert("error");
        }
    }*/