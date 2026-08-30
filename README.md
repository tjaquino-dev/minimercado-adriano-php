# 🛒 Mini Mercado Adriano - PHP

## 📖 Descrição

Este projeto foi desenvolvido como atividade acadêmica para demonstrar a utilização de **funções** e **estruturas de repetição** na linguagem PHP.

A aplicação simula um pequeno sistema de gerenciamento de produtos do **Mini Mercado Adriano**, exibindo informações de estoque e realizando cálculos básicos.

---

## 🎯 Objetivos

- Aplicar conceitos de programação em PHP.
- Utilizar funções para organizar e reutilizar código.
- Utilizar estruturas de repetição para percorrer conjuntos de dados.
- Simular uma situação prática relacionada ao controle de produtos de um minimercado.

---

## 🛠️ Tecnologias Utilizadas

- PHP
- Visual Studio Code
- XAMPP
- Git
- GitHub

---

## 📂 Estrutura do Projeto

```text
Agenda04/
│
├── minimercado.php
└── README.md
```

---

## 🔁 Estruturas de Repetição Utilizadas

### foreach

O comando `foreach` foi utilizado para percorrer a lista de produtos cadastrados e exibir suas informações.

Exemplo:

```php
foreach ($produtos as $produto)
{
    echo $produto["nome"];
}
```

---

## ⚙️ Funções Implementadas

### listarProdutos()

Responsável por exibir os produtos cadastrados.

### calcularValorEstoque()

Calcula o valor total do estoque com base no preço e na quantidade de cada produto.

### contarProdutos()

Retorna a quantidade de produtos cadastrados.

---

## 📦 Produtos Utilizados no Exemplo

| Produto | Preço | Estoque |
|----------|----------|----------|
| Arroz 5kg | R$ 25,90 | 55 |
| Feijão 1kg | R$ 8,50 | 85 |
| Macarrão 500g | R$ 4,99 | 60 |
| Óleo de Soja | R$ 7,89 | 20 |
| Leite Integral | R$ 5,49 | 80 |

---

## ▶️ Como Executar

### Via Terminal

Acesse a pasta do projeto:

```bash
cd Agenda04
```

Execute o arquivo:

```bash
php minimercado.php
```

---

### Via Navegador (XAMPP)

1. Copie o projeto para:

```text
C:\xampp\htdocs\Agenda04
```

2. Inicie o Apache no XAMPP.

3. Acesse:

```text
http://localhost/Agenda04/minimercado.php
```

---

## ✅ Resultados Obtidos

- Exibição automática dos produtos cadastrados.
- Contagem da quantidade de produtos.
- Cálculo do valor total do estoque.
- Aplicação prática de funções e estruturas de repetição.

---

## 📚 Aprendizados

Durante o desenvolvimento foi possível compreender:

- O funcionamento das funções em PHP.
- A utilização do `foreach` para percorrer arrays.
- A importância da organização do código.
- A reutilização de funcionalidades por meio de funções.

---

## 🤖 Uso de Inteligência Artificial

A Inteligência Artificial foi utilizada como apoio para:

- Revisão da sintaxe PHP.
- Verificação da lógica das funções.
- Orientação sobre execução no VS Code e XAMPP.
- Esclarecimento de dúvidas relacionadas ao Git e GitHub.

---

## 👨‍💻 Autor

**Thomaz Jefferson Oliveira de Aquino**

Projeto desenvolvido para fins acadêmicos.
