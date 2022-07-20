<?php

namespace App\Security;

use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{

    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        $content = <<<errorPage
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    background-color: rgb(32 33 36);
                    color: rgb(154 160 166);
                    font-size: 50px;
                    font-family: "Lucida Console", "Courier New", monospace;
                }
                body{
                    min-height: 100vh;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                }

                a{
                    text-decoration: none;
                    font-size: 25px;
                    padding: 12px;
                    background-color: rgb(154 160 166);
                    color: rgb(32 33 36);
                    border-radius: 16px;
                }

                a:hover{
                    background-color: rgb(154 200 166);
                    color: rgb(32 33 36);
                }
                
              
            </style>
            <title>Document</title>
        </head>
        <body>
            <div> You are not authorized</div><br>
            <a href="/">Back to Homepage</a>
        </body>
        </html>
        errorPage;

        return new Response($content, 403);
    }
}