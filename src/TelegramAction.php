<?php

namespace ChatGenius;

class TelegramAction extends Telegram{
    public function __construct($token) {
        parent::__construct($token);
    }
    public function getUpdates($options = []) {
        try {
            $response = $this->request()->get('getUpdates', [
                'query' => [
                    'offset' => $this->data['offset'] ?? null,
                    'limit' => $this->data['limit'] ?? null,
                    'timeout' => $this->data['timeout'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this;
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function setWebhook($url) {
        try {
            if (!isset($url) || filter_var(filter_var($url, FILTER_SANITIZE_URL), FILTER_VALIDATE_URL) === false) {
                throw new Exception(
                    message: 'Invalid URL provided',
                    code: 1101,
                    statusCode: 400
                );
            }
            $response = $this->request()->get('setWebhook', [
                'query' => [
                    'url' => $url,
                    'certificate' => $this->data['certificate'] ?? null,
                    'ip_address' => $this->data['ipaddress'] ?? null,
                    'max_connections' => $this->data['maxconnections'] ?? null,
                    'allowed_updates' => $this->data['allowedupdates'] ?? null,
                    'drop_pending_updates' => $this->data['droppending'] ?? null,
                    'secret_token' => $this->data['secrettoken'] ?? null,
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this;
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function deleteWebhook() {
        try {
            $response = $this->request()->get('deleteWebhook', [
                'query' => [
                    'drop_pending_updates' => $this->data['droppending'] ?? null,
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this;
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function getWebhookInfo() {
        try {
            $response = $this->request()->get('getWebhookInfo');
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this;
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function getMe() {
        try {
            $response = $this->request()->get('getMe');
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this;
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendMessage($options = []) {
        try {
            $response = $this->request()->get('sendMessage', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'text' => $this->data['text'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'entities' => $this->data['entities'] ?? null,
                    'link_preview_options' => $this->data['LinkPreviewOptions'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function editMessageText($options = []) {
        try {
            $response = $this->request()->get('editMessageText', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'text' => $this->data['text'],
                    'message_id' => $this->data['messageid'] ?? null,
                    'inline_message_id' => $this->data['inlinemessageid'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'entities' => $this->data['entities'] ?? null,
                    'link_preview_options' => $this->data['LinkPreviewOptions'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function forwardMessage($options = []) {
        try {
            $response = $this->request()->get('forwardMessage', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'from_chat_id' => $this->data['fromchatid'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'message_id' => $this->data['messageid'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function forwardMessages($options = []) {
        try {
            $response = $this->request()->get('forwardMessages', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'from_chat_id' => $this->data['fromchatid'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'message_ids' => $this->data['messageids'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function copyMessage($options = []) {
        try {
            $response = $this->request()->get('copyMessage', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'from_chat_id' => $this->data['fromchatid'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'message_id' => $this->data['messageid'] ?? null,
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function copyMessages($options = []) {
        try {
            $response = $this->request()->get('copyMessages', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'from_chat_id' => $this->data['fromchatid'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'message_ids' => $this->data['messageids'] ?? null,
                    'remove_caption' => $this->data['removecaption'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendAudio($options = []) {
        try {
            $response = $this->request()->get('sendAudio', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'audio' => $this->data['audio'],
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'duration' => $this->data['duration'] ?? null,
                    'performer' => $this->data['performer'] ?? null,
                    'title' => $this->data['title'] ?? null,
                    'thumbnail' => $this->data['thumbnail'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendDocument($options = []) {
        try {
            $response = $this->request()->get('sendDocument', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'document' => $this->data['document'],
                    'thumbnail' => $this->data['thumbnail'] ?? null,
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'disable_content_type_detection' => $this->data['disablecontenttypedetection'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendVideo($options = []) {
        try {
            $response = $this->request()->get('sendVideo', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'video' => $this->data['video'],
                    'duration' => $this->data['duration'] ?? null,
                    'width' => $this->data['width'] ?? null,
                    'height' => $this->data['height'] ?? null,
                    'thumbnail' => $this->data['thumbnail'] ?? null,
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'has_spoiler' => $this->data['spoiler'] ?? null,
                    'supports_streaming' => $this->data['streaming'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendPhoto($options = []) {
        try {
            $response = $this->request()->get('sendPhoto', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'photo' => $this->data['photo'],
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'has_spoiler' => $this->data['spoiler'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendAnimation($options = []) {
        try {
            $response = $this->request()->get('sendAnimation', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'animation' => $this->data['animation'],
                    'duration' => $this->data['duration'] ?? null,
                    'width' => $this->data['width'] ?? null,
                    'height' => $this->data['height'] ?? null,
                    'thumbnail' => $this->data['thumbnail'] ?? null,
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'has_spoiler' => $this->data['spoiler'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendVoice($options = []) {
        try {
            $response = $this->request()->get('sendVoice', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'voice' => $this->data['voice'],
                    'duration' => $this->data['duration'] ?? null,
                    'caption' => $this->data['caption'] ?? null,
                    'parse_mode' => $this->data['parse'] ?? null,
                    'caption_entities' => $this->data['captionentities'] ?? null,
                    'has_spoiler' => $this->data['spoiler'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendVideoNote($options = []) {
        try {
            $response = $this->request()->get('sendVideoNote', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'video_note' => $this->data['videonote'],
                    'length' => $this->data['length'] ?? null,
                    'thumbnail' => $this->data['thumbnail'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendMediaGroup($options = []) {
        try {
            $response = $this->request()->get('sendMediaGroup', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'media' => $this->data['media'],
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendLocation($options = []) {
        try {
            $response = $this->request()->get('sendLocation', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'latitude' => $this->data['latitude'],
                    'longitude' => $this->data['longitude'],
                    'horizontal_accuracy' => $this->data['horizontalaccuracy'] ?? null,
                    'live_period' => $this->data['liveperiod'] ?? null,
                    'heading' => $this->data['heading'] ?? null,
                    'proximity_alert_radius' => $this->data['proximityalertradius'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendVenue($options = []) {
        try {
            $response = $this->request()->get('sendVenue', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'latitude' => $this->data['latitude'],
                    'longitude' => $this->data['longitude'],
                    'title' => $this->data['title'],
                    'address' => $this->data['address'],
                    'heading' => $this->data['heading'] ?? null,
                    'foursquare_id' => $this->data['foursquareid'] ?? null,
                    'foursquare_type' => $this->data['foursquaretype'] ?? null,
                    'google_place_id' => $this->data['googleplaceid'] ?? null,
                    'google_place_type' => $this->data['googleplacetype'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendContact($options = []) {
        try {
            $response = $this->request()->get('sendContact', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'phone_number' => $this->data['phonenumber'],
                    'first_name' => $this->data['firstname'],
                    'last_name' => $this->data['lastname'],
                    'vcard' => $this->data['vcard'] ?? null,
                    'disable_notification' => $this->data['Notification'] ?? null,
                    'protect_content' => $this->data['Protect'] ?? null,
                    'reply_parameters' => $this->data['reply'] ?? null,
                    'reply_markup' => $this->data['replymarkup'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function sendChatAction($options = []) {
        try {
            $response = $this->request()->get('sendChatAction', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_thread_id' => $this->data['thread'] ?? null,
                    'action' => $this->data['action'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function getUserProfilePhotos($options = []) {
        try {
            $response = $this->request()->get('getUserProfilePhotos', [
                'query' => [
                    'user_id' => $this->data['userid'],
                    'offset' => $this->data['offset'] ?? null,
                    'limit' => $this->data['limit'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function getFile() {
        try {
            $response = $this->request(true)->get($this->data['filepath']);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function exportChatInviteLink($options = []) {
        try {
            $response = $this->request()->get('exportChatInviteLink', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function createChatInviteLink($options = []) {
        try {
            $response = $this->request()->get('createChatInviteLink', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'name' => $this->data['name'] ?? null,
                    'expire_date' => $this->data['expireday'] ?? null,
                    'member_limit' => $this->data['totalmember'] ?? null,
                    'creates_join_request' => $this->data['activewaitinglist'] ?? null,
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function revokeChatInviteLink($options = []) {
        try {
            $response = $this->request()->get('revokeChatInviteLink', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'invite_link' => $this->data['invitelink'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function approveChatJoinRequest($options = []) {
        try {
            $response = $this->request()->get('approveChatJoinRequest', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'user_id' => $this->data['userid'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function declineChatJoinRequest($options = []) {
        try {
            $response = $this->request()->get('declineChatJoinRequest', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'user_id' => $this->data['userid'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function leaveChat($options = []) {
        try {
            $response = $this->request()->get('leaveChat', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function getChat($options = []) {
        try {
            $response = $this->request()->get('getChat', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function deleteMessage($options = []) {
        try {
            $response = $this->request()->get('deleteMessage', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'message_id' => $this->data['messageid'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
    public function getChatMember($options = []) {
        try {
            $response = $this->request()->get('getChatMember', [
                'query' => [
                    'chat_id' => $this->data['chat_id'],
                    'user_id' => $this->data['userid'],
                    ...$options
                ]
            ]);
            if ($response->getStatusCode() != 200) {
                throw new Exception(
                    message: $response->getReasonPhrase(),
                    code: $response->getStatusCode(),
                );
            }
            $responseData = json_decode($response->getBody(), true);
            if ($responseData['ok'] === false) {
                throw new Exception(
                    message: $responseData['description'],
                    code: $responseData['error_code'] ?? 1102,
                );
            }
            $this->data['response'] = $responseData;
            $this->NullData();
            return $this; 
        } catch(Exception $e) {
            echo $e->result();
        }
    }
}