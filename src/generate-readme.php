<?php

file_put_contents(
    dirname(__DIR__) . '/README.md',
    str_replace(
        '{{ author.age }}',
        (new DateTime())->diff(new DateTime(getenv('AUTHOR_BIRTHDAY')))->y,
        file_get_contents(dirname(__DIR__) . "/template/README.md")
    )
);

echo "README.md generated successfully!\n";
