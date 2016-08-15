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