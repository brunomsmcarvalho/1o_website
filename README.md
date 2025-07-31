# 1o_website
1º website feito em aula
# Férias Low Cost

Este é um website experimental desenvolvido em aula, simulando uma agência de viagens com ofertas de férias a preços acessíveis.

## Estrutura do Projeto

- **index.html**: Página inicial com carrossel de imagens e cartões de destinos.
- **html/**: Páginas de destinos e formulário de registo.
  - `praia.html`, `neve.html`, `viagem.html`: Páginas temáticas com vídeos.
  - `regista.html`: Formulário para registo de utilizadores.
- **php/**: Scripts PHP para ligação à base de dados e gestão de utilizadores.
  - `ligaBD.php`: Liga à base de dados MySQL.
  - `regista.php`: Regista novos utilizadores.
  - `listaUsers.php`: Lista utilizadores registados.
- **css/**: Folhas de estilo.
  - `bootstrap.min.css`: Bootstrap.
  - `estilo.css`: Estilos personalizados.
- **js/**: Scripts JavaScript.
  - `bootstrap.min.js`: Bootstrap JS.
- **img/**: Imagens usadas no site.

## Como usar

1. Clone ou copie o projeto para o seu servidor local.
2. Certifique-se de que tem um servidor web com PHP e MySQL.
3. Crie a base de dados `ti931` e a tabela `utilizadores` com os campos necessários.
4. Ajuste as credenciais de acesso à base de dados em `php/ligaBD.php` se necessário.
5. Aceda ao `index.html` pelo navegador.

## Funcionalidades

- Visualização de destinos de férias (praia, neve, viagem).
- Registo de novos utilizadores.
- Listagem de utilizadores registados.
- Layout responsivo com Bootstrap.

## Autor

Desenvolvido por Bruno Carvalho  
TI931 - Julho 2025