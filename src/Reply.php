<?php

namespace Telegram;

class Reply {
    private int $message_id;
    private ?int $chat_id;
    private bool $allow_sending_without_reply;
    private ?string $quote;
    private ?string $quote_parse_mode;
    private ?array $quote_entities;
    private ?string $quote_position;

    public function __construct(
        int $message_id,
        ?int $chat_id = null,
        bool $allow_sending_without_reply = false,
        ?string $quote = null,
        ?string $quote_parse_mode = null,
        ?array $quote_entities = null,
        ?string $quote_position = null
    ) {
        $this->message_id = $message_id;
        $this->chat_id = $chat_id;
        $this->allow_sending_without_reply = $allow_sending_without_reply;
        $this->quote = $quote;
        $this->quote_parse_mode = $quote_parse_mode;
        $this->quote_entities = $quote_entities;
        $this->quote_position = $quote_position;
    }

    public function toArray(): array {
        $array = ['message_id' => $this->message_id];
        if ($this->chat_id){
            $array = ['chat_id' => $this->chat_id];
        }
        if ($this->allow_sending_without_reply){
            $array = ['allow_sending_without_reply' => $this->allow_sending_without_reply];
        }
        if ($this->quote){
            $array = ['quote' => $this->quote];
        }
        if ($this->quote_parse_mode){
            $array = ['quote_parse_mode' => $this->quote_parse_mode];
        }
        if ($this->quote_entities){
            $array = ['quote_entities' => $this->quote_entities];
        }
        if ($this->quote_position){
            $array = ['quote_position' => $this->quote_position];
        }
        return $array;
    }
}