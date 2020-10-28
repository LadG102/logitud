<?php

namespace Tests;

use App\Epreuve;
use App\NameFormatIsIncorrectException;
use App\EmptyException;
use App\DateEarlierThanCurrentDate;

//*************** TEST DE L'EPREUVE */

it("check if the constructor is valid", function () {
    $epreuve = new Epreuve('Epreuve-1', 'France', '25/01/2099');
    $this->assertInstanceOf(epreuve::class, $epreuve);
    $this->assertSame('Epreuve-1', $epreuve->getName());
    $this->assertSame('France', $epreuve->getPlace());
    $this->assertSame('25/01/2099', $epreuve->getDate());
});


// ** Name

it('should throw an exception if name is empty', function () {
    $epreuve = new Epreuve('', 'France', '25/01/2099');
})->expectException(EmptyException::class);

it('Should throw an exception if the name is not write in the correct format.', function () {
    $epreuve = new Epreuve('1302', 'France', '25/01/2099');
})->expectException(NameFormatIsIncorrectException::class);


// ** Lieu

it('should throw an exception if place is empty', function () {
    $epreuve = new Epreuve('Epreuve-1', '', '25/01/2099');
})->expectException(EmptyException::class);

it('Should throw an exception if the place is not write in the correct format.', function () {
    $epreuve = new Epreuve('Epreuve-1', '+uhuuui', '25/01/2099');
})->expectException(NameFormatIsIncorrectException::class);


// ** Date

it('should throw an exception if the date filled is earlier than the current date', function () {
    $epreuve = new Epreuve('Epreuve-1', 'France', '18/10/2022');
})->expectException(DateEarlierThanCurrentDate::class);
