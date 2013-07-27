<?php
App::uses('Daily', 'Model');

/**
 * Daily Test Case
 *
 */
class DailyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.daily'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Daily = ClassRegistry::init('Daily');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Daily);

		parent::tearDown();
	}

}
