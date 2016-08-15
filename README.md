# App Api Documentação

Documentação da api de uma pequena aplicação.

## Usuarios
### POST \u\create
Parâmetro:
```js
{
    name: "Allyson Maciel", 
    email: "bsinet@hotmail.com", 
    password: "master", 
    password_confirmation: "master", 
    cpf: "70043253233", 
    phone: "991017323"
}
```
Exemplo de saída:
```js
{status : true }
```

## Autenticação
### POST \auth\getToken
Parâmetro:
```js
{
    email : "bsinet@hotmail.com", 
    password : "master"
}
```
Exemplo de saída:
```js
{
  "id": 3,
  "email": "bsinet@hotmail.com",
  "name": "Allyson Maciel Guimarães",
  "api_key": "$2y$10$4OqvPwARSwwNw9K6M5j57eCTQEDGV.z8xk5lcg24DnJmhYJLJ6VRO",
  "cpf": "70043253233",
  "phone": "991017323",
  "created_at": "2016-08-15 14:20:38",
  "updated_at": "2016-08-15 14:32:20",
  "last_login": null
}
```

## Categorias
### POST \c\getAllCategories
Parâmetro:
```js
Sem Parâmetro.
```
Exemplo de saída:
```js
[
  {
    "id": 1,
    "name": "TI",
    "description": "Tecnologias da Informação"
  },
  {
    "id": 2,
    "name": "Design",
    "description": "Artes e Design"
  }
]
```
### POST \c\getSubCategories
Parâmetro:
```js
{id : 1}
```
Exemplo de saída:
```js
{
  "id": 1,
  "name": "TI",
  "description": "Tecnologias da Informação",
  "sub_categories": [
    {
      "id": 1,
      "name": "Desenvolvimento de Sites",
      "description": "Desenvolvimento de sites",
      "category_id": 1
    },
    {
      "id": 2,
      "name": "Web Developer",
      "description": "Desenvolvedor Web",
      "category_id": 1
    },
    {
      "id": 3,
      "name": "Front-End",
      "description": "Desenvelvedor de Interfaces",
      "category_id": 1
    }
  ]
}
```

## Habilidades
### POST \c\getSkillsByCategory
Parâmetro:
```js
{id : 1}
```
Exemplo de saída:
```js
{
  "id": 1,
  "name": "TI",
  "description": "Tecnologia da Informação",
  "skills": [
    {
      "id": 1,
      "name": "Node.js",
      "description": "N\\A",
      "category_id": 1
    },
    {
      "id": 2,
      "name": "PHP",
      "description": "N\\A",
      "category_id": 1
    },
    {
      "id": 3,
      "name": "Mysql",
      "description": "N\\A",
      "category_id": 1
    },
    {
      "id": 4,
      "name": "Ruby",
      "description": "N\\A",
      "category_id": 1
    },
    {
      "id": 5,
      "name": "Desenvolvimento de APIs",
      "description": "N\\A",
      "category_id": 1
    },
    {
      "id": 6,
      "name": "Desenvolvimento Web",
      "description": "N\\A",
      "category_id": 1
    }
  ]
}
```

### POST \c\getSkillsByMatch
Parâmetro:
```js
{ match : "desen"}
```
Exemplo de saída:
```js
[
  {
    "id": 5,
    "name": "Desenvolvimento de APIs",
    "description": "N\\A",
    "category_id": 1
  },
  {
    "id": 6,
    "name": "Desenvolvimento Web",
    "description": "N\\A",
    "category_id": 1
  }
]
```