Group modülü bir yii 2 kouosl modülüdür.

## Kurulum

Aşağıda verilen dizinlerdeki main.php dosyaları içine alt satırdaki kod eklenir.

```bash

\portal\backend\config\main.php
\portal\frontend\config\main.php
'group' => ['class' => 'kouosl\group\Module',],

```

Portal dizinindeki "composer.json" açılır ve aşağıdaki kod eklenir.

```bash

....
"repositories": [
    {
        ....
        {
            "type": "vcs",
            "url": "https://github.com/pnarozbek/group.git"
        }
],
"require": {
     
    ....   
    "kouosl/group": "dev-master"
},
....

```

Putty ile sanal makineye bağlanılarak aşağıdaki kod çalıştırılır.

```bash

cd /var/www/portal
sudo chmod -R 777 vendor/kouosl/group
composer update

```

## Veritabanı İşlemleri

Komut satırından portal dizinine girilir ve aşağıdaki kod çalıştırılır.

```bash

php yii migrate --migrationPath=@vendor/kouosl/group/migrations --interactive=0

```

Bu sayede kouosl veritabanında group tablosu ve kayıtları oluşur.


## Group Modülünde Olanlar;

Aşağıdaki bağlantıda;



- http://portal.kouosl/group/group/



Kouosl veritabanındaki group tablosunu listeler.

![group Screenshot](https://cdn.pbrd.co/images/Hn9jNR8.png)

------------

Aşağıdaki bağlantıda;


- http://portal.kouosl/group/group/create



Kouosl veritabanındaki group tablosuna yeni kayıt ekler.

![group Screenshot](https://cdn.pbrd.co/images/Hn9kqWEx.png)

------------

Aşağıdaki bağlantıda;



- http://portal.kouosl/group/group/view?id=1



Kouosl veritabanındaki group tablosununda grup_id'si yazan kaydın detaylarını listeler.

![group Screenshot](https://cdn.pbrd.co/images/Hn9kgEp.png)

------------

Aşağıdaki bağlantıda;



- http://portal.kouosl/group/group/update?id=1



Kouosl veritabanındaki group tablosununda grup_id'si yazan kaydın güncelleme ve silme işlemlerini yapar.

![group Screenshot](https://cdn.pbrd.co/images/Hn9kzPK.png)


## Group Modülü Projesini Oluşturmak İçin Yaptıklarım
------------

- Modül oluşturuldu.
- Model oluşturuldu.
- Migration oluşturma.
- Controller oluşturuldu.
- CRUD üretildi.
- View dosyalarını oluşturuldu.

