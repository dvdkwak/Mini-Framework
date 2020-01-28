# Mini-Framework by David 
Hey there! awesome you have some interest in my framework little project!
This framework was originally built in order to learn something about the mvc method which later grew into a package I use to create small php webapps.

**The index.php & creating routes**

Within the index.php you define which routes should be claimed by the application.
Routes are defined as follows:

`route->add('path', 'view', 'controller');`

The path is a string telling the system on which uri the content should be loaded, the view is the main html (or php) file to be loaded as "view", and the controller is the main file executing all the commands given in it.

**The package has 3 main folders you want to put your code (php) in:**
1. **views:** In this folder you put the layouts of your application.
2. **models:** In this folder you put the models (or classes) of your application.
3. **controllers:** In this folder you put the controllers (processing files) of your application.

