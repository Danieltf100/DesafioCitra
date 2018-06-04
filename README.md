# Desafio Citra

*Código fonte de desafio do processo seletivo do [Grupo Citra](http://grupocitra.com.br/)*

## Desafio backend

1. Criar uma tabela de dados chamada Conta, com os seguintes valores:

| ID     | Nome       | Saldo    | Data abertura da conta |
|--------|------------|----------|------------------------|
| 198882 | Jeff Bezos | 2.500,00 | 05/07/1994             |
| 188872 | Jack Ma    | 5.000,25 | 04/04/1999             |



2. Criar um serviço para consumir os dados da tabela “Conta” e disponibilizar através de uma API REST.


 ***

## Guia de uso

Para o uso e teste da aplicação foi usado [Xampp](https://www.apachefriends.org/pt_br/index.html) v3.2.2 para a simulação de um servidor.

O projeto foi inserído dentro da pasta `htdocs` do `xampp` da seguinte maneira `git > desafiocitra` como é possivel vizualizar em [`app > js > index.js`](https://github.com/Danieltf100/DesafioCitra/blob/master/app/js/index.js#L5):
```javascript
4 | // ...
5 | const API = "http://localhost/git/desafiocitra/server/api/v1/conta.php";
6 | // ...
```
 - Em `server` está a API Rest feita em PHP e o banco de dados em SQLite (para facilitar a vizualização e importação do projeto caso necessario).
 - Em `app` está a aplicação feita com JQuery e HTML5 + CSS3 que faz uso da API recuperando dados do banco de dados do servidor e exibindo-os para o usuário.
