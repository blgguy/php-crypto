<?php

declare(strict_types=1);

/*
 * This file is part of Ark PHP Crypto.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\Tests\Crypto\Serializers;

use ArkEcosystem\Crypto\Serializer;
use ArkEcosystem\Tests\Crypto\TestCase;

/**
 * This is the multi signature registration serializer test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @coversNothing
 */
class MultiSignatureRegistrationTest extends TestCase
{
    /** @test */
    public function it_should_serialize_the_transaction_with_a_passphrase()
    {
        $this->assertSerialized($this->getTransactionFixture(4, 'passphrase'));
    }
}
