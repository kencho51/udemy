<?php
declare(strict_types=1);

namespace App\helpers;


class Config
{
    public static function getFileContent(string $fileName): array
    {
        $fileContent = [];
        try {
            $path = realpath(sprintf(__DIR__. '/../configs/%s.php', $fileName));
            if(file_exists($path)) {
                $fileContent = require $path;
            }
        }catch (\Throwable $exception) {
            throw new \RuntimeException(
              sprintf('The specified file: %s was not found', $fileName)
            );
        }
        return $fileContent;
    }

}