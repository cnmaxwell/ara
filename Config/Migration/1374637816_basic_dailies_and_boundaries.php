<?php
class BasicDailiesAndBoundaries extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'boundaries' => array(
					'id' => array(
						'type' =>'string',
						'null' => false,
						'default' => NULL,
						'length' => 36,
						'key' => 'primary'
					),
					'name' => array(
						'type' =>'string',
						'null' => false,
						'length' => 30,
					),
					'description' => array(
						'type' =>'string',
						'null' => false,
						'default' => ''
					),
					'indexes' => array(
						'PRIMARY' => array(
							'column' => 'id',
							'unique' => 1)
					)
				),
				'dailies' => array(
					'id' => array(
						'type' =>'string',
						'null' => false,
						'default' => NULL,
						'length' => 36,
						'key' => 'primary'
					),
					'name' => array(
						'type' =>'string',
						'null' => false,
						'length' => 30,
					),
					'description' => array(
						'type' =>'string',
						'null' => false,
						'default' => ''
					),
					'indexes' => array(
						'PRIMARY' => array(
							'column' => 'id',
							'unique' => 1)
					)
				)
			)
		),
		'down' => array(
			'drop_table' => array('boundaries', 'dailies')
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
