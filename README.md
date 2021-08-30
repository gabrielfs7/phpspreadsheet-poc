# PoC


### Limitation

- TBD

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
CELL - Fill color: 'FFFFFF'
Font - Bold: true
Font - Italic: false
Font - Size: 14.0
Font - Name: Calibri
Font - color: FF0000

=============== CELL 3/1 ==========================
CELL - text: 'Only bold'
CELL - Fill color: 'FFFFFF'
Font - Bold: true
Font - Italic: false
Font - Size: 14.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 4/1 ==========================
CELL - text: 'Italic and bold'
CELL - Fill color: 'FFFFFF'
Font - Bold: true
Font - Italic: true
Font - Size: 12.0
Font - Name: Calibri
Font - color: 000000

=============== CELL 5/1 ==========================
CELL - text: 'Italic and bold back + blue text with not italic'
CELL - Fill color: 'FFFFFF'
   RichText CELL - text: 'Italic and bold back + '
   RichText Font - Bold: true
   RichText Font - Italic: true
   RichText Font - Size: 12.0
   RichText Font - Name: Calibri
   RichText Font - color: 000000
   RichText CELL - text: 'blue text with not italic'
   RichText Font - Bold: true
   RichText Font - Italic: false
   RichText Font - Size: 12.0
   RichText Font - Name: Calibri
   RichText Font - color: 0000FF

=============== CELL 6/1 ==========================
CELL - text: 'Italic and bold back + blue text with not italic + text wrapped cell here '
CELL - Fill color: 'FFFFFF'
   RichText CELL - text: 'Italic and bold back + '
   RichText Font - Bold: true
   RichText Font - Italic: true
   RichText Font - Size: 12.0
   RichText Font - Name: Calibri
   RichText Font - color: 000000
   RichText CELL - text: 'blue text with not italic'
   RichText Font - Bold: true
   RichText Font - Italic: false
   RichText Font - Size: 12.0
   RichText Font - Name: Calibri
   RichText Font - color: 0000FF
   RichText CELL - text: ' + text wrapped cell here '
   RichText Font - Bold: false
   RichText Font - Italic: false
   RichText Font - Size: 12.0
   RichText Font - Name: Calibri
   RichText Font - color: 000000

=============== CELL 7/1 ==========================
CELL - text: 'Arial normal + Verdana bold, italic and red'
CELL - Fill color: 'FFFFFF'
   RichText CELL - text: 'Arial normal'
   RichText Font - Bold: false
   RichText Font - Italic: false
   RichText Font - Size: 12.0
   RichText Font - Name: Arial
   RichText Font - color: 000000
   RichText CELL - text: ' + '
   RichText Font - Bold: false
   RichText Font - Italic: false
   RichText Font - Size: 12.0
   RichText Font - Name: Calibri
   RichText Font - color: 000000
   RichText CELL - text: 'Verdana bold, italic and red'
   RichText Font - Bold: true
   RichText Font - Italic: true
   RichText Font - Size: 12.0
   RichText Font - Name: Verdana
   RichText Font - color: FF0000
```