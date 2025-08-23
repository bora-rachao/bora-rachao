<div align="center" id="inicio">
  <picture>
    <source media="(prefers-color-scheme: dark)" srcset="app/resources/assets/images/logos/logo-bora-rachao-white.png">
    <source media="(prefers-color-scheme: light)" srcset="app/resources/assets/images/logos/logo-bora-rachao-black.png">
    <img alt="Logo BoraRachão White" src="app/resources/assets/images/logos/logo-bora-rachao-white.png" width="550">
  </picture>
  
  # Plataforma para organização de partidas esportivas
  ### Centro Paula Souza
  ### Faculdade de Tecnologia de Jahu 
  ### Curso de Tecnologia em Desenvolvimento de Software Multiplataforma
  ### Jaú, SP, BR
  ### Início: 1º Semestre / 2025
  # Documento da aplicação web
</div>

<details><summary><h1>Sumário</h1></summary>

  - [1. Resumo da aplicação web](#1-resumo-da-aplicação-web)
    - [1.1. Objetivos](#11-objetivos)
    - [1.2 Métodos da pesquisa](#12-métodos-da-pesquisa)
  - [2. Documento de requisitos](#2-documento-de-requisitos)
    - [2.1. Requisitos funcionais](#21-requisitos-funcionais)
    - [2.2. Requisitos não funcionais](#22-requisitos-não-funcionais)
  - [3. Regras de negócio](#3-regras-de-negócio)
    - [3.1. O que será elaborado?](#31-o-que-será-elaborado)
    - [3.2. Como será elaborado?](#32-como-será-elaborado)
    - [3.3. Para quem será elaborado?](#33-para-quem-será-elaborado)
    - [3.4. Quanto custará?](#34-quanto-custará)
  - [4. Estudo de viabilidade](#4-estudo-de-viabilidade)
  - [5. Design](#5-design)
  - [6. Protótipo](#6-protótipo)
  - [7. Aplicação](#7-aplicação)
  - [8. Considerações finais](#8-considerações-finais)
  - [Referências bibliográficas](#referências-bibliográficas)
</details>

# 1. Resumo da aplicação web
Atualmente, muitas pessoas enfrentam dificuldades para organizar partidas esportivas por meio das redes sociais. É comum a criação de grupos no WhatsApp ou Facebook para marcar jogos, como de vôlei, por exemplo, mas a falta de comunicação eficaz muitas vezes impede que essas partidas realmente aconteçam.

Outro obstáculo é a limitação de acesso a dispositivos como celulares ou notebooks. Pensando nisso, nosso site foi desenvolvido para ser acessível a partir de qualquer dispositivo com acesso à internet, facilitando a participação dos usuários.

Além disso, muitos usuários enfrentam o desafio de não conhecer pessoas interessadas no mesmo esporte. A nossa plataforma também soluciona esse problema, permitindo que qualquer pessoa encontre e se conecte com outros jogadores que desejam praticar o mesmo esporte, mesmo que nunca tenham se conhecido antes.

## 1.1. Objetivos
Este projeto interdisciplinar (P.I.) visa desenvolver uma Plataforma Web, cujo objetivo é facilitar a organização de partidas esportivas e promover a conexão entre pessoas com interesses em comum. A plataforma permite que os usuários encontrem outros jogadores para praticar esportes e compartilhar experiências. 

De forma simples e intuitiva, o usuário pode acessar o site, visualizar as partidas disponíveis e se inscrever naquelas que despertarem seu interesse. Assim, incentivamos a prática esportiva, a socialização e a formação de novas amizades por meio do esporte. 

## 1.2. Métodos da pesquisa
A pesquisa e o desenvolvimento do projeto estão sendo realizados com o apoio da infraestrutura disponibilizada pela Fatec de Jahu. As atividades ocorrem tanto durante as aulas quanto nos períodos livres, utilizando os computadores dos laboratórios da instituição, bem como os computadores pessoais dos integrantes da equipe. 

As tecnologias utilizadas até o momento incluem HTML, CSS, JavaScript e Tailwind CSS para a construção da interface e estrutura da aplicação. O protótipo visual está sendo desenvolvido por meio da ferramenta Figma, que permite a criação colaborativa de interfaces. Além disso, está sendo utilizada a biblioteca Font Awesome para a inserção de ícones que enriquecem a experiência do usuário. Para o desenvolvimento do back-end, será empregado PHP em conjunto com MySQL e XAMPP. O código é desenvolvido no VS Code e versionado com Git, garantindo organização e controle das alterações.

<h3 align="center">
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" alt="HTML" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" alt="CSS" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" alt="Figma" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="Visual Studio Code" align="center" width="35"></a> &nbsp;&nbsp;
  <a href="#"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git" align="center" width="35"></a>
</h3>

Todo o trabalho está sendo conduzido nas dependências da Fatec de Jahu, local que oferece o suporte necessário para o desenvolvimento do projeto. As atividades estão sendo realizadas durante o primeiro semestre do curso, em alinhamento com os conteúdos estudados nas disciplinas, o que possibilita a aplicação prática dos conhecimentos adquiridos em sala de aula. 

[Voltar para o início](#inicio)

# 2. Documento de requisitos
Um documento de requisitos de sistema é um arquivo que descreve o que o sistema deve fazer e como ele deve funcionar. Ele serve para orientar a equipe de desenvolvimento e garantir que todos entendam as necessidades do projeto. Nele estão incluídas as funções principais do sistema, regras importantes e características como segurança e facilidade de uso.

## 2.1. Requisitos funcionais
<details><summary><h3>Requisitos que foram implementados</h3></summary>

### RF1 - Exibir informações sobre a equipe do P.I
O site deve ter uma aba “Sobre” que mostra as informações dos integrantes do projeto, como: nome, informações de currículo, informações de contato (telefone e e-mail) e perfil do LinkedIn.
### RF2 - Validação de dados
Nos campos em que o usuário digita as informações, tanto de login e cadastro, e criação da partida, terá uma verificação do conteúdo digitado, através de limitações de caracteres, campos obrigatórios e preenchimento automático.
### RF3 - Exibir página de políticas de privacidade
O sistema deve exibir uma página com as políticas de privacidade, para os usuários poderem ver como os dados deles são armazenados e utilizados pelo projeto.
### RF4 - Exibir página de termos de uso
O sistema deve exibir uma página com as políticas de privacidade, para os usuários poderem ver como os dados deles são armazenados e utilizados pelo projeto.
### RF5 - Exibir página de contato
O sistema deve exibir uma página com um formulário de contato para os usuários poderem enviar mensagens para a equipe.
</details>

<details><summary><h3>Requisitos que serão trabalhados</h3></summary>

### RF6 - Cadastrar usuário
O sistema deve permitir o cadastro de usuários com os seguintes atributos: foto de perfil obrigatória com reconhecimento facial para verificar se a foto é de uma pessoa real (sem ser desenhos animados ou famosos), nome e sobrenome, nome de usuário, e-mail, senha, telefone.
### RF7 - Confirmar e-mail
O usuário deve confirmar o e-mail informado com o código enviado no e-mail dele. 
### RF8 - Confirmar telefone
O sistema deve apresentar ao usuário uma tela para fazer o login com e-mail, ou nome de usuário, e senha.
### RF9 - Realizar login
O sistema deve apresentar ao usuário uma tela para fazer o login com e-mail, ou nome de usuário, e senha.
### RF10 - Inserir informações adicionais
O usuário, após fazer login, pode inserir informações adicionais no perfil para participar de uma partida, como: endereço, CPF, idade e gênero e biografia. 
### RF11 - Editar informações do usuário 
O usuário pode editar as informações do seu perfil, como: nome de usuário, endereço de e-mail, senha, telefone, endereço, foto de perfil e biografia. 
### RF12 - Listar partidas disponíveis
O sistema deve listar as partidas disponíveis que os usuários criaram, que estão disponíveis na região do usuário. 
### RF13 - Criar partidas
O sistema deve ter um formulário para o usuário criar sua própria partida, atributos: esporte, nome da partida, data e hora, localização, número de participantes. Atributos opcionais: idade mínima, gênero, descrição, convidar amigos, nível técnico. 
### RF14 - Convidar amigos para a partidas
O usuário pode chamar os amigos para participar da partida depois que ela foi criada, através dos amigos adicionados no site, ou por uma mensagem em algum canal de comunicação (mandar no privado de alguém, ou compartilhar nas redes sociais).
### RF16 - Editar as partidas pendentes
O sistema permite o criador editar a partida que ainda não foi realizada, editar número de participantes e a descrição do evento. 
### RF17 - Cancelar partidas
- Criador: O criador da partida pode cancelar a partida que ele criou, com um limite de tempo para essa ação. 
- Usuário: Os usuários podem cancelar sua participação nas partidas que ele se inscreveu. 
### RF18 - Mandar pedidos de amizades
Os usuários podem enviar pedidos de amizade para outros usuários.
### RF19 - Receber pedidos de amizade
O usuário pode receber pedidos de amizades de outro usuário. 
### RF20 - Receber pedidos de amizade
Listar perfil dos usuários
### RF21 - Avaliar partidas finalizadas
Os usuários podem avaliar as partidas que ele participou depois que elas encerraram.
</details>

## 2.2. Requisitos não funcionais
[Voltar para o início](#inicio)

# 3. Regras de negócio
## 3.1. O que será elaborado?
## 3.2. Como será elaborado?
## 3.3. Para quem será elaborado?
## 3.4. Quanto custará?
[Voltar para o início](#inicio)

# 4. Estudo de viabilidade
[Voltar para o início](#inicio)

# 5. Design
[Voltar para o início](#inicio)

# 6. Protótipo
[Voltar para o início](#inicio)

# 7. Aplicação
[Voltar para o início](#inicio)

# 8. Considerações finais
[Voltar para o início](#inicio)

# Referências bibliográficas
[Voltar para o início](#inicio)
