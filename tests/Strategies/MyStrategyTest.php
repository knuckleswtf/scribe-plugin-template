<?php

namespace Me\MyScribePlugin\Tests\Strategies;

use Me\MyScribePlugin\Strategies\MyStrategy;
use Knuckles\Scribe\Tools\DocumentationConfig;
use PHPUnit\Framework\TestCase;
use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;

class MyStrategyTest extends TestCase
{
    use ArraySubsetAsserts;

    /** @test */
    public function can_extract_data()
    {
        $strategy = new MyStrategy(new DocumentationConfig([]));
        $results = $strategy->getData();

        $this->assertArraySubset([
            'key' => 'value',
        ], $results);
    }

}
