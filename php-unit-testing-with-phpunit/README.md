# PHP Unit Testing with PHPUnit

1. Install php and composer at [here](https://phpunit.de)  
2. Install phpunit using composer  
`composer require --dev phpunit/phpunit ^7`  
3. Run the phpunit  
`./vendor/phpunit/phpunit/phpunit --version`  
4. Set phpunit alias(optional)  
`alias phpunit="./vendor/phpunit/phpunit/phpunit"`  
5. Create a test file and  `ExampleTest.php`  
6. To run a unit test, for example  
`./vendor/phpunit/phpunit/phpunit test/ --filter=testReturnsFullName`  