<?php

namespace Alchemy\Tests\Phrasea\Utilities\Less;

use Alchemy\Phrasea\Utilities\Less\Builder;

class BuilderTest extends \PhraseanetTestCase
{
    public function testBuildSuccess()
    {
        $compiler = $this->getMockBuilder('Alchemy\Phrasea\Utilities\Less\Compiler')
            ->disableOriginalConstructor()
            ->getMock();
        $compiler->expects($this->once())->method('compile');

        $filesystem = $this->getMock('Symfony\Component\Filesystem\Filesystem');
        $filesystem->expects($this->once())->method('mkdir');

        $builder = new Builder($compiler, $filesystem);

        $builder->build([ __FILE__ => __DIR__ . '/output.css']);
    }
}
