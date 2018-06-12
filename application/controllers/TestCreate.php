<?php
/**
 * Created by Charles Nerot
 * cnerot91@gmail.com
 */

/**
 * include required classes
 */


class TestCreate extends PHPUnit_Framework_TestCase
{
    private $exchange;


    /**
     * Prepare Exchange for Test
     * * Exchange is valid by default then broken down
     * * Mock dependence: User, Product, EmailSender, DatabaseConnection
     */
    public function setup()
    {
        /*
         * Create Mock objects
         */
        /*null array is constructor param*/
        $user = array(
            "charles",
            "nerot",
            "cnerot91@gmail.com",
            19
        );
        $mock_user = $this->getMockBuilder("User")
            ->setConstructorArgs($user)
            ->setMethods(['isValid'])
            ->getMock();
        $mock_user->expects($this->any())
            ->method('isValid')
            ->will($this->returnValue(true));


        $mock_db = $this->getMockBuilder("DatabaseConnection")
            ->setMethods(['saveProduct', 'saveUser', 'saveExchange'])
            ->getMock();
        $mock_db->expects($this->any())
            ->method('saveProduct')
            ->will($this->returnValue(true));
        $mock_db->expects($this->any())
            ->method('saveUser')
            ->will($this->returnValue(true));
        $mock_db->expects($this->any())
            ->method('saveExchange')
            ->will($this->returnValue(true));


        /*
         * Init exchange
         */

        $this->exchange = new Exchange($mock_user, $mock_Product, date('2010-01-21'), date('2014-01-21'), $mock_email, $mock_db);
    }


    /**
     * Test for Invalid/Missing Parameter(s)
     */
    public function test_save_invalidDatabaseConnection()
    {
        $this->exchange->setDbConnect(15);
        $this->assertFalse($this->exchange->save());
    }
}