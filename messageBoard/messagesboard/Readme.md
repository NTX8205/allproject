# 資料庫設定

## 資料庫屬性
    * ### 文章 articles
        * id: unsigned int
        * name: varchar(255)（如果有實做登入才能發文，即可不需要）
        * title: varchar(255)
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
        * name: varchar(255)
        * email: varchar(255)
        * password: varchar(100)
            * **不可儲存明碼**
            * 可以使用 [`password_hash("password", PASSWORD_BCRYPT)`]