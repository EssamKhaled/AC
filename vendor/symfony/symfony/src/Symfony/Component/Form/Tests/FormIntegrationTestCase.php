<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests;

use Symfony\Component\Form\Test\FormIntegrationTestCase as BaseFormIntegrationTestCase;

/**
 * @deprecated since version 2.3, to be removed in 3.0.
 *             Use {@link \Symfony\Component\Form\Test\FormIntegrationTestCase} instead.
 */
abstract class FormIntegrationTestCase extends BaseFormIntegrationTestCase
{
    /**
    * {@inheritdoc}
    */
    protected function setUp()
    {
        @trigger_error('The '.__CLASS__.' class is deprecated since version 2.3 and will be removed in 3.0. Use the Symfony\Component\Form\Test\FormIntegrationTestCase class instead.', E_USER_DEPRECATED);
        parent::setUp();
    }
}
