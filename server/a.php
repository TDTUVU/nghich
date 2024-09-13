<?php
echo date('H:i:s');
?>
<!DOCTYPE html>

<head>
 <script>
    let ajaxrequest;

    function getXMLHttpRequest(){
        let request;
        if( window.XMLHttpRequest){
            request=new XMLHttpRequest();
            
        }else{
            request=new ACtiveXObject("microsoft.XMLHTTP");

        }
        return request;
    }
 </script>
</head>
<body>
    
</body>
</html>