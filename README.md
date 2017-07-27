# TDD - TADS

**Grupo:**

* Helenita Gurgel
* Hayssa Costa
* Jonathan Batista

## Ano Bissexto

### Plano Teste

| Variavéis de Entrada | Classes Válidas                | Classes Inválidas | Saida esperada |
| -------------------- | ------------------------------ | ----------------- | -------------- |
| ano : Inteiro        | ano % 4 == 0 && ano % 100 != 0 |                   | true           |
|                      | ano % 4 == 0 && ano % 400 == 0 |                   | true           |
|                      | ano % 4 != 0                   |                   | false          |
|                      | ano % 4 == 0 && ano % 100 == 0 |                   | false          |
|                      |                                | ano < 0           | false          |
