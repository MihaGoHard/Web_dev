<?php
const BOT_TOKEN = '';
const TELEGRAM_URL_WITHOUT_PARAMS = 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage?';

const FINANCE_URL_WITHOUT_PARAMS = 'https://query1.finance.yahoo.com/v10/finance/quoteSummary/';
const FINANCE_URL_MODULE = '?modules=price';

const DB_DSN = "mysql:host=us-cdbr-east-02.cleardb.com;dbname=;charset=UTF8";
const DB_USER = "";
const DB_PASSWORD = "";

const OIL_CODE = 'BZ=F';
const GAS_CODE = 'NG';
const SILVER_CODE = 'SI=F';
const GOLD_CODE = 'GC=F';
const PLATINUM_CODE = 'PL=F';