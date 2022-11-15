<?php

namespace Sawirricardo\LaravelKirimEmail\Transports;

use Illuminate\Http\Client\PendingRequest;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\MessageConverter;

class KirimemailTransport extends AbstractTransport
{
    public function __construct(protected PendingRequest $client, protected $domain = null)
    {
    }

    protected function doSend(SentMessage $message): void
    {
        $email = MessageConverter::toEmail($message->getOriginalMessage());

        foreach ($email->getTo() as $to) {
            $this->client->post('messages', [
                'from' => $email->getFrom()[0]->getAddress(),
                'to' => $to,
                'subject' => $email->getSubject(),
                'text' => $email->getTextBody(),
                'html' => $email->getHtmlBody(),
            ]);
        }
    }

    public function __toString(): string
    {
        return 'kirimemail';
    }
}
