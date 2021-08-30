# PoC


### Limitation

- in-cell multiple styles is not supported.

Usage: 

```shell
php index.php
```

Current output:

```shell
=============== CELL 1/1 ==========================
CELL - text: 'header with background'
CELL - Fill color: 'A6A6A6'
Font - Bold: true
Font - Italic: false
Font - Size: 12.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 2/1 ==========================
CELL - text: 'Bold and red'
CELL - Fill color: '000000'
Font - Bold: true
Font - Italic: false
Font - Size: 14.0
Font - Name: Calibri
Font - color: FF0000

=============== CELL 3/1 ==========================
CELL - text: 'Only bold'
CELL - Fill color: '000000'
Font - Bold: true
Font - Italic: false
Font - Size: 14.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 4/1 ==========================
CELL - text: 'Italic and bold'
CELL - Fill color: '000000'
Font - Bold: true
Font - Italic: true
Font - Size: 12.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 5/1 ==========================
CELL - text: 'Italic and bold back + blue text with not italic'
CELL - Fill color: '000000'
Font - Bold: true
Font - Italic: true
Font - Size: 12.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 6/1 ==========================
CELL - text: 'Italic and bold back + blue text with not italic + text wrapped cell here '
CELL - Fill color: '000000'
Font - Bold: true
Font - Italic: true
Font - Size: 12.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 7/1 ==========================
CELL - text: 'Arial normal + Verdana bold, italic and red'
CELL - Fill color: '000000'
Font - Bold: false
Font - Italic: false
Font - Size: 12.0
Font - Name: Calibri
Font - color: 000000
```