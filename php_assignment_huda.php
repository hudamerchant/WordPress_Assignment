<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//5 php frameworks
    echo '<h2>5 php frameworks</h2>';
    echo 'Code Igniter <br>';
    echo 'Symfony <br>';
    echo 'Cake Php <br>';
    echo 'Zend Framework <br>';
    echo 'Fuel Php <br>';
    echo '<br><br>';
//multidimensional array for students and their subjects marks
    $student_info = [
        [
            'Name'  => 'Ali',
            'Eng'   => 80,
            'Urdu'  => 60,
            'Maths' => 75.5,
            'sci'   => 59.25,
            'Comp'  => 75,
        ],
        [
            'Name'  => 'Ahmed',
            'Eng'   => 62,
            'Urdu'  => 75.5,
            'Maths' => 89.25,
            'sci'   => 94,
            'Comp'  => 78,
        ],
        [
            'Name'  => 'Hadi',
            'Eng'   => 59.5,
            'Urdu'  => 56.75,
            'Maths' => 95.5,
            'sci'   => 89,
            'Comp'  => 99,
        ],
        [
            'Name'  => 'Mohammad',
            'Eng'   => 98.5,
            'Urdu'  => 60,
            'Maths' => 75.5,
            'sci'   => 50,
            'Comp'  => 86.75,
        ],
        [
            'Name'  => 'Zain',
            'Eng'   => 69.25,
            'Urdu'  => 88,
            'Maths' => 95,
            'sci'   => 89,
            'Comp'  => 65,
        ]
    ];

// 2 associative arrays merged into a new array by using default function
    $fruits = [
        'Apple'         => 'red' ,
        'Mango'         => 'yellow' ,
        'Water Melon'   => 'green' 
    ];
    $vegies = [
        'Potato' => 'brown',
        'Tomato' => 'red',
        'Carrot' => 'orange'
    ];
    $products = array_merge($fruits, $vegies);
    
    echo '<h2>2 associative arrays merged into a new array by using default function</h2>';
    print_r($products);
    echo '<br><br>';
    
//5 default array functions    
    echo '<h2>5 default array functions</h2>';
    $arr = [1, 5, 6, 1, 5, 7, 9, 2];

    //array_unique()
    print_r(array_unique($arr)); //array me se duplicate values ko remove krta he
    echo '<br>-------------------------------------------------<br>';
    
    //array_chunk()
    //array k chunks bnata he ... is function k 3 params hote hein 
    //1st parameter : jis array k chunks bnane ho.
    //2nd parameter : kitne values ek chunk me honi chahiye.
    //3rd parameter : ye param reindexing k liye he... boolean hota he (true/false btate hein), by default false hota he or hr chunk ko [0] se start krta he agr true set kreinge tw index preserve kr ho jaye ga.
    
    // var_dump(array_chunk($arr, 4));die; 
    print_r(array_chunk($arr, 4)); 
    echo '<br>-------------------------------------------------<br>';
    
    //array_sum()
    print_r(array_sum($arr)); //array ki values ka sum return krta he 
    echo '<br>-------------------------------------------------<br>';
    
    //is_array()
    print_r(is_array($arr)); //btata he k variable array he ya nahi 
    echo '<br>-------------------------------------------------<br>';
    
    //array_reverse()
    print_r(array_reverse($arr)); //array values ko reverse order me return krta he 
    echo '<br>-------------------------------------------------<br>';
    
?>
</body>
</html>