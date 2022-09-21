
<!DOCTYPE html>
<html>
    <head>
        <title>
            FORM-UDF2 PALINDROM CHECKER
        </title>
    </head>
    <body>
        <h2>PALINDROM CHECKER</h2><br>
        <h3>Output</h3>

        <?php
function PalindromCheck($input){
    if(strrev($input)===$input){
        echo 'Text Palindrom';
    }else {
        echo 'Bukan Text Palindrom';
    }
}
echo PalindromCheck($_POST["PALINDROM"])

?>
    </body>
</html>

<html>

</html>


