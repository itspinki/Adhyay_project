       
        var formRepeat = 0;
        function validation(){

            let name = document.getElementById('from__name').value;
            let email = document.getElementById('from__email').value;
            let u_subject = document.getElementById('from__subject').value;
            let message = document.getElementById('form__message').value;
            
            if( formRepeat === 0){
                formRepeat = 1;
            }else{
                alert('Only one mail at a time');
                return false;
            }

            Email.send({
                SecureToken : "318e867f-ea9d-42c1-a4d3-954d5a6356c9",
                To : 'info@adhyay.co.in',
                
                From : "technical.adhyay@gmail.com",
                Subject : u_subject,
                Body : "Name: '"+name+"' \n"+"Email: '"+email+"' \n"+"Message: '"+message+"'"
            }).then(
                message => alert('ThankYou for submitting the form')
                );
                document.getElementById('mainform').reset();
                return false;
                
            }      
            
 