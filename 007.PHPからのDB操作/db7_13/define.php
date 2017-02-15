<?php
/*
【DB操作応用課・ロジック構築】
以下の仕様のプログラムを作成しなさい
・○×塾の一週間時間割
・時間割はhtmlのテーブル構造をうまく用いること
・科目名と、担当者が各テーブルに入る
・科目名、担当者名は自由に考えてよい。
・入力フォームを持つページを用意し、何日目の、
何時限目に、どの科目で、どの担当者が担当するのか、をそれぞれ入力できる。
*/

const DB_TYPE='mysql';
const DB_HOST='localhost';
const DB_DBNAME='Challenge_db';
const DB_USER='yoshida1';
const DB_PWD='nameko';

const DB_MST_SUBJECT = 'm_subjects';
const DB_TBL_USER = 't_users';
const USER_PAGE_SUBMIT = 'btnRegUser';
const SUBJECT_PAGE_SUBMIT = 'btnRegSubject';
const MSG_REGIST_OK = '登録が完了しました。';
const MSG_INPUT_ERR = '入力内容に誤りがあります。';
const EXSAMINATION_FEE = 1000;
