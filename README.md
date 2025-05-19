# PbTpl Examples

A tutorial by Peter Bieling - https://p-bieling.de/

## Description

This is a tutorial and also a demo application for using the PHP template class PbTpl. The class 
is used in conjunction with HTML templates, XML templates or other text templates and 
does not require logic in the template, in contrast to many other template systems.

PbTpl is part of a framework called *PbClasses* that I use for my PHP projects for many years. 
The entire framework is not yet freely available, but I have now published the two most important classes in a minimal 
version [pbieling/pbclasses-min](https://github.com/pbieling/pbclasses-min).
(If you don't need the database class in your projects you can also use PbTpl separately.)

These are some examples that show how to use the PbTpl template class 
in order to use it as effectively as possible. Examples for using the database class will follow later and in a separate tutorial.
But it is already used in the 5th example.

To decide whether you want to install the package, you can view the example pages on my website.  
[PbTpl - Examples Preview](https://www.media-palette.de/demo/tpldemo/examples/index.php)


## Installation with Docker

Create af folder on your system and put the \docker\docker-compose.yml inside. Go to the folder and run the shell command  

- docker compose up -d

You will get a complete LAMP system and can run the examples on __http://127.0.0.1:8888__.
The examples files will be accessible by the new crated subdirectory __html__ in the installation folder on your system.

The database runs also in a docker container using a docker volume. It can be accessed by phpMyAdmin on __http://127.0.0.1:8888__.

Yout can change the ports in the docker-compose.yml but it is not recommended to change the MySQL credentials because 
they are tailored to the config file in the example/config folder.

## Installation without Docker

In order to be able to view all examples and explanations without errors, the Markdown package 
__michelf/php-markdown__ used as well as the JavaScript library __prism.js__ for the improved 
display of the template code. (see next section)

You need a local web server environment e.g. __Apache server__.
To see also the database example, 
-  Example 5 - Showing data from database table

you need MySQL or MariaDB with a prepared empty database.

For the installation of __pbclasses-min__ and __php-markdown__ you need __composer__:
https://getcomposer.org/download/  
To install __prism__, you can find more information here:  
https://docs.npmjs.com/downloading-and-installing-node-js-and-npm

### Single Installation steps
- Clone or download this package into a localhost environment.
- Open the command line and go to the directory where the composer.json is located.
- Run the command __composer update__
- Run the command __npm update__
- Update the database credentials in __examples/config/db.conf.php__. (The table is installed by the PHP script.)
- Start with example/index.php in the browser.
- Read the information on the example pages
- Study the source files
- Try PbTpl for yourself by modifying the examples or creating new ones









