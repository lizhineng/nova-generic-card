<?php

namespace Zhineng\NovaGenericCard;

use Illuminate\Contracts\View\View;
use Laravel\Nova\Card;

class NovaGenericCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-generic-card';
    }

    public function renderWith(View|string $template): self
    {
        return $this->withMeta([
            'template' => $template instanceof View ? $template->render() : $template,
        ]);
    }
}
