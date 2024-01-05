<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning PHP</title>
</head>
<body>

    <h1>PHP</h1>

    
    <?php
        ini_set('display_errors','On');
        error_reporting(E_ALL | E_STRICT);
        echo "Hello World !!";
        // phpinfo();
    ?>

    <!-- New Line -->
    <br/>

    <?php
        // String Concatination
        echo "Hello"." World"."!!";
    ?>

    <br/>
    
    <?php
        // Calculation
        echo 2+3;
    ?>

    <br/>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Variable -->
    <h2>Variables</h2>
    <!-- //* A symbolic representaion of a value that can change over time. -->
    <!--
        Start with "$"
        Followed by letter of underscore
        Can contain letters, numbers, underscores, or dashes
        No spaces
        Case sensitive
    -->
    <?php
        $var1 = 10;
        echo $var1;
        echo "<br/>";
        $var2 = "Hello World!";
        echo $var2;
    ?>
    <br/>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Strings -->
    <h2>Strings</h2>
    <?php
        $gretting = "Hello";
        $target = "world";
        $phrase = $gretting . " ". $target;
        echo $phrase;
        echo "<br/>";
        echo "$phrase again! <br/>";
        echo "{$phrase}!!! <br/>";
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! String Functions -->
    <h2>String Functions</h2>
    <?php
        $first = "The quick brown fox";
        $second = " jumped over the lazy dog.";
        // Another way of concatenating strings
        $third = $first;
        $third .= $second;
        echo $third;
    ?>
    <br>

    <!-- Convert string to lowercase -->
    Lowercase: <?php echo strtolower($third); ?> <br/>

    <!-- Convert string to uppercase -->
    Uppercase: <?php echo strtoupper($third); ?> <br/>

    <!-- Convert the first character of string to uppercase -->
    Uppercase first: <?php echo ucfirst($third); ?> <br/>

    <!-- Convert first letters of every word to uppercase -->
    Uppercase words: <?php echo ucwords($third); ?> <br/>
    <br/>

    <!-- Length of the string -->
    Length: <?php echo strlen($third); ?><br/>

    <!-- Trim removes all spaces from start and end -->
    Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br/>

    <!-- Finds and returns everything from and after that string -->
    Find: <?php echo strstr($third, "brown"); ?><br/>

    <!-- Replace string -->
    Replace by string: <?php echo str_replace("quick","super-fast", $third); ?><br/>
    <br/>

    <!-- Repeat the sting 2 times -->
    Repeat: <?php echo str_repeat($third, 2); ?><br/>

    <!-- Get the substring -->
    Make substring: <?php echo substr($third, 5, 10); ?><br/>

    <!-- Find the position of the string -->
    Find position: <?php echo strpos($third, "brown"); ?><br/>

    <!-- Find the position of the character -->
    Find character: <?php echo strchr($third, "z"); ?><br/>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Integers -->
    <h2>Integers</h2>
    <?php
        $var1 = 3;
        $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
    <br />

    Absolute value:   <?php echo abs(0 - 300);   ?><br />

    Exponential:       <?php echo pow(2,8);       ?><br />

    Square root:       <?php echo sqrt(100);     ?><br />

    Modulo:           <?php echo fmod(20,7);     ?><br />

    <!-- Random number -->
    Random:           <?php echo rand();         ?><br />

    <!-- Random number between min and max -->
    Random (min,max): <?php echo rand(1,10);     ?><br />

    <br />
    <!-- $var2 = $var2 + 4 -->
    += : <?php $var2 += 4; echo $var2; ?><br />
    -= : <?php $var2 -= 4; echo $var2; ?><br />
    *= : <?php $var2 *= 3; echo $var2; ?><br />
    /= : <?php $var2 /= 4; echo $var2; ?><br />
    <br />
    Increment: <?php $var2++; echo $var2; ?><br />
    Decrement: <?php $var2--; echo $var2; ?><br />
    <br />

    <?php
        // PHP will convert a string to an integer, but it is sloppy programming
        echo 1 + "2 houses";
    ?>
    <br>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Floating point numbers -->
    <h2>Floating point numbers</h2>

    <?php echo $float = 3.14; ?><br />
    <?php echo $float + 7; ?><br />
    <?php echo 4/3; ?><br />

    
    <?php 
        // This cannnot be done - it gives you error
        // echo 4/0; 
    ?>
    <br />

    <br />
    Round: <?php echo round($float, 1);   ?><br />

    <!-- Ceiling always rounds up -->
    Ceiling: <?php echo ceil($float);       ?><br />

    <!-- Floor always rounds down -->
    Floor: <?php echo floor($float);     ?><br />
    <br />
    
    <?php $integer = 3; ?>
    
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
    <?php echo "Is {$float} integer? " . is_int($float); ?><br />
    <br />
    <?php echo "Is {$integer} float? " . is_float($integer); ?><br />
    <?php echo "Is {$float} float? " . is_float($float); ?><br />
    <br />
    <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
    <?php echo "Is {$float} numeric? " . is_numeric($float); ?><br />
    <br />

