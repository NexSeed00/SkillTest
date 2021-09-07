<?php

$movies = [
  'US' => [
    'actions' => [['title' => 'Avengers', 'runtime' => '149 min', 'director' => ['name' => 'Russo Bros', 'age' => 49]], 
                  ['title' => 'Star Wars', 'runtime' => '132 min', 'director' => ['name' => 'Geroge Lucas', 'age' => 72]]
  ],
    'romance' => [['title' => '500 day of Summer', 'runtime' => '120 min', 'director' => ['name' => 'Mark Web', 'age' => 32]], 
                  ['title' => 'Titanic', 'runtime' => '182 min', 'director' => ['name' => 'Jamus Cammeron', 'age' => 72]]
  ],
    'anime' => [['title' => 'Toy Story', 'runtime' => '95 min', 'director' => ['name' => 'Jhon Laseter', 'age' => 50]], 
                ['title' => 'Monsters Inc', 'runtime' => '97 min', 'director' => ['name' => 'Jhon Laseter', 'age' => 43]]
]
  ],
  'Japan' => [
    'actions' => [['title' => 'シン・ゴジラ', 'runtime' => '119 min', 'director' => ['name' => '庵野秀明', 'age' => 66]], 
                  ['title' => 'シン・エヴァンゲリオン', 'runtime' => '155 min', 'director' => ['name' => '庵野秀明', 'age' => 66]]
],
    'romance' => [['title' => '花より男子', 'runtime' => '100 min', 'director' => ['name' => '田中ヒロキ', 'age' => 43]], 
                  ['title' => '恋空', 'runtime' => '85 min', 'director' => ['name' => '三浦春馬', 'age' => 30]]
],
    'anime' => [['title' => '君の名は', 'runtime' => '130 min', 'director' => ['name' => '新海誠', 'age' => 46]], 
                ['title' => '鬼滅の刃　無限列車篇', 'runtime' => '117 min', 'director' => ['name' => '煉獄杏寿郎', 'age' => 21]]
]
  ]
];

echo $movies['Japan']['anime'][1]['director']['name']."\n";