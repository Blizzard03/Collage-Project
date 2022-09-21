
<!DOCTYPE html>
<html>
    <head>
        <title>
            FORM-UDF1 DATE CONVERTER
        </title>
    </head>
    <body>
        <h2>DATE CONVERTER</h2><br>
        <h3>Output</h3>
        <?php
        function converter(&$dt,&$mm,&$yy){
            $input = $_POST["inputDate"];        
            $dt=substr($input,0,2);
            $mm=substr($input, 3,2);
            $yy=substr($input,6,4);
            echo $yy, "-", $mm, "-", $dt;
        }
    converter($yy,$mm,$dt,);
    

?>        </body>
</html>

<html>

</html>
