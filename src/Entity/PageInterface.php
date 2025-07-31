<?php

/*
 * This file is part of the ACSEO/PageBuilder package.
 *
 * (c) ACSEO <contact@acseo.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ACSEO\PageBuilderBundle\Entity;

interface PageInterface
{
    /**
     * Validate data structure.
     *
     * @return void
     */
    public static function validateFromArray(array $data);

    /**
     * DTO Method to create Page instance from an array of data.
     */
    public static function createFromArray(array $data): self;

    /**
     * Update Page Instance from an array of data.
     *
     * @return Page
     */
    public function updateFromArray(array $data): self;

    public function getData(): ?array;
}