<!-- // ******************************************************************************************************************************** -->
<!-- //! Arrays -->
    <h2>Arrays</h2>
    <!-- //* An ordered, integer-indexed collection of objects. -->

    <?php
        $numbers = array(4,8,15,16,23,42);
        echo $numbers[0];
    ?>
    <br />
    
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2]; ?><br />
    <?php
        // This will give an error, because the array is not in a readable format
        // echo $mixed[3]; 
    ?><br />
    <?php
        // This will give an error, because the array is not in a readable format
        //echo $mixed 
    ?><br />
    
    <?php echo $mixed[3][1]; ?><br />
    
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>

    <!-- Add's the element at the end of the array -->
    <?php $mixed[] = "horse"; ?>
    
    <!-- <pre> tag is used to print the readable format array in more readable format using intendation while printing -->
    <pre>
        <?php
            // print_r prints the array in a readable way
            echo print_r($mixed); 
        ?>
    </pre>
    
    <?php 
        //PHP 5.4 added the short array syntax.
        $array = [1,2,3];
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Associative Arrays -->
    <h2>Associative Arrays</h2>
    <!-- //* An object-indexed collection of objects. -->

    <?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <!-- The position will not work for associative array -->
    <?php // echo $assoc[0]; ?><br />

    <?php $numbers = array(4,8,15,16,23,42); ?>
    <!-- Array can be also written as associative array -->
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>
    <?php echo $numbers[0]; ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Array Functions -->
    <h2>Array Functions</h2>

    <?php $numbers = array(8,23,15,42,16,4); ?>
    
    Count:         <?php echo count($numbers); ?><br />
    Max value:     <?php echo max($numbers);   ?><br />
    Min value:     <?php echo min($numbers);   ?><br />
    <br />
    <pre>
        Sort:          <?php sort($numbers);  print_r($numbers); ?><br />
        Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <!-- The sort methods are descturctive methods -> The original array does not ec=xist anymore -->

    <br />
    <!-- Array into string -->
    Implode:       <?php echo $num_string = implode(" * ", $numbers); ?><br />
    <!-- String to array -->
    Explode:       <?php print_r(explode(" * ", $num_string)); ?><br />
    <br />
    
    15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />

    <!-- //TODO: https://www.php.net/manual/en/ref.array.php -->

