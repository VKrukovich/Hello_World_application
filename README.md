# Hello World application

An application displays message from template.tpl file to the user by substituting %variables% with calculated or user-defined values;
When application is executed in web, it accepts username, number and monthnum parameters;
When application is executed in CLI mode, it accepts username, number and monthnum parameters as script arguments;
Execdate value is date of script execution;
Enddate calculated as Execdate + monthnum;

## To start application

There are two methodes to start the application (in web browser or in CLI).

First (in web browser).
1)Clone repository (develop branch);
2)Place cloned files into /www/ shared folder
3)Run web server;
4)Run in web browser http://mastery.loc

Second (in CLI).
1)Clone repository (develop branch);
2)Place cloned files into /www/ shared folder
3)Run web server;
4)Run it in CLI using command "php index.php arg1 arg2 arg3". To run application properly you should be in /www/ folder.


## Main features of application

If you run application in browser fill in input fields of form USERNAME, NUMBER, MONTHNUM and submit the form.
The result will be shown.

If you run application in CLI, you should run script with command "php index.php arg1 arg2 arg3".

Where:
arg1 - USERNAME (only latin letters);
arg2 - NUMBER (numbers only);
arg3 - MONTHNUM (numbers only between 1 and 12).