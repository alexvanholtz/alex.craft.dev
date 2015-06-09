# Alex Van Holtz - Craft (free) portfolio site

This repo contains all of the templates, front-end resources, and a MySQL DB dump for the portfolio site of Alex Van Holtz.

You can find out more about Craft on [buildwithcraft.com](http://buildwithcraft.com/).


## Installation

You can check out Alex Van Holtz's portfolio site online at [http://www.alexvanholtz.com](http://http://www.alexvanholtz.com/).

If you want to install the site locally, follow these instructions:

1. Download/clone the repo on your computer. If using MAMP, clone into `/Applications/MAMP/htdocs/`.

		> git clone https://github.com/alexvanholtz/alex.craft.dev.git

2. Set the permissions on alex.craft.dev/craft/storage/ to 777

		> cd alex.craft.dev
		> chmod 777 craft/storage

3. Set the permissions on alex.craft.dev/craft/config/ to 744, 774, or 777 depending on the relationship between the user that Apache/PHP is running as and the user who owns the alex.craft.dev/craft/config folder. (See the [Craft installation docs](http://docs.buildwithcraft.com/installing/installing.html#preparing-to-install) for details.)

		> chmod 774 craft/config

4. Download the latest version of Craft from [buildwithcraft.com](http://buildwithcraft.com), and copy its craft/app/ folder into alex.craft.dev/craft/.

5. Create a new MySQL database called `alexcraft`, and import alex.craft.dev.sql into it.

6. Fill in the proper MySQL credentials in `alex.craft.dev/craft/config/db.php`.

7. Create a new virtual host with the hostname `alex.craft.dev` that points to the `alex.craft.dev/` folder. If using MAMP, add the following to the bottom of `/Applications/MAMP/conf/apache/httpd.conf` and restart apache.

		> NameVirtualHost *
		> <VirtualHost *>
 		>    DocumentRoot "/Applications/MAMP/htdocs"
 		>    ServerName localhost
		> </VirtualHost>
		> <VirtualHost *>
		>     DocumentRoot "/Applications/MAMP/htdocs/alex.craft.dev/"
		>     ServerName alex.craft.dev
		> </VirtualHost>

8. Edit your hosts file to resolve alex.craft.dev to `127.0.0.1`, if necessary.
		
		> 127.0.0.1  		alex.craft.dev

Now you should be able to point your web browser to http://alex.craft.dev:8888/admin. You should either see a Craft login screen, or a prompt telling you that some database updates need to be run. If it’s the latter, just click “Finish up”.

Now point your browser at http://alex.craft.dev:8888. You should see the homepage.


## Logging in

The Craft Control Panel is located at http://alex.craft.dev:8888/admin. You can log in with the following credentials:

* Username: `alex`
* Password: `password`