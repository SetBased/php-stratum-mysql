<?php
//----------------------------------------------------------------------------------------------------------------------
/**
 * phpStratum
 *
 * @copyright 2005-2015 Paul Water / Set Based IT Consultancy (https://www.setbased.nl)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link
 */
//----------------------------------------------------------------------------------------------------------------------
class CommandsOutOfSyncTest extends DataLayerTestCase
{
  //--------------------------------------------------------------------------------------------------------------------
  public function test1()
  {
    DataLayer::testRow0a( 1 );
    DataLayer::testRows1( 1 );
    DataLayer::testRowsWithIndex1( 100 );
    DataLayer::testRowsWithKey1( 100 );
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
