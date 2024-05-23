<?php

class Welcome
{
    const MESSAGE = 'Hello World!';
    public static string $name;

    public function hello(string $name): string
    {
        return self::MESSAGE . ' ' . $name;
    }

    public static function bye(): string{
        return 'Goodbye' . self::$name;
    }
}

echo Welcome::MESSAGE;
echo '<br>';
echo (new Welcome())->hello('Georgiana');
echo '<br>';
echo Welcome::$name = 'David';
echo '<br>';
echo Welcome::bye();