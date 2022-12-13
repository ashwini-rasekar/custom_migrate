<?php

namespace Drupal\custom_migrate\Plugin\migrate\source;

use Drupal\migrate\Row;
use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\mongodb\MongoDb;
//use MongoDB\Driver\Manager;
//use MongoDB\Driver\Query;

/**
 * Extract posts from Mongo database.
 *
 * @MigrateSource(
 *   id = "custom_migration_city"
 * )
 */
//
$db_string = 'mongodb://username:password@example.com:12346/database';
$m = new MongoClient($db_string);
$db = $m->database;
$collection = $db->rows;
$fields = array(
  '_id' => '_id',
  'city'=>  'city',
  'loc'=> 'loc',
  'pop'=> 'pop',
  'state'=>  'state'

);
$query = array();

$this->source = new MigrateSourceMongoDB($collection, $query, $fields);
// Set destination.
$this->destination = new MigrateDestinationNode('migrate_city');
// Set map.
$source_key = array(
  'id' => array(
    'type' => 'varchar',
    'length' => 24,
    'not null' => TRUE,
    'description' => 'ID of the city.',
  ),
  'city' => array(
    'type' => 'varchar',
    'length' => 24,
    'not null' => TRUE,
    'description' => 'Name of the city.',
  ),
  'loc' => array(
    'type' => 'number',
    'length' => 24,
    'not null' => TRUE,
    'description' => 'Location details.',
  ),
  'pop' => array(
    'type' => 'number',
    'length' => 24,
    'not null' => TRUE,
    'description' => 'POP details.',
  ),
  'state' => array(
    'type' => 'varchar',
    'length' => 24,
    'not null' => TRUE,
    'description' => 'Name of the state.',
  ),
);
$this->map = new MigrateSQLMap($this->machineName, $source_key, MigrateDestinationNode::getKeySchema());
?>