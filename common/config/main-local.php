<?php
return [
    'components' => [
        'language' => 'zh-CN', // ���ù��ʻ�֧��
        'sourceLanguage' => 'zh-CN', // Դ�����������
        'timeZone' => 'Asia/Shanghai', // ����ʱ��
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,//����index.php
            //'enableStrictParsing' => false,
            //'suffix' => '.html',//��׺����������˴����ô�������ַ���ͱ������.html��׺������ᱨ404����
            'rules' => [
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],
    ],
];
