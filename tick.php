
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <style>
        ul:first-child  li:before { content:"\2713\0020"; }  /* OR */
        ul:nth-child(2) li:before { content:"\2714\0020"; }  /* OR */
        ul:last-child   li:before { content:"\2611\0020"; }
        ul      { list-style-type: none; }
        </style>
        </body>
        </html>