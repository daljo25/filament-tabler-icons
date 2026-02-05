<?php

// This script reads all SVGs from the local vendor directory and generates the enum file.

$svgDir = __DIR__ . '/vendor/secondnetwork/blade-tabler-icons/resources/svg';
$enumFile = __DIR__ . '/src/Enums/TablerIcon.php';

if (! is_dir($svgDir)) {
    exit("SVG directory not found: $svgDir\n");
}

$enumCases = [];
$files = scandir($svgDir);

foreach ($files as $file) {
    if (preg_match('/^(.*)\.svg$/', $file, $matches)) {
        $iconName = $matches[1];
        // Convert kebab-case to PascalCase for enum key
        $enumKey = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $iconName)));
        // If the key starts with a number, prefix with an underscore
        if (preg_match('/^\d/', $enumKey)) {
            $enumKey = '_' . $enumKey;
        }
        $enumCases[] = "    case $enumKey = '$iconName';";
    }
}

sort($enumCases);

$enumContent = '<?php

namespace daljo25\\FilamentTablerIcons\\Enums;

use Filament\\Support\\Contracts\\ScalableIcon;
use Filament\\Support\\Enums\\IconSize;

enum TablerIcon: string implements ScalableIcon
{
' . implode("\n", $enumCases) . '

    public function getIconForSize(IconSize $size): string
    {
        return "tabler-" . $this->value;
    }
}
';

file_put_contents($enumFile, $enumContent);

echo 'TablerIcon enum generated with ' . count($enumCases) . " icons from local vendor directory.\n";