<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Temporal\Interceptor\WorkflowClient;

use JetBrains\PhpStorm\Immutable;
use Temporal\DataConverter\ValuesInterface;
use Temporal\Workflow\WorkflowExecution;

/**
 * @psalm-immutable
 */
#[Immutable]
class SignalInput
{
    /**
     * @no-named-arguments
     * @internal Don't use the constructor. Use {@see self::with()} instead.
     */
    public function __construct(
        #[Immutable]
        public WorkflowExecution $workflowExecution,
        #[Immutable]
        public ?string $workflowType,
        #[Immutable]
        public string $signalName,
        #[Immutable]
        public ValuesInterface $arguments,
    ) {
    }

    public function with(
        string $signalName = null,
        ValuesInterface $arguments = null,
    ): self {
        return new self(
            $this->workflowExecution,
            $this->workflowType,
            $signalName ?? $this->signalName,
            $arguments ?? $this->arguments,
        );
    }
}
