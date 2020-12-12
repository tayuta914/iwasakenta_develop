### コーディング規約 ###

・変数は適切名前を付けよう  
例:数字を扱う変数  
→ ×$test1  
→ ○$number  

・変数名はキャメルケースで  
例: プログラミングの本を取り扱う変数  
→ ×$programmingbooks  
→ ○$programmingBooks  

・インデントは適切に  
例:×  
```php:sample
      $ sayHello= "Hello Word";
  if(true){
$ echo sayHello;
};
```
例:○  
```php:sample
$ sayHello = "Hello Word";
if(true){
  $ echo sayHello;
};
```

・関数スコープに気をつけよう  
関数スコープとは(https://qiita.com/TakashiOshikawa/items/0f2420a1c94ba78c9035)


# テストの実行

1. compoer install する
2. composer dump-autoload
3. composer test で./testディレクトリ内のテストを実行