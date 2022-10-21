<?php

//Swoole\Runtime::enableCoroutine();

/*Co\run(function()
{
    go(function()
    {
        Co::sleep(1);
        echo "Done 1\n";
    });

    go(function()
    {
        Co::sleep(2);
        echo "Done 2\n";
    });
});


Swoole\Runtime::enableCoroutine();

go(static function () {
    sleep(1);
    echo 'a \n';
});

go(static function () {
    sleep(2);
    echo 'b \n';
});



use Swoole\Coroutine\System;

for ($i = 0; $i < 5000; $i++) {
    go(static function () use ($i) {
        System::sleep(1);
        echo "$i\n";
    });
}
*/

use Swoole\Coroutine\System;

final class SomeTask
{
    public function __invoke(int $i): void
    {
        echo "Função 1 -> $i\n";
        System::sleep(1);
    }
}

for ($i = 0; $i < 10; $i++){
    go(new SomeTask, $i);
    sleep(1);
    echo "Função 2 -> \n";
}


