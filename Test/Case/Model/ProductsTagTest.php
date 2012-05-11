<?php
App::uses('ProductsTag', 'Model');

/**
 * ProductsTag Test Case
 *
 */
class ProductsTagTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.products_tag', 'app.product', 'app.checkout', 'app.user', 'app.tag');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsTag = ClassRegistry::init('ProductsTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsTag);

		parent::tearDown();
	}

}
