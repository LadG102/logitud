<?php

namespace App;


// || ($nbPassage != null)

//*************** PASSAGE */

class passage
{
    private $time;
    private ?int $nbPassage;

    public function __construct($time = null, $nbPassage = null)
    {

        $this->setTime($time);

        $this->setNbPassage($nbPassage);
    }



    public function getTime()
    {
        return $this->time;
    }

    public function getNbPassage()
    {
        return $this->nbPassage;
    }

    /**
     * Set the value of nbPassage
     *
     * @return  self
     */
    public function setNbPassage($nbPassage)
    {
        if (!is_numeric($nbPassage) && $nbPassage !== null) {
            throw new IsNoTANumberException('le nombre n\'est pas composé de chiffre(s)');
        }

        if (!is_int($nbPassage) && $nbPassage !== null) {
            throw new IsNotIntegerNumber('le nombre n\'est pas entier');
        }

        if (($nbPassage < 1 || $nbPassage > 2) && $nbPassage !== null) {
            throw new invalidPassageNumberException('le nb de passage n\'est pas valide');
        }
        $this->nbPassage = $nbPassage;

        return $this;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */
    public function setTime($time)
    {
        if ($time < 0) {
            throw new TimeIsNegative('Le temps est negative');
        }

        $this->time = $time;

        return $this;
    }
}
