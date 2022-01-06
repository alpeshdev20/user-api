# REST API

## Routes

```
# General

HOST: https://192.168.1.7:80

Headers:
Accept: 'application/json',
Content-Type: 'application/json'
Authorization: 'Bearer Token' (REQUIRED AFTER LOGIN)

# Public

# For Registration

Endpoint: /api/register
Method: POST
Payload: 
{
	"name":"alpesh",
	"email": "alpesh.dev20@gmail.com",
	"password": "alpesh@123",
	"password_confirmation": "alpesh@123",
	"middlename": "Ramanlal",
	"surname": "vaghela",
	"address_line1": "C-308 Panchshlok residency",
	"address_line2": "Near kB royal",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "895656323",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}


# For Login

Endpoint: /api/login
Method: POST
Payload: 
{
    "email": "alpesh@gmail.com", 
    "password": "alpesh@123"
}

# Protected

# For Users

Endpoint: /api/users
Method: GET

Endpoint: /api/users/:id
Method: GET

Endpoint: /api/users
Method: POST
Payload: 
{
	"name":"alpesh",
	"email": "alpesh.dev20@gmail.com",
	"password": "password123",
	"password_confirmation": "password123",
	"middlename": "Ramanlal",
	"surname": "vaghela",
	"address_line1": "C-308 Panchshlok residency",
	"address_line2": "Near kB royal",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "895656323",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}

Endpoint: /api/users/:id
Method: PUT
Payload: 
{
	"name":"alpesh",
	"email": "alpesh.dev20@gmail.com",
	"middlename": "Ramanlal",
	"surname": "vaghela",
	"address_line1": "C-308 Panchshlok residency",
	"address_line2": "Near kB royal",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "895656323",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}

Endpoint: /api/users/:id
Method: DELETE


# For Change Password

Endpoint: /api/change-password
Method: PUT
Payload: 
{
    "current_password": "alpesh@123",
    "password": "demo@123",
    "password_confirmation": "demo@123"
}


# For Current logged in user with token

Endpoint: /api/me
Method: GET


# For change profile

Endpoint: /api/change-profile
Method: PUT
Payload: 
{
	"name":"alpesh",
	"email": "alpesh.dev20@gmail.com",
	"middlename": "Ramanlal",
	"surname": "vaghela",
	"address_line1": "C-308 Panchshlok residency",
	"address_line2": "Near kB royal",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "895656323",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}


# For Logout

Endpoint: /api/logout
Method: POST
```