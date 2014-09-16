<?php

class Node
{
	public $value;
	
	private $children = array();
	
	public function addChild(Node $child)
	{
		$this->children[] = $child;
	}
	
	public function getChildren()
	{
		return $this->children;
	}
}

$root = new Node();
$root->value = 2;

$node1 = new Node();
$node1->value = 7;

$root->addChild($node1);

$node2 = new Node();
$node2->value = 5;

$root->addChild($node2);

$node3 = new Node();
$node3->value = 2;
$node1->addChild($node3);

$node4 = new Node();
$node4->value = 6;
$node1->addChild($node4);

$node5 = new Node();
$node5->value = 9;
$node2->addChild($node5);

$node6 = new Node();
$node6->value = 5;
$node4->addChild($node6);

$node7 = new Node();
$node7->value = 11;
$node4->addChild($node7);

$node8 = new Node();
$node8->value = 4;
$node5->addChild($node8);

$node9 = new Node();
$node9->value = 33;
$node7->addChild($node9);

$node10 = new Node();
$node10->value = 66;
$node9->addChild($node10);

/*
2
	7
		2
		6
			5
			11
	5
		9
			4
*/

// recursive
function print_tree($root, $depth = 0)
{
	echo str_repeat('-', $depth * 4) . $root->value . '<br />';
	
	$depth += 1;
	foreach ($root->getChildren() as $child) {
		print_tree($child, $depth);
	}
}

print_tree($root);
