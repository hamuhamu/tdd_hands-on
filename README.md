# tdd_hands-on
TDDハンズオンの資料

前方でデモをします。  
環境構築ができなかった場合でも、TDDの進め方を学習できます。  

## 環境

以下の環境を用意してください。  
* PHP 5.6以上(Mac可

https://phpunit.de/  
PHPUnit 5.5を使用しますので、PHP5.6以上  

PHP 5.6環境を用意できない方やWindowsの方はVagrantをお使いください。  
https://www.vagrantup.com/downloads.html  

Vagrantfileを用意しましたが、それを使う必要性はありません。  
PHP5.6が動作するVagrantがあるのであれば、そちらをお使い頂いて構いません。  
このディレクトリをマウントできれば、テストを実行できます。  

新しくBoxをインストールする場合は、以下のコマンドを実行してください。  
```sh
$ vagrant up
```

vagrant up時に失敗する場合は、VagrantやVirtualBoxのバージョンが古い可能性があります。  

Stderr: VBoxManage: error: Implementation of the USB 2.0 controller not found!  
参考リンク: http://qiita.com/secret_hamuhamu/items/cf447fccfbdd593a477f  

## 環境構築

Makefileを利用できる環境あれば、setupコマンドで環境を用意できます。  

```sh
$ make setup
```

Vagrantの方は、以下の通り。  
```sh
$ vagrant ssh
vagrant@debian:$ cd /vagrant/
vagrant@debian:$ make setup
```

## テスト

```sh
$ make test
```

テストを実行して以下の出力になれば準備完了です。  

![実行結果](img.png)

## お題

```
入力として1から100までの整数を受け取れること。それ以外は、例外を返すこと。
受け取った数値をそのまま返すこと。
ただし3の倍数のときは数の代わりに「Fizz」と、5の倍数のときは「Buzz」と返し、3と5両方の倍数の場合には「FizzBuzz」を返すこと。
```
