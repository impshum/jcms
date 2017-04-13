### JCMS

Install XAMPP from https://www.apachefriends.org/

Check if it's working at http://localhost

Get your face into a terminal.

```
cd /opt/lampp/htdocs/
wget https://github.com/impshum/jcms/archive/master.zip
unzip master.zip
cd jcms-master
ls
```

You should see your files.

Open Atom.

Add project folder.

Add /opt/lampp/htdocs/jcms-master

All the user stuff is inside the /cms folder.

user_config.php is your main config. Just be careful with your syntax as it'll not work if you don't keep it nice and tidy.

Inside the folder /cms there is a bunch of .md files. These are your text blocks separated into folders.

Upload all images to /cms/images and call them from your .md files. See /front/main.md for examples.

You'll probably have to disable the .htaccess file by renaming it to whatever.

* Markdown syntax: https://github.com/adam-p/markdown-here/wiki/Markdown-Here-Cheatsheet
* You should be able to view your site at http://localhost/jcms

This should hopefully be enough to get you started.
