<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="event")
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="event_name", type="string", length=255, nullable=false)
     */   
    protected $eventName; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="event_value", type="string", length=255, nullable=false)
     */   
    protected $eventValue;     
    
    /**
     * @var string
     *
     * @ORM\Column(name="referrer_url", type="string", length=255, nullable=false)
     */   
    protected $referrerUrl;         
        
    /**
     * @var string
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    protected $createdDate;
    
    /**
     * @ORM\PrePersist
     */
    public function setCreatedDateTimeStamp()
    {
        if($this->getCreatedDate() == null)
        {
            $this->setCreatedDate(new \DateTime(date('Y-m-d H:i:s')));
        }
    }    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     * @return Event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventValue
     *
     * @param string $eventValue
     * @return Event
     */
    public function setEventValue($eventValue)
    {
        $this->eventValue = $eventValue;

        return $this;
    }

    /**
     * Get eventValue
     *
     * @return string 
     */
    public function getEventValue()
    {
        return $this->eventValue;
    }

    /**
     * Set referrerUrl
     *
     * @param string $referrerUrl
     * @return Event
     */
    public function setReferrerUrl($referrerUrl)
    {
        $this->referrerUrl = $referrerUrl;

        return $this;
    }

    /**
     * Get referrerUrl
     *
     * @return string 
     */
    public function getReferrerUrl()
    {
        return $this->referrerUrl;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Event
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}
