<?php

namespace Alchemy\Tests\Phrasea\Application;

use Symfony\Component\Process\Process;

class ConsoleAPITest extends \PhraseanetTestCase
{
    /**
     * @dataProvider provideConsoleNames
     */
    public function testThatCommandsExitWithZero($console)
    {
        if (!extension_loaded('phrasea2')) {
            $this->markTestSkipped('Phrasea2 is required');
        }

        $process = new Process(__DIR__ . '/../../../../../bin/'.$console);
        $process->run();

        $this->assertSame(0, $process->getExitCode());
    }

    public function provideConsoleNames()
    {
        return [
            ['console'],
            ['setup'],
            ['developer'],
        ];
    }
}
