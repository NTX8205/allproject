# 留言板

---

* ## 留言板功能
  * ### 新增 C
  * ### 編輯 U
    * 非自己的不能編輯
  * ### 刪除 D
    * 非自己的不能刪除
  * ### 讀取 R
  * ### 留言回覆
    * +CRUD
  * ### 管理功能 [選]
    * 管理員可以刪除

* ## 使用者功能
  * ### 登入
  * ### 登出
  * ### 註冊

## 基本功能

* [ ] 文章 - 列出
* [ ] 文章 - 新增
* [ ] 文章 - 修改
* [ ] 文章 - 刪除
* [ ] 使用者登入、登出
* [ ] 使用者註冊

### 三人以上（含）額外功能

* [ ] 管理員權限
* [ ] 留言 - 列出
* [ ] 留言 - 新增
* [ ] 留言 - 修改
* [ ] 留言 - 刪除

----

* ## 資料庫屬性
  * ### 文章 articles
    * id: unsigned int
    * name: varchar(??)（如果有實做登入才能發文，即可不需要）
    * title: varchar(??)
    * content: text
    * created_at: timestamp
    * updated_at: timestamp
    * [FK 外鍵] user_id: unsigned int
  * ### 留言 comments
    * id: unsigned int
    * content: text
    * created_at: timestamp
    * updated_at: timestamp
    * [FK 外鍵] article_id: unsigned int
    * [FK 外鍵] user_id: unsigned int
  * ### 登入系統 users
    * id: unsigned int
    * name: varchar(??)
    * email: varchar(255)
    * password: varchar(60)
      * **不可儲存明碼**
      * 可以使用 [`password_hash("password", PASSWORD_BCRYPT)`](https://www.php.net/manual/en/function.password-hash.php) 方法

----

* ## 畫面自由發揮
  * 看的順眼就行
  * 糾正明顯設計錯誤

----

* ## 資料夾分類

```bash=
/
# 看的見的網頁
├── index.php
├── article
│  ├── list.php
│  ├── create.php
│  └── edit.php
├── comment
│  ├── create.php
│  └── edit.php
├── user
│  ├── login.php
│  └── register.php
├── api # 這裡面放 form target，表單請求到這，進行資料驗證
│  ├── article
│  │  ├── list.php
│  │  ├── create.php
│  │  ├── edit.php
│  │  ├── delete.php
│  ├── comment
│  │  ├── list.php
│  │  ├── create.php
│  │  ├── edit.php
│  │  ├── delete.php
│  └── user
│     ├── login.php
│     └── register.php
├── model # 這裡面放資料庫操作
│  ├── articles.php
│  ├── comments.php
│  └── users.php
└── library # 獨立的資料庫連接邏輯
   └── database.php
```

----

<https://hackmd.io/VMNXmnk4SBGktt9j4QhO_Q>

* ## 程式碼規範
  * Class
    * 大寫駝峰式
  * Function
    * 小寫駝峰式
  * 變數命名
    * 小寫駝峰式
  * 純 PHP 檔案省略 `?>`
  * 行長度的軟限制必須為 120 個字元，不得尾隨空格
  * 一個分號一行
  * 縮排為四個空格，不可用 TAB
  * 除了 protect & private，變數不可用底線開頭
  * 所有二進位算術運算子、比較運算子、賦值運算子、按位運算子、邏輯運算子、字串運算子和類型運算子前面和後面必須至少有一個空格：
  * array 表示請用 ［］;
  * array 最後一個元素請加，
  * 檔案最後要空一行，否則 git 會出現 No newline at end of file

* ## 範例

```php=
<?php

namespace Vendor\Package;

class ClassName
{
    public function fooBarBaz($arg1, &$arg2, $arg3 = [])
    {
        // method body
    }
}
```

```php=
<?php

namespace Vendor\Package;

class ClassName
{
    public function aVeryLongMethodName(
        ClassTypeHint $arg1,
        &$arg2,
        array $arg3 = []
    ) {
        // method body
    }
}
```

```php=
<?php

if ($expr1) {
    // if body
} elseif ($expr2) {
    // elseif body
} else {
    // else body;
}
```

```php=
<?php
foreach ($iterable as $key => $value) {
    // foreach body
}
```

```php=
<?php
if ($a === $b) {
    $foo = $bar ?? $a ?? $b;
} elseif ($a > $b) {
    $foo = $a + $b * $c;
}
```

----

* ## GIT
  * branch 用自己名字
  * [七分鐘學會 GitLab](https://rommelhong.medium.com/%E4%B8%83%E5%88%86%E9%90%98%E5%AD%B8%E6%9C%83gitlab-ecdcbcb42b9c)
  * [新增、初始 Repository](https://gitbook.tw/chapters/using-git/init-repository)
  * [2013 iT 邦幫忙鐵人賽 30天精通 Git 版本控管](https://ithelp.ithome.com.tw/users/20004901/ironman/525)
  * [常用 Git 指令介紹](https://hellojs-tw.github.io/git-101/cheat-sheet.html)

----
## 功能分工

文章 - 列出 - 蔡侄宇
文章 - 新增 - 林映如
文章 - 修改 - 蔡侄宇
文章 - 刪除 - 林映如
使用者登入、登出 - 許哲睿
使用者註冊 - 許哲睿

## 開發流程

先建 issue (一個功能一個 issue)-> 建立分支(分支用自己名字) -> 在自己分支開發，開發完 commit -> push -> 開 Merge requests -> 確認沒問題按 Merge

## 留言板網址
<https://gitlab.com/2434nijisanji/message_board>
