# Flarum Ruby Text

[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/kitbur/ruby-text/blob/main/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/kitbur/ruby-text.svg)](#)

A Flarum extension that allows the use of ruby text annotations in forum posts. Ruby is commonly used for phonetic guides or brief annotative notes above text.

![Screenshot of the Ruby Text extension](https://i.imgur.com/EZ9MVUu.png)

### Features

- Adds a `[ruby]` BBCode in forum posts.

### Usage

The extension adds a simple `[ruby]` BBCode tag. 

* The text inside the tag is the base text. 
* The attribute text is the smaller annotation that appears above the base text.

**Example BBCode:**

```
This is some [ruby=phonetic guide]annotated[/ruby] text.
```

**How it will look:**

This is some <ruby>annotated<rt>phonetic guide</rt></ruby> text.

### Installation

```bash
composer require kitbur/ruby-text
```

### Links

- [Packagist](#)
- [GitHub](https://github.com/kitbur/ruby-text)
- [Flarum Community](#)

---

Copyright © 2025 kitbur. Licensed under the MIT License.