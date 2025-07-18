# MLString (_multi-line string_)

A pretty simple multi-line strings library.

❓ **Are you tired of using:**
* long (loooooooong) strings with `\n` and `\r\n`?
* concatenation to make your strings readable?
* heredoc syntax with its crazy indentation rules?

👉 This library allows you to use multi-line strings in a more readable way.

👎 Instead of this:

```php
$longString = "This is a long string\n"
    . "that spans multiple lines\n"
    . "and uses concatenation to be readable.";
```

👎 or this:

```php
$longString = <<<EOD
This is a long string
that spans multiple lines
and uses heredoc syntax to be readable.
EOD;
```

👍 You can use this:

```php
$longString = MLString(
    "This is a long string",
    "that spans multiple lines",
    "and uses MLString to be readable."
);
```

## Installation
You can install this library using Composer. Run the following command in your terminal:

```bash
composer require zoliszabo/mlstring
```

## Usage

1. The class constructor accepts any number of string arguments, which will be concatenated together with a newline character (`PHP_EOL`) between them:

    ```php
    use MLString\MLString;

    $mlString = new MLString(
        "This is a long string",
        "that spans multiple lines",
        "and uses MLString to be readable."
    );

    echo $mlString; // Outputs the multi-line string
    ```

2. Alternatively, you can use the `MLString::of()` static method to create an instance of `MLString`:

    ```php
    use MLString\MLString;

    $mlString = MLString::of(
        "This is a long string",
        "that spans multiple lines",
        "and uses MLString to be readable."
    );

    echo $mlString; // Outputs the multi-line string
    ```

3. Finally, you can also use the `MLString` function as a shortcut:

    ```php
    use function MLString\MLString;

    $mlString = MLString(
        "This is a long string",
        "that spans multiple lines",
        "and uses MLString to be readable."
    );

    echo $mlString; // Outputs the multi-line string
    ```

### Real-world usage example

```php
use function MLString\MLString;

throw new \Exception(
    MLString(
        "This is a multi-line exception message.",
        "It can span multiple lines for better readability.",
        "You can use it just like a regular string."
    )
);
```

## Custom glue strings

Starting version 2, you can customize the string that is used to join the lines together by calling the `withGlue(...)`, `withNewLine()` or `withSpace()` methods on the `MLString` instance:
```php
use MLString\MLString;

$mlString = MLString::of(
    "This is a long string",
    "that spans multiple lines",
    "and uses MLString to be readable.",
);
echo $mlString->withGlue(' | ');
// Outputs: "This is a long string | that spans multiple lines | and uses MLString to be readable."

echp $mlString->withSpace();
// Outputs: "This is a long string that spans multiple lines and uses MLString to be readable."

echo $mlString->withNewLine();
// Outputs the original string with new lines
```
