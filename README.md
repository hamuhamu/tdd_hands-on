# tdd_hands-on
TDDハンズオンの資料

## 環境

以下の環境を用意してください。  
* PHP 5.6 >=
* PHPUnit 5.5

https://phpunit.de/  
PHPUnit 5.5を使用しますので、PHP5.6以上  

PHP 5.6環境を用意できない方やWindowsの方はVagrantをお使いください。  
https://www.vagrantup.com/downloads.html  
```sh
$ vagrant up
```

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

[実行結果](img.png]  

## お題

```
入力として1から100までの整数を受け取れること。それ以外は、例外を返すこと。
受け取った数値をそのまま返すこと。
ただし3の倍数のときは数の代わりに「Fizz」と、5の倍数のときは「Buzz」と返し、3と5両方の倍数の場合には「FizzBuzz」を返すこと。
```
