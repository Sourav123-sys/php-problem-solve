
<!--1.write a php function to sort an aray of stings by their length,in ascending order.  -->

<?php
function sortStringsByLength($arr) {
  usort($arr, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $arr;
}
$myArr = array("apple", "banana", "orange", "JackFruit");
$sortedArr = sortStringsByLength($myArr);
 print_r($sortedArr);

?>
<!-- 2.write a php function to concatenate two strings,but with the second string starting from the end of the first string -->
<?php
function concatenateFromEnd($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $result = '';
  
    for ($i = $len1 - 1; $i >= 0; $i--) {
      $result = $str1[$i] . $result;
      if ($i == $len1 - $len2) {
        $result = $str2 . $result;
        break;
      }
    }
  
    return $result;
  }
  $str1 = "sourav";
  $str2 = "arefin";
  $result = concatenateFromEnd($str1, $str2);
  echo $result;
  
?>

<!-- 3.write a php function to remove the first and last element from an array and return the remaining elements as a new array-->
<?php
function removeFirstAndLast($arr) {
    array_shift($arr);
    array_pop($arr); 
    return $arr;
  }
$myArr = array("rahim", "karim", "jorina", "morjina");
$newArr = removeFirstAndLast($myArr);
print_r($newArr);
?>
<!-- 4. write a php function to check if a string contains only letters and whitespace-->
<?php
function checkOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}
$str1 = "My name is sourav";
$str2 = "My name is khan!";
$result1 = checkOnlyLettersAndWhitespace($str1);
$result2 = checkOnlyLettersAndWhitespace($str2);
echo "Result 1: " . $result1 . "\n"; 
echo "Result 2: " . $result2 . "\n"; 
?>

<!-- 5. write a php function to find the second largest umber in an array of numbers-->
<?php
function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];
    foreach ($arr as $num) {
      if ($num > $largest) {
        $secondLargest = $largest;
        $largest = $num;
      } else if ($num > $secondLargest && $num != $largest) {
        $secondLargest = $num;
      }
    }
  
    return $secondLargest;
  }
  $myArr = array(50, 55, 25, 30, 45);
$secondLargest = findSecondLargest($myArr);
echo "The second largest number is: " . $secondLargest;

?>