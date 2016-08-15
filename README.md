# App Api Documentação

Documentação da api de uma pequena aplicação.

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