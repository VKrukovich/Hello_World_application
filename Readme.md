Hello World application

To open:
php -f http://mastery.loc/index.php

branch developer

An application displays message from template.tpl file to the user by substituting %variables% with calculated or user-defined values;
When application is executed in web, it must accept username, number and monthnum parameters using GET or POST;
When application is executed in CLI mode, it must accept username, number and monthnum parameters as script arguments;
Execdate value is always date of script execution;
Enddate must be calculated as Execdate + monthnum;

