<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL;

class ElementDescriptor extends \ArrayObject
{
    /**
     *
     * ElementDescriptor constructor - an ElementDescriptor describes something that implements
     * the Pimcore\Model\Element\ElementInterface
     */
    public function __construct()
    {
        parent::__construct([], self::STD_PROP_LIST| self::ARRAY_AS_PROPS);
    }

}
