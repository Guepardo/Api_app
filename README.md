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
  "status": true,
  "msg": {
    "token": "$2y$10$W5ZVxGyLoF9CWcqFhf.t5eEChxDZGNU8RXF7MEKiFIiwoX4m1lzx2"
  }
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

## Jobs
### POST \j\publish
Parâmetro:
```js
{
    "name" : "Programação de um aplicativo", 
    "description" : "Programação de um aplicativo web com interfaces ricas e usando node.js. A persistência da API deve ser feita com banco de dados não relacionais para facilitar o Big Data posteriormente.", 
    "time_left" : "30", 
    "sub_category_id" : "1", 
    "skills_id": [1, 5, 6]
}
```
Exemplo de saída:
```js
{status : true }
```

### POST \j\getJobById
Parâmetro:
```js
{ "id" : "1" }
```
Exemplo de saída:
```js
{
  "id": 1,
  "name": "Programação de um aplicativo",
  "description": "Programação de um aplicativo web com interfaces ricas e usando node.js. A persistência da API deve ser feita com banco de dados não relacionais para facilitar o Big Data posteriormente.",
  "time_left": "0000-00-00 00:00:00",
  "interest": 3,
  "sub_category_id": 1,
  "user_id": 3,
  "created_at": "2016-08-16 04:12:11",
  "updated_at": "2016-08-17 02:42:00",
  "skills": [
    {
      "id": 1,
      "name": "Node.js",
      "description": "N\\A",
      "category_id": 1,
      "pivot": {
        "job_id": 1,
        "skill_id": 1,
        "created_at": "2016-08-16 04:12:11",
        "updated_at": "2016-08-16 04:12:11"
      }
    },
    {
      "id": 5,
      "name": "Desenvolvimento de APIs",
      "description": "N\\A",
      "category_id": 1,
      "pivot": {
        "job_id": 1,
        "skill_id": 5,
        "created_at": "2016-08-16 04:12:11",
        "updated_at": "2016-08-16 04:12:11"
      }
    },
    {
      "id": 6,
      "name": "Desenvolvimento Web",
      "description": "N\\A",
      "category_id": 1,
      "pivot": {
        "job_id": 1,
        "skill_id": 6,
        "created_at": "2016-08-16 04:12:11",
        "updated_at": "2016-08-16 04:12:11"
      }
    }
  ],
  "user": {
    "id": 3,
    "email": "bsinet@hotmail.com",
    "name": "Allyson Maciel Guimarães",
    "phone": "991017323",
    "created_at": "2016-08-15 14:20:38",
    "updated_at": "2016-08-15 14:32:20",
    "last_login": null
  }
}
```
## Aplicações aos trabalhos
### POST \a\apply
Parâmetro:
```js
{
    "comment" : "Essa é a minha proposta para fazer esse serviço.", 
    "budget" : "14000", 
    "job_id" : "1"
}
```
Exemplo de saída:
```js
{status : true }
```

### POST \a\getJobApply
Parâmetro:
```js
{
    "job_id" : "1"
}
```
Exemplo de saída:
```js
[
  {
    "user_id": 3,
    "job_id": 1,
    "comment": "Essa é a minha proposta para fazer esse serviço.",
    "created_at": "2016-08-17 03:08:51",
    "updated_at": "2016-08-17 03:08:51",
    "budget": 14000,
    "user": {
      "id": 3,
      "email": "bsinet@hotmail.com",
      "name": "Allyson Maciel Guimarães",
      "phone": "991017323",
      "created_at": "2016-08-15 14:20:38",
      "updated_at": "2016-08-17 02:46:34",
      "last_login": null
    }
  },
  {
    "user_id": 4,
    "job_id": 1,
    "comment": "Oi, tudo bem? Eu quero fazer esse trabalho para você.",
    "created_at": "2016-08-17 03:12:05",
    "updated_at": "2016-08-17 03:12:05",
    "budget": 9000,
    "user": {
      "id": 4,
      "email": "marcos@hotmail.com",
      "name": "Marcos Silva",
      "phone": "991017323",
      "created_at": "2016-08-15 14:21:58",
      "updated_at": "2016-08-15 14:21:58",
      "last_login": null
    }
  }
]
```