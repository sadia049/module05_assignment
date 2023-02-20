<?php
//starting of problem no 01
echo "-------------problem no 01-------------\n\n";
$name_array = ["Nishat", "Neelima", "ashrafi", "Tuba", "moury"];
echo "Before sorting\n";
print_r($name_array);

function stringLength(string $value1, string $value2)
{

    if (strlen($value1) == strlen($value2))
        return 0;
    elseif (strlen($value1) < strlen($value2))
        return -1;
    else
        return 1;



}
usort($name_array, "stringLength");
echo "After sorting the array in ascending order\n";
print_r($name_array);
echo("\n\n");
//end of problem no 01

//prbolem no 02 ;concat two string
echo "-------------problem no 02-------------\n\n";
function concatString($str1, $str2): string
{
    $newString = $str1 . $str2;
    return $newString;
}

$str1 = "Hellow Everyone, ";
$str2 = "I am learning PHP";
echo "String before concatenation: 1st string: \"$str1\",2nd string: \"$str2\"\n";

$catchTheString = concatString($str1, $str2);

echo "String after concatenation\n\"$catchTheString\"\n\n";

//problem no 02 ended
echo "-------------problem no 03-------------\n\n";


//problem no 03; remove first and last element from an array
$num_array = [12, "skf", 432, 567, "number", 333];
echo "The main array\n";
print_r($num_array);
function removeElement()
{
    global $num_array;
    //removing first element
    array_shift($num_array);
    //removing last element
    array_pop($num_array);
    $new_array = $num_array;
    return $new_array;


}
$catchTheArray = removeElement();
echo "After removing first and last element from an array\n\n";
print_r($catchTheArray);

//problem no 03 ended

//problem  04;string contains only white space and letters
echo "-------------problem no 04-------------\n\n";
function checkString($str)
{

    //$str = preg_replace("#[[:punct:]]#", "", $str);
    if (preg_match("/[^a-z\s\.\&\@]/i", $str))  
        
        echo $str." :--- It does not contain only white space and leters\n";
    
    else
        echo $str." :---It contains only white space and letters\n";
       
}

checkString('example with only whitespace and letters');
checkString('EXAMPLE955 with digits');
checkString('Example*_/ with punctuation');
echo("\n\n\n");
//problem no 5; find the second largest element in an array
echo "-------------problem no 05-------------\n\n";
$numberArray=[50,3,54,15,34,23,12,33];
print_r($numberArray);
//sort the array in descending order
rsort($numberArray);
//the 2nd element is the second largest element ain an array
$secondLargest=$numberArray[1];
echo "The second largest element of the array is $secondLargest";



//problem no 05 ended













?>