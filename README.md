# Docker
Image docker file. LAMP

## Clone this repository

``` console
git clone git@github.com:rogov-k/docker.git
```

## Create dir docroot
``` console
mkdir docroot
```

## Setup mysql config in docker-compose.yml

```
...
MYSQL_ROOT_PASSWORD: <your_root_password>
MYSQL_DATABASE: <your_database>
MYSQL_USER: <your_username> 
MYSQL_PASSWORD: <your_password>
...
```

## Run docker

``` console
docker-compose up -d
```

## Load dump db

1. Move your <sql_dump_file.sql> to:
``` path
/mysql
```

2. Open db docker container
``` console
docker-compose exec db sh
```

3. Open sql folder
``` console
cd etc/mysql/conf.d
```

4. Login in mysql
``` console
mysql -u <your_username> -p<your_password>
```

5. Select your database
``` console
use <your_database>;
```

6. In the conquering of magic
``` console
source <sql_dump_file.sql>;
```

## Clone you scrips in this folder

```
/docroot
```

Go to http://localhost:8000





