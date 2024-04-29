# Lista de tarefas
 
Lista de tarefas, feita com auxilio do video:
* [Monolito](https://www.youtube.com/watch?v=dJ49I-QYYUk&ab_channel=MonolitoPHP)
Projeto PHP para gerenciar lista de tarefas. Permite adicionar tarefas a uma lista e limpar todas as tarefas armazenadas caso necessário.
 
## Índice
 
1. [Funcionalidades](#funcionalidades)
2. [Como usar](#como-usar)
3. [Explicação de código.](#explicação-de-código)
4. [Tela](#tela)
5. [Como funciona](#como-funciona)
6. [Estrutura de arquivos](#estrutura-de-arquivos)
7. [Tecnologias utilizadas](#tecnologias-utilizadas)
8. [Créditos](#créditos)
9. [Autor](#autor)
 
## Funcionalidades  
- **Adicionar Tarefas:** Permite ao usuário inserir uma tarefa, que é então adicionada até a lista;
- **Visualizar Tarefas:** As tarefas adicionadas são exibidas em uma lista;
- **Limpar Tarefas:** Um botão permite ao usuário limpar todas as tarefas antes adicionadas.

## Como usar 

1. Clone o repositório para uma hospedagem que suporte PHP.
2. Acesse o arquivo via navegador no servidor Web em LocalHost para execução do PHP.
3. Para adicionar tarefas, digite o nome da tarefa no campo de entrada e clique em "Cadastrar".
4. Para limpar a lista de tarefas, clique no botão "Limpar Tarefas".
  
## Explicação de código.  
### PHP

1. O código PHP gerencia uma lista de tarefas armazenada na sessão do usuário. Ele inicia a sessão, inicializa a lista de tarefas se ainda não existir, permite adicionar tarefas enviadas via parâmetro GET `task_name`, e limpa toda a lista de tarefas se o parâmetro GET `clear` for especificado.  
![Código 1](https://github.com/laylabtrice/ultima-ativ/blob/main/img/img2.png)
  
2. Começo do "body" do código, cria uma tabela de "Lista de tarefas" em formato de formulário, para que o usuário adicione as informações que desejar ao utiizar do site.  
![Código 2](https://github.com/laylabtrice/ultima-ativ/blob/main/img/img3.png)
  
3. Nessa última tela, o código exibe as tarefas armazenadas na sessão do usuário em uma lista e oferece um botão para limpar todas as tarefas caso necessário.
![Código 3](https://github.com/laylabtrice/ultima-ativ/blob/main/img/img4.png)
  
## Tela

![Tela](https://github.com/laylabtrice/ultima-ativ/blob/main/img/img1.png)

## Como usar  
 
1. Baixe os arquivos em seu computador e os leve a um lugar de hospedagem para PHP;
2. Acesse o arquivo via navegador no servidor web configurado para visualizar/utilizar PHP.
3. Para adicionar tarefas: digite o nome da tarefa no campo de escrita e clique em "Cadastrar".
4. Para limpar a lista de tarefas, clique no botão "Limpar Tarefas".
  
## Estrutura de arquivos  
 
- `index.php`: Página principal do sistema que contém o formulário para inserir os dados do vendedor e exibir o resultado do cálculo do salário.
- `style.css`: Arquivo CSS para estilizar a página (frontend).
- `README.md`:  Informações sobre o sistema, como usa-lo e o que ele pode realizar.
  

 
## Tecnologias utilizadas  
 
- **PHP**: Linguagem de programação usada criação da funcionalidade da tabela;
- **HTML**: Linguagem de marcação utilizada para criar a estrutura do formulário e da página;
- **CSS**: Estilizar a página e proporcionar uma melhor experiência de usuário;
- **isset()**: Verifica se uma variável está definida e não é NULL. Útil para checar se variáveis existem antes de utilizá-las;
- **$SESSION**: É um array usado para armazenar informações que podem ser acessadas em várias páginas do mesmo site durante a visita de um usuário;
- **foreach**: Estrutura de repetição que percorre itens em um array;
- **session_start()**: Inicia uma nova sessão ou resume uma sessão existente. É necessário para usar a variável $_SESSION;
- **array()**: Cria um array. É uma função usada para inicializar e declarar arrays no PHP;
- **$_GET**: É um array superglobal que é usado para coletar dados enviados na URL (query string). Geralmente usado para capturar dados enviados através de formulários com método GET;
- **array_push()**: Adiciona um ou mais elementos no final de um array;
- **var_dump()**: Exibe informações estruturadas incluindo o tipo e valor de uma ou mais variáveis. É muito útil para depuração;
- **unset()**: Remove uma variável ou um item de um array. Se usado em uma variável de sessão, por exemplo, pode deslogar um usuário removendo seus dados de sessão.

## Créditos

- Ao video do canal [Monolito](https://www.youtube.com/watch?v=dJ49I-QYYUk&ab_channel=MonolitoPHP), o projeto com totalmente feito com auxilio do vídeo.

## Autor  

Este projeto foi desenvolvido por- [@Layla Beatrice](https://www.github.com/laylabtrice)
* [Linkedin](https://www.linkedin.com/in/layla-beatrice-a89a352ba/)
