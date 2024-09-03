<?php

namespace ChatGenius;

class User{
    private int $id;
    private bool $is_bot;
    private string $first_name;
    private ?string $last_name;
    private ?string $username;
    private ?string $language_code;
    private bool $is_premium;
    private bool $added_to_attachment_menu;
    private ?bool $can_join_groups;
    private ?bool $can_read_all_group_messages;
    private ?bool $supports_inline_queries;

    public function __construct(
        int $id,
        bool $is_bot,
        string $first_name,
        ?string $last_name = null,
        ?string $username = null,
        ?string $language_code = null,
        bool $is_premium = false,
        bool $added_to_attachment_menu = false,
        ?bool $can_join_groups = null,
        ?bool $can_read_all_group_messages = null,
        ?bool $supports_inline_queries = null
    ) {
        $this->id = $id;
        $this->is_bot = $is_bot;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->language_code = $language_code;
        $this->is_premium = $is_premium;
        $this->added_to_attachment_menu = $added_to_attachment_menu;
        $this->can_join_groups = $can_join_groups;
        $this->can_read_all_group_messages = $can_read_all_group_messages;
        $this->supports_inline_queries = $supports_inline_queries;
    }
    public function toArray(): array {
        return [
            'id' => $this->id,
            'is_bot' => $this->is_bot,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'language_code' => $this->language_code,
            'is_premium' => $this->is_premium,
            'added_to_attachment_menu' => $this->added_to_attachment_menu,
            'can_join_groups' => $this->can_join_groups,
            'can_read_all_group_messages' => $this->can_read_all_group_messages,
            'supports_inline_queries' => $this->supports_inline_queries
        ];
    }
}