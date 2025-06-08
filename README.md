# Flarum Ruby Text

[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/kitbur/ruby-text/blob/main/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/kitbur/ruby-text.svg)](https://packagist.org/packages/kitbur/ruby-text)

A Flarum extension that allows the use of ruby text in forum posts using BBCode. Ruby is commonly used for phonetic guides or brief annotative notes that render above text.

![Screenshot of the Ruby Text extension](https://i.imgur.com/EZ9MVUu.png)

### Features

- Adds a `[ruby]` BBCode for text annotations.

### Usage

**Example BBCode syntax:**

```bbcode
This is some [ruby=top text]annotated[/ruby] text.
```

**How it will look:**

This is some <ruby>annotated<rt>top text</rt></ruby> text.

### Installation

```bash
composer require kitbur/ruby-text
```

### Links

- [Packagist](https://packagist.org/packages/kitbur/ruby-text)
- [GitHub](https://github.com/kitbur/ruby-text)
<!-- - [Flarum Community](#) -->

---

Copyright © 2025 kitbur. Licensed under the MIT License.