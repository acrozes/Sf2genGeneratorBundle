<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sf2gen\Bundle\GeneratorBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Form entity
 *
 * @author Cédric Lahouste <cedric.lahouste@gmail.com>
 */
class Form
{
    /**
     * @Assert\NotBlank
     */    
    public $bundle_name;

    /**
     * @Assert\NotBlank
     */    
    public $entity_name;
}
