
# interacive game
import random


guess = input("Enter a number: ")
guess = int(guess)

number = random.randint(1,10)

if guess == number:
    print("Congrats. You won")

else:
    print("Sorry")


