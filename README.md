# Consultório Dr. Bolota - Avaliação de IMC

## Sobre o Projeto

O *Consultório Dr. Bolota* é um projeto simples em PHP para calcular o *IMC* (Índice de Massa Corporal) e a *idade* de um paciente com base nas informações fornecidas em um formulário online. O objetivo é avaliar a saúde do paciente de forma rápida e precisa, retornando o resultado do IMC e uma tabela com os resultados possíveis de IMC (como "Abaixo do Peso", "Peso Normal", etc.).

Este projeto utiliza PHP para processamento dos dados, HTML para o formulário e CSS para o design simples e responsivo.

## Funcionalidades

- *Formulário de Avaliação*: O usuário preenche informações como nome, data de nascimento, peso, altura e sexo.
- *Cálculo do IMC*: O programa calcula o IMC com base nos dados fornecidos.
- *Cálculo da Idade*: A idade do usuário é calculada a partir da data de nascimento.
- *Tabela de Resultados de IMC*: O sistema retorna o resultado de acordo com o valor do IMC do paciente (Abaixo do Peso, Peso Normal, Obesidade I, Obesidade II, etc.).

## Tecnologias Utilizadas

- *PHP*: Para processar os dados do formulário e realizar os cálculos.
- *HTML*: Para a construção do formulário e estrutura da página.
- *CSS*: Para estilizar a página e tornar o formulário mais amigável.
- *JavaScript* (opcional, caso queira adicionar interatividade adicional).


## Como Executar o Projeto

### Requisitos:

- *Servidor web* (ex: Apache ou Nginx) com suporte para PHP.
- *PHP* instalado (versão 7.0 ou superior).
- *Navegador web* para acessar a página.

### Passos:

1. Clone o repositório ou baixe os arquivos do projeto.
    bash
    git clone https://github.com/seu_usuario/consultorioDrBolotas.git
    

2. Coloque o projeto em um diretório acessível por um servidor web com suporte a PHP.

3. Abra o arquivo index.php em seu navegador:
    
    http://localhost/ConDrBolotas/index.php
    

4. Preencha os campos do formulário com as informações solicitadas e clique em "Avaliar".

5. O arquivo processa_script.php processará os dados, calculará o IMC e a idade, e retornará o resultado com a tabela de classificação do IMC.

## Exemplo de Uso

### Formulário de Entrada:

![Formulário de Entrada](https://via.placeholder.com/800x400.png?text=Exemplo+de+Formul%C3%A1rio+de+Entrada)

### Resultado da Avaliação:

Após o envio do formulário, o resultado será exibido, incluindo o cálculo do IMC e a classificação, conforme mostrado na tabela abaixo.

| Faixa de IMC       | Resultado         |
|--------------------|-------------------|
| Abaixo de 18,5     | Abaixo do Peso    |
| 18,5 - 24,9        | Peso Normal       |
| 25,0 - 29,9        | Obesidade I       |
| 30,0 - 39,9        | Obesidade II      |
| Acima de 40        | Obesidade III (Mórbida) |

## Melhorias Futuras

- Adicionar validações de entrada usando JavaScript.
- Implementar um banco de dados para armazenar informações de pacientes.
- Adicionar uma página de histórico para salvar os resultados das avaliações anteriores.
- Melhorar a interface de usuário com recursos como gráficos de evolução de IMC.

## Contribuições

Contribuições são bem-vindas! Para contribuir com o projeto, siga os seguintes passos:

1. Fork este repositório.
2. Crie uma nova branch com sua feature: git checkout -b minha-feature.
3. Faça suas alterações e commit: git commit -am 'Adicionando nova feature'.
4. Envie para o repositório: git push origin minha-feature.
5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
