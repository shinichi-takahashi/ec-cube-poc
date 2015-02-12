# ec-cube-poc

* * * * * * * * * * * * * * * * * * * * * * 

### Install

app/Config/config.yml のDataBase設定を編集

1. `php composer.phar install`

2. `sh vendor/bin/doctrine orm:schema-tool:create`


* * * * * * * * * * * * * * * * * * * * * * 

### 動作確認方法

1. `https://example.com/order.html`にアクセス

2. product_id, customer_idを入力し、[order]を押下

3. 入力されたproduct_id, customer_idがあれば、src/Eccube/Plugin/以下のLockon, OtherVendorの２つのプラグインが実行される
