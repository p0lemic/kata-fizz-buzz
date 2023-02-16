## Fizz Buzz
- Write a program that prints the numbers from 1 to 100. But for multiples of three print "Fizz"
  instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both
  three and five print "FizzBuzz".


- Print numbers from 1 to 100
- Print "Fizz" instead of number which is divisible by 3
- Print "Buzz" instead of number which is divisible by 5
- Print "FizzBuzz" instead of number which is divisible by both 3 and 5

### Execute phpunit
You can execute phpunit directly with your local dependencies
```
vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```
or you can use Docker using this bash script 
```
./test.sh
```
