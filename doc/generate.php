<?php

$index = [
    ['name' => 'Dropdowns', 'file' => './01_dropdowns.md'],
    ['name' => 'Button Group / Button Toolbar', 'file' => './02_button_group.md'],
    [
        'name' => 'Button Dropdown',
        'file' => './03_button_dropdowns.md',
        'subsections' => [
            ['name' => 'Single Button Dropdowns', 'anchor' => 'single-button-dropdowns'],
            ['name' => 'Split Button Dropdowns', 'anchor' => 'split-button-dropdowns'],
        ]
    ],
    [
        'name' => 'Navs',
        'file' => './04_navs.md',
        'subsections' => [
            ['name' => 'Tabs', 'anchor' => 'tabs'],
            ['name' => 'Pills', 'anchor' => 'pills'],
        ]
    ],
    ['name' => 'Breadcrumbs', 'file' => './05_breadcrumbs.md'],
];

$chapter = 0;

$chapters = [];

foreach ($index as $i => $data) {
    $chapter++;
    $chapters[] = sprintf('%d. [%s](%s)', $chapter, $data['name'], $data['file']);

    if (isset($data['subsections'])) {
        foreach ($data['subsections'] as $subsection) {
            $chapters[] = sprintf('    - [%s](%s#%s)', $subsection['name'], $data['file'], $subsection['anchor']);
        }
    }

    $lines = file($data['file']);

    $navigation = [];
    if ($chapter > 1) {
        $navigation[] = sprintf('[← %d. %s](%s)', $chapter - 1, $index[$i - 1]['name'], $index[$i - 1]['file']);
    }
    $navigation[] = '[Return to index](index.md)';
    if ($chapter != count($index)) {
        $navigation[] = sprintf('[%d. %s →](%s)', $chapter + 1, $index[$i + 1]['name'], $index[$i + 1]['file']);
    }

    $navigation = implode(' | ', $navigation);

    $lines[0] = $navigation;
    $lines[count($lines) - 1] = $navigation;
    $lines = array_map('rtrim', $lines);
    file_put_contents($data['file'], implode("\n", $lines));
}

$indexTemplate = <<<MARKDOWN
# Bootstrap 3 Macro Bundle Documentation

## Index
{INDEX}
MARKDOWN;

file_put_contents('index.md', str_replace('{INDEX}', implode("\n", $chapters), $indexTemplate));
