<?php

namespace Violinist\UpdateCheckData;

class UpdateCheckData
{

    /**
     * All last package shas.
     *
     * @var UpdateCheckSha[]
     */
    protected $packageShas = [];

    /**
     * The last sha for the repo.
     *
     * @var UpdateCheckSha
     */
    protected $lastSha;

    /**
     * Gets the package shas.
     *
     * @return UpdateCheckSha[]
     *   Array of package shas.
     */
    public function getPackageShas()
    {
        return $this->packageShas;
    }

    /**
     * Sets the package shas for this repo.
     *
     * @param array $packageShas
     *   An array of shas, keyed by package.
     */
    public function setPackageShas(array $packageShas)
    {
        $this->packageShas = $packageShas;
    }

    /**
     * Get the last sha of the repo.
     *
     * @return UpdateCheckSha
     *   The sha.
     */
    public function getLastSha()
    {
        if (!$this->lastSha instanceof UpdateCheckSha) {
            return null;
        }
        return $this->lastSha;
    }

    /**
     * Set the last sha for the repo.
     *
     * @param UpdateCheckSha $lastSha
     *   New last sha.
     */
    public function setLastSha(UpdateCheckSha $lastSha)
    {
        $this->lastSha = $lastSha;
    }

    /**
     * Get all package SHAs.
     */
    public function getPackagesShas()
    {
        return $this->packageShas;
    }

    /**
     * Get a saved sha by its package.
     *
     * @return UpdateCheckSha|null
     *   NULL if we do not know the package, and a sha if we do.
     */
    public function getShaForPackage($package)
    {
        if (empty($this->packageShas[$package])) {
            return null;
        }
        if (!$this->packageShas[$package]) {
            return null;
        }
        if (!$this->packageShas[$package] instanceof UpdateCheckSha) {
            return null;
        }
        return $this->packageShas[$package];
    }

    /**
     * Sets the sha for a specific package.
     *
     * @param string $package
     *   A package.
     * @param UpdateCheckSha $sha
     *   A sha.
     */
    public function setShaForPackage($package, UpdateCheckSha $sha)
    {
        $this->packageShas[$package] = $sha;
    }
}
