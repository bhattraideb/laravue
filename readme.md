
## About User Profile API

User Profile API A basic API developmed in Laravel 5.6 to demonstrate RESTful concept. I have implemented four functionality in this API: Register, Update, List(Single user and all users), and Delete users. This API will act as Backend and can be used for any front end frameworks like AngularJs, VueJs.
 
 ## How to install 
 - Download or clone the project in your working directory.
 - Once downloaded got to project got to you terminal and your project root directory and run 'composer dump-autoload' to make sure that all dependency is up-to date.
 - I highly recommend to create virtual host, In my case I created "http://infamousapi.local". 
    For creating virtual host on nginx: 
    - add vistual host name in /etc/hosts file like: 127.0.0.1  http://infamousapi.local.
    - go to /etc/nginx/sites-availabes/ and create serve block with name 'infamousapi.local' add the path of your project directory. In my case this file looks like:
           
        
        server {
                listen 80;
                listen [::]:80;        
                server_name infamousapi.local;        
                root /var/www/development/infamousapi/public;
                index index.php index.html;
        
                location / {
                        try_files $uri $uri/ /index.php$is_args$args;
                }
        
                location ~ \.php$ {
                        include snippets/fastcgi-php.conf;
                        fastcgi_pass unix:/run/php/php7.2-fpm.sock;
                }
        }
   - Now create symlink for this by typing 'sudo ln -s /etc/nginx/sites-available/infamousapi.local //etc/nginx/sites-enabled/' 
   - To make sure everything is fine type 'sudo nginx -t'. If the configuration is ok, restart/reload your nginx server by 'systemctl reload nginx'.
   - Now go to browser and type http://infamousapi.local. It will show laravel default page.
   - If you want to test the API, You can do it with the postman.
   - I have tested following links and working properly.
        - http://infamousapi.local/api/v1/user/list
        - http://infamousapi.local/api/v1/user/register
        
            
            Sample Data to pass:
             {
                "first_name": "Test",
                "last_name": "name",
                "phone_number": "9837465864",
                "email": "hi@gmail.com",
                "gender": "male",
                "date_of_birth": "1950-09-07",
                "biography": "Testing from API call.",
                "password": "Admin123",
                "profile_picture": "image.jpg"
            }
   
   - http://infamousapi.local/api/v1/user/update/11
   
            Sample Data to pass:
             {
                "first_name": "My First",
                "last_name": "name",
                "phone_number": "9837465864",
                "email": "name@gmail.com",
                "gender": "male",
                "date_of_birth": "1950-09-07",
                "biography": "Testing from API call.",
                "password": "Admin123",
                "profile_picture": "imageupdate.jpg"
            }     
        - http://infamousapi.local/api/v1/user/delete/11
        
   ## How to implement with front end framework
  To integrate this API with front end framework just call the links:
  - http://infamousapi.local/api/v1/user/list
  - http://infamousapi.local/api/v1/user/register 
  - http://infamousapi.local/api/v1/user/update/11
  - http://infamousapi.local/api/v1/user/delete/11
  
  For register and update you have to pass the data in JSON format as given above.