<!-- // ******************************************************************************************************************************** -->
<!-- //! Boolean -->
    <h2>Boolean</h2>
    <!-- //* A programming type that can either be true or false -->

    <?php
        // Can be uppercase or lowercase - Case insensitive
        $result1 = true;
        $result2 = FALSE;
    ?>
    Result1: <?php echo $result1; ?><br />
    Result2: <?php echo $result2; ?><br />
    
    <!-- Check wheather a variable is boolean or not? -->
    result2 is boolean? <?php echo is_bool($result2); ?>
    <br />
    
    <?php
        $number = 3.14;
        if( is_float($number) ) {
            echo "It is a float.";
        }
        else{
            echo "It is not a float.";
        }
    
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! NULL and empty -->
    <h2>NULL and empty</h2>
    <?php
        // null = NULl -> Case insensitive
        $var1 = null;
        // Empty
        $var2 = "";
    ?>
    var1 null? <?php echo is_null($var1); ?><br />
    var2 null? <?php echo is_null($var2); ?><br />
    <!-- It gives a notice that, Undefined variable var3 -> Notice are different from errors -->
    <!-- By setting to null, we can avoid the notice -> Ex: var1 -->
    var3 null? <?php echo is_null($var3); ?><br />
    <br />
    var1 is set? <?php echo isset($var1); ?><br />
    var2 is set? <?php echo isset($var2); ?><br />
    var3 is set? <?php echo isset($var3); ?><br />
    <br />
    
    <!-- All of the below are considered as empty -->
    <?php // empty: "", null, 0, 0.0, "0", false, array() ?>
    
    <?php $var3 = "0"; ?>
    var1 empty? <?php echo empty($var1); ?><br />
    var2 empty? <?php echo empty($var2); ?><br />
    var3 empty? <?php echo empty($var3); ?><br />

<!-- // ******************************************************************************************************************************** -->
<!-- //! Type Juggling and Casting -->
    <h2>Type Juggling and Casting</h2>

    <!-- Method 1: Using Function: settype($var, "integer") -->
    <!-- Method 2: (integer) $var -->
    <h3>Type Juggling</h3>
    <?php $count = "2 cats"; ?>
    Type: <?php echo gettype($count); ?><br />
    
    <?php $count += 3; ?>
    Type: <?php echo gettype($count); ?><br />

    <?php $cats = "I have " . $count . " cats."; ?>
    Cats: <?php echo gettype($cats); ?><br />
    <br />
    
    <h3>Type Casting</h3>
    <?php settype($count, "integer"); ?>
    count: <?php echo gettype($count); ?><br />
    
    <?php $count2 = (string) $count; ?>
    count: <?php echo gettype($count); ?><br />
    count2: <?php echo gettype($count2); ?><br />
    <br />
    
    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>
    <!-- Converts the type of original variable to string -->
    <?php settype($test1, "string"); ?>
    <!-- Does not convert the type of original variable  -->
    <?php (string) $test2; ?>
    test1: <?php echo gettype($test1); ?><br />
    test2: <?php echo gettype($test2); ?><br />

<!-- // ******************************************************************************************************************************** -->
<!-- //! Constants -->
    <h2>Constants</h2>

    <?php
        $max_width = 980;
    
        define("MAX_WIDTH", 980);
        echo MAX_WIDTH;
    ?>
    <br />
    <?php // can't change the value
    //MAX_WIDTH = MAX_WIDTH + 1  -> Error
    //echo MAX_WIDTH;
    ?>

    <?php // can't even redefine it
    // define("MAX_WIDTH", 981); -> Error
    echo MAX_WIDTH;
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! If Statements -->
    <h2>If Statements</h2>

    <?php // Only welcome new users
        $new_user = true;
        if ($new_user) {
            echo "<p>Welcome!</p>";
            echo "<p>We are glad you decided to join us.</p>";
        }
    ?>
    <br />
    
    <?php // don't divide by zero
        $numerator = 20;
        $denominator = 0;
        $result = 0;
        if ($denominator > 0) {
        $result = $numerator / $denominator;
        }
        echo "Result: {$result}";
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Else and Elseif -->
    <h2>Else and Elseif</h2>
    <?php
        $a = 3;
        $b = 4;

        if ($a > $b) {
            echo "a is larger than b";
        } elseif ($a < $b) {
            echo "a is smaller than b";
        } else {
            echo "a is equal to b";
        }
    ?>
    <br />

