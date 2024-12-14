<?php

declare(strict_types=1);

namespace TAD\God;

use RuntimeException;

class God
{
    /**
     * Terry's chosen dictionary.
     *
     * @var array<int, string>
     */
    private array $corpus;

    /**
     * Creates a new interface to God.
     *
     * @throws \RuntimeException
     */
    public function __construct()
    {
        $corpusFilepath = __DIR__ . DIRECTORY_SEPARATOR . 'happy.txt';

        if (! file_exists($corpusFilepath)) {
            throw new RuntimeException('Corpus not found.');
        }

        $this->corpus = file($corpusFilepath, FILE_IGNORE_NEW_LINES);
    }

    /**
     * Ask God to speak.
     */
    public function speak(int $words = 30): string
    {
        $sentence = '';

        $keys = array_rand($this->corpus, $words);

        for ($i = 0; $i < $words; $i++) {
            $sentence .= str_replace('_', ' ', $this->corpus[$keys[$i]]) . ' ';
        }

        return trim($sentence);
    }
}
