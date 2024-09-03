<?php
namespace Telegram;
class HandleUpdate{
    public $update;
    public $message;
    public $message_id;
    public $message_thread_id;
    public $boost_count;
    public $date;
    public $is_topic_message;
    public $is_automatic_forward;
    public $edit_date;
    public $has_protected_content;
    public $media_group_id;
    public $author_signature;
    public $text;
    public $caption;
    public $has_media_spoiler;
    public $delete_chat_photo;
    public $group_chat_created;
    public $supergroup_chat_created;
    public $channel_chat_created;
    public $migrate_to_chat_id;
    public $migrate_from_chat_id;
    public $from;
    public $from_id;
    public $is_bot;
    public $first_name;
    public $last_name;
    public $username;
    public $language_code;
    public $is_premium;
    public $added_to_attachment_menu;
    public $can_join_groups;
    public $can_read_all_group_messages;
    public $supports_inline_queries;
    public $chat;
    public $chat_id;
    public $chat_type;
    public $chat_title;
    public $chat_username;
    public $chat_first_name;
    public $chat_last_name;
    public $chat_is_forum;
    public $chat_active_usernames;
    public $chat_accent_color_id;
    public $chat_background_custom_emoji_id;
    public $chat_profile_accent_color_id;
    public $chat_profile_background_custom_emoji_id;
    public $chat_emoji_status_custom_emoji_id;
    public $chat_emoji_status_expiration_date;
    public $chat_bio;
    public $chat_has_private_forwards;
    public $chat_has_restricted_voice_and_video_messages;
    public $chat_join_to_send_messages;
    public $chat_join_by_request;
    public $chat_description;
    public $chat_invite_link;
    public $chat_slow_mode_delay;
    public $chat_unrestrict_boost_count;
    public $chat_message_auto_delete_time;
    public $chat_has_aggressive_anti_spam_enabled;
    public $chat_has_hidden_members;
    public $chat_has_protected_content;
    public $chat_has_visible_history;
    public $chat_sticker_set_name;
    public $chat_can_set_sticker_set;
    public $chat_custom_emoji_sticker_set_name;
    public $chat_linked_chat_id;
    public $quote;
    public $quote_text;
    public $quote_position;
    public $quote_is_manual;
    public $quote_entities;
    public $entities_type;
    public $entities_offset;
    public $entities_length;
    public $entities_url;
    public $entities_language;
    public $entities_custom_emoji_id;
    public $entities_user;
    public $story;
    public $story_chat;
    public $story_id;
    public $message_reaction;
    public $message_reaction_chat;
    public $message_reaction_message_id;
    public $message_reaction_user;
    public $message_reaction_actor_chat;
    public $message_reaction_date;
    public $message_reaction_old_reaction;
    public $message_reaction_new_reaction;
    public $callback_query;
    public $cb_data_id;
    public $cb_data_from;
    public $cb_data_inline_message_id;
    public $cb_data_chat_instance;
    public $cb_data;
    public $cb_data_game_short_name;
    public $cb_data_message;
    public $cb_data_chatid;
    public $cb_data_message_id;
    public $contact;
    public $contact_number;
    public $contact_first_name;
    public $contact_last_name;
    public $contact_user_id;
    public $video;
    public $video_file_id;
    public $video_file_name;
    public $video_file_unique_id;
    public $video_file_size;
    public $forward_from_chat;
    public $forward_from_chat_id;
    public $forward_from_chat_title;
    public $forward_from_chat_username;
    public $forward_from_chat_type;
    public $cb_data_from_id;
    public $photo;
    public $photo_file_id;
    public $photo_file_unique_id;
    public $photo_file_size;

