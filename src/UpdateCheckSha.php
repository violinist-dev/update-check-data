<?php

namespace Violinist\UpdateCheckData;

class UpdateCheckSha
{
    /**
     * Last sha.
     *
     * @var string
     */
    private $sha;

    /**
     * Last timestamp.
     *
     * @var int
     */
    private $timestamp;

    /**
     * UpdateCheckSha constructor.
     */
    public function __construct($sha, $timestamp)
    {
        $this->sha = $sha;
        $this->timestamp = $timestamp;
    }

    /**
     * Getter.
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * Getter.
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
