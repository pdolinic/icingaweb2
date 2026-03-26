<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data\Tree;

use ArrayIterator;
use RecursiveIterator;

/**
 * Iterator over a tree node's children
 */
class TreeNodeIterator implements RecursiveIterator
{
    /**
     * The node's children
     *
     * @var ArrayIterator
     */
    protected $children;

    /**
     * Create a new iterator over a tree node's children
     *
     * @param TreeNode $node
     */
    public function __construct(TreeNode $node)
    {
        $this->children = new ArrayIterator($node->getChildren());
    }

    public function current(): TreeNode
    {
        return $this->children->current();
    }

    public function key(): int
    {
        return $this->children->key();
    }

    public function next(): void
    {
        $this->children->next();
    }

    public function rewind(): void
    {
        $this->children->rewind();
    }

    public function valid(): bool
    {
        return $this->children->valid();
    }

    public function hasChildren(): bool
    {
        return $this->current()->hasChildren();
    }

    public function getChildren(): TreeNodeIterator
    {
        return new static($this->current());
    }

    /**
     * Get whether the iterator is empty
     *
     * @return bool
     */
    public function isEmpty()
    {
        return ! $this->children->count();
    }
}
