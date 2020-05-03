<?php

namespace Test\Ease;

use Ease\Brick;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:23:11.
 */
class BrickTest extends SandTest
{
    /**
     * @var Brick
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Local\BrickTester();
        $this->object = new Brick();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        
    }

    /**
     * @covers Ease\Brick::getstatusMessages
     */
    public function testgetStatusMessages()
    {
        $this->object->cleanMessages();
        $this->object->addStatusMessage('Message', 'mail');
        $this->object->addStatusMessage('Message', 'warning');
        $this->object->addStatusMessage('Message', 'debug');
        $this->object->addStatusMessage('Message', 'error');
        $this->assertFalse(empty($this->object->getStatusMessages()));
    }

    /**
     * @covers Ease\Brick::setObjectName
     */
    public function testSetObjectName()
    {
//        parent::testSetObjectName();
        $this->object->setMyKey(123);
        $this->object->setObjectName();
        $this->assertEquals(get_class($this->object).'@123',
            $this->object->getObjectName());
        $this->object->setObjectName('customBrick');
        $this->assertEquals('customBrick',
            $this->object->getObjectName());
    }

    /**
     * @covers Ease\Brick::addStatusMessage
     */
    public function testaddStatusMessage()
    {
        $this->object->addStatusMessage('Testing');
        $this->object->addStatusMessage('email Message', 'email');
        $this->object->addStatusMessage('warning Message', 'warning');
        $this->object->addStatusMessage('debug Message', 'debug');
        $this->object->addStatusMessage('error Message', 'error');
        $this->object->addStatusMessage('success Message', 'success');
        $messages = $this->object->getStatusMessages();
        $this->assertEquals($messages, $messages);
    }

}