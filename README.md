#Wordpress Site for St. Lydia's - A Dinner Church and Co-Working Space in Brooklyn

A Wordpress site a I recently developed for a client. It is mostly responsive at this point, minus a few pages which I am finishing. Also, I will likely implement a dropdown that will replace the traditional top navigation on mobile screens, as well as applying design fixes per the client.

## Folders
`/` 
 The root contains Wordpress template files (HTML and PHP). Most pages have their own templates, and their files are named after the page. 

`sass/` 
Contains SASS partials for page styling, mixins, and variables. All are imported in `style.scss`, which gets compiled to `/style.css` in the project root. Most pages have their own `.scss` file, and shared styles are locationed in `global.scss`. Media queries are located in the files of the pages they apply to (usually at the bottom). 

`js/` 
Contains custom scripts (`scripts.js`) and JS libraries (in `js/lib`)

`img/` 
Image assets