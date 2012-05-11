<?php
App::uses('Checkout', 'Model');

/**
 * Checkout Test Case
 *
 */
class CheckoutTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.checkout', 'app.product', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Checkout = ClassRegistry::init('Checkout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Checkout);

		parent::tearDown();
	}

}
