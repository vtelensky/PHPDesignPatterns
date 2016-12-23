<?php
namespace Creational\AbstractFactory;

class MessagePrinter
{
    protected $messageFactory = "";

    public function __construct(MessageFactory $messageFactory)
    {
        $this->messageFactory = $messageFactory;
    }

    /**
     * @param MessageFactory $messageFactory
     */
    public function setMessageFactory(MessageFactory $messageFactory)
    {
        $this->messageFactory = $messageFactory;
    }

    /**
     * @param $data
     */
    public function printMessage($data)
    {
        $receivers = array();
        $sender    = "";
        $message   = "";

        if (array_key_exists('sender', $data)) {
            $sender = $this->messageFactory->createSender(($data['sender']['name'] ? $data['sender']['name'] : ""),
                ($data['sender']['surname'] ? $data['sender']['surname'] : ""),
                ($data['sender']['machine'] ? $data['sender']['machine'] : ""));
        } else {
            $sender = $this->messageFactory->createSender("", "", "");
        }

        if (array_key_exists('receivers', $data) && is_array($data['receivers'])) {
            foreach ($data['receivers'] as $receiver) {
                $receivers[] = $this->messageFactory->createReceiver(($receiver['name'] ? $receiver['name'] : ""),
                    ($receiver['surname'] ? $receiver['surname'] : ""),
                    ($receiver['machine'] ? $receiver['machine'] : ""));
            }
        } else {
            $receivers = $this->messageFactory->createReceiver("", "", "");
        }

        if (array_key_exists('message', $data)) {
            $message = $this->messageFactory->createMessage(($data['message'] ? $data['message'] : ""));
        } else {
            $message = $this->messageFactory->createMessage("");
        }

        $message->setSender($sender);
        foreach ($receivers as $receiver) {
            $message->addReceiver($receiver);
        }

        echo $message . PHP_EOL;
    }
}