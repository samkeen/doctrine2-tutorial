<?php
require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int)$theBugId);

echo "Bug: ".$bug->getDescription()."\n";
// Accessing our special public $name property here on purpose:
echo "Engineer: ".$bug->getEngineer()->getName()."\n";