<?php

/**
* Implements hook_schema
*
**/

function dependency_injection_services_schema(){
    $schema['customform'] = array(
        'fields' => array(
          'id' => array(
              'description' => 'The primary identifier for the record.',
              'type' => 'serial',
              'unsigned' => TRUE,
              'not null' => TRUE,
              ),
            'mail' => array(
                'description' => 'User\'s email address.',
                'type' => 'varchar',
                'length' => 64,
                'not null' => FALSE,
                'default' => '',
              ),
            'name' => array(
                'description' => 'User\'s Name.',
                'type' => 'varchar',
                'length' => 64,
                'not null' => FALSE,
                'default' => '',
              ),
            'created' => array(
                'type' => 'int',
                'not null' => TRUE,
                'default' => 0,
                'description' => 'Timestamp for when rsvp was created.',
              ),
        ),
        'primary key' => array('id'),
 );
  return $schema; 
}
?>