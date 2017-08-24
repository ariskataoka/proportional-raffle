<?php
declare(strict_types=1);

namespace Duodraco\ProportionalRaffle\Data;


class Candidate
{
    protected $id;
    protected $name;
    protected $gender;
    protected $tickets = 0;

    public const GENDER_LIST = [
        "NONE",
        "CIS_FEMALE",
        "CIS_MALE",
        "HOMO_FEMALE",
        "HOMO_MALE",
        "TRANS_FEMALE",
        "TRANS_MALE",
        "SEEN_FEMALE",
        "SEEN_MALE"
    ];
    protected const DEFAULT_GENDER = 0;

    public function __construct(string $name, string $gender)
    {
        $this->name = $name;
        $this->gender = in_array($gender, self::GENDER_LIST) ? $gender : self::GENDER_LIST[self::DEFAULT_GENDER];
    }

    public function getId(): string
    {
        return spl_object_hash($this);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getTickets(): int
    {
        return $this->tickets;
    }

    /**
     * @param int $tickets
     */
    public function setTickets(int $tickets)
    {
        $this->tickets = $tickets;
    }
}