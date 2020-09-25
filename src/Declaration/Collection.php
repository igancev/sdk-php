<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Client\Declaration;

/**
 * @psalm-import-type DeclarationOptions from CollectionInterface
 */
class Collection implements CollectionInterface
{
    /**
     * @var string
     */
    private const ERROR_ALREADY_EXISTS = 'Declaration with same name "%s" already has been registered';

    /**
     * @psalm-var array<string, DeclarationInterface>
     *
     * @var array|DeclarationInterface[]
     */
    private array $declarations = [];

    /**
     * @psalm-var array<string, DeclarationOptions>
     *
     * @var array
     */
    private array $options = [];

    /**
     * {@inheritDoc}
     */
    public function add(DeclarationInterface $declaration, bool $overwrite = false): void
    {
        $name = $declaration->getName();

        if ($this->has($declaration)) {
            throw new \InvalidArgumentException(\sprintf(self::ERROR_ALREADY_EXISTS, $name));
        }

        $this->declarations[$name] = $declaration;

        if ($overwrite) {
            $this->options[$name] = ['overwrite' => true];
        }
    }

    /**
     * {@inheritDoc}
     */
    public function has(DeclarationInterface $declaration): bool
    {
        return isset($this->declarations[$declaration->getName()]);
    }

    /**
     * {@inheritDoc}
     */
    public function find(string $name): ?DeclarationInterface
    {
        return $this->declarations[$name] ?? null;
    }

    /**
     * {@inheritDoc}
     */
    public function getIterator(): \Traversable
    {
        foreach ($this->declarations as $name => $declaration) {
            yield ($this->options[$name] ?? []) => $declaration;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function count(): int
    {
        return \count($this->declarations);
    }
}
