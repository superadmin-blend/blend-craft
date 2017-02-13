<?php
/**
 * Created by PhpStorm.
 * User: Piotr
 * Date: 9/02/2017
 * Time: 9:19
 */

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