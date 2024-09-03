<?php

namespace Telegram;

class Entities {
    private ?string $type;
    private ?int $offset;
    private ?int $length;
    private ?string $url;
    private ?string $language;
    private ?string $custom_emoji_id;
    private ?User $user;

    public function __construct(
        ?string $type = null,
        ?int $offset = null,
        ?int $length = null,
        ?string $url = null,
        ?string $language = null,
        ?string $custom_emoji_id = null,
        ?User $user = null
    ) {
        $this->type = $type;
        $this->offset = $offset;
        $this->length = $length;
        $this->url = $url;
        $this->language = $language;
        $this->custom_emoji_id = $custom_emoji_id;
        $this->user = $user;
    }

    public function toArray(): array {
        return [
            'type' => $this->type,
            'offset' => $this->offset,
            'length' => $this->length,
            'url' => $this->url,
            'language' => $this->language,
            'custom_emoji_id' => $this->custom_emoji_id,
            'user' => $this->user ? $this->user->toArray() : null
        ];
    }
}