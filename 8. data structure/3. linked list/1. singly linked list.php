<?php

class Node
{
	public $value;
	
	private $nextNode;
	
	public function setNextNode(Node $nextNode)
	{
		$this->nextNode = $nextNode;
	}
	
	public function getNextNode()
	{
		return $this->nextNode;
	}
}

$node1 = new Node();
$node1->value = 12;

$node2 = new Node();
$node2->value = 99;

$node1->setNextNode($node2);

$node3 = new Node();
$node3->value = 37;
$node2->setNextNode($node3);

$node4 = new Node();
$node4->value = 105;
$node3->setNextNode($node4);

$node0 = new Node();
$node0->value = 9;
$node0->setNextNode($node1);
$node4->setNextNode($node0);

/*
09
12
99
37
105
*/

$node = $node0;
do {
	
	if ($node->getNextNode() !== null && $node->getNextNode()->value == 9) {
		$node->setNextNode($node->getNextNode()->getNextNode());
	}
	
	$node = $node->getNextNode();
} while($node !== $node0);

$node = $node0;
do {
	echo $node->value . "\n";
	
	$node = $node->getNextNode();
	sleep(1);
} while($node !== null);

