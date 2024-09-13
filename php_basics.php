<?php

// echo "this is my first CLI script";

// for ($x = 1; $x <=10; $x++){
//     echo "Number: $x \n";
// }
// for ($x = 10; $x >0; $x--){
//     echo "Number: $x \n";
// }

// $persons = [
//     1 => ['name' => 'Janis', 'age' => 19],
//     2 => ['name' => 'Aivars', 'age' => 17],
//     3 => ['name' => 'Kristaps', 'age' => 18]
// ];
// print_r($persons);

    



//     $input = readline(promt: "Ievadi savu vardu: \n");
//     echo  "Tavs vards ir $input" ;

//     do{
//         $a = readline(promt: "Vai tu gribi turpinat? (n = stop):");

//     }while ($a != "");

$taskList = [
    "first task", "second task"
];
function viewTask($allTasks){
    foreach($allTasks as $task){
        echo $task . "\n";
    }
}
function addTask(){
    echo "to be implemented";
}

do{
    echo("Uzdevumu parvaldnieks \n");
    echo("Apskatit visus uzdevumus => 1\n");
    echo("Ievadit jaunu uzdevumu => 2\n");
    echo("Apskatit vienu uzdevumu => 3\n");
    echo("Iziet -n\n");
    $choice = readline(promt: "izvelies darbibu:");
    switch ($choice) {
        case '1':
            viewAllTasks($taskList);
            break;
        case '2':
            addTask();
            break;
        case '3':
            viewTask();
            break;
        default:
            echo"Invalid option!\n";
            break;
    }
}while ($choice != "n");