<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Task For TTU</title>
</head>
<header>
    <div>
        <img src="TestImg.JPG">
    </div>
</header>
<body>
<h3>Keys on a keyboard</h3>
<?php $keys = [
    'q',
    'w',
    'e',
    'r',
    't',
    'y',
    'u',
    'i',
    'o',
    'p',
    'ü',
    'õ',
    'a',
    's',
    'd',
    'f',
    'g',
    'h',
    'j',
    'k',
    'l',
    'ö',
    'ä',
    '\'',
    '<',
    'z',
    'x',
    'c',
    'v',
    'b',
    'n',
    'm',
    ',',
    '.',
    '-',
] ?>
<table>
    <thead>
    <tr>
        <th>Upper</th>
        <th>Lower</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($keys as $key): ?>
        <tr>
            <td>
                <?= strtoupper($key) ?>
            </td>
            <td>
                <?= $key ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p>
    A computer keyboard is a typewriter-style device[1] which uses an arrangement of buttons or keys to act as
    mechanical
    levers or electronic switches. Following the decline of punch cards and paper tape, interaction via
    teleprinter-style keyboards became the main input method for computers.
</p>
<p>
    Keyboard keys (buttons) typically have characters engraved or printed on them,[2] and each press of a key typically
    corresponds to a single written symbol. However, producing some symbols may require pressing and holding several
    keys simultaneously or in sequence.[3] While most keyboard keys produce letters, numbers or signs (characters),
    other keys or simultaneous key presses can produce actions or execute computer commands.
</p>
<p>
    In normal usage, the keyboard is used as a text entry interface for typing text and numbers into a word processor,
    text editor or any other program. In a modern computer, the interpretation of key presses is generally left to the
    software. A computer keyboard distinguishes each physical key from every other key and reports all key presses to
    the controlling software. Keyboards are also used for computer gaming — either regular keyboards or keyboards with
    special gaming features, which can expedite frequently used keystroke combinations.
</p>
<p>
    A keyboard is also used to give commands to the operating system of a computer, such as Windows' Control-Alt-Delete
    combination. Although on Pre-Windows 95 Microsoft operating systems this forced a re-boot, now it brings up a system
    security options screen.[4][5]
</p>
</body>
<footer>
    <span>Created By - 192864IADB from <a href="http://www.ttu.ee">TTÜ</a></span>
</footer>
</html>