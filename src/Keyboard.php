<?php

namespace Telegram;
class Keyboard{
    private array $data = [];
    private string $type;
    private array $keyboard;
    private array $inlineKeyboard;
    private bool $isPersistent;
    private bool $resizeKeyboard;
    private bool $oneTimeKeyboard;
    private string $inputFieldPlaceholder;
    private bool $selective;
    private bool $forceReply;
    private bool $removeKeyboard;
    
    public function __construct(
        string $type,
        array $keyboard = [],
        array $inlineKeyboard = [],
        bool $isPersistent = false,
        bool $resizeKeyboard = false,
        bool $oneTimeKeyboard = false,
        string $inputFieldPlaceholder = '',
        bool $selective = false,
        bool $forceReply = false,
        bool $removeKeyboard = false
    ) {
        $this->type = $type;
        $this->keyboard = $keyboard;
        $this->inlineKeyboard = $inlineKeyboard;
        $this->isPersistent = $isPersistent;
        $this->resizeKeyboard = $resizeKeyboard;
        $this->oneTimeKeyboard = $oneTimeKeyboard;
        $this->inputFieldPlaceholder = $inputFieldPlaceholder;
        $this->selective = $selective;
        $this->forceReply = $forceReply;
        $this->removeKeyboard = $removeKeyboard;
        switch ($type) {
            case 'InlineKeyboardMarkup':
                $this->data['inline_keyboard'] = $inlineKeyboard;
                break;
            case 'ReplyKeyboardMarkup':
                $this->data['keyboard'] = $keyboard;
                $this->data['is_persistent'] = $isPersistent;
                $this->data['resize_keyboard'] = $resizeKeyboard;
                $this->data['one_time_keyboard'] = $oneTimeKeyboard;
                $this->data['input_field_placeholder'] = $inputFieldPlaceholder;
                $this->data['selective'] = $selective;
                break;
            case 'ForceReply':
                $this->data['force_reply'] = $forceReply;
                $this->data['input_field_placeholder'] = $inputFieldPlaceholder;
                $this->data['selective'] = $selective;
                break;
            case 'ReplyKeyboardRemove':
                $this->data['remove_keyboard'] = $removeKeyboard;
                $this->data['selective'] = $selective;
                break;
            default:
                throw new \InvalidArgumentException("Invalid keyboard type.");
        }
    }
    public function toArray(): array {
        switch ($this->type) {
            case 'ReplyKeyboardMarkup':
                return [
                    'keyboard' => $this->keyboard,
                    'is_persistent' => $this->isPersistent,
                    'resize_keyboard' => $this->resizeKeyboard,
                    'one_time_keyboard' => $this->oneTimeKeyboard,
                    'input_field_placeholder' => $this->inputFieldPlaceholder,
                    'selective' => $this->selective
                ];
            case 'InlineKeyboardMarkup':
                return [
                    'inline_keyboard' => $this->inlineKeyboard
                ];
            case 'ForceReply':
                return [
                    'force_reply' => $this->forceReply,
                    'input_field_placeholder' => $this->inputFieldPlaceholder,
                    'selective' => $this->selective
                ];
            case 'ReplyKeyboardRemove':
                return [
                    'remove_keyboard' => $this->removeKeyboard,
                    'selective' => $this->selective
                ];
            default:
                return [];
        }
    }
}