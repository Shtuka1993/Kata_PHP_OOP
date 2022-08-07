<?php

	//TASK 1

	class President {
    	public $name = "Barack Obama";
    
		public function greet($name) {
			
			return "Hello ".$name.", my name is ".$this->name.", nice to meet you!";  
		}
	}

	$us_president = new President ();
	$president_name = $us_president->name;
	$greetings_from_president = $us_president->greet("Donald");

	//TASK 2

	/*
	class Person {
		public $first_name;
		public $last_name;
  
		public function __construct($first_name, $last_name) {
    		$this->first_name = $first_name;
    		$this->last_name = $last_name;
  		}
  
		public function get_full_name() {
    		
    		return $this->first_name.' '.$this->last_name;
		}
	}
	*/

	//TASK 3

	class CurrentUSPresident {
		const name = "Barack Obama";
    
		public static function greet($name) {
			
			return "Hello ".$name.", my name is ".self::name.", nice to meet you!";  
		}
	}

	//TASK 4

	/*
	class Person {
    	const species = 'Homo Sapiens';
    
    	public $name;
    	public $age;
    	public $occupation;
    
    	public function __construct($name, $age, $occupation) {
	        $this->name = $name;
    	    $this->age = $age;
        	$this->occupation = $occupation;
    	}
    
	    public function introduce() {
    	    
    	    return 'Hello, my name is ' . $this->name;
    	}
    
    	public function describe_job() {
	        
	        return 'I am currently working as a(n) ' . $this->occupation;
    	}
    
    	public static function greet_extraterrestrials($species) {
	        
	        return "Welcome to Planet Earth " . $species . "!";
    	}
	}

	//TASK 5

	class Salesman extends Person {
		public function __construct ($name, $age) {
    		$this->name = $name;
    		$this->age = $age;
    		$this->occupation = "Salesman";
  		}

  		public function introduce() {
	    	
	    	return 'Hello, my name is ' . $this->name . ", don't forget to check out my products!";
		}
	}

	class ComputerProgrammer extends Person {
  		public function __construct ($name, $age) {
    		$this->name = $name;
    		$this->age = $age;
    		$this->occupation = "Computer Programmer";
  		}

  		public function describe_job() {
    		
    		return "I am currently working as a(n) ". $this->occupation .", don't forget to check out my Codewars account ;)";
  		}
	}

	class WebDeveloper extends ComputerProgrammer {
  		public function __construct ($name, $age) {
    		$this->name = $name;
    		$this->age = $age;
    		$this->occupation = "Web Developer";
  		}  
  
  		public function describe_job() {
    		
    		return parent::describe_job() . " And don't forget to check on my website :D";
  		}
  
  		public function describe_website() {
    		
    		return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
  		}
	}

	//TASK6

	class Person {
    	
    	protected $name;
    	protected $age;
    	protected $occupation;
    
    	public function __construct($name, $age, $occupation) {
        	if ( ! is_string( $name ) ) {
            	throw new InvalidArgumentException("Name must be a string!");
        	}
        	if ( ! ( is_int( $age ) && ( $age >= 0 ) ) ) {
            	throw new InvalidArgumentException("Age must be a non-negative integer!");
        	}
        	if ( ! is_string( $occupation ) ) {
            	throw new InvalidArgumentException("Occupation must be a string!");
        	}
	        $this->name = $name;
    	    $this->age = $age;
        	$this->occupation = $occupation;
    	}

    	public function get_name() {
          
        	return $this->name;
    	}
  
  
      	public function get_age() {
          
        	return $this->age;
    	}
  
  
      	public function get_occupation() {
          
        	return $this->occupation;
      	}
  
    	public function set_name($name) {
        	if ( ! is_string( $name ) ) {
            	throw new InvalidArgumentException("Name must be a string!");
        	} else {
            	$this->name = $name;
          	}
      	}
  
  
      	public function set_age($age) {
        	if ( ! ( is_int( $age ) && ( $age >= 0 ) ) ) {
            	throw new InvalidArgumentException("Age must be a non-negative integer!");
        	} else {
            	$this->age = $age;
        	}
    	}
  
  
    	public function set_occupation($occupation) {
        	if ( ! is_string( $occupation ) ) {
            	throw new InvalidArgumentException("Occupation must be a string!");
        	} else {
            	$this->occupation = $occupation;
        	}
    	}
	}

	// TASK 7

	class Person {
    	const species = 'Homo Sapiens';
    
    	public $name;
    	public $age;
    	public $occupation;
    
    	public function __construct($name, $age, $occupation) {
	        $this->name = $name;
    	    $this->age = $age;
        	$this->occupation = $occupation;
    	}
    
	    public function introduce() {
    	    
    	    return 'Hello, my name is ' . $this->name;
    	}
    
    	public final function describe_job() {
	        
	        return 'I am currently working as a(n) ' . $this->occupation;
    	}
    
    	public static final function greet_extraterrestrials($species) {
	        
	        return "Welcome to Planet Earth " . $species . "!";
    	}
	}

	class ComputerProgrammer extends Person {
		public function introduce() {
    		return 'Hello, my name is ' . $this->name . ' and I am a ' . $this->occupation;
		}
	}
	*/

	// TASK 8

	interface CanFly {
		public function fly();
	}

	interface CanSwim {
  		public function swim();
	}

	interface CanClimb {
  		public function climb();
	}

	interface CanGreet {
		public function greet($name);
	}

	interface CanIntroduce {
  		public function speak();
  		public function introduce();
	}

	interface CanSpeak {
  		public function speak();
	}

	class Bird implements CanFly {
  		public $name;
  
  		public function __construct( $name ) {
    		$this->name = $name;
  		}
  
  		public function fly() {
    
    		return "I am flying";
  		}
  
  		public function chirp() {
    	
    		return "Chirp chirp";
  		}
	}

	class Duck extends Bird implements CanSwim {
  		public function chirp() {
    		
    		return "Quack quack";
  		}   
  
  		public function swim() {
    
    		return "Splash! I'm swimming";
  		}
	}

	class Cat implements CanClimb {
  		public function climb() {
    
    		return "Look, I'm climbing a tree";
  		}
  
  		public function meow() {
    
    		return "Meow meow";
  		}
  
  		public function play( $name ) {
    
    		return "Hey " . $name . ", let's play!";
  		}
	}

	class Dog implements CanSwim, CanGreet {
  		public function swim() {
    		
    		return "I'm swimming, woof woof";
  		}
  
  		public function greet( $name ) {
    
    		return "Hello " . $name . ", welcome to my home";
  		}
  
  		public function bark() {
    
    		return "Woof woof";
  		}
	}

	class Person implements CanGreet, CanIntroduce {
  		public string $name;
  		public int $age;
  		public string $occupation;
  
  		public function __construct( $name, $age, $occupation ) {
    		$this->name = $name;
    		$this->age = $age;
    		$this->occupation = $occupation;
  		}
  
  		public function greet( $name ) {
    
    		return "Hello " . $name . ", how are you?";
  		}
  
  		public function speak() {
    
    		return "What am I supposed to say again?";
  		}
  
  		public function introduce() {
    
    		return "Hello, my name is " . $this->name . ", I am " . $this->age . " years old and I am currently working as a(n) " . $this->occupation;
		}
	}

	//TASK 9
	abstract class Person {
  		public $name;
  		public $age;
  		public $gender;
  
  		public function __construct( $name, $age, $gender ) {
    		$this->name = $name;
    		$this->age = $age;
    		$this->gender = $gender;
  		}
  
  		abstract public function introduce();
  
  		public function greet( $name ) {
    
    		return "Hello " . $name;
		}
	}

	final class Child extends Person {
  		public $aspirations;
  
  		public function __construct( $name, $age, $gender, $aspirations ) {
    		parent::__construct( $name, $age, $gender );
    		$this->aspirations = $aspirations;
  		}
  
  		public function introduce() {
    
    		return "Hi, I'm " . $this->name . " and I am " . $this->age . " years old";
  		}
  
  		public function greet( $name ) {
    
    		return "Hi " . $name . ", let's play!";
  		}
  
  		public function say_dreams() {
    
    		return "I would like to be a(n) " . say_list( $this->aspirations ) . " when I grow up.";
  		}
	}

	class ComputerProgrammer extends Person {
  		public $occupation = "Computer Programmer";
  
  		public function introduce() {
    
    		return "Hello, my name is " . $this->name . ", I am " . $this->age . " years old and I am a(n) " . $this->occupation;
  		}
  
  		public function greet( $name ) {
    
    		return parent::greet( $name ) . ", I'm " . $this->name . ", nice to meet you";
  		}
  
  		public function advertise() {
    
    		return "Don't forget to check out my coding projects";
  		}
	}

	//TASK 10
	$object_oriented_php = new class(
  		"An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research",
  		[
    		"Object-Oriented PHP #1 - Classes, Public Properties and Methods",
    		'Object-Oriented PHP #2 - Class Constructors and $this',
    		"Object-Oriented PHP #3 - Class Constants and Static Methods",
    		"Object-Oriented PHP #4 - People, people, people (Practice)",
    		"Object-Oriented PHP #5 - Classical Inheritance",
    		"Object-Oriented PHP #6 - Visibility",
    		"Object-Oriented PHP #7 - The \"Final\" Keyword",
    		"Object-Oriented PHP #8 - Interfaces [Advanced]",
    		"Object-Oriented PHP #9 - Abstract Classes [Advanced]",
    		"Object-Oriented PHP #10 - Objects on the Fly [Advanced]",
  		],
  		10,
  		new class("Donald", 17, "Male", "Computer Programmer") {
    		public $name, $age, $gender, $occupation;
    		
    		public function __construct($name, $age, $gender, $occupation) {
      			$this->name = $name;
      			$this->age = $age;
      			$this->gender = $gender;
      			$this->occupation = $occupation;
    		}
    
    		public function __toString() {
      			
      			return "Donald, aged 17, who is a computer programmer proficient in Javascript and PHP and is a PHP enthusiast";
    		}
  		}
	) {
  		public $description, $kata_list, $kata_count, $author;
  		
  		public function __construct($description, $kata_list, $kata_count, $author) {
    		$this->description = $description;
    		$this->kata_list = $kata_list;
    		$this->kata_count = $kata_count;
    		$this->author = $author;
  		}
  
  		public function __toString() {
    		
    		return $this->description;
  		}

  		public function advertise($name) {
    
    		return "Hey ".$name.", don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"";
  		}
  
  		public function get_kata_by_number($i) {
    		if((! is_int($i)) || ($i < 1) || ($i > 10)) {
      			throw new InvalidArgumentException();
    		} else {
      
      			return $this->kata_list[$i-1];
    		}
  		}
  
  		public function complete() {
    
    		return "Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!";
  		}
	};

?>