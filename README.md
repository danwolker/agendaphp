Agenda Telefônica
Este projeto é uma Agenda Telefônica desenvolvida em PHP, utilizando MySQL como banco de dados e com uma interface construída em HTML e CSS puro. O objetivo principal é oferecer uma aplicação web simples e funcional para gerenciar contatos de forma eficiente, proporcionando uma interface intuitiva e responsiva para facilitar a interação do usuário.

Funcionalidades Principais
Cadastro de Contatos:

Permite que o usuário adicione novos contatos, inserindo informações como nome, telefone, e-mail e endereço.
Validações básicas são realizadas para garantir que os campos obrigatórios sejam preenchidos corretamente.
Listagem de Contatos:

Exibe todos os contatos cadastrados em uma tabela organizada, onde cada linha representa um contato.
Implementa paginação para melhorar a visualização dos registros quando há um número grande de contatos.
Busca de Contatos:

Possibilita a edição dos dados de um contato já cadastrado, permitindo que o usuário faça atualizações nas informações.
Exclusão de Contatos:

Permite que o usuário exclua contatos que não são mais necessários.
Uma mensagem de confirmação é exibida para evitar a exclusão acidental de registros.
Tecnologias Utilizadas
Backend: PHP

Responsável pelo processamento das requisições, interação com o banco de dados e gestão das operações de CRUD (Create, Read, Update, Delete).
PHP foi escolhido por sua robustez e facilidade de integração com o MySQL.
Banco de Dados: MySQL

Armazena todos os registros de contatos de forma estruturada.
Utiliza uma tabela para manter os dados de cada contato, com campos como id, nome, telefone, email e endereco.
Consultas SQL são utilizadas para buscar, inserir, atualizar e deletar os registros.
Frontend: HTML e CSS Puro

HTML: Estrutura a página, proporcionando uma organização clara dos elementos e uma interface limpa para o usuário.
CSS: Estiliza os elementos da página, garantindo um design moderno e responsivo, utilizando uma paleta de cores contemporânea para melhorar a usabilidade.
Estrutura do Projeto
views/: Contém os arquivos HTML e as partes que estruturam a interface do usuário.
public/: Inclui o arquivo styles.css para a estilização da aplicação, garantindo uma interface agradável.
src/: Contém os scripts PHP que processam as requisições do usuário e interagem com o banco de dados.
database/: Inclui o script SQL para a criação da tabela de contatos e a configuração inicial do banco de dados.
Destaques do Projeto
Interface Simples e Intuitiva: A utilização de HTML e CSS puro proporciona um design minimalista que facilita a navegação e o uso, sem necessidade de bibliotecas externas.
Foco em Funcionalidade: A aplicação é voltada para a eficiência nas operações de cadastro, edição e busca de contatos, garantindo que o usuário encontre rapidamente as informações que precisa.
Segurança e Validação: As operações são protegidas por medidas básicas de segurança para evitar ataques de injeção SQL e outras vulnerabilidades comuns.
Possíveis Melhorias Futuras
Adição de Autenticação de Usuários: Implementar um sistema de login para que apenas usuários autorizados possam acessar a agenda.
Utilização de JavaScript: Adicionar interatividade à interface, como confirmações de exclusão via modais e melhorias na busca dinâmica.
API REST: Expansão para que outros sistemas possam se integrar à agenda, oferecendo uma interface programática para adicionar e consultar contatos.
Este projeto é ideal para quem está começando a trabalhar com PHP e MySQL, sendo um ótimo exemplo de como construir uma aplicação web completa com operações de CRUD, utilizando uma interface simples e fácil de usar.
