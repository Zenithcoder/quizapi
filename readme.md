[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
#  Laravel 5.4 based quiz system API

This repository contains a simple demo API built with Laravel.


#### Installation
- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- That's it - people can register and take quizzes!

### API Documentation
The API only has the following endpoint which is the `/api/`. The endpoint works with the HTTP verbs: `POST`, `GET`

###### POST HTTP Request
-   `POST` /login
-   INPUT:
```x-form-url-encoded
email: awonusiolajide@yahoo.com
password: awonusi11
```

###### HTTP Response

-   HTTP Status: `201: created`
-   JSON data
```json
{
    "status": "success",
    "user": {
        "id": 1,
        "name": "awonusi",
        "email": "awonusiolajide@yahoo.com",
        "api_token": "2qi8yfZjFUHJVZ4VtDRXjEdDNexX6B5OY4peN9u5nN4fR5k8sL",
        "created_at": "2018-01-31 12:03:17",
        "updated_at": "2018-01-31 14:39:45",
        "image": "null"
    }
}
```


###### POST HTTP Request
-   `POST` /register
-   INPUT:
```x-form-url-encoded
name: awonusi1
email: awonusiolajide1@yahoo.com
password: awonusi11
```

###### HTTP Response

-   HTTP Status: `201: created`
-   JSON data
```json
{
    "status": "success",
    "user": {
        "name": "awonusi1",
        "email": "awonusiolajide1@yahoo.com",
        "api_token": "fCb6MJLBLX7UwLDCPh963jjEp6FItLFFohvCUaxL19EueXcDMW",
        "updated_at": "2018-01-31 14:41:50",
        "created_at": "2018-01-31 14:41:50",
        "id": 2
    }
}
```

###### GET HTTP Request
-   `GET` /logout

###### HTTP Response

-   HTTP Status: `201: created`
-   JSON data
```json
{
    "status": "success",
    "message": "You are now logged out"
}
```



###### POST HTTP Request
-   `POST` /profile
-   INPUT:
```x-form-url-encoded
email: awonusiolajide1@yahoo.com
image: image/adsadzfdsf.jpg
```

###### HTTP Response

-   HTTP Status: `201: created`
-   JSON data
```json
{
    "status": "success",
    "message": "Profile Pix Success"
}
```



###### GET HTTP Request
-   `GET` /allquestions

###### HTTP Response

-   HTTP Status: `201: created`
-   JSON data
```json
{
    "status": "success",
    "questions": [
        {
            "id": 1,
            "body": "Who is the President of Nigeria",
            "answer": "Buhari",
            "option1": "buhari",
            "option2": "yaradua",
            "option3": "obasanjo"
        },
        {
            "id": 2,
            "body": "Nigeria flag",
            "answer": "green white green",
            "option1": "green white green",
            "option2": "yellow white yellow",
            "option3": "red white red"
        }
    ]
}
```


###### POST HTTP Request
-   `POST` /result
-   INPUT:
```x-form-url-encoded
user_id: 1
result: 50
```

###### HTTP Response

-   HTTP Status: `201: created`
-   JSON data
```json
{
    "status": "success",
    "message": "Result stored"
}
```



## License

Basically, feel free to use and re-use any way you want.




### Author
**Awonusi Olajide** - Software Developer at Instantpickup