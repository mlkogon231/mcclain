# mcclain
barebones laravel app for McClain Concepts Inc

This first push is just the barebones application.

It does very little.

the root index.php file is in myproject/public
If you go there, ie http://localhost, you will see:

Hello World, this is a barebones application, you are in the http root directory

There is some routing setup.

If you go to http://localhost/hello/<name>, you will see: ie: localhost/hello/Mark:

Hello Mark, Welcome to my barebones application

If you go to localhost/action, right now, I have the POST route setup, you can uncomment the lines
for the PUT Route, and DELETE Route accordingly.

You will see a submit button at localhost/action, since the POST route is setup, you will see:

You have the POST Route enabled after clicking the submit button.
