<?php
const BOT_TOKEN = '785589758:AAFgHNm9se49KMN77ag7Kzt7DcOhE9JNr5s';
const TELEGRAM_URL_WITHOUT_PARAMS = 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage?';

const FINANCE_URL_WITHOUT_PARAMS = 'https://query1.finance.yahoo.com/v10/finance/quoteSummary/';
const FINANCE_URL_MODULE = '?modules=price';

const DB_DSN = "mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_eac8c10b5a4f27b;charset=UTF8";
const DB_USER = "b762538bfdc7ec";
const DB_PASSWORD = "90516cda";

const OIL_CODE = 'BZ=F';
const GAS_CODE = 'NG';
const SILVER_CODE = 'SI=F';
const GOLD_CODE = 'GC=F';
const PLATINUM_CODE = 'PL=F';