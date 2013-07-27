<?php
App::uses('Boundary', 'Model');

/**
 * Boundary Test Case
 *
 */
class BoundaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.boundary'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Boundary = ClassRegistry::init('Boundary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Boundary);

		parent::tearDown();
	}

}
