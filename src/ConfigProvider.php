<?php

declare(strict_types=1);
declare(strict_types=1);

/**
 * Captcha class.
 *
 * @author     Tinsh <kilofox2000@gmail.com>
 * @copyright  (c) 2021 Kilofox Studio
 * @license    MIT License
 */

namespace Kilofox\Captcha;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The configuration for captcha.',
                    'source' => __DIR__ . '/../publish/captcha.php',
                    'destination' => BASE_PATH . '/config/autoload/captcha.php',
                ],
            ],
        ];
    }

}
