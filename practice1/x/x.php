<html>
   <body>
   
      <?php
         $xml = simplexml_load_file("b.xml") or die("Error: Cannot create object");
         
         foreach($xml->children() as $books) { 
            echo $books->title . "<br> "; 
            echo $books->tutor . "<br> "; 
            echo $books->duration . "<br> ";
            echo $books->price . "<hr>"; 
         }
      ?>
      
   </body>
</html>