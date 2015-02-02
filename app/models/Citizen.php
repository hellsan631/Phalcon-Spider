<?php

class Citizen extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $citizen_number;

    /**
     *
     * @var string
     */
    public $fluency;

    /**
     *
     * @var string
     */
    public $enlisted;

    /**
     *
     * @var string
     */
    public $avatar;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $moniker;

    /**
     *
     * @var string
     */
    public $handle;

    /**
     *
     * @var string
     */
    public $country;

    /**
     *
     * @var string
     */
    public $region;

    /**
     *
     * @var string
     */
    public $date_added;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'citizen_number' => 'citizen_number', 
            'fluency' => 'fluency', 
            'enlisted' => 'enlisted', 
            'avatar' => 'avatar', 
            'title' => 'title', 
            'moniker' => 'moniker', 
            'handle' => 'handle', 
            'country' => 'country', 
            'region' => 'region', 
            'date_added' => 'date_added'
        );
    }

}
