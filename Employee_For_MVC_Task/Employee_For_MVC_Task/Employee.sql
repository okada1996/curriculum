-- 以下のSQLをコピペして実行してください。
-- ※INSERT文の内容は指示に従い書き換えてください。

CREATE TABLE Employee(
    EmpId CHAR(5) NOT NULL,
    Password VARCHAR(64) NOT NULL,
    Name VARCHAR(50) NOT NULL,
    Mail VARCHAR(255),
    ProgramingLanguage TEXT,
    Comment TEXT,
    CreateDate VARCHAR(19) NOT NULL,
    UpdateDate VARCHAR(19) NOT NULL,
    DeleteFlg CHAR(1) NOT NULL,
    CONSTRAINT pk_employee PRIMARY KEY(EmpId)
);

-- 登録データサンプル
-- FIXME: Step-1: 2カラム目のパスワード以外を、ご自身の内容に変更した上で実行してください。
INSERT INTO Employee VALUES(
    '10497',
    '14b27238ee9b4b41bed26dd2fc1e9042f28c98e768e7b805e5bc088feda7f20d',
    '岡田直樹',
    'n-okada@y-i-group.co.jp',
    'Java',
    '何か一言',
    TO_CHAR(CURRENT_TIMESTAMP, 'yyyy/MM/dd HH24:mm:ss'),
    TO_CHAR(CURRENT_TIMESTAMP, 'yyyy/MM/dd HH24:mm:ss'),
    '0'
);

/* 確認用SQL */
SELECT * FROM Employee;