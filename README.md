# Pinguin du Web

Project created as part of the ["Nuit de l'info"](https://www.nuitdelinfo.com) 2019, were you must create a website in a short period of time following a theme

2019 theme was : Make a tool that can be use by students to find all of the information and help they can need

# Usefull command : 

## Few tools you need before installing anything

### If you need **php** dependencies

#### For *Linux*

```bash
sudo apt install php-curl php-gd php-intl php-json php-mbstring php-xml php-zip
```
#### For *MacOS*

```bash
brew install php-curl php-gd php-intl php-json php-mbstring php-xml php-zip
```

### If you need **composer**

#### For *Linux*

```bash
sudo apt-get install composer
```

#### For *MacOs*

```bash
brew install composer
```

### If you need **yarn**

#### For *Linux*

```bash
sudo apt-get install yarn
```

#### For *MacOs*

```bash
brew install yarn
```

## to install all the dependencies

```bash
make install
```

> You maybe need some previous installation, like **composer** or **yarn**

## to compile your asset 

```bash
make encore
```

and if you want Webpack encore to listen to your change

```bash
make encore-watch
```

## to start a server

```bash
make server
```

## to clear symfony cache

```bash
make cc
```
