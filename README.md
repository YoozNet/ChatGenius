# ChatGenius

ChatGenius is a PHP package for interacting with the Telegram API. This README provides instructions for installing, configuring, and using the package to send messages, reply to users, and create custom keyboards.

## Installation

To install the package, use Composer:

```bash
composer require yooznet/chatgenius:^1.0.0
```
# Setup
First, include the necessary classes in your project:
```bash
use ChatGenius\TelegramAction;
use App\Classes\user\Handler;
```
Create a new instance of TelegramAction with your bot token:
```bash
$telegram = new TelegramAction('Your_Token_Here');
$update = new HandleUpdate();
```
# Sending Messages
To send a message, use the following code:
```bash
$telegram->ChatID($update->chat_id)
         ->Text('Welcome to our world!')
         ->sendMessage();
```
# Replying to User Messages
To reply to a user's message, first check if there is a message_id, and then use the Reply class:
```bash
use ChatGenius\Reply;

$reply = $update->message_id ? new Reply(message_id: $update->message_id) : null;

$telegram->ChatID($update->chat_id)
         ->Reply($reply)
         ->Text('Welcome to our world!')
         ->sendMessage();
```

# Creating Buttons
## Inline Keyboard
To create an inline keyboard with buttons:
```bash
use ChatGenius\Keyboard;

$keyboard = new Keyboard(
    type: 'InlineKeyboardMarkup',
    inlineKeyboard: [
        [
            ['text' => 'test', 'callback_data' => 'test'],
            ['text' => 'test2', 'callback_data' => 'test2'],
        ],
    ]
);
```
## Reply Keyboard
To create a regular reply keyboard:
```bash
$keyboard = new Keyboard(
    type: 'ReplyKeyboardMarkup',
    keyboard: [
        ['test']
    ],
    resizeKeyboard: true,
    oneTimeKeyboard: true
);
```
## Removing Keyboard
To remove the keyboard:

```bash
$keyboard = new Keyboard(
    type: 'ReplyKeyboardRemove',
    removeKeyboard: true
);
```
## Sending Messages with Keyboard
To send a message with a custom keyboard:
```bash
$telegram->ChatID($update->chat_id)
         ->Text('Welcome to our world!')
         ->ReplyMarkup($keyboard)
         ->sendMessage();
```
Contributing
Feel free to contribute to this project by submitting issues or pull requests.

License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

Contact
For any questions or feedback, please reach out to mail@yooznet.online.