<!-- // ******************************************************************************************************************************** -->
<!-- //! Comparition and Logical operators -->
    <h2>Comparition and Logical operators</h2>
    <!-- 
        Comparision Operators:
            Equal: ==                                   -> 123 == "123" is true
            Identical: ===                              -> 123 == "123" is false
            Comparition: >, <, >=, <=, <>
            Not euqal: !=
            Not identical: !==
        
        Logical operators:
            And: &&
            Or: ||
    -->
    <?php
        $a = 4;
        $b = 3;
        $c = 1;
        $d = 20;
        if (($a >= $b) || ($c >= $d)) {
            echo "a is larger than b OR ";
            echo "c is larger than d";
        }
    ?>
    <br />
    <?php
        $e = 100;
        if (!isset($e)) {
            $e = 200;
        }
        echo $e;
    ?>
    <br />
    <?php
      // don't reject 0 or 0.0
        $quantity = "";
        if (empty($quantity) && !is_numeric($quantity)) {
            echo "You must enter a quantity.";
        }
    ?>
<!-- // ******************************************************************************************************************************** -->
<!-- //! Switch statment -->
    <h2>Switch statment</h2>

    <?php
        $a = 2;

        switch ($a) {
            case 0:
                echo "a equals 0 <br/>";
                break;
            case 1:
                echo "a equals 1 <br/>";
                break;
            case 2:
                echo "a equals 2 <br/>";
                break;
            case 3:
                echo "a equals 3 <br/>";
                break;
            default:
                echo "a is not 0, 1, 2, or 3 <br/>";
                break;
        } 
    ?>  
    
    <?php
        // ChineseZodiac
        // whitespace doesn't matter
        // colons, semicolons and breaks do
        $year = 2013;
        switch (($year - 4) % 12) {
            case  0: $zodiac = 'Rat';     break;
            case  1: $zodiac = 'Ox';       break;
            case  2: $zodiac = 'Tiger';   break;
            case  3: $zodiac = 'Rabbit';   break;
            case  4: $zodiac = 'Dragon';   break;
            case  5: $zodiac = 'Snake';   break;
            case  6: $zodiac = 'Horse';   break;
            case  7: $zodiac = 'Goat';     break;
            case  8: $zodiac = 'Monkey';  break;
            case  9: $zodiac = 'Rooster'; break;
            case 10: $zodiac = 'Dog';     break;
            case 11: $zodiac = 'Pig';     break;
        }
        echo "{$year} is the year of the {$zodiac}.<br />";
    ?>
    
    <?php // case with multiple values

        $user_type = 'customer';

        switch ($user_type) {
        case 'student':
            echo "Welcome!";
            break;
        case 'press':
        case 'customer':
        case 'admin':
            echo "Hello!";
            break;
        }
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! While loops -->
    <h2>While loops</h2>
    
    <?php
        $count = 0;
        while ($count <= 10) {
            if ($count == 5) {
                echo "FIVE, ";
            } else {
                echo $count . ", ";
            }
            $count++;  // increment by 1
        }
        echo "<br />";
        echo "Count: {$count}";
    ?>

    <br />
    <br />

    <?php
        $count = 1;
        while ($count < 20) {
            if($count % 2 == 0) {
            echo "{$count} is even<br />";
            } else {
            echo "{$count} is odd<br />";
            }
            $count++;
        }
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! For loops -->
    <h2>For loops</h2>
    <?php // while loop example
        $count = 0;
        while ($count <= 10) {
            echo $count . ", ";
            $count++;
        }
    ?>
    <br />
    <?php
        for($count = 0; $count <= 10; $count++) {
            echo $count . ", ";
        }
    ?>
    
    <br />
    <?php
        for ($count = 20; $count > 0; $count--) {
            if ($count % 2 == 0) {
            echo "{$count} is even.<br />";
            } else {
            echo "{$count} is odd.<br />";
            }
        }
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Foreach loops -->
    <h2>Foreach loops</h2>
    <?php
        $ages = array(4,8,15,16,23,42);

        foreach($ages as $age) {
        echo "Age: {$age}<br />";
        }
    ?>

    <br />
    <?php // foreach using assoc. array

        $person = array(
            "first_name" => "Kevin", 
            "last_name"  => "Skoglund",
            "address"    => "123 Main Street",
            "city"       => "Beverly Hills",
            "state"      => "CA",
            "zip_code"   => "90210"
        );

        foreach($person as $attribute => $data) {
            $attr_nice = ucwords(str_replace("_", " ", $attribute));
            echo "{$attr_nice}: {$data}<br />";
        }
    ?>
    
    <br />
    <?php
        $prices = array(
            "Brand New Computer" => 2000,
            "1 month of Lynda.com" => 25,
            "Learning PHP" => null);

        foreach($prices as $item => $price) {
            echo "{$item}: ";
            if (is_int($price)) {
            echo "$" . $price;
            } else {
            echo "priceless";
            }
            echo "<br />";
        }
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Continue -->
    <h2>Continue</h2>
    <?php
        for ($count=0; $count <= 10; $count++) {
            if ($count % 2 == 0) { continue; }
            echo $count . ", ";
        }
    ?>
    
    <?php // what's wrong with this?
        $count = 0;
        while ($count <= 10) {
            if ($count == 5) {
                $count++;
                continue;
            }
            echo $count . ", ";
            $count++;
        }
    ?>
    
    <br />
    <?php // loop inside a loop with continue
        for ($i=0; $i<=5; $i++) {
            if ($i % 2 == 0) { continue(1); }
            for ($k=0; $k<=5; $k++) {
            if ($k == 3) { continue(2); }
            echo $i . "-" . $k . "<br />";
            }
        }
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Break -->
    <h2>Break</h2>
    <?php
        for ($count=0; $count <= 10; $count++) {
            if ($count == 5) {
            break;
            }
            echo $count . ", ";
        }
    ?>
    
    <br />
    <?php // loop inside a loop with break
        for ($i=0; $i<=5; $i++) {
            if ($i % 2 == 0) { continue(1); }
            for ($k=0; $k<=5; $k++) {
            if ($k == 3) { break(2); }
            echo $i . "-" . $k . "<br />";
        }
    }
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Array Pointers -->
    <h2>Array Pointers</h2>
    <?php
        $ages = array(4,8,15,16,23,42);
        // current: current pointer value
        echo "1: " . current($ages) . "<br />";
    
        // next: move the pointer forward
        // similar to using 'continue' inside a loop
        next($ages);
        echo "2: " . current($ages) . "<br />";

        next($ages);
        next($ages);
        echo "3: " . current($ages) . "<br />";

        // prev: move the pointer backward
        prev($ages);
        echo "4: " . current($ages) . "<br />";
    
        // reset: move the pointer to the first element
        reset($ages);
        echo "5: " . current($ages) . "<br />"; 
        // end: move the pointer to the last element
        end($ages);
        echo "6: " . current($ages) . "<br />";

        // move the pointer past the last element
        next($ages);
        echo "7: " . current($ages) . "<br />";
        ?>

    <br />

    <?php
        reset($ages);

        // while loop that moves the array pointer
        // similar to foreach
        while($age = current($ages)) {
            echo $age . ", ";
            next($ages);
        }
    ?>


