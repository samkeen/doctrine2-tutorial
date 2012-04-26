<?php
require_once __DIR__."/bootstrap.php";
/*
 * example using QueryBuilder
 */
$qb = $entityManager->createQueryBuilder();

$qb->add('select', 'b, e, r')
    ->add('from', 'Bug b')
    ->join('b.engineer', 'e')
    ->join('b.reporter', 'r')
    ->add('orderBy', 'b.created desc')
    ->setMaxResults(30);

$query = $qb->getQuery();
$bugs = $query->getResult();

foreach($bugs AS $bug) {
    echo $bug->getDescription()." - ".$bug->getCreated()->format('d.m.Y')."\n";
    echo "    Reported by: ".$bug->getReporter()->getName()."\n";
    echo "    Assigned to: ".$bug->getEngineer()->getName()."\n";
    foreach($bug->getProducts() AS $product) {
        echo "    Platform: ".$product->getName()."\n";
    }
    echo "\n";
}