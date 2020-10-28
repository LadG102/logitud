<?php

namespace App;

use Carbon\Carbon;



//*************** EPREUVE */
class epreuve
{
    private ?string $name;
    private ?string $place;
    private $date;

    public function __construct(?string $name, ?string $place, $date)
    {
        $this->setName($name);
        $this->setPlace($place);
        $this->setDate($date);
    }

    // ********** NAME
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        if (empty($name)) {
            throw new EmptyException('Le champs est vide !');
        }
        if (!preg_match('#^[a-zA-Z]#', $name)) {
            throw new NameFormatIsIncorrectException('Le format entrée est incorrect');
        }

        $this->name = $name;

        return $this;
    }


    // ********** PLACE
    /**
     * Get the value of place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set the value of place
     *
     * @return  self
     */
    public function setPlace($place)
    {
        if (empty($place)) {
            throw new EmptyException('Le champs est vide !');
        }
        if (!preg_match('#^[a-zA-Z]#', $place)) {
            throw new NameFormatIsIncorrectException('Le format entrée est incorrect');
        }
        $this->place = $place;

        return $this;
    }

    // ********** DATE
    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        // $currentDate = Carbon::now()->format('d/m/y'); // Donne la date du jour
        $currentDate = Date('d/m/Y');

        if ($date < $currentDate) {
            throw new DateEarlierThanCurrentDate('La date est antérieure à la date du jour');
        }

        $this->date = $date;

        return $this;
    }
}
