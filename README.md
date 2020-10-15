# CiFireCMS - Makes You Feel Home
CiFireCMS is a open source PHP web framework inspired by PopojiCMS and its use is almost like PopojiCMS.
Created using the CodeIgniter3 framework with an interesting concept and easy to use by anyone.

## Minimum System Requirements
```
+--------------+----------------+
|  System      |  Version       |
+--------------+----------------+
|  Web server  |  Apache 2.4.x  |
|  PHP         |  7.3.x, 5.6.x  |
|  MySQL       |  5.7.x         |
|  MariaDB     |  10.3.x        |
+--------------+----------------+
```

## PHP Ekstension
```
+--------------+----------+
|  Ekstension  |  Config  |
+--------------+----------+
|  pdo_mysql   |  ON      |
|  pdo_sqlite  |  ON      |
|  pdo_sqlite  |  ON      |
|  json        |  ON      |
|  fileinfo    |  ON      |
|  intl        |  ON      |
+--------------+----------+
```

## Installation
- Download the CiFireCMS source code from github or from the official website.
- Extract the cifirecms.zip file in your web directory. Make sure the .htaccess file is copied correctly.
- Create a new database for installation.
- Launch your browser and enter the url of your website.
- Follow the installation steps.
- After completing the installation process, please delete other files from root directory, except index.php and .htaccess files.
- CiFireCMS is ready to use.


## Permission
Change permission for folder below to ``775``.
```
folder-web-anda
├── content
│   ├── temp    --> 775
│   ├── thumbs  --> 775
└── └── uploads --> 775
```

## .htaccess
Standard **.htaccess** configuration.
```
RewriteEngine On
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
```

To set your website accessible by **http** or **https** please change the configuration file **.Htaccess** add the following code below the ``RewriteEngine On`` code line.

#### Redirect HTTP to HTTPS

```
# non-www to www.
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ https://www.%1%{REQUEST_URI} [L,NE,R=301]

# www to non-www.
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} ^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ https://%1%{REQUEST_URI} [L,NE,R=301]
```

#### Redirect HTTPS to HTTP
```
# non-www to www.
RewriteCond %{HTTPS} on [OR]
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ http://www.%1%{REQUEST_URI} [L,NE,R=301]

# www to non-www.
RewriteCond %{HTTPS} on [OR]
RewriteCond %{HTTP_HOST} ^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ http://%1%{REQUEST_URI} [L,NE,R=301]
```

### Environment
If the web is ready online, please change the code in ``index.php`` Search for the following line of code:
```
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');
```
Change to :
```
define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'production');
```

## Backend

* Access url ``http://your-web-domain/l-admin``
* Enter the login data the same as the installation process.


## Thanks To
- Tuhan Yang Maha Esa.
- Semua rekan-rekan yang berkontribusi untuk CiFireCMS.
- Codeigniter3 sebagai core engine CiFireCMS.
- Cizthemes sebagai pembuat template frontend versi 1.0.0.
- SemiColonWeb sebagai pembuat template frontend versi 1.1.0.
- Kopyov sebagai pembuat template backend versi 1.1.0.
- Colorlib sebagai pembuat template backend versi 1.2.0.
- Creative-tim sebagai pembuat template dasbor member versi 1.0.0.
- Easy Menu Manager sebagai pembuat plugin component Menu Manager.
- responsivefilemanager sebagai pembuat plugin File Manager.
- Jquery, Bootstrap dan semua plugins yang dipakai pada CiFireCMS.
- DwiraSurvivor PopojiCMS untuk inspirasi, saran serta rekomendasi sehingga engine CiFireCMS bisa rilis.

## Official Links
Website  : https://www.alweak.com
Facebook : https://web.facebook.com/cifirecms
GitHub   : https://github.com/CiFireCMS

## License
CiFireCMS is licensed under the MIT License.