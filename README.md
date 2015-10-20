# Kata objective
The main goal is to practice the Object Calisthenics rules proposed by Jeff Bay in [The ThoughtWorks Anthology](https://pragprog.com/book/twa/thoughtworks-anthology).


# Object Calisthenics rules
1. Only one level of indentation per method
- Don't use the _else_ keyword
- Wrap all primitives and strings
- First class collections
- One dot per line
- Don't abbreviate
- Keep all entities small
- No classes with more than two instance  variables
- No getters/setters/properties

# Playing with the code


## Installation
1. Install [composer](https://getcomposer.org/)

	`curl -sS https://getcomposer.org/installer | php`
2. Install the dependencies

	`php composer.phar install` 

## Run the tests
`./vendor/bin/phpunit`
## Run the Object Calisthenics rules validation
`./vendor/bin/phpcs --standard=phpcs.xml src/`