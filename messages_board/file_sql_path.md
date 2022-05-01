# 資料庫屬性

---

* ## 文章 articles

  * id: unsigned int
  * name: varchar(??)（如果有實做登入才能發文，即可不需要）
  * title: varchar(??)
  * content: text
  * created_at: timestamp
  * updated_at: timestamp
  * [FK 外鍵] user_id: unsigned int

* ## 留言 comments

  * id: unsigned int
  * content: text
  * created_at: timestamp
  * updated_at: timestamp
  * [FK 外鍵] article_id: unsigned int
  * [FK 外鍵] user_id: unsigned int

* ## 登入系統 users

  * id: unsigned int
  * name: varchar(??)
  * email: varchar(255)
  * password: varchar(60)
    * **不可儲存明碼**
    * 可以使用 [`password_hash("password", PASSWORD_BCRYPT)`](https://www.php.net/manual/en/function.password-hash.php) 方法

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
