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
	"name":"Spiderman",
	"email": "spiderman@gmail.com",
	"password": "spider@123",
	"password_confirmation": "spider@123",
	"middlename": "Peter",
	"surname": "Parker",
	"address_line1": "15th Street, Queens",
	"address_line2": "Near New york",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "99999999",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}


# For Login

Endpoint: /api/login
Method: POST
Payload: 
{
    "email": "spider@gmail.com", 
    "password": "spider@123"
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
	"name":"Spiderman",
	"email": "spiderman@gmail.com",
	"middlename": "Peter",
	"surname": "Parker",
	"address_line1": "15th Street, Queens",
	"address_line2": "Near New york",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "99999999",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}

Endpoint: /api/users/:id
Method: PUT
Payload: 
{
	"name":"Spiderman",
	"email": "spiderman@gmail.com",
	"middlename": "Peter",
	"surname": "Parker",
	"address_line1": "15th Street, Queens",
	"address_line2": "Near New york",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "99999999",
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
    "current_password": "spider@123",
    "password": "spider@123",
    "password_confirmation": "bat@123"
}


# For Current logged in user with token

Endpoint: /api/me
Method: GET


# For change profile

Endpoint: /api/change-profile
Method: PUT
Payload: 
{
	"name":"Spiderman",
	"email": "spiderman@gmail.com",
	"password": "spider@123",
	"password_confirmation": "spider@123",
	"middlename": "Peter",
	"surname": "Parker",
	"address_line1": "15th Street, Queens",
	"address_line2": "Near New york",
	"country": "India",
	"state": "Gujarat",
	"city": "Ahmedabad",
	"zipcode": "382424",
	"phone": "99999999",
	"birth_date": "0101/2001",
	"gender": "Male",
	"hobby": "Cricket, Badminton"
}


# For Logout

Endpoint: /api/logout
Method: POST
```