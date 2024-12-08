<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL); 
*/

function load_tempulate($name) {
    //printf("include $name.php");
    include $_SERVER['DOCUMENT_ROOT'] . "/web/app/album/__templates/$name.php";
    // include __DIR__."/../__templates/$name.php"; // not consistent
    // $_SERVER is used here for global path handling
}

function validate_credentials($username, $password) {
    printf("validation ");
    if ($username == "vignesh@ex.io" && $password == "vip123") {
        return true;
    } else {
        return false;
    }
}

?>
  

<?php



//printf(__FILE__); to find the current file path
         // printf(__LINE__);  to find the working line 
         // using __DIR will work with both cli and apache
         // the dir is the one of the way to find the path but we can call a  file from the htdoc
        // super global variable are offering by php 


        /* 
The $name parameter in your load_template() function allows you to dynamically specify which template file to include. This approach makes your code reusable and flexible. Here's why you use $name:

Why Use $name:
Dynamic File Inclusion:
Instead of hardcoding a specific file path every time, you can pass different values for $name, like '__header', '__footer', or '__content', to include different files without duplicating the code.

Example:

php
Copy code
load_template('__header');
load_template('__footer');
Scalability:
If you add new templates in the future (e.g., __sidebar.php), you can simply call:

php
Copy code
load_template('__sidebar');
No need to modify the function itself.

Cleaner Code:
It keeps your load.php file generic and focused on one task: including templates. This reduces redundancy.

Consistency:
By using a single function with $name, you ensure all your template files are loaded from the same base directory (../__templates/).

Without $name:
If you hardcode template paths, you would need a separate function or include statement for each file, which makes your code repetitive and harder to maintain.

For example:

php
Copy code
include __DIR__."/../__templates/__header.php";
include __DIR__."/../__templates/__footer.php";
This is less flexible and more error-prone if you change directory structures or add new templates.

 */



?>