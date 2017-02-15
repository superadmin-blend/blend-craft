<?php

namespace Craft;
use Twig_Extension;
use Twig_Filter_Method;

class FormHandlerTwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'formhandler';
    }
    /**
     * The "shake" filter shakes up the order of words in a sentence.
     *
     * Usage: {{ "Bartender, I'd like a drink please."|shake }}
     */
}