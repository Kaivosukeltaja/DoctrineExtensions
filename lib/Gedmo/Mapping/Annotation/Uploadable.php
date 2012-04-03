<?php

namespace Gedmo\Mapping\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * Uploadable annotation for Uploadable behavioral extension
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @author Gustavo Falco <comfortablynumb84@gmail.com>
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @package Gedmo.Mapping.Annotation
 * @subpackage Uploadable
 * @link http://www.gediminasm.org
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
final class Uploadable extends Annotation
{
    /** @var boolean */
    public $allowOverwrite = false;
    /** @var boolean */
    public $appendNumber = true;
}

