# Title: Dependency Injection

- Repository: `polymorphism-dependency-injection`
- Type of Challenge: `Learning challenge`
- Duration: `1 day`
- Deployment strategy : `NA`
- Team challenge : `solo`

## Project contributors:
- Jonas Rossou

## Learning objectives?
- Understand the value of a Dependency Injection Layer
- Use the DI container inside Symfony
- Knows how to configure services and dependencies

## The Mission
-We are going to dive into one specific implementation of the "Dependency Injection" design pattern (often abbreviated DI) in Symfony, but the general concept will be used in any major language in any major OOP-oriented language.

## What did I learn from this exercise
- The power of Dependency Injection and polymorphism. Being able to change the behavior of a class without having to change any code in that specific class.

-making classes and interfaces in Symfony

### Must-have features
Create an interface called transform, that requires one public method called transform, this function accepts a string and returns a string.

Make a class which capitalizes every other letter in a string (eg: "hElLo WoRlD"). Implement the transform interface.

Make another class which changes all spaces to dashes "-" (eg: "hello-world-i-love-to-code"). Implement the transform interface.

Make a logger class which logs messages in a file called "log.info".

Now make a "master" class which accepts a user input (simple form with 1 field). It should do the following.

You log the message
You echo it to the screen using the weird capitalization
Reuse the classes you made inside the master class, but you should not use the keyword "new" inside the master class. Pass it to the constructor.

To type hint the string transformation class, use the name of the transform interface instead of the concrete class you are using: you will see in step 3 why.

You can execute this master class in a simple controller.

Add a dropdown with 2 options in your form (keep it simple, just an html dropdown will be enough for now). The 2 options are the names of the 2 classes you made that transform a string. Make it so that depending on the user input one transformation is applied.

Do not change anything in your master class file!

If you did the previous step correctly you should be able to change the behavior of the master class without having to change any code in the master class!

This is a really powerful concept called polymorphism. It is made possible because both classes use the same interface, so they have the same function names: the code that uses this class does not care about which one it gets, as long as it has a function called transform.

In short: When two objects have the same interface, they are functionally interchangeable = polymorphism.

### Nice to have features
Change your Logger class for Monolog. In this case you will not use your own logger class anymore.




