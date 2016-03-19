<html>
<body>
    <input type="text" id="userInput"=>give me input</input>
    <button onclick="test()">Submit</button>
    <script>
        function test()
        {
            var userI = document.getElementById("userInput").value;
  
            
            window.location = 'http://www.wolframcloud.com/objects/user-7053ce31-817f-4643-aec1-eda27051bba6/phptest?x='+userI;
            //document.write(userI);
 
        }
    </script>
    
 
</body>
</html>
