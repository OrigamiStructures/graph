<?php
namespace App\Test;

use App\Node\Node;
use PHPUnit\Framework\TestCase;

class NodeTest extends TestCase
{

    public function testNodeIsNode()
    {
        $n = new Node();
        $this->assertTrue($n->isNode());
    }
}