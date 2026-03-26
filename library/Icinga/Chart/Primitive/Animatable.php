<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Chart\Primitive;

use DOMElement;
use Icinga\Chart\Render\RenderContext;

/**
 * Base interface for animatable objects
 */
abstract class Animatable extends Styleable
{
    /**
     * The animation object set
     *
     * @var Animation
     */
    public $animation = null;

    /**
     * Set the animation for this object
     *
     * @param Animation $anim The animation to use
     */
    public function setAnimation(Animation $anim)
    {
        $this->animation = $anim;
    }

    /**
     * Append the animation to the given element
     *
     * @param DOMElement    $dom The element to append the animation to
     * @param RenderContext $ctx The context to use for rendering the animation object
     */
    protected function appendAnimation(DOMElement $dom, RenderContext $ctx)
    {
        if ($this->animation) {
            $dom->appendChild($this->animation->toSvg($ctx));
        }
    }
}