<!-- // ******************************************************************************************************************************** -->
<!-- //! Function: Defining -->
    <h2>Function: Defining</h2>

    <!-- Function names are case insensitive -->
    <?php
        function say_hello() {
            echo "Hello World!<br />";
        }

        SAY_HELLO();

        function say_hello_to($word) {
            echo "Hello {$word}!<br />";
        }

        say_hello_to("World");
        say_hello_to("Everyone");

        say_hello_loudly();

        function say_hello_loudly() {
            echo "HELLO WORLD!<br />";
        }

        // function say_hello_loudly() {
        //   echo "We can't redefine a function.";
        // }  
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Function: Argument -->
    <h2>Function: Argument</h2>
    <?php
        function say_hello_t($word) {
            echo "Hello {$word}!<br />";
        }
        $name = "John Doe";
        say_hello_t($name);

    ?>

    <?php
        function better_hello($greeting, $target, $punct) {
            echo $greeting . " " . $target . $punct . "<br />";
        }
    
        better_hello("Hello", $name, "!");
        better_hello("Greetings", $name, "!!!");

        better_hello("Greetings", $name, null);
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Function: Return Values -->
    <h2>Function: Return Values</h2>
    <?php
        function add($val1, $val2) {
            $sum = $val1 + $val2;
            return $sum;
        }
        
        $result1 = add(3,4);
        $result2 = add(5,$result1);
        echo $result2;
    ?>
    <br />
    <?php // Chinese Zodiac as a function
        function chinese_zodiac($year) {
            switch (($year - 4) % 12) {
                case  0: return 'Rat';
                case  1: return 'Ox';
                case  2: return 'Tiger';
                case  3: return 'Rabbit';
                case  4: return 'Dragon';
                case  5: return 'Snake';
                case  6: return 'Horse';
                case  7: return 'Goat';
                case  8: return 'Monkey';
                case  9: return 'Rooster';
                case 10: return 'Dog';
                case 11: return 'Pig';
        }
    }

        $zodiac = chinese_zodiac(2013);
        echo "2013 is the year of the {$zodiac}.<br />";

        echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";
    ?>
    <br />
    
    <?php
        function better_hellos($greeting, $target, $punct) {
            return $greeting . " " . $target . $punct . "<br />";
        }
        
        echo better_hellos("Hello", "John Doe", "!");
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Function: Multiple Return Values -->
    <h2>Function: Multiple Return Values</h2>
    <?php
        function add_subt($val1, $val2) {
            $add = $val1 + $val2;
            $subt = $val1 - $val2;
            return array($add, $subt);
        }

        $result_array = add_subt(10,5);
        echo "Add: " . $result_array[0] . "<br />";
        echo "Subt: " . $result_array[1] . "<br />";

        list($add_result, $subt_result) = add_subt(20,7);
        echo "Add: " . $add_result . "<br />";
        echo "Subt: " . $subt_result . "<br />";
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Function: Scope and Global variables -->
    <h2>Function: Scope and Global variables</h2>
    <?php
        $bar = "outside";   // global scope
        
        function foo() {
            global $bar;
            if (isset($bar)) {
            echo "foo: " . $bar . "<br />";
            }
            $bar = "inside";  // local scope
        }
    
        echo "1: " . $bar . "<br />";
        foo();
        echo "2: " . $bar . "<br />";
    ?>


<!-- // ******************************************************************************************************************************** -->
<!-- //! Function: Default Argument Values -->
    <h2>Function: Default Arguments Values</h2>
    <?php
        function paint($room="office",$color="red") {
            return "The color of the {$room} is {$color}.<br />";
        }
    
        echo paint();
        echo paint("bedroom", "blue");
        echo paint("bedroom", null);
        echo paint("bedroom");
        echo paint("blue");
    ?>

<!-- // ******************************************************************************************************************************** -->
<!-- //! Debuggung -->
<h2>Debugging</h2>
    <?php
        $number = 99;
        $string = "Bug?";
        $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");
        
        var_dump($number);
        echo "<br />";
        var_dump($string);
        echo "<br />";
        var_dump($array);
    ?>
    <br />
    <pre>
    <?php
        // print_r(get_defined_vars());
    ?>
    </pre>
    <br />
    <?php
        function say_hello_too($word) {
            echo "Hello {$word}!<br />";
            var_dump(debug_backtrace());
        }

        say_hello_too('Everyone');
    ?>


</body>
</html>