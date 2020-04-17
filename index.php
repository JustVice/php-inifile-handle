<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="PHP ini file handle example" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href=""> -->
</head>

<body>

    <h1>PHP Ini File handling example</h1>

    <p>
        The following is an example of utilization of ini files.
    </p>
    <p>
        The content below is being load from the file called "inifile.ini" at the project root folder.
    </p>

    <?php

    #Reads ini file and stores its content inside a variable.
    $INI_VARIABLES_ARRAY = parse_ini_file("inifile.ini");

    #Prints the entire array on the HTML.
    echo "Printing entire array: <br><br>";
    foreach ($INI_VARIABLES_ARRAY as $value) {
        echo $value . "<br>"; #prints I'm string one & I'm string two
    }

    #Prints just one specific value
    print("<br>Printing just the value STRING_ONE on the canvas:");
    print("<br>");

    print($INI_VARIABLES_ARRAY['STRING_ONE']); #prints "I'm string one"

    #Scoping variables by section.
    print('<br><br>Method parse_ini_file will put all the variables inside the array.
    If you want to scope the variables by section, you must pass true as second parameter.
    Example: parse_ini_file("inifile.ini", true); instead of parse_ini_file(inifile.ini);<br><br>');

    $INI_VARIABLES_ARRAY = parse_ini_file("inifile.ini", true);

    print('Getting variable from section numbers with sections scoped.<br><br>');
    print('NUMBERS section NUMBER_ONE variable:');

    print($INI_VARIABLES_ARRAY['NUMBERS']['NUMBER ONE']);

    ?>

</body>

</html>