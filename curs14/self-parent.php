<?php

class Message {
    public static string $text = 'Are you sure?';

    public static function show(): string{
        return self::$text;
    }
}

class AnotherMessage extends Message{

    public static string $text = 'Yes I am';
    public static function show(): string{
        return parent::$text;
    }
}

Message::$text= 'Are you sure?';
AnotherMessage::$text='Yes I am.';

echo Message::show();
echo '<br>';
echo AnotherMessage::show();


