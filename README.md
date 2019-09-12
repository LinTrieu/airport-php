Airport Challenge in PHP
=================
```
        ______
        _\____\___
=  = ==(____MA____)
          \_____\___________________,-~~~~~~~`-.._
          /     o o o o o o o o o o o o o o o o  |\_
          `~-.__       __..----..__                  )
                `---~~\___________/------------`````
                =  ===(_________)

```


Purpose:
------
Personal learning repo to upskill in PHP. 

Note this is a translation of a popular software engineering challenge. See the following repo for a earlier attempt
 at the [Airport Challenge in Ruby](https://github.com/LinTrieu/airport_challenge). 

Progress & to-do items 
------

* [x] Add PHPUnit test framework
        (Guidance: https://www.startutorial.com/articles/view/phpunit-beginner-part-1-get-started)
* [ ] Create PHPUnit tests for 90% code coverage of airport challenge
* [ ] Code business logic and user stories into three airport classes: plane, hanger, weather 
    * [ ] Fix Try Catch exception code in Hanger class->land method
    * [ ] Prevent duplicate instance objects (plane instance object - $ryanair) from being able to land in the same
     Hanger (hanger instance object - $terminal_one) twice
    * [ ] Add strict typing functionality for the Hanger class (i.e. how to strictly type for multiple potential
     'return' actions; e.g. iterable; callable)

User stories
-----

We have a request from a client to write the software to control the flow of planes at an airport. The planes can land and take off provided that the weather is sunny. Occasionally it may be stormy, in which case no planes can land or take off.  

Here are the user stories that we worked out in collaboration with the client:

```
As an air traffic controller 
So I can get passengers to a destination 
I want to instruct a plane to land at an airport
```
```
As an air traffic controller 
So I can get passengers on the way to their destination 
I want to instruct a plane to take off from an airport and confirm that it is no longer in the airport
```
```
As an air traffic controller 
To ensure safety 
I want to prevent takeoff when weather is stormy 
```
```
As an air traffic controller 
To ensure safety 
I want to prevent landing when weather is stormy 
```
```
As an air traffic controller 
To ensure safety 
I want to prevent landing when the airport is full 
```
```
As the system designer
So that the software can be used for many different airports
I would like a default airport capacity that can be overridden as appropriate
```
