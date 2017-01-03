# Lenny Counter - Web Server #

----------

Lenny Counter allows you to track the amount of times Garry's Mod players in a server use the Lenny Face emote in a day. It can also sync with a web server, allowing the count to easily be embedded in a website.  

**This is the optional web server component of the Lenny Counter addon. For the required Garry's Mod addon, please visit [bellum128/lennycounter-addon](https://github.com/bellum128/lennycounter-addon).**

## Installation ##
- To install the Lenny Counter web service to your server, place the contents of the lennycounter-web folder into your server's root folder.

## Configuration ##
The Lenny Counter web server is easy to configure and use.
</br>

- To allow the service to work properly, you will most likely need to take possession of the count.txt file with your Apache user. For example: `chown www-data /var/www/html/count.txt`
- To set the URL of your web server, use the `lennycounter_post_url` convar to point to your server's `processlenny.php` file. <br/>[Example: `lennycounter_post_url "http://example.com/processlenny.php"`]

## Questions Or Comments?
You can contact bellum128 Productions at [http://bellum128.weebly.com/contact.html](http://bellum128.weebly.com/contact.html)