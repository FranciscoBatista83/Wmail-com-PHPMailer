# Envio de E-mail com PHPMailer

Este projeto demonstra como enviar e-mails usando a biblioteca PHPMailer com o servidor SMTP do Gmail. O código foi desenvolvido em PHP e permite a configuração de envio de e-mails no formato HTML e texto simples.

## Funcionalidades
- **Envio de E-mail**: Envia e-mails via servidor SMTP do Gmail.
- **Suporte a HTML**: Permite envio de e-mails com conteúdo em HTML.
- **Resposta ao E-mail**: Permite configurar o endereço de e-mail para resposta.

## Tecnologias Utilizadas
- **Backend**: PHP
- **Envio de E-mail**: PHPMailer
- **Servidor SMTP**: Gmail

## Requisitos
- PHP 7.0 ou superior
- Composer (para gerenciar dependências)
- Conta no Gmail ou serviço de e-mail que suporte envio SMTP

## Instalação
1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/envio-email-phpmailer.git
   ```

2. Acesse o diretório do projeto:
   ```bash
   cd envio-email-phpmailer
   ```

3. Instale as dependências do Composer:
   ```bash
   composer install
   ```

4. Abra o arquivo `send_email.php` e configure os seguintes parâmetros:
   - `Username`: Seu endereço de e-mail do Gmail.
   - `Password`: Sua senha de aplicativo do Gmail.
   - `setFrom()`: Defina seu e-mail como remetente.
   - `addAddress()`: Defina o e-mail do destinatário.
   - `addReplyTo()`: Defina o e-mail de resposta.

5. Execute o script PHP:
   ```bash
   php send_email.php
   ```

6. O script enviará um e-mail com o assunto "Teste de envio de e-mail com PHPMailer".

## Como Funciona
- O script PHP configura as configurações de SMTP, incluindo autenticação, segurança e porta.
- O conteúdo do e-mail é enviado tanto em formato HTML quanto texto simples.
- O e-mail é enviado com sucesso, ou exibe uma mensagem de erro caso algo ocorra durante o envio.

## Estrutura do Projeto
```
/
├── send_email.php  # Arquivo principal PHP para envio de e-mail
└── README.md  # Documentação
```

## Contribuição
Contribuições são bem-vindas! Fique à vontade para abrir um Pull Request ou relatar problemas.

## Licença
Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

---
Desenvolvido por Francisco Carlos Batista.
```
