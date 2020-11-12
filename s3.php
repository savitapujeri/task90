<!DOCTYPE html>
<html>
<head>
    
    </head>
    <body>
    <button type="button" onclick="getUsername()">submit</button>
        <script>
      function getUsername(){
       
     var email = document.getElementById('email').value;
        email.trim();
        
    var findposition = email.indexOf("@");
        
    var name = email.slice(o,findposition);
        window.alert("hi,"+name+",");
     }
    </script>
    </body>

</html>