<?php
const OIL_CODE = 'BZ=F';
const GAS_CODE = 'NG';
const SILVER_CODE = 'SI=F';
const GOLD_CODE = 'GC=F';
const PLATINUM_CODE = 'PL=F';

const TIME_BUTTON = 'time_button';
const UPDATE_BUTTON = 'update_button';
const DESCRIBE_BUTTON = 'describe_button';
const SUBSCRIBE_BUTTON = 'subscribe_button';
const START_TIME = 'start_time';

const TIME_ARR = array ( '0', '1', '2', '3', '4', '5',
                         '6', '7', '8', '9', '10', '11',
                         '12', '13', '14', '15', '16', '17',
                         '18', '19', '20', '21', '22', '23');

const DESCRIBE_MESSAGE_TEXT = 'НАЧАТЬ: /start  ';

const TOKEN = '785589758:AAFgHNm9se49KMN77ag7Kzt7DcOhE9JNr5s';
const DB_DSN = "mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_eac8c10b5a4f27b;charset=UTF8";
const DB_USER = "b762538bfdc7ec";
const DB_PASSWORD = "90516cda";

const START_KEYBOARD_TEXT = 'ПОЛУЧАЙТЕ АКТУАЛЬНУЮ ИНФОРМАЦИЮ О МИРОВЫХ ЦЕНАХ НА НЕФТЬ, ГАЗ, ЗОЛОТО, СЕРЕБРО И ПЛАТИНУ';
const START_KEYBOARD = [
    'inline_keyboard' => [
        [
            ['text' => 'ПОДПИСАТЬСЯ', 'callback_data' => 'pressed_subscribe'],
        ],
        [
            ['text' => 'посмотреть без подписки', 'callback_data' => 'look_once']
        ]
    ]
];

const UPDATE_DESCRIBE_KEYBOARD = [
    'inline_keyboard' => [
        [
            ['text' => 'ИЗМЕНИТЬ ВРЕМЯ ОПОВЕЩЕНИЯ', 'callback_data' => 'update_time']
        ],
        [
            ['text' => 'ПОСМОТРЕТЬ ИНФОРМАЦИЮ СЕЙЧАС', 'callback_data' => 'looking_now']
        ],
        [
            ['text' => 'отменить подписку', 'callback_data' => 'dislike_describe']
        ]
    ]
];

const TIME_KEYBOARD_TEXT = 'ВЫБЕРИТЕ ВРЕМЯ, КОГДА ХОТИТЕ ПОЛУЧАТЬ ИНФОРМАЦИЮ';
const TIME_KEYBOARD =  [
   'inline_keyboard' => [
        [
            ['text' => '00.00', 'callback_data' => '0'],
            ['text' => '1.00', 'callback_data' => '1'],
            ['text' => '2.00', 'callback_data' => '2'],
            ['text' => '3.00', 'callback_data' => '3'],
            ['text' => '4.00', 'callback_data' => '4'],
            ['text' => '5.00', 'callback_data' => '5'],
        ],
        [
            ['text' => '6.00', 'callback_data' => '6'],
            ['text' => '7.00', 'callback_data' => '7'],
            ['text' => '8.00', 'callback_data' => '8'],
            ['text' => '9.00', 'callback_data' => '9'],
            ['text' => '10.00', 'callback_data' => '10'],
            ['text' => '11.00', 'callback_data' => '11'],
        ],
        [
            ['text' => '12.00', 'callback_data' => '12'],
            ['text' => '13.00', 'callback_data' => '13'],
            ['text' => '14.00', 'callback_data' => '14'],
            ['text' => '15.00', 'callback_data' => '15'],
            ['text' => '16.00', 'callback_data' => '16'],
            ['text' => '17.00', 'callback_data' => '17'],
        ],
        [
            ['text' => '18.00', 'callback_data' => '18'],
            ['text' => '19.00', 'callback_data' => '19'],
            ['text' => '20.00', 'callback_data' => '20'],
            ['text' => '21.00', 'callback_data' => '21'],
            ['text' => '22.00', 'callback_data' => '22'],
            ['text' => '23.00', 'callback_data' => '23']
        ]
    ]
];