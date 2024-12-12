<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dare</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<button type="button" class="btn btn-primary">
		+1 <span class="badge badge-light">9</span>
	   </button>
 <?php

// 1. Write a class named test1 that will support the following methods:
class test1 {
    
    protected string $sentence;
    protected string $str;
    
    function __construct(string $sentence = "", string $str = "" ) {
       $this->sentence = $sentence;
       $this->str = $str;

   }
   
    public function last_word() {

        if (!empty($this->sentence)) {
            $array = explode(" ", $this->sentence);
            $count = count($array);
            $lastWord =  $array[$count-1];
            $countLastWord = strlen($lastWord);
            return $countLastWord;
        }else {
            return 0;
        }

    }
    
    public function extract_string() {
        
        if (!empty($this->str)) {
            $pattern = '/\[(.*?)\]/';
;
         if(preg_match($pattern, $this->str, $matches)) {

            $result = preg_replace('/[\[\]]/', '', $matches[0]);
            return $result;

         }
        }else {
            return "";
            
        }
    }
   
  
}

$test1 = new  test1("wss","ssss[sasas]");

// Output formed array
$lastWordCount = $test1->last_word();
echo "<br>";
echo $lastWordCount;
echo "<br>";

$extract_string = $test1->extract_string();

echo $extract_string;

echo "<br>";


// 2. Write a class named test2 that will support the following methods:
class test2 {
    
    private $vars = [];
    private $number;
    private $digit;

    
    function __construct($vars, $number = "", $digit = 0) {
        $this->vars = $vars;
        $this->number =  $number;
        $this->digit = $digit;

   }
   
    public function is_power() {
        $result = false;
        $temp = 0;
        $counter = 0;
        $number = $this->vars[0];
        $base = $this->vars[1];

        
        while ($temp <=> $number) {
            $temp = pow($base, $counter);
            echo $temp;
            $counter++;
        }
        
        
        if ($temp == $number) {
            $result = true;
        }
        
        return $result;
        
    }
    
     public function format_number() {
        $result = preg_replace('/[^\d.,]/', '', $this->number);
        return $result;
         
     }
     
    public function sum_digits() {
        $accumulate = 0;

        $digits = str_split((string) abs($this->digit));
        
        foreach ($digits  as $value) {
            $accumulate += $value;
        }
        
        return $accumulate;
    }
     
     
    
   
   
  
}

$test2 = new test2([1, 120], "ca212.0", 55555);

// Output formed array
$lastWordCount = $test2->is_power();
echo "<br>";
echo"$lastWordCount" ;
echo "<br>";
$format_number = $test2->format_number();

echo $format_number;

$digits = $test2->sum_digits();
echo "<br>";

echo $digits;



$data = [];

// 3. The below code is designed to fetch x,y coordinates of multiple locations, marked with a numeric id. The 
// code works, but has some issues. 
// Which issues did you notice? How would you fix or improve it?
 $result = false;
if ($result==true) {
$stmt = $connection->prepare("SELECT `x`, `y` FROM `values` WHERE `id` = ?");



foreach ($ids as $id) {
    $stmt->bind_param("i", $id); 
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_row()) {
        $data[] = $row; 
    }

	if($stmt->rowCount() == 0) {
		break;
	}
}

$stmt->close();

}

// 4. Assume we have those two tables,

$sql = 'SELECT a.id, a.name, b.grade 
FROM a
LEFT JOIN b on b.id = a.id';

// answer

// 3 rows, 2 NULL values


// 5. Assume we have those two tables:
// i. Write an SQL statement to get all customers' name, city and salesmans' names, which the 
// salesman's commission is between 12% and 14%.
   $sql = 'SELECT customers.customer_name, customers.city, salesmen.name AS salesman_nameFROM customersJOIN salesmen ON customers.salesman_id = salesmen.idWHERE salesmen.commission BETWEEN 0.12 AND 0.14';

//    ii. Write an SQL statement to get all salesmen that didn't sell anything.

    $query = 'SELECT salesmen.id, salesmen.nameFROM salesmenLEFT JOIN orders ON salesmen.id = orders.salesman_idWHERE orders.id IS NULL';


	// 6.Consider the following table definition in a MySQL database
?>


<script>

// 7. Assume you have an array filled with numbers, which has duplicate values inside. Remove 
// duplicates of an array and return an array of only unique elements. Please explain your answer 
// shortly.

let arr = [1, 2, 3, 5, 1, 5, 9, 1, 2, 8];

function unique(array) {
  
  let uniqueArray = []
  
  array.forEach(element=> {
    if (!uniqueArray.includes(element)) {
        uniqueArray.push(element)
    }
  })
  console.log(uniqueArray)
}
unique(arr);

// 8. Implement the following function (Please explain your answer shortly):


let array = [1, 2, 3, 4, 5];
let times = 3;

function duplicate (arr, times){
    let duplicatedArray = []
    for(let i = 0; i < times; i++){
        arr.forEach(item => {
           duplicatedArray.push(item) 
        })
    }
    
    console.log(duplicatedArray)
}

duplicate(array, times)

// 9. The code below is for an application that requires defining a click handler for all buttons on the 
// page, including those buttons that may be added later dynamically. 
// When clicking on the appended button (id='btn_${res.id}'), nothing happens. Why? How can 
// we fix it


$("body").on("click", "button.clickable", function() {
        console.log("Button Clicked:", this);
    });
    
    $.get({
        url: "your-url",
        success: function(res) {
            $("body").append(`<button id="btn_${res.id}" class="clickable">Click Alert!</button>`);
        }
    });

// 	10. Assume you have a button with the following design. Using Jquery, write code that will increase 
// by 1 the number in the badge each time the user clicks on that button. The value inside the 
// .badge in the button is pre-initialized randomly in document.ready.
	$(document).ready(function() {
    let randomNumber = Math.floor(Math.random() * 1000);
	let number;
	randomNumber = randomNumber.toString()
	$(".badge-light").text(randomNumber);
	
	$(document).on("click", ".btn-primary", function() {
		number = parseInt(randomNumber, 10);
		number += 1
		randomNumber = number.toString()
		$(".badge-light").text(randomNumber);

	});


});


</script>
</body>
</html>