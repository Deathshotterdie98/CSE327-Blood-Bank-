<?php declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
final class valueinfo extends TestCase
{
public function SignupTest3(){
    require 'testingSignup.php' ;
        $this->assertEquals(true, SIGNUP(3));
}
} 

?>