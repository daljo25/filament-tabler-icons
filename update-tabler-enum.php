<?php

// Generates the TablerIcon enum and a rich JSON export from local SVGs

$svgDir = __DIR__ . '/vendor/secondnetwork/blade-tabler-icons/resources/svg';
$enumFile = __DIR__ . '/src/Enums/TablerIcon.php';
$jsonFile = __DIR__ . '/docs/tabler-icons.json';

if (! is_dir($svgDir)) {
    exit("SVG directory not found: $svgDir\n");
}

$enumCases = [];
$jsonIcons = [];
$files = scandir($svgDir);

foreach ($files as $file) {
    if (! str_ends_with($file, '.svg')) {
        continue;
    }

    $iconName = pathinfo($file, PATHINFO_FILENAME); // kebab-case
    $svgPath = $svgDir . '/' . $file;
    $svgContent = trim(file_get_contents($svgPath));

    // kebab-case → PascalCase
    $enumKey = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $iconName)));

    if (preg_match('/^\d/', $enumKey)) {
        $enumKey = '_' . $enumKey;
    }

    $enumCases[] = "    case $enumKey = '$iconName';";

    $jsonIcons[] = [
        'name'      => $iconName,
        'kebab'     => $iconName,
        'enum'      => $enumKey,
        'full_enum' => "TablerIcon::$enumKey",
        'svg'       => $svgContent,
    ];
}

sort($enumCases);
usort($jsonIcons, fn ($a, $b) => strcmp($a['name'], $b['name']));

$enumContent = '<?php

namespace Daljo25\\FilamentTablerIcons\\Enums;

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

file_put_contents(
    $jsonFile,
    json_encode($jsonIcons, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
);

echo 'TablerIcon enum generated with ' . count($enumCases) . " icons.\n";
echo "Rich JSON generated: tabler-icons.json\n";
