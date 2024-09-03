<?php

namespace ChatGenius;

class LinkPreviewOptions {
    private bool $is_disabled;
    private ?string $url;
    private bool $prefer_small_media;
    private bool $prefer_large_media;
    private bool $show_above_text;

    public function __construct(
        bool $is_disabled = false,
        ?string $url = null,
        bool $prefer_small_media = false,
        bool $prefer_large_media = false,
        bool $show_above_text = false
    ) {
        $this->is_disabled = $is_disabled;
        $this->url = $url;
        $this->prefer_small_media = $prefer_small_media;
        $this->prefer_large_media = $prefer_large_media;
        $this->show_above_text = $show_above_text;
    }

    public function toArray(): array {
        return [
            'is_disabled' => $this->is_disabled,
            'url' => $this->url,
            'prefer_small_media' => $this->prefer_small_media,
            'prefer_large_media' => $this->prefer_large_media,
            'show_above_text' => $this->show_above_text
        ];
    }
}