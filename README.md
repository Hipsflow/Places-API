# Installing the API

1. Start the application by running
 - **docker compose up --build**

2. Execute the composer update with:
 - **docker compose exec app composer update**

3. Execute the migrations inside the container with:
 - **docker compose exec app php artisan migrate**

4. Verify if the API is working at URL:
 - **http://localhost/**

Any doutbs, call me up at: (49)9984-6255

# Places API Documentation

This API allows you to manage places, including creating, updating, retrieving, listing, and deleting places.

Base URL for testing: `http://localhost/api`


## Create a Place

- **Endpoint**: `POST /create/place`
- **Description**: Create a new place
- **Request Body**:
  ```json
  {
      "name": "Place Name",
      "slug": "place-name",
      "city": "City Name",
      "state": "State Name"
  }

## List all Places or Filter by name/city

- **Endpoint**: `GET /list/places/?{name||city}`
- **Description**: List all places if no **places/'name or city'** is provided

## Update place

- **Endpoint**: `PUT /update/place/{id}`
- **Description**: Update a place when id is provided
- **Request Body**:
  ```json
  {
      "name": "Place Name",
      "slug": "place-name",
      "city": "City Name",
      "state": "State Name"
  }

## Delete place

- **Endpoint**: `DELETE /delete/place/{id}`
- **Description**: Delete a place when id is provided

## Detail place

- **Endpoint**: `GET /show/place/{id}`
- **Description**: Show a place when id is provided
