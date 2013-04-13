<?php

require_once 'Scheduler.php';
require_once 'BusSchedulerFactory.php';

require_once 'PHPUnit\Framework\TestCase.php';

/**
 * Scheduler test case.
 */
class SchedulerTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Scheduler
	 */
	private $Scheduler;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		

		$this->Scheduler = new Scheduler(BusSchedulerFactory::getGoDownBusSchedule());
	
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		

		$this->Scheduler = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
	}
	
	
	public function testElary(){
		$this->assertEquals(5, count($this->Scheduler->ExtrectFor(2,3,0)));
		$this->assertEquals(5, count($this->Scheduler->ExtrectFor(2,3,3)));
		//$this->assertEquals(5, count($this->Scheduler->testExtrectFor(2,3, 5)));
	}


}

