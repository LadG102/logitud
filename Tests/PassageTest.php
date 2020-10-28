<?php

namespace Tests;

// use PHPUnit\Framework\assertInstanceOf;
// use PHPUnit\Framework\assertSame;

use App\Passage;
use App\invalidPassageNumberException;
use App\IsNotIntegerNumber;
use App\TimeIsNegative;
use App\IsNotANumberException;


it('vérifie le constructeur', function () {
    $passage = new Passage(25, 2);
    $this->assertInstanceOf(passage::class, $passage);
    $this->assertSame(25, $passage->getTime());
    $this->assertSame(2, $passage->getNbPassage());
});



it('check that the passage object is valid with a null value', function () {
    $passage = new Passage(25, null);
    $this->assertInstanceOf(passage::class, $passage);
});

it('should throw an new exception with passage number different from null 1 or 2', function () {
    $passage = new Passage(25, 3);
})->expectException(invalidPassageNumberException::class);


//** Exception
it('should throw an exception if the number is not integer', function () {
    $passage = new Passage(25, 1.9);
})->expectException(IsNotIntegerNumber::class);


it('should throw an exception if the number is not a number', function () {
    $passage = new Passage(25, 'A');
})->expectException(IsNotANumberException::class);


// ********** Time

it('should throw an exception if the time is negative', function () {
    $passage = new Passage(-23, 2);
})->expectException(TimeIsNegative::class);
