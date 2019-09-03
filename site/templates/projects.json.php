<?php

$projects = [];

foreach ($projectlist as $project) {
    $projects[] = [
        'title' => $project->title()->value(),
        'year' => $project->projectdate()->value(),
        'websitelink' => $project->projectlink()->value(),
        'gallery' => $project->imageArray(),

    ];
}

$data = [
  'title' => $page->title()->value(),
  'projects'=> $projects
];

echo json_encode($data);
