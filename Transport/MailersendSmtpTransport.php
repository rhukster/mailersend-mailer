<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Bridge\Mailersend\Transport;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;

class MailersendSmtpTransport extends EsmtpTransport
{
    public function __construct(string $username, string $password, EventDispatcherInterface $dispatcher = null, LoggerInterface $logger = null)
    {
        parent::__construct('smtp.mailersend.net', 587, false, $dispatcher, $logger);

        $this->setUsername($username);
        $this->setPassword($password);
    }
}
