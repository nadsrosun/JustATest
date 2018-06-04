LAWN MOWER - SIMPLE PHP OOP DEMO
========

# Features

- Autoloading & namespacing with composer
- Object Composition by wrapping primitive types and string
- PHP 7 : scalar type declarations, return type declarations
- Docker support for dev environment

# Case Study

Content Square is developing an automatic lawn mower capable of mowing rectangular surfaces.  The mower can be programmed to cover the entire surface.

The position of the mower is represented by a combination of coordinates (x, y) and a letter indicating the orientation according to the English cardinal notation (N, E, W, S). 
The lawn is divided into a grid to simplify navigation.

For example, the position of the mower can be "0, 0, N", which means that it is in the lower left corner of the lawn, facing north.

To control the mower, we send him a simple sequence of letters. Possible letters are "D", "G" and "A". "D" and "G" rotate the mower 90 ° to the right or left respectively, without moving it. 
"A" means that we advance the mower one space in the direction it faces, and without changing its orientation.

If the position after movement is outside the lawn, the mower does not move, keeps its orientation and processes the next command.
We assume that the box directly north of the position (x, y) has coordinates (x, y + 1).

1) Specify the width & height of the lawn

2) Specify the position and the direction of the mower

3) Execute the series of instructions

4) Report position after command executed

Test Data :
Width of lawn : 5
Height of lawn: 5

Position of mower : (1, 2) towards the North
Instructions : GAGAGAGAA

Position of mower : (3, 3) towards the East
Instructions : AADAADADDA

Result 1 : 1 3 N
Result 2 : 5 1 E

# Installation

- Clone the project

- Start docker containers

  ```
    docker-compose up -d --force-recreate
  ```
  
- Install vendors

  ```
    docker exec -it bash
    composer install
  ```