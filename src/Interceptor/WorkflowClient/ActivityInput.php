<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Temporal\Interceptor\WorkflowClient;

use JetBrains\PhpStorm\Immutable;
use Temporal\DataConverter\HeaderInterface;
use Temporal\DataConverter\ValuesInterface;

/**
 * @psalm-immutable
 */
#[Immutable]
class ActivityInput
{
    public function __construct(
        #[Immutable]
        public ValuesInterface $arguments,
        #[Immutable]
        public HeaderInterface $header,
    ) {
    }

    public function with(
        ValuesInterface $arguments = null,
        HeaderInterface $header = null,
    ): self {
        return new self(
            $arguments ?? $this->arguments,
            $header ?? $this->header
        );
    }
}
