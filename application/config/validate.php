<?php


$config['validate'] = 
[
    [
      'field' => 'email',
      'label' => 'メールアドレス',
      'rules' => [
        'trim',
        'required',
        'valid_email',
        'is_unique[users.email]'
      ],
      'errors' => [
        "required"=>"%sは必須です。"
		,"valid_email"=>"%sの形式に誤りがあります。"
        ,"is_unique"=>"既に登録されている%sです"
      ]
    ],
    [
      'field' => 'password',
      'label' => 'パスワード',
      'rules' => [
        'trim',
        'required',
        'min_length[8]',
        '_alpha_numeric_symbol'
      ],
      'errors' => [
        "required"=>"%sは必須です。"
		    ,"min_length"=>"%sは8文字以上で入力してください。"
        ,'_alpha_numeric_symbol'=>"%sは半角英数字で入力してください。"
      ]
    ],
    [
      'field' => 'nickname',
      'label' => 'ニックネーム',
      'rules' => [
        'required',
      ],
      'errors' => [
        "required"=>"%sは必須です。"
      ]
    ],
    [
      'field' => 'year',
      'label' => 'year',
      'rules' => [
        '_setYear',
      ],
      'errors' => [
        "_setYear"=>""
      ]
    ],
    [
      'field' => 'month',
      'label' => 'month',
      'rules' => [
        '_setMonth',
      ],
      'errors' => [
        "_setMonth"=>""
      ]
    ],
    [
      'field' => 'day',
      'label' => 'day',
      'rules' => [
        '_setDay',
      ],
      'errors' => [
        "_setDay"=>"生年月日に誤りがあります。"
      ]
    ],

];

//アカウント情報編集用
$config['editvalidate'] = 
[
    [
      'field' => 'email',
      'label' => 'メールアドレス',
      'rules' => [
        'trim',
        'required',
        'valid_email',
        '_checkEmailMyself'
      ],
      'errors' => [
        "required"=>"%sは必須です。"
		    ,"valid_email"=>"%sの形式に誤りがあります。"
        ,'_checkEmailMyself'=>"ご指定の%sは既に利用されています。"
      ]
    ],
];

//連載登録
$config['comicvalidate'] = 
[
    [
      'field' => 'title',
      'label' => 'タイトル',
      'rules' => [
        'trim',
        'required',
      ],
      'errors' => [
        "required"=>"%sは必須です。"
      ]
    ],
];

