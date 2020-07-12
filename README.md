<p align="center"><img src="https://www.tendegrees.net/wp-content/uploads/2017/06/TenD2-768x180.jpg" width="400"></p>
<p align="center">
<a href="https://www.tendegrees.net/">Tendegrees Site</a>
</p>


## Tendegrees Verification Task

Task About Send Mail or SMS Parked on The Way Which You Will Select It  in App's Configuration  

## Design Pattern 

I selected Strategy Design Pattern 

## How To Work 

METHOD_VERIFICATIOM:
----------------------
it's a method which responsable for decide the way which you want to verify (mail/phone number)

1-Edit .env File:
------------------
        1-send SMS:
        ------------
        in .env pass "sms" or "SMS" to METHOD_VERIFICATIOM


        2-send Email:
        ------------
        in .env pass "Email" , "email" or let it null to METHOD_VERIFICATIOM
    
2-Open Your Terminal

3-write "php artisan config:cache" for removing caching in configuration 

4-write "php artisan serve" for run server

5-open postman and open new tab

6-enter URL your URL +"/api/"

7-enter in body "phone_number" and "email" and fill the request 
