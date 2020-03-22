<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>file_function</title>
</head>
<body>
             
             
              <?php
              

                $file=fopen('New.docs','w') or die('file could not open');
               
                $line='First-'.$_POST['first\n '];
                fwrite($file,$line);
    
    
               $line=array('First_name'=>array($_POST['first'],'\n'));
    
                $line='Meddil\n'.$_POST['Meddil'];
                fwrite($file,$line);

                $line='Last: \n'.$_POST['Last'];
                fwrite($file,$line);

                $line='Age: \n'.$_POST['Age'];
                fwrite($file,$line);

                $line='Roll:'.$_POST['Roll'];
                fwrite($file,$line);

                $line='Father:'.$_POST['Father'];
                fwrite($file,$line);

                $line='Mother:'.$_POST['Mother'];
                fwrite($file,$line);


                fclose($file);
                  
    
        
    
                $myfile = fopen("newfile.docs", "w") or die("Unable to open file!");
                $txt = "John Doe\n";
                fwrite($myfile, $txt);
                $txt = "Jane Doe\n";
                fwrite($myfile, $txt); 
                fclose($myfile);
        
    
    
            ?>
    <form action="<?php htmlspecialchars('PHP_SELF');?>" method="post">
        First-Name:
       <input type="text" name="first"> <br>
        Meddil-Name:
        <input type="text" name="Meddil"> <br>
         Last-name:
       <input type="text" name="Last"> <br>
         Age:
        <input type="text" name="Age"> <br>
         Roll:
       <input type="text" name="Roll"> <br>
        Father-name:
        <input type="text" name="Father"> <br>
        Mother-name:
        <input type="text" name="Mother">
         <br>
        <input type="submit" value="Submit">
    </form>
   
   
   
   
   
   
   
   
   
   
   
   
   
    
</body>
</html>