    public function __construct(){
        $this->update = json_decode(file_get_contents('php://input'),1);
        $this->message = isset($this->update['message']) ? $this->update['message'] : null;
        if ($this->message) {
            $this->message_id = isset($this->message['message_id']) ? $this->message['message_id'] : null;
            $this->message_thread_id = isset($this->message['message_thread_id']) ? $this->message['message_thread_id'] : null;
            $this->boost_count = isset($this->message['boost_count']) ? $this->message['boost_count'] : null;
            $this->date = isset($this->message['date']) ? $this->message['date'] : null;
            $this->is_topic_message = isset($this->message['is_topic_message']) ? $this->message['is_topic_message'] : null;
            $this->is_automatic_forward = isset($this->message['is_automatic_forward']) ? $this->message['is_automatic_forward'] : null;
            $this->edit_date = isset($this->message['edit_date']) ? $this->message['edit_date'] : null;
            $this->has_protected_content = isset($this->message['has_protected_content']) ? $this->message['has_protected_content'] : null;
            $this->media_group_id = isset($this->message['media_group_id']) ? $this->message['media_group_id'] : null;
            $this->author_signature = isset($this->message['author_signature']) ? $this->message['author_signature'] : null;
            $this->text = isset($this->message['text']) ? $this->message['text'] : null;
            $this->caption = isset($this->message['caption']) ? $this->message['caption'] : null;
            $this->has_media_spoiler = isset($this->message['has_media_spoiler']) ? $this->message['has_media_spoiler'] : null;
            $this->delete_chat_photo = isset($this->message['delete_chat_photo']) ? $this->message['delete_chat_photo'] : null;
            $this->group_chat_created = isset($this->message['group_chat_created']) ? $this->message['group_chat_created'] : null;
            $this->supergroup_chat_created = isset($this->message['supergroup_chat_created']) ? $this->message['supergroup_chat_created'] : null;
            $this->channel_chat_created = isset($this->message['channel_chat_created']) ? $this->message['channel_chat_created'] : null;
            $this->migrate_to_chat_id = isset($this->message['migrate_to_chat_id']) ? $this->message['migrate_to_chat_id'] : null;
            $this->migrate_from_chat_id = isset($this->message['migrate_from_chat_id']) ? $this->message['migrate_from_chat_id'] : null;
            $this->forward_from_chat = isset($this->message['forward_from_chat']) ? $this->message['forward_from_chat'] : null;
            if ($this->forward_from_chat) {
                $this->forward_from_chat_id = isset($this->forward_from_chat['id']) ? $this->forward_from_chat['id'] : null;
                $this->forward_from_chat_title = isset($this->forward_from_chat['title']) ? $this->forward_from_chat['title'] : null;
                $this->forward_from_chat_username = isset($this->forward_from_chat['username']) ? $this->forward_from_chat['username'] : null;
                $this->forward_from_chat_type = isset($this->forward_from_chat['type']) ? $this->forward_from_chat['type'] : null;
            }
            $this->photo = isset($this->message['photo']) ? $this->message['photo'] : null;
            if ($this->photo) {
                $lastPhoto = end($this->photo);
                $this->photo_file_id = isset($lastPhoto['file_id']) ? $lastPhoto['file_id'] : null;
                $this->photo_file_unique_id = isset($lastPhoto['file_unique_id']) ? $lastPhoto['file_unique_id'] : null;
                $this->photo_file_size = isset($lastPhoto['file_size']) ? $lastPhoto['file_size'] : null;
            }
            $this->video = isset($this->message['video']) ? $this->message['video'] : null;
            if ($this->video) {
                $this->video_file_id = isset($this->video['file_id']) ? $this->video['file_id'] : null;
                $this->video_file_unique_id = isset($this->video['file_unique_id']) ? $this->video['file_unique_id'] : null;
                $this->video_file_size = isset($this->video['file_size']) ? $this->video['file_size'] : null;
                $this->video_file_name = isset($this->video['file_name']) ? $this->video['file_name'] : null;
            }
            $this->from = isset($this->message['from']) ? $this->message['from'] : null;
            if ($this->from) {
                $this->from_id = isset($this->from['id']) ? $this->from['id'] : null;
                $this->is_bot = isset($this->from['is_bot']) ? $this->from['is_bot'] : null;
                $this->first_name = isset($this->from['first_name']) ? $this->from['first_name'] : null;
                $this->last_name = isset($this->from['last_name']) ? $this->from['last_name'] : null;
                $this->username = isset($this->from['username']) ? $this->from['username'] : null;
                $this->language_code = isset($this->from['language_code']) ? $this->from['language_code'] : null;
                $this->is_premium = isset($this->from['is_premium']) ? $this->from['is_premium'] : null;
                $this->added_to_attachment_menu = isset($this->from['added_to_attachment_menu']) ? $this->from['added_to_attachment_menu'] : null;
                $this->can_join_groups = isset($this->from['can_join_groups']) ? $this->from['can_join_groups'] : null;
                $this->can_read_all_group_messages = isset($this->from['can_read_all_group_messages']) ? $this->from['can_read_all_group_messages'] : null;
                $this->supports_inline_queries = isset($this->from['supports_inline_queries']) ? $this->from['supports_inline_queries'] : null;
            }
            $this->from = isset($this->message['from']) ? $this->message['from'] : null;
            $this->chat = isset($this->message['chat']) ? $this->message['chat'] : null;
            if ($this->chat) {
                $this->chat_id = isset($this->chat['id']) ? $this->chat['id'] : null;
                $this->chat_type = isset($this->chat['type']) ? $this->chat['type'] : null;
                $this->chat_title = isset($this->chat['title']) ? $this->chat['title'] : null;
                $this->chat_username = isset($this->chat['username']) ? $this->chat['username'] : null;
                $this->chat_first_name = isset($this->chat['first_name']) ? $this->chat['first_name'] : null;
                $this->chat_last_name = isset($this->chat['last_name']) ? $this->chat['last_name'] : null;
                $this->chat_is_forum = isset($this->chat['is_forum']) ? $this->chat['is_forum'] : null;
                $this->chat_active_usernames = isset($this->chat['active_usernames']) ? $this->chat['active_usernames'] : null;
                $this->chat_accent_color_id = isset($this->chat['accent_color_id']) ? $this->chat['accent_color_id'] : null;
                $this->chat_background_custom_emoji_id = isset($this->chat['background_custom_emoji_id']) ? $this->chat['background_custom_emoji_id'] : null;
                $this->chat_profile_accent_color_id = isset($this->chat['profile_accent_color_id']) ? $this->chat['profile_accent_color_id'] : null;
                $this->chat_profile_background_custom_emoji_id = isset($this->chat['profile_background_custom_emoji_id']) ? $this->chat['profile_background_custom_emoji_id'] : null;
                $this->chat_emoji_status_custom_emoji_id = isset($this->chat['emoji_status_custom_emoji_id']) ? $this->chat['emoji_status_custom_emoji_id'] : null;
                $this->chat_emoji_status_expiration_date = isset($this->chat['emoji_status_expiration_date']) ? $this->chat['emoji_status_expiration_date'] : null;
                $this->chat_bio = isset($this->chat['bio']) ? $this->chat['bio'] : null;
                $this->chat_has_private_forwards = isset($this->chat['has_private_forwards']) ? $this->chat['has_private_forwards'] : null;
                $this->chat_has_restricted_voice_and_video_messages = isset($this->chat['has_restricted_voice_and_video_messages']) ? $this->chat['has_restricted_voice_and_video_messages'] : null;
                $this->chat_join_to_send_messages = isset($this->chat['join_to_send_messages']) ? $this->chat['join_to_send_messages'] : null;
                $this->chat_join_by_request = isset($this->chat['join_by_request']) ? $this->chat['join_by_request'] : null;
                $this->chat_description = isset($this->chat['description']) ? $this->chat['description'] : null;
                $this->chat_invite_link = isset($this->chat['invite_link']) ? $this->chat['invite_link'] : null;
                $this->chat_slow_mode_delay = isset($this->chat['slow_mode_delay']) ? $this->chat['slow_mode_delay'] : null;
                $this->chat_unrestrict_boost_count = isset($this->chat['unrestrict_boost_count']) ? $this->chat['unrestrict_boost_count'] : null;
                $this->chat_message_auto_delete_time = isset($this->chat['message_auto_delete_time']) ? $this->chat['message_auto_delete_time'] : null;
                $this->chat_has_aggressive_anti_spam_enabled = isset($this->chat['has_aggressive_anti_spam_enabled']) ? $this->chat['has_aggressive_anti_spam_enabled'] : null;
                $this->chat_has_hidden_members = isset($this->chat['has_hidden_members']) ? $this->chat['has_hidden_members'] : null;
                $this->chat_has_protected_content = isset($this->chat['has_protected_content']) ? $this->chat['has_protected_content'] : null;
                $this->chat_has_visible_history = isset($this->chat['has_visible_history']) ? $this->chat['has_visible_history'] : null;
                $this->chat_sticker_set_name = isset($this->chat['sticker_set_name']) ? $this->chat['sticker_set_name'] : null;
                $this->chat_can_set_sticker_set = isset($this->chat['can_set_sticker_set']) ? $this->chat['can_set_sticker_set'] : null;
                $this->chat_custom_emoji_sticker_set_name = isset($this->chat['custom_emoji_sticker_set_name']) ? $this->chat['custom_emoji_sticker_set_name'] : null;
                $this->chat_linked_chat_id = isset($this->chat['linked_chat_id']) ? $this->chat['linked_chat_id'] : null;
            }

            $this->contact = isset($this->message['contact']) ? $this->message['contact'] : null;
            if ($this->contact) {
                $this->contact_number = isset($this->contact['phone_number']) ? $this->contact['phone_number'] : null;
                $this->contact_first_name = isset($this->contact['first_name']) ? $this->contact['first_name'] : null;
                $this->contact_last_name = isset($this->contact['last_name']) ? $this->contact['last_name'] : null;
                $this->contact_user_id = isset($this->contact['user_id']) ? $this->contact['user_id'] : null;
            }
            if ($this->quote) {
                $this->quote_text = isset($this->quote['text']) ? $this->quote['text'] : null;
                $this->quote_position = isset($this->quote['position']) ? $this->quote['position'] : null;
                $this->quote_is_manual = isset($this->quote['is_manual']) ? $this->quote['is_manual'] : null;
                $this->quote_entities = isset($this->quote['entities']) ? $this->quote['entities'] : null;
                if ($this->quote_entities) {
                    $this->entities_type = isset($this->quote_entities['type']) ? $this->quote_entities['type'] : null;
                    $this->entities_offset = isset($this->quote_entities['offset']) ? $this->quote_entities['offset'] : null;
                    $this->entities_length = isset($this->quote_entities['length']) ? $this->quote_entities['length'] : null;
                    $this->entities_url = isset($this->quote_entities['url']) ? $this->quote_entities['url'] : null;
                    $this->entities_language = isset($this->quote_entities['language']) ? $this->quote_entities['language'] : null;
                    $this->entities_custom_emoji_id = isset($this->quote_entities['custom_emoji_id']) ? $this->quote_entities['custom_emoji_id'] : null;
                    $this->entities_user = isset($this->quote_entities['user']) ? $this->quote_entities['user'] : null;
                }
            }
            $this->story = isset($this->message['reply_to_story']) ? $this->message['reply_to_story'] : null;
            if ($this->story) {
                $this->story_chat = isset($this->quote['chat']) ? $this->quote['chat'] : null;
                $this->story_id = isset($this->quote['id']) ? $this->quote['id'] : null;
            }
        }
        $this->message_reaction = isset($this->update['message_reaction']) ? $this->update['message_reaction'] : null;
        if ($this->message_reaction) {
            $this->message_reaction_chat = isset($this->message_reaction['chat']) ? $this->message_reaction['chat'] : null;
            $this->message_reaction_message_id = isset($this->message_reaction['message_id']) ? $this->message_reaction['message_id'] : null;
            $this->message_reaction_user = isset($this->message_reaction['user']) ? $this->message_reaction['user'] : null;
            $this->message_reaction_actor_chat = isset($this->message_reaction['actor_chat']) ? $this->message_reaction['actor_chat'] : null;
            $this->message_reaction_date = isset($this->message_reaction['date']) ? $this->message_reaction['date'] : null;
            $this->message_reaction_old_reaction = isset($this->message_reaction['old_reaction']) ? $this->message_reaction['old_reaction'] : null;
            $this->message_reaction_new_reaction = isset($this->message_reaction['new_reaction']) ? $this->message_reaction['new_reaction'] : null;
        }
        $this->callback_query = isset($this->update['callback_query']) ? $this->update['callback_query'] : null;
        if ($this->callback_query) {
            $this->cb_data = isset($this->callback_query['data']) ? $this->callback_query['data'] : null;
            $this->cb_data_id = isset($this->callback_query['id']) ? $this->callback_query['id'] : null;
            $this->cb_data_from = isset($this->callback_query['from']) ? $this->callback_query['from'] : null;
            $this->cb_data_from_id = isset($this->cb_data_from['id']) ? $this->cb_data_from['id'] : null;
            $this->cb_data_inline_message_id = isset($this->callback_query['inline_message_id']) ? $this->callback_query['inline_message_id'] : null;
            $this->cb_data_chat_instance = isset($this->callback_query['chat_instance']) ? $this->callback_query['chat_instance'] : null;
            $this->cb_data_game_short_name = isset($this->callback_query['game_short_name']) ? $this->callback_query['game_short_name'] : null;
            $this->cb_data_message = isset($this->callback_query['message']) ? $this->callback_query['message'] : null;
            $this->cb_data_chatid = isset($this->cb_data_message['chat']['id']) ? $this->cb_data_message['chat']['id'] : null;
            $this->cb_data_message_id = isset($this->cb_data_message['message_id']) ? $this->cb_data_message['message_id'] : null;
        }
    }
}