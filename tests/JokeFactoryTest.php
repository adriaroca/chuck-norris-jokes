<?php
/**
 * Created by Omatech
 * User: aroca@omatech.com
 * Date: 22/02/19 17:00
 */

namespace AdriaRoca\ChuckNorrisJokes\Tests;


use AdriaRoca\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{

    /** @test */
    public function it_returns_a_random_joke()
    {
        $randomJoke = 'Random Joke';

        $jokes = new JokeFactory([
            $randomJoke
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame($randomJoke, $joke);
    }

    /** @test */
    public function it_returns_a_predifined_joke()
    {
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, [
            "Joke 1",
            "Joke 2",
            "Joke 3"
        ]);
    }

}