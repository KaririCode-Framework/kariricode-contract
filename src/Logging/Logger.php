<?php

declare(strict_types=1);

namespace KaririCode\Contract\Logging;

use KaririCode\Contract\Logging\Behavioral\Loggable;

/**
 * Interface Logger.
 *
 * @category  Logging
 *
 * @author    Walmir Silva <walmir.silva@kariricode.org>
 * @license   MIT
 *
 * @see       https://kariricode.org/
 */
interface Logger extends Loggable
{
    public function getName(): string;
}
