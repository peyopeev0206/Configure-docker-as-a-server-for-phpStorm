# Configure docker as a server for phpStorm with xDebug and php7.2
---

In this tutorial you will see how to set docker as a server for phpStorm and for debugging to use xDebug

## What will you need to install:
  [phpStorm](https://www.jetbrains.com/phpstorm/)  
  [docker](https://www.docker.com/get-docker)
  
  
## Let's first configure phpStorm
  1.  We need to configure the server first 
  
      To create server go to Preferences -> Languages & Frameworks -> PHP -> Servers and add a new server
      <img src="https://image.ibb.co/jN2kh7/add_Server.png"/> 
      
      
  2.  In the second step we will configure the Debugger
  
      You need to set:
      * Name --> for example docker-server
      * Host --> localhost
      * Port --> 80
      * Debugger --> we will use xDebug
      * Then we need to check to Use path mapping and we need to se the rout directory to /var/www/html
      In my example the root is /Users/peyo/Documents/SoftUni/Software Technologie/PHP
      <img src="https://image.ibb.co/iDZ15S/server_Config.png" /> 
      
      
## Now we will configure the Docker
  For the docker we need a few configuration fails that we need to create in the root directory
  1. [Dockerfile](https://github.com/peyopeev0206/Configure-docker-as-a-server-for-phpStorm/blob/master/Dockerfile)
  2. [xdebug.ini](https://github.com/peyopeev0206/Configure-docker-as-a-server-for-phpStorm/blob/master/xdebug.ini)
    * On the last line where we have `xdebug.remote_host=???` remove the ??? and place you'r local IP. 
      If you don't know how to find it on linux you may find it with the command `ipconfig getifaddr en0` or `ipconfig getifaddr en1` 
  3. [start-container.sh](https://github.com/peyopeev0206/Configure-docker-as-a-server-for-phpStorm/blob/master/start-container.sh)
  4. [docker-compose.yml](https://github.com/peyopeev0206/Configure-docker-as-a-server-for-phpStorm/blob/master/docker-compose.yml)
  
  ## Let's test it 
  Run those two commands to build it and start the container 
  
    `docker-compose build`
    
    `docker-compose up -d`
    
  After that you may navigate to http://localhost/test-folder and you will see the result
  You may try the debugger too. Set a breakpoint in phpStrom and start debugging, we'll see that xDebug sends debugging information to phpStorm
    
  ## TODO
   1. Add mysql container
