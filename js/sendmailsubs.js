       
        var formRepeat = 0;
        function validationsubs(){

            let email = document.getElementById('newsletterEmail').value;
            
            
            

            Email.send({
                SecureToken : "318e867f-ea9d-42c1-a4d3-954d5a6356c9",
                To : 'info@mahalaxmibuildwell.com',
                
                From : "technical.adhyay@gmail.com",
                Subject : "SSubscribe for newsletter",
                Body : "Name: '"+name+"' \n"+"Email: '"+email+"' \n"+"Message: '"+message+"'"
            }).then(
                message => alert('ThankYou for subscribing')
                );
                document.getElementById('formsubs').reset();
                return false;
                
            }      
            
 