# What is this

This package provides common functions which are necessary for web applications.

# How to install it

add 
```
    "require": {
        ...
        "hikarine3/common_web_function": "*",
        ...
    }
```
to composer.json

# How to use

```
$cwf = new CommonWebFunction();
$string = " ＡB　ｳﾞｧｶでぇ１     ";
print($cwf->normalize_str($string));
```

# Available functions

normalize_str()

# How to test

composer test tests;

# Author

Hajime Kurita

An adminstrator of https://sakuhindb.com/ , http://minakoe.jp/ and so on

https://github.com/hikarine3

Twitter:

JP: https://twitter.com/hikarine3

EN: https://twitter.com/hajimekurita