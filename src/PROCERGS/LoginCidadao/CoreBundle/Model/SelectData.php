<?php

namespace PROCERGS\LoginCidadao\CoreBundle\Model;

use PROCERGS\LoginCidadao\CoreBundle\Entity\Person;
use PROCERGS\LoginCidadao\CoreBundle\Entity\Country;
use PROCERGS\LoginCidadao\CoreBundle\Entity\State;
use PROCERGS\LoginCidadao\CoreBundle\Entity\City;

class SelectData
{
    /**
     * @var Country
     */
    protected $country;

    /**
     * @var State
     */
    protected $state;

    /**
     * @var City
     */
    protected $city;

    /**
     * Set country
     *
     * @param Country $country
     * @return SelectData
     */
    public function setCountry(Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set state
     *
     * @param State $state
     * @return SelectData
     */
    public function setState(State $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set city
     *
     * @param City $city
     * @return SelectData
     */
    public function setCity(City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    public function getFromPerson(Person $person)
    {
        $this->setCity($person->getCity())
            ->setState($person->getState())
            ->setCountry($person->getCountry());

        return $this;
    }

    public function toPerson(Person $person)
    {
        $person->setCity($this->getCity())
            ->setState($this->getState())
            ->setCountry($this->getCountry());

        return $person;
    }
}
