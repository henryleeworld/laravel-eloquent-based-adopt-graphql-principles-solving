# Laravel 8 以 Eloquent 為基礎嘗試採用 GraphQL 原理解析客戶端請求

引入 gregorip02 的 restql 套件來擴增使用模型作為進入點，以 Eloquent 的方法新增查詢。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/api/restql?users={select: 'name'}` 來進行使用者名稱取得。

----

## 畫面截圖
![](https://i.imgur.com/XthjKSP.png)
> 以 RESTful 風格為主要基礎，訂定應用程式介面的呼叫方式、語法規則及所提供的介面類型等，但嘗試加入 GraphQL 原理
