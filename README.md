# softtech-if-class-50

> #### Must be know for theme customization
>
> - html
> - css
> - javaScript
> - jQuery
> - PHP
> - MYSQL
> - AJAX
> - Wordpress Theme customization
> - Wordpress Plugin customization

---duplicate wp-config-sample.php and add database manually

Create a new theme :

- in wp-content > themes > newFolderName > index.php and style.css
- image size horizontal (width) 600 and vertical (height) 450 and image name must be screenshot
- uploading theme with zip file must have valid theme heade for style.css stylesheet

---

**Codex** is an extensive online documentation resource. For example: codex.wordpress.org

main page is codex.wordpress.org

    - function reference
    - class reference

---

Hook > Action hook and Filter hook

- action hook work after any things. for example " add_action('hook_name', 'callback_function') ".
- filter hook modify or replace running action. for example " modify > add_filter('hook_name', 'callback_function') ot replace > add_action('hook_name', 'function(){ .= }') "
