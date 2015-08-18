<?php

$tree = json_decode('{"id":30,"child1":{"id":8,"child1":{"id":3},"child2":{"id":20,"child1":{"id":10},"child2":{"id":29}}},"child2":{"id":52}}');

class Tree {

    public $elementBranch;
    public $tree;

    function __construct($tree) {
        $this->tree = $tree;
    }

    function checkBranch($branch, $value, $reqBranch = array()) {
        array_push($reqBranch, $branch->id);

        if ($branch->id != $value) {
            //for child1
            if (!empty($branch->child1)) {
                $this->checkBranch($branch->child1, $value, $reqBranch);
            }
            //for child2
            if (!empty($branch->child2)) {
                $this->checkBranch($branch->child2, $value, $reqBranch);
            }
        } else {
            $this->elementBranch = $reqBranch;
            return $this;
        }
        return $this;
    }

    function getBranch() {
        return $this->elementBranch;
    }

}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $val = fgets($fh);
    if ($val != "") {
        list($node1, $node2) = explode(" ", trim($val));
        $obj = new Tree($tree);
        $branch1 = $obj->checkBranch($obj->tree, $node1)->getBranch();
        $branch2 = $obj->checkBranch($obj->tree, $node2)->getBranch();
        $result = array_intersect($branch1, $branch2);
        echo end($result) . PHP_EOL;
    }
}
fclose($fh);

