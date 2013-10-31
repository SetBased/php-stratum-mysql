<?php
//----------------------------------------------------------------------------------------------------------------------
class Row0WithLobTest extends PHPUnit_Framework_TestCase
{
  //--------------------------------------------------------------------------------------------------------------------
  /** Setups a form with a select form control.
   */
  protected function setUp()
  {
    TST_DL::Connect( 'localhost', 'test', 'test', 'test' );
  }

  //--------------------------------------------------------------------------------------------------------------------
  /** Stored routine with designation type row0 must return null.
   */
  public function test1()
  {
    $ret = TST_DL::TestRow0aWithLob( 0, 'blob' );
    $this->assertInternalType( 'null', $ret );

  }

  //--------------------------------------------------------------------------------------------------------------------
  /** Stored routine with designation type row0 must return 1 row.
   */
  public function test2()
  {
    $ret = TST_DL::TestRow0aWithLob( 1, 'blob' );
    $this->assertInternalType( 'array', $ret );
  }

  //--------------------------------------------------------------------------------------------------------------------
  /** An exception must be thrown when a stored routine with designation type row0 returns more than 1 rows.
   *  @expectedException Exception
   */
  public function test3()
  {
    TST_DL::TestRow0aWithLob( 2, 'blob' );
  }
  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
