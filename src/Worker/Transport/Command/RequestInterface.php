<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Worker\Transport\Command;

use Temporal\DataConverter\ValuesInterface;
use Temporal\Interceptor\HeaderInterface;

/**
 * @psalm-type RequestOptions = array<non-empty-string, mixed>
 */
interface RequestInterface extends CommandInterface
{
    public function getID(): int;

    /**
     * @return non-empty-string
     */
    public function getName(): string;

    /**
     * @return RequestOptions
     */
    public function getOptions(): array;

    public function getPayloads(): ValuesInterface;

    /**
     * Optional failure.
     */
    public function getFailure(): ?\Throwable;

    public function getHeader(): HeaderInterface;

    /**
     * @psalm-external-mutation-free
     */
    public function withHeader(HeaderInterface $header): self;
}
