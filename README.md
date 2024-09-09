## Usage

create .env file (copy .env.example)

then run:

`docker compose build`

`docker compose up -d`

`docker compose exec laravelCrudApi php artisan migrate`


### Create a worker
To create a new worker, make a POST request to localhost:8000/api/workers

The body of the request:
```
{
    "name": "Александр",
    "email": "test@intensa.ru",
    "phone": "+71111111111"
}
```

## Get all workers
To get all workers, make a GET request to localhost:8000/api/workers

## Get a worker
To get a worker, make a GET request to localhost:8000/api/workers/{id}.

For example GET request to localhost:8000/api/workers/1

```
{
	"id": 3,
	"name": "Александр",
	"phone": "+71111111111",
	"email": "test@intensa.ru",
	"created_at": "2024-09-08T15:51:20.000000Z",
	"updated_at": "2024-09-08T15:51:20.000000Z"
}
```

## Update a worker
To update a worker, make a PATCH request to localhost:8000/api/workers/{id}

## Delete a worker
To delete a worker, make a DELETE request to localhost:8000/api/workers/{id}.

