## Install With iTerm

Go to your **code** dir by typing one of the following in your console.
```
~/code
```
```
code
```
```
sites
```

---
Then get this repo by typing the following into console.
```
git clone https://github.com/ryanmcvay/bcdemo.git
```

---
Then you may want to rename your newly created project.
```
mv ./bcdemo ./<new-foldername-here>
```

---
Install breeze.
```
php artisan breeze:install
``

---
Then `cd ./<foldername>` into your application folder and run
```
composer install
```

```
npm install
```

---
Then build the env file by running the following
```
mv .env.example .env
```

---
Then generate a new encryption key by running the following command.
```
php artisan key:generate
```