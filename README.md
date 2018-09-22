## Guide

## About 

This is the backend for my priorisation project. My second attempt at doing a front and backend application using
vue and laravel which keeps the two separate. This time I'm learning from my mistakes and keeping it simpler. 
Minimising the packages and just using laravel and Vue Cli for now. 

For more detail you'll probably find it in my Vue CLI project

#### Setup 
(Assuming you have laravel installed)

1) Clone
 i. ``` git clone https://github.com/tagrand/backend_prioritisation.git ```
 
 ii. ``` cd backend_prioritisation ```
 
2) Setup DB (instructions assume youhave mysql setup) 
  i. login to mysql 
  
  ii. ``` CREATE DATABASE backend_prioritisation; ```
  
  iii. edit details in your .env file

3) Run site
 i. ``` php artisan serve ``` <- works for everyone with laravel  or 
        
 i.``` valet link```  <- works if you have valet (on mac)

4) Visit!

  i. ```localhost:8000```<- if you're using artisan serve or 
   
  i.  ```backend_prioritisation.test``` <- if you're using valet (if its not working run ```valet restart```
