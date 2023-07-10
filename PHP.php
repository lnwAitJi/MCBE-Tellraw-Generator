<?php
// * Add Readline Function *//
function readline($prompt = ""): string
{
    if ($prompt) {
        if (is_array($prompt)) {
            var_dump($prompt);
        } else {
            echo $prompt . "";
        }
    }
    $fp = fopen("php://stdin", "r");
    $line = rtrim(fgets($fp, 1024));
    if (empty($line)) {
        return '';
    }
    return $line;
}

// ------------------------------------ \\
#Start!! (～￣▽￣)～
$base = 'tellraw @a {"rawtext":[';
$end = "]}";
$count = 0;
while (true) {
    echo ("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
    echo ("--- > Minecraft Bedrock: Tellraw Generator!! < ---\n");
    echo ("What do you want to add [COUNT: " . $count . "]\n");
    echo ("Command: " . $base . $end . "\n\n");
    echo ("1: TEXT\n");
    echo ("2: Entity name (ex: 'AitJi Gamer')\n");
    echo ("3: Scoreboard Display (ex: 'point: 1')\n");
    echo ("4: Restart All..\n\n");
    $answer = readline("Enter Number: ");
    echo ("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
    switch ($answer) {
        case 1:
            $count++;
            echo ("--- > Translate/Text < ---\n");
            echo ('What Text/Message Do you want to input (you can use "\n" or "§")' . "\n\n");
            $text = readline("Enter Here: ");
            $base .= (($count > 1) ? "," : "" ).'{"translate":"' . $text . '"}';
            break;
        case 2:
            $count++;
            echo ("--- > Entity Name < ---\n");
            echo ('Enter the entity to display name' . "\n" . 'ex: "@a", "@a[tag=player]"' . "\n\n");
            $name = readline("Enter Here: ");
            $base .= (($count > 1) ? "," : "" ).'{"selector":"' . $name . '"}';
            break;
        case 3:
            $count++;
            echo ("--- > Score Display < ---\n");
            echo ('Enter the [Objective] to display score' . "\n" . 'ex: "money", "point"' . "\n\n");
            $obj = readline("Enter Here: ");
            echo ("\n\n");
            echo ('Enter the [Entity/object] to display score' . "\n" . 'ex: "@s", "server"' . "\n\n");
            $entity = readline("Enter Here: ");
            $base .= (($count > 1) ? "," : "" ).'{"score":{"objective":"' . $obj . '","name":"' . $entity . '"}}';
            sleep(1);
            break;
        case 4:
            echo ("Reset tellraw: " . $base . $end . "\n\n");
            $base = 'tellraw @a {"rawtext":[';
            $end = "]}";
            $count = 0;
            break;
        default:
            echo ("Invalid input. Please enter a number between 1 and 4.\n\n");
            break;
    }
}
