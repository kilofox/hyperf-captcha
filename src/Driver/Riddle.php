<?php

declare(strict_types=1);

/**
 * Riddle captcha class.
 *
 * @author     Tinsh <kilofox2000@gmail.com>
 * @copyright  (c) 2021 Kilofox Studio
 * @license    MIT License
 */

namespace Kilofox\Captcha\Driver;

use Kilofox\Captcha\Captcha;

class Riddle extends Captcha
{
    /**
     * @var string Captcha riddle
     */
    private $riddle;

    /**
     * Generates a new Captcha challenge.
     *
     * @return string The challenge answer
     */
    public function generateChallenge()
    {
        // Load riddles from the current language
        $riddles = config('captcha.riddles');

        // Pick a random riddle
        $riddle = $riddles[array_rand($riddles)];

        // Store the question for output
        $this->riddle = $riddle[0];

        // Return the answer
        $this->response = (string) $riddle[1];

        return $this->response;
    }

    /**
     * Outputs the Captcha riddle.
     *
     * @return mixed
     */
    public function render()
    {
        return $this->riddle;
    }

}
