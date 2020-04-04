<?php

namespace tests\design_patterns\structural\flyweight\book;


$flyweightFactory = new FlyweightFactory();
$flyweightBookShelf1 =  new FlyweightBookShelf();
$flyweightBook1 = $flyweightFactory->getBook(1);
$flyweightBookShelf1->addBook($flyweightBook1);
$flyweightBook2 = $flyweightFactory->getBook(1);
$flyweightBookShelf1->addBook($flyweightBook2);

echo 'test 1 - show the two books are the same book'.BR;
if ($flyweightBook1 === $flyweightBook2) {
    echo '1 and 2 are the same';
} else {
    echo '1 and 2 are not the same';
}


echo 'test 2 - with one book on one self twice'.BR;
echo $flyweightBookShelf1->showBooks();
echo BR;


$flyweightBookShelf2 =  new FlyweightBookShelf();
$flyweightBook1 = $flyweightFactory->getBook(2);
$flyweightBookShelf2->addBook($flyweightBook1);
$flyweightBookShelf1->addBook($flyweightBook1);


echo 'test 3 - book shelf one'.BR;
echo $flyweightBookShelf1->showBooks();
echo BR;
echo 'test 3 - book shelf two'.BR;
echo $flyweightBookShelf2->showBooks();
