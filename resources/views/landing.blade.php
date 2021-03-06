<!DOCTYPE html>
<html>
    <head>
        <title>Polar</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{asset('css/common.css')}}" rel="stylesheet" type="text/css">
        <style>
            .question {
                font-size: 76px;
            }

            .buttons{
                margin-top: 20px;
            }

            button {
                display: inline-block;
                margin: 0 10px 0 0;
                padding: 15px 45px;
                font-size: 35px;
                font-family: "Bitter",serif;
                line-height: 1.8;
                appearance: none;
                box-shadow: none;
                border-radius: 0;
                color: #6496c8;
                background: rgba(0,0,0,0);
                border: solid 5px #6496c8;
            }

            button:hover,
            button.hover {
              border-color: #346392;
              border: solid 5px #6496c8;
              background: #6496c8;
              color: #FFFFFF;
            }

            button:focus {
                outline: none
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello, welcome to Polar! : )</div>
                <div class="question">What would you like to do ? </div>
                <div class="buttons">
                    <a href="/upload"><button >Upload</button></a>
                    <a href="/search"><button >Search</button></a>
                </div>
            </div>
        </div>
    </body>
</html>