<?php
class UserTest extends \PHPUnit\Framework\TestCase{
    
    
    public function testReturnUserName(){
        $user = new \App\Model\User;
        $user->setUserName('Fahim');
        $this->assertEquals($user->getUserName(), 'Fahim');
    }
    public function testReturnCourseCode(){
        $user = new \App\Model\User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE470');
    }
    public function testReturnEmailAddress(){
		$user = new \App\Model\User;
		$user->setEmail('shahrierfahim00@gmail.com');
        $this->assertEquals($user->getEmail(), 'shahrierfahim00@gmail.com');
    }

      
    /*public function testUserNameIsEmptyByDefault(){
        $user = new \App\Model\User;
        $user->setUserName('Fs');
        $this->assertEquals($user->getUserName(), '');
    }
    public function testCourseCodeShouldCorrect(){
        $user = new \App\Model\User;
		$user->setCourseCode('CSE470');
        $this->assertEquals($user->getCourseCode(), 'CSE4');
    } */

}
