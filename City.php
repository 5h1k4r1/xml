<?php

namespace App;


class City
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return object
     */
    public function getStreets(): object
    {
        return $this->streets;
    }

    /**
     * @param object $streets
     */
    public function setStreets(object $streets): void
    {
        $this->streets = $streets;
    }

    /**
     * @return object
     */
    public function getHomes(): object
    {
        return $this->homes;
    }

    /**
     * @param object $homes
     */
    public function setHomes(object $homes): void
    {
        $this->homes = $homes;
    }

    /**
     * @return array
     */
    public function getTransports(): array
    {
        return $this->transports;
    }

    /**
     * @param array $transports
     */
    public function setTransports(array $transports): void
    {
        $this->transports = $transports;
    }

    public function getEntities() {
        return [$this->homes, $this->streets];
    }

    private $streets;
    private $homes;
    private $transports;

    public function __construct(string $name, object $streets, object $homes, array $transports)
    {
        $this->name = $name;
        $this->streets = $streets;
        $this->homes = $homes;
        $this->transports = $transports;
    }
}