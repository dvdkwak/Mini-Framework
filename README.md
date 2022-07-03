# Mini-Framework by David
### ***V 2.0.0***
Hey there! awesome you have some interest in my framework little project!
This framework was originally built in order to learn something about the mvc method which later grew into a package I use to create small php webapps. And this even is version 2 already!

***[Mind: still beta!]***

**The routes.php file**

Within the routes.php you define which routes should be claimed by the application.
Routes are defined the following:

```php
$route->add('path', 'controller');
```

The path is a string telling the system on which uri the content should be loaded and the controller is the main class which should be handled as a certain route is called.

**The package has 2 main folders you want to put your code (php) in:**
1. **views:** In this folder you put the layouts of your application.
2. **controllers:** In this folder you put the controller classes of your application which handle what view to return and more.

## Planned and notes
- implementing a singleton pattern for the routes object.
- creation of 'bin' folder which will contain some functions to:
  - create controllers
  - create basic views
  - and more in the future!
