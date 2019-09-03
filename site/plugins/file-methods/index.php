<?php

Kirby::plugin('objecteam/file-methods', [
    'fileMethods' => [
        'imagedata' => function() {
            return [
                'sizes' => [
                    'small' => $this->thumb(['width' => 432, 'quality' => 80,])->url(),
                    'medium' => $this->thumb(['width' => 720, 'quality' => 80,])->url(),
                    'large' => $this->thumb(['width' => 960, 'quality' => 80,])->url()
                ],
                'caption' => $this->caption()->value()
           ];
        },

    ]
]);
