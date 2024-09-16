<?php

$taskList = [
    "izpildit majas darbu", "iet gulet laicigi"
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
            for($i = 0; $i < count($taskList); $i++){
                $id = $i +1;
                echo "$id" . "$taskList[$i] \n";
            }
            break;
        case '2':
            addTask($taskList);
            break;
        case '3':
            viewTask();
            break;
        case '4':
            $continue = null;
            echo "Goodbye";
        default:
            echo"Invalid option!\n";
            break;
    }
}while ($choice != "n");