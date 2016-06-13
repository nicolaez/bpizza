Instructions to install and execute the project:

1. You nee to have an local Web Server (in my case this is WAMP)
2. In the home directory of your Local Web Server clone the repository from the Github. In my case path to project is C:\wamp\www\bpizza
3. On the local server create DB "bestpizza". SQL script for DB is in the project directory 'bestpizza.sql'
4. Configure the file C:\wamp\www\bpizza\application\config\database.php whith your configuration
5. Configure local Host:
    a) In the file C:\Windows\System32\drivers\etc\hosts add the line:
            127.0.0.1		bpizza.app
    b) In the file c:\wamp\bin\apache\apache2.4.9\conf\extra\httpd-vhosts.conf add configuration for virtual host:
            <VirtualHost *:80>
                DocumentRoot "c:/wamp/www/bpizza"
                ServerName bpizza.app
                ServerAlias bpizza.app
                <Directory "c:/wamp/www/bpizza">
                    Options Indexes FollowSymLinks
                    AllowOverride All
                </Directory>
            </VirtualHost>
    c) Restart local server
6. In the address bar of yor browser tape: bpizza.app




FOR THE LOGIN ON THE PAGE:

1) For user: You can create a new user or used one of users from the DB(ex: john@gmail.com) (password is 111 for all users)
2) For waiter(garcon): Login: waiter@bpizza.com and Password: 111


Enjoy! :-)
