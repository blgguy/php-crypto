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

namespace ArkEcosystem\Tests\Crypto\Serialisers;

use ArkEcosystem\Crypto\Serialisers\SecondSignatureRegistration;
use ArkEcosystem\Tests\Crypto\TestCase;

/**
 * This is the second signature registration serialiser class.
 *
 * @author Brian Faust <brian@ark.io>
 * @coversNothing
 */
class SecondSignatureRegistrationTest extends TestCase
{
    /** @test */
    public function it_should_serialise_the_transaction()
    {
        $transaction = $this->getTransactionType(1);

        $actual = (new SecondSignatureRegistration($transaction))->serialise();

        $this->assertSame($transaction->serialized, $actual->getHex());
    }
}
