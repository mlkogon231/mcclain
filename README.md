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


#################

Configure the app to use the Mysql Database Driver section of test:

I have a database called mcclain, with 1 table, customers, and 2 records.
1st record id = 1, firstname = Mark, lastname = Kogon, email = mlkogon231@gmail.com
2nd record id = 2, firstname = Mister, lastname = Php, email = mlkogon231@gmail.com

To use:

1. localhost/customer/1  -   gives you the first record in the database, Mark Kogon mlkogon231@gmail.com

2. localhost/customer/2  -   gives you the 2nd record in the database, Mister Php mlkogon231@gmail.com

3. localhost/customer_name  -   does a search on LastName = 'Kogon' and gives you Mark Kogon mlkogon231@gmail.com

4. localhost/customer  -    gives you the following:

App\Customer Object
(
    [connection:protected] => 
    [table:protected] => 
    [primaryKey:protected] => id
    [perPage:protected] => 15
    [incrementing] => 1
    [timestamps] => 1
    [attributes:protected] => Array
        (
            [id] => 1
            [FirstName] => Mark
            [LastName] => Kogon
            [Email] => mlkogon231@gmail.com
        )

    [original:protected] => Array
        (
            [id] => 1
            [FirstName] => Mark
            [LastName] => Kogon
            [Email] => mlkogon231@gmail.com
        )

    [relations:protected] => Array
        (
        )

    [hidden:protected] => Array
        (
        )

    [visible:protected] => Array
        (
        )

    [appends:protected] => Array
        (
        )

    [fillable:protected] => Array
        (
        )

    [guarded:protected] => Array
        (
            [0] => *
        )

    [dates:protected] => Array
        (
        )

    [dateFormat:protected] => 
    [casts:protected] => Array
        (
        )

    [touches:protected] => Array
        (
        )

    [observables:protected] => Array
        (
        )

    [with:protected] => Array
        (
        )

    [morphClass:protected] => 
    [exists] => 1
    [wasRecentlyCreated] => 
)


Database Sessions:

These tables have been created as part of configuring the application to use database sessions:

mysql> select * from migrations;
+------------------------------------------------+-------+
| migration                                      | batch |
+------------------------------------------------+-------+
| 2014_10_12_000000_create_users_table           |     1 |
| 2014_10_12_100000_create_password_resets_table |     1 |
| 2016_03_09_021756_create_sessions_table        |     1 |
+------------------------------------------------+-------+
3 rows in set (0.00 sec)


authentication runs under localhost:8000 

added the 2 usernames
