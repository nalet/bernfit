<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserPreferenceRepository")
 */
class UserPreference
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tuesday;

    /**
     * @ORM\Column(type="boolean")
     */
    private $thursday;

    /**
     * @ORM\Column(type="boolean")
     */
    private $stayInformed;

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of tuesday
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Set the value of tuesday
     *
     * @return  self
     */
    public function setTuesday($tuesday)
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    /**
     * Get the value of thursday
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Set the value of thursday
     *
     * @return  self
     */
    public function setThursday($thursday)
    {
        $this->thursday = $thursday;

        return $this;
    }

    /**
     * Get the value of stayInformed
     */
    public function getStayInformed()
    {
        return $this->stayInformed;
    }

    /**
     * Set the value of stayInformed
     *
     * @return  self
     */
    public function setStayInformed($stayInformed)
    {
        $this->stayInformed = $stayInformed;

        return $this;
    }
}
