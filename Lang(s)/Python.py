import os
import time
# ------------------------------------ \\
# Start!! (～￣▽￣)～
base = 'tellraw @a {"rawtext":['
end = "]}"
count = 0
while True:
    os.system('clear')
    print(" --- > Minecraft Bedrock: Tellraw Generator!! < ---")
    print(f" What do you want to add [COUNT: {count}]")
    print(f" Command: {base}{end}\n")
    print(" 1: TEXT")
    print(" 2: Entity name (ex: 'AitJi Gamer')")
    print(" 3: Scoreboard Display (ex: 'point: 1')")
    print(" 4: Restart All..")
    answer = input(" Enter Number: ")
    os.system('clear')
    if answer == '1':
        count += 1
        print(" --- > Translate/Text < ---")
        text = input(' What Text/Message Do you want to input (you can use "\\n" or "§")\n\n Enter Here: ')
        if count == 1:
            base += f'{{"translate":"{text}"}}'
        else:
            base += f',{{"translate":"{text}"}}'
        time.sleep(1)
    elif answer == '2':
        count += 1
        print(" --- > Entity Name < ---")
        name = input(' Enter the entity to display name\n ex: "@a", "@a[tag=player]"\n\n Enter Here: ')
        if count == 1:
            base += f'{{"selector":"{name}"}}'
        else:
            base += f',{{"selector":"{name}"}}'
        time.sleep(1)
    elif answer == '3':
        count += 1
        print(" --- > Score Display < ---")
        obj = input(' Enter the [Objective] to display score\n ex: "money", "point"\n\n Enter Here: ')
        print("\n")
        entity = input(' Enter the [Entity/object] to display score\n ex: "@s", "server"\n\n Enter Here: ')
        if count == 1:
            base += f'{{"score":{{"objective":"{obj}","name":"{entity}"}}}}'
        else:
            base += f',{{"score":{{"objective":"{obj}","name":"{entity}"}}}}'
        time.sleep(1)
    elif answer == '4':
        print(f" Reset tellraw: {base}{end}\n")
        base = 'tellraw @a {"rawtext":['
        end = "]}"
        count = 0
        time.sleep(1)
    else:
        print(" Invalid input. Please enter a number between 1 and 4.\n")
        time.sleep(1)
