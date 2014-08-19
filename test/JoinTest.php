<?php

namespace Donut\Path\Test;

use Donut\Path as p;

class JoinTest extends \PHPUnit_Framework_TestCase {

  public function test_join_is_defined() {
    $actual = function_exists('\Donut\Path\join');
    $this->assertTrue($actual);
  }

  public function test_join_two_parts() {
    $actual = p\join("a", "b");
    $this->assertSame("a/b", $actual);
  }

